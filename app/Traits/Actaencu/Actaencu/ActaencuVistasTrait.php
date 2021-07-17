<?php

namespace App\Traits\actaencu\actaencu;

use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ActaencuVistasTrait
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
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        $localidx = 0;
        $upzselec = [0];
        $upidxxxx=0;
        $accionid=0;
        $actividx= [0];
        $barriose = [0];
        $servicse = [0];
        $responsa=[0];
        if ($dataxxxx['modeloxx'] != '') {
            $localidx = $dataxxxx['modeloxx']->sis_localidad_id;
            $upzselec = [$dataxxxx['modeloxx']->sis_upz_id];
            $upidxxxx=$dataxxxx['modeloxx']->sis_depen_id;
            $accionid=$dataxxxx['modeloxx']->prm_accion_id;
            $actividx=$dataxxxx['modeloxx']->prm_actividad_id;
            $servicse = [$dataxxxx['modeloxx']->sis_servicio_id];
            $responsa=[$dataxxxx['modeloxx']->sis_servicio_id];
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[1][4] = true;
            $this->pestania[1][2] = $this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', []], 2, 'NUEVA ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        }
        $this->opciones['sis_upzs'] = $this->getUpzsComboCT([
            'localidx' => $localidx,
            'selected' => $upzselec,
            'cabecera' => true,
            'ajaxxxxx' => false
        ]);
        $this->opciones['sis_barrios'] = $this->getBarriosComboCT([
            'localidx' => $localidx,
            'selected' => $barriose,
            'upzidxxx' => $upzselec[0],
            'cabecera' => true,
            'ajaxxxxx' => false
        ]);
        $this->opciones['sis_servicios']  = $this->getServiciosUpiComboCT([
            'selected' => $servicse,
            'cabecera' => true,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);

        $this->opciones['responsa'] = $this->getResponsableUpiCT([
            'selected' => $responsa,
            'cabecera' => false,
            'ajaxxxxx' => false,
            'dependen' => $upidxxxx
        ]);
        $this->opciones['actividad']  = $this->getActividades([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'orederby' => 'asc',
            'campoxxx' => 'nombre',
            'selected' => $actividx,
            'accionxx' => $accionid,
        ]);
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
