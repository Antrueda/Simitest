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
        $barriose = [0];
        if ($dataxxxx['modeloxx'] != '') {
            $localidx = $dataxxxx['modeloxx']->sis_localidad_id;
            $upzselec = [$dataxxxx['modeloxx']->sis_upz_id];
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[1][4] = true;
            $this->pestania[1][2] = $this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'] . '.nuevoxxx', []], 2, 'NUEVA ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        }
        $this->opciones['sis_upzs'] = $respuest = $this->getUpzsComboCT([
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
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
