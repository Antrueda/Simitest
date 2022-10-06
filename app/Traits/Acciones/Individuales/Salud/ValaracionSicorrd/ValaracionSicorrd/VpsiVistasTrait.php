<?php

namespace App\Traits\Acciones\Individuales\Salud\ValaracionSicorrd\ValaracionSicorrd;

use App\Models\User;
use App\Models\Sistema\SisEsta;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\VsrrdSintoma;
use App\Models\Acciones\Individuales\Salud\ValoracionSicorrd\Vsrrd;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VpsiVistasTrait
{
    public function getVista($dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {
        $depenorigid = 0;
        $dependid = 0;
        //accion
        $this->opciones['accionxx'] = $dataxxxx['accionxx'][0];
        //data registro
        $this->opciones['fechcrea'] = '';
        $this->opciones['fechedit'] = '';
        $this->opciones['usercrea'] = '';
        $this->opciones['useredit'] = '';

        $this->opciones['si_no'] = $this->getTemacomboCT(['temaxxxx' => 23, 'cabecera' => true, 'notinxxx' => [2503], 'ajaxxxxx' => false])['comboxxx'];
        $this->opciones['fases'] = $this->getTemacomboCT(['temaxxxx' => 469, 'cabecera' => true, 'inxxxxxx' => [2905], 'ajaxxxxx' => false])['comboxxx'];
        $this->opciones['tipos'] = $this->getTemacomboCT(['temaxxxx' => 470, 'cabecera' => true, 'ajaxxxxx' => false])['comboxxx'];
        $this->opciones['emocional'] = $this->getTemacomboCT(['temaxxxx' => 471, 'cabecera' => true, 'ajaxxxxx' => false])['comboxxx'];

        $this->opciones['sintomas'] = VsrrdSintoma::select('id', 'nombre', 'descripcion')->where('sis_esta_id', 1)->get();

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania2[0][2] = $dataxxxx['padrexxx'];
        $this->pestania[0][2] = $dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A VALORACIÓN', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $data = Vsrrd::select('id')->with('resultSintomasPrivot:id', 'resultFactoresPrivot:id', 'resultEntornosepPrivot:id')->where('id', $dataxxxx['modeloxx']->id)->first()->toArray();
            $respuestas = [];
            $resuls_factores = [];
            $resuls_entornos = [];

            foreach ($data['result_sintomas_privot'] as $item) {
                $respuestas[$item['pivot']['vsrrd_sintoma_id']] = $item['pivot']['respuesta'];
            }
            $this->opciones['actual_sintomas'] = $respuestas;

            foreach ($data['result_factores_privot'] as $item) {
                $resuls_factores[$item['pivot']['vsrrd_entorno_id']] = $item['pivot']['respuesta'];
            }
            $this->opciones['actual_rfactores'] = $resuls_factores;

            foreach ($data['result_entornosep_privot'] as $item) {
                $resuls_entornos[$item['pivot']['vsrrd_entorno_id']] = $item['pivot']['respuesta'];
            }
            $this->opciones['actual_entornosep'] = $resuls_entornos;

            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $depenorigid = $dataxxxx['modeloxx']->sis_atencion_id;
            $dependid = $dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $this->pestania[0][4] = true;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVA VALORACIÓN', 'btn btn-sm btn-primary']);
            $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false, $dataxxxx['modeloxx']->user_fun_id);
        } else {
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        $this->opciones['sis_depens'] = $this->getUpisNnajCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $depenorigid]);
        $this->opciones['sis_atencion'] = $this->getUpiUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $dependid]);
        $this->opciones['convenio'] = $this->getPerteneceConvenio($this->opciones['usuariox']->nnaj_nacimi->Edad, $dataxxxx['padrexxx']->id);
        $this->opciones['impresion_diag_vsi'] = $this->getImpresionDiagVsi($dataxxxx['padrexxx']->id);
        $this->opciones['entornos'] = $this->getEntornoFactores();


        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
