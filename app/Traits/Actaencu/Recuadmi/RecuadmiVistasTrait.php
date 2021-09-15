<?php

namespace App\Traits\Actaencu\Recuadmi;

use App\Models\Sistema\SisEsta;
use App\Models\Tema;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait RecuadmiVistasTrait
{
    public $estadoid = 1;
    public $inxxxxxx = [1];
    public function getVista($dataxxxx)
    {
        $this->opciones['umedidax'] = Tema::comboAsc(288, true, false);
        $this->opciones['trecurso'] = Tema::comboAsc(283, true, false);
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];

        // SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], []], 2, 'VOLVER A RECURSOS', 'btn btn-sm btn-primary']);
        $this->getVista($dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][] = $dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->getBotones(['crearxxx', [$this->opciones['permisox'] . '.nuevoxxx', []], 2, 'NUEVO RECURSO', 'btn btn-sm btn-primary']);
        }

        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $this->estadoid,
            'formular' => 2687
        ])['comboxxx'];
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
