<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria\Diaria;

use App\Models\sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DiariaVistasTrait
{
    public function getVista($dataxxxx)
    {
        $modeloxx = null;
        $upidxxxx=0;


        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['activida'] = $this->getTemacomboCT([
            'temaxxxx' => 429,
        ])['comboxxx'];

        $this->opciones['grupoxxx'] = [''=>'Seleccione'];
        $this->opciones['lugarxxx'] = $this->getTemacomboCT([
            'temaxxxx' => 428,
        ])['comboxxx'];

        $this->opciones['departam'] = [];
        $this->opciones['municipi'] = [];
        // lista de localidades
        $this->opciones['localida'] = $this->getLocalidadesCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'wherenot' => [22, 23, 24]
        ])['comboxxx'];




                    
       // $this->opciones['upidxxxx'] = [];
        $this->opciones['localida'] = [];
        $this->opciones['upzxxxxx'] = [];
        $this->opciones['barrioxx'] = [];
        $this->opciones['dependen'] = $this->getUpiUsuarioCT([], $modeloxx);
        $this->opciones['rutarchi'] =  'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];

     


    }

    public function view($dataxxxx)
    {
        // indica si se esta actualizando o viendo
        $upidxxxx = 0;
        $servicio = 0;
        $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'VOLVER A ASISTENCIAS DIARIAS']);
        $this->getVista($dataxxxx);

        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $servicio = $dataxxxx['modeloxx']->sis_servicio_id;
            $upidxxxx = $dataxxxx['modeloxx']->sis_depen_id;
            $this->pestania[0][4] = true;
            $this->pestania[0][2] = $this->opciones['parametr'];
            $this->getRespuesta(['btnxxxxx' => 'a', 'tituloxx' => 'NUEVA ASISTENCIA']);
        }

        $this->opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);

        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
