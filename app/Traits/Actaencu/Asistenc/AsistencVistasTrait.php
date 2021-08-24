<?php

namespace App\Traits\Actaencu\Asistenc;

use App\Models\Sistema\SisEsta;
use Carbon\Carbon;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AsistencVistasTrait
{

    public function getVista($dataxxxx)
    {

        $this->opciones['tpviapal'] = $this->getTemacomboCT([
            'temaxxxx'=>62,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['alfabeto'] = $this->getTemacomboCT([
            'temaxxxx'=>39,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];

        $this->opciones['dircondi'] = $this->getTemacomboCT([
            'temaxxxx'=>23,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        $this->opciones['cuadrant'] = $this->getTemacomboCT([
            'temaxxxx'=>38,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => false
        ])['comboxxx'];
        // $this->pestania[2][4] = true;
        $this->pestania[1][4] = true;
        // $this->pestania[2][2] = $this->opciones['parametr'];
        $this->pestania[1][2] = $this->opciones['parametr'];
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'][] =
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ;
    }
    public function view($dataxxxx)
    {
        $this->opciones['actaencu']=$dataxxxx['padrexxx'];
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], [$this->opciones['actaencu']->id]], 2, 'VOLVER A ACTAS DE ENCUENTRO', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $dataxxxx['modeloxx']->fechdili= Carbon::parse($dataxxxx['modeloxx']->fechdili)->toDateString();
            $this->opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[1][4] = true;
            $this->pestania[1][2] = $this->opciones['actaencu']->id;
            // $this->pestania[2][4] = true;
            // $this->pestania[2][2] = $this->opciones['actaencu']->id;
            $this->getBotones(['crearxxx', [$this->opciones['permisox'] . '.nuevoxxx', [$this->opciones['actaencu']->id]], 2, 'NUEVA ACTA DE ENCUENTRO', 'btn btn-sm btn-primary']);
        }
        $this->getTablasNnnaj();
        $this->getTablasNnnajSelected();
        $this->getPestanias($this->opciones);

        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
