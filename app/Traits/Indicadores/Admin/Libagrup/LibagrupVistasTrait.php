<?php

namespace App\Traits\Indicadores\Admin\Libagrup;

use App\Models\Indicadores\Admin\InLibagrup;
use App\Models\Indicadores\InFuente;
use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait LibagrupVistasTrait
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
        $this->opciones['parametr'] = [$dataxxxx['padrexxx']->id];
        $this->pestania[0]['pesthija'][1]['parametr'] = $dataxxxx['padrexxx']->in_areaindi->area_id;
        $this->pestania[0]['pesthija'][2]['parametr'] = $dataxxxx['padrexxx']->in_areaindi_id;
        $this->pestania[0]['pesthija'][3]['parametr'] = $dataxxxx['padrexxx']->id;
        $inligrup = InLibagrup::get()->max('id');
        $maximoxx = ($inligrup == null) ? 1 : $inligrup + 1;
        $this->opciones['maximoxx'] = [$maximoxx => $maximoxx]; //ddd($dataxxxx['padrexxx']->toArray());
        $this->opciones['linebase'] = [$dataxxxx['padrexxx']->id => $dataxxxx['padrexxx']->in_linea_base->s_linea_base];

        $this->opciones['areaxxxx']=[];
        $this->getBotones(['leerxxxx', [$this->opciones['routxxxx'], $this->opciones['parametr']], 2, 'VOLVER A GRUPOS', 'btn btn-sm btn-primary']);
        $this->getVista( $dataxxxx);
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            // ddd($dataxxxx['modeloxx']->toArray());
            $this->opciones['parametr'][]=$dataxxxx['modeloxx']->id;
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];

            $this->getBotones(['crearxxx', [$this->opciones['routxxxx'].'.nuevoxxx', $this->opciones['parametr']], 2, 'NUEVO GRUPO', 'btn btn-sm btn-primary']);
        }else {
            $this->getBotones(['crearxxx', [], 1, 'GUARDAR GRUPO', 'btn btn-sm btn-primary']);
        }
        $this->getPestanias($this->opciones);
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
