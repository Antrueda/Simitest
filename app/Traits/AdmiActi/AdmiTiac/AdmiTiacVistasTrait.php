<?php

namespace App\Traits\AdmiActi\AdmiTiac;

use App\Models\AdmiActi\TiposActividad;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiTiacVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = $this->getEstadosAECT([
            'campoxxx' => 'id',
            'orederby' => 'ASC',
            'cabecera' => false,
            'ajaxxxxx' => false,
            // 'inxxxxxx' => [$this->estadoid],
        ])['comboxxx'];
        // $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }

    public function view( $dataxxxx)
    {
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], []], 2, 'VOLVER A TIPOS DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        $estadoid = 1;
        if ($dataxxxx['modeloxx'] != '') {
            $estadoid = $dataxxxx['modeloxx']->sis_esta_id;
            $this->opciones['parametr']=[$dataxxxx['modeloxx']->id];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0][4]=true;
            $this->pestania[0][2]=$this->opciones['parametr'];
            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', []], 2, 'NUEVO TIPO DE ACTIVIDAD', 'btn btn-sm btn-primary']);
        }
        $this->opciones['motivoxx'] = $this->getEstusuariosAECT([
            'cabecera' => true,
            'ajaxxxxx' => false,
            'estadoid' => $estadoid,
            'formular' => 2718
        ])['comboxxx'];
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
