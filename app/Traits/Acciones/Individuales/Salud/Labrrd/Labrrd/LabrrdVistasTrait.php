<?php

namespace App\Traits\Acciones\Individuales\Salud\Labrrd\Labrrd;

use App\Models\Acciones\Individuales\Sicosocial\CuestionarioDast\Dast;
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
            $dependid = $dataxxxx['modeloxx']->sis_atenc_id;
            $depenorigid = $dataxxxx['modeloxx']->sis_origen_id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['fechcrea'] = $dataxxxx['modeloxx']->created_at;
            $this->opciones['fechedit'] = $dataxxxx['modeloxx']->updated_at;
            $this->opciones['usercrea'] = $dataxxxx['modeloxx']->creador->name;
            $this->opciones['useredit'] = $dataxxxx['modeloxx']->editor->name;
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', [$dataxxxx['padrexxx']->id]], 2, 'NUEVO CUESTIONARIO DAST', 'btn btn-sm btn-primary']);
            $this->getBotones(['crearxxx', ['dastsegu', [$dataxxxx['modeloxx']->id]], 2, 'SEGUIMIENTOS', 'btn btn-sm btn-primary']);
        }

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['funccont']  = User::getUsuario(false, false, $dataxxxx['modeloxx']->user_fun_id);
        } else {
            $this->opciones['funccont']  = User::getUsuario(false, false);
        }
        $this->opciones['sis_depens'] = $this->getUpiUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $depenorigid]);
        $this->opciones['sis_atencion'] = $this->getUpiUsuarioCT(['nnajidxx' => $dataxxxx['padrexxx']->id, 'dependid' => $dependid]);

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'Labrrd.pestanias', ['todoxxxx' => $this->opciones]);
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
        return view($this->opciones['rutacarp'] . 'Labrrd.pestanias', ['todoxxxx' => $this->opciones]);
    }
}
