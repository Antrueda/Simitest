<?php

namespace App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd;

use App\Models\Acciones\Individuales\Salud\Labrrd\Labrrd;
use App\Models\User;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait LabrrdVistasTrait
{
    public function getVista($dataxxxx)
    {
        //data registro
        $this->opciones['fechcrea'] = '';
        $this->opciones['fechedit'] = '';
        $this->opciones['usercrea'] = '';
        $this->opciones['useredit'] = '';

        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }

    public function view($dataxxxx)
    {
        //accion
        $this->opciones['accionxx'] = $dataxxxx['accionxx'][0];

        $depenorigid = 0;
        $dependid = 0;

        $this->opciones['fases'] = $this->getTemacomboCT(['temaxxxx' => 469, 'cabecera' => true, 'inxxxxxx' => [2905], 'ajaxxxxx' => false])['comboxxx'];
        $this->opciones['gustos'] = $this->getTemacomboCT(['temaxxxx' => 477, 'cabecera' => false, 'ajaxxxxx' => false])['comboxxx'];
        $this->opciones['habilidades'] = $this->getTemacomboCT(['temaxxxx' => 478, 'cabecera' => false, 'ajaxxxxx' => false])['comboxxx'];
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;

        $componentes = $this->getComponentesValoracionI();
        $this->opciones['personales'] = $componentes->filter(function ($item) {
            return $item->tipo_componente == 'PERSONALES';
        });
        $this->opciones['proceso'] = $componentes->filter(function ($item) {
            return $item->tipo_componente == 'PROCESO';
        });

        $this->pestania[0][2] = $dataxxxx['padrexxx'];
        $this->pestania2[0][2] = $dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A VALORACIÓN (LAB- RRD)', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);


        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {

            $data = Labrrd::select('id')->with('resultadoAnalisisPrivot:id')->where('id', $dataxxxx['modeloxx']->id)->first()->toArray();
            $resultados = [];
            foreach ($data['resultado_analisis_privot'] as $item) {
                $resultados[$item['pivot']['labrrd_componente_id']] = $item['pivot']['respuesta'];
            }
            $this->opciones['resultados'] = $resultados;

            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $dependid = $dataxxxx['modeloxx']->sis_atenc_id;
            $depenorigid = $dataxxxx['modeloxx']->sis_origen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVA VALORACIÓN (LAB- RRD)', 'btn btn-sm btn-primary']);
            $this->getBotones(['crearxxx', ['labrrseg', [$dataxxxx['modeloxx']->id]], 2, 'SEGUIMIENTOS', 'btn btn-sm btn-primary']);
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false, $dataxxxx['modeloxx']->user_fun_id);
        } else {
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        //getUpisNnajCT
        $this->opciones['sis_depens'] = $this->getUpisNnajCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $depenorigid]);
        $dependenatencion = $this->getSisDepenCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $dependid]);
        $this->opciones['sis_atencion'] = $dependenatencion['comboxxx'];
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'Labrrd.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function viewActive($dataxxxx)
    {
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania[0][2] = $dataxxxx['padrexxx'];
        $this->pestania2[0][2] = $dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A VALORACIÓN (LAB- RRD)', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVA VALORACIÓN (LAB- RRD)', 'btn btn-sm btn-primary']);
        }

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'Labrrd.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
