<?php

namespace App\Traits\Acciones\Individuales\Sicosocial\CuestionarioDast\CuestionarioDast;

use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\Dast;
use App\Models\User;
use App\Models\Sistema\SisEsta;
use App\Models\fichaIngreso\FiConsumoSpa;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DastVistasTrait
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
        $data = FiConsumoSpa::select(['id', 'i_prm_consume_spa_id', 'sis_nnaj_id'])
            ->with(['fi_sustancia_consumidas' => function ($query) {
                $query->where('sis_esta_id', 1);
            }, 'fi_sustancia_consumidas.i_prm_sustancia:id,nombre', 'fi_sustancia_consumidas.i_prm_consume:id,nombre'])
            ->where('sis_nnaj_id', $dataxxxx['padrexxx']->id)->first();
        // dd($data);
        $dependid = 0;
        $this->opciones['si_no'] = $this->getTemacomboCT([
            'temaxxxx' => 23,
            'cabecera' => true,
            'notinxxx' => [2503],
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['list_patron_consumo'] = $this->getTemacomboCT([
            'temaxxxx' => 453,
            'cabecera' => true,
            'notinxxx' => [2503],
            'ajaxxxxx' => false,
            'campoxxx' => 'id'
        ])['comboxxx'];

        $this->opciones['list_diligenciamiento'] = $this->getTemacomboCT([
            'temaxxxx' => 455,
            'cabecera' => true,
            'notinxxx' => [2503],
            'ajaxxxxx' => false,
        ])['comboxxx'];

        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania[0][2] = $dataxxxx['padrexxx'];
        $this->pestania2[0][2] = $dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        $this->opciones['preguntas'] = $this->getPreguntasDast();
        $this->opciones['puntajes'] = $this->getPuntajesDast();

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            if ($this->opciones['accionxx'] == 'verxxxxx') {
                $data = Dast::select('id')->with('resultado', 'respuestasPrivot')->where('id', $dataxxxx['modeloxx']->id)->first()->toArray();
                $this->opciones['actual_respuestas'] = $data;
            } else {
                $data = Dast::select('id')->with('respuestasPrivot:id')->where('id', $dataxxxx['modeloxx']->id)->first()->toArray();
                $respuestas = [];
                foreach ($data['respuestas_privot'] as $value) {
                    $respuestas[$value['pivot']['dast_pregunta_id']] = $value['pivot']['respuesta'];
                }
                $this->opciones['actual_respuestas'] = $respuestas;
            }
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $dependid = $dataxxxx['modeloxx']->sis_depen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
            $this->getBotones(['crearxxx', ['dastsegu', [$dataxxxx['modeloxx']->id]], 2, 'SEGUIMIENTOS', 'btn btn-sm btn-primary']);
            $this->opciones['modeloxx']->fecha = explode(' ', $dataxxxx['modeloxx']->fecha)[0];
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false, $dataxxxx['modeloxx']->user_fun_id);
        } else {
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        $this->opciones['sis_depens'] = $this->getUpisNnajUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $dependid]);

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'CuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
    }

    public function viewActive($dataxxxx)
    {
        $this->opciones['puntajes'] = $this->getPuntajesDast();
        $this->opciones['usuariox'] = $dataxxxx['padrexxx']->fi_datos_basico;
        $this->pestania[0][2] = $dataxxxx['padrexxx'];
        $this->pestania2[0][2] = $dataxxxx['padrexxx'];

        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], [$dataxxxx['padrexxx']->id]], 2, 'VOLVER A CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);

        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
        }

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'CuestionarioDast.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
