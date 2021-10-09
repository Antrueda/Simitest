<?php

namespace App\Traits\Indicadores\Administ\Areaindi;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AreaindiVistasTrait
{
    public function getVista( $dataxxxx)
    {
        $this->opciones['estadoxx'] = SisEsta::combo(['cabecera' => false, 'esajaxxx' => false]);
        $this->opciones['rutarchi'] = $this->opciones['rutacomp'] . 'Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view( $dataxxxx)
    {
        $this->opciones['areaxxxx']=[];
        $this->getBotones(['leerxxxx', [$this->opciones['permisox'], $this->opciones['parametr']], 2, 'VOLVER A INDICADORES', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $this->opciones['parametr'][]=$dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->pestania[0]['pesthija'][1]['parametr']=$this->opciones['parametr'];
            // $this->getBotones(['crearxxx', [$this->opciones['permisox'].'.nuevoxxx', $this->opciones['parametr']], 2, 'NUEVO INDICADOR', 'btn btn-sm btn-primary']);
        }else {
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR INDICADOR', 'btn btn-sm btn-primary']);
        }
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
