<?php

namespace App\Traits\Acciones\Grupales\Asistente;

use App\Models\Tema;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait VistasTrait
{
    use DataTablesTrait;
    public function getVista($dataxxxx)
    {

        $this->opciones['rutarchi'] = $this->opciones['rutacarp'] . 'Acomponentes.Acrud.' . $dataxxxx['accionxx'][0];
        $this->opciones['formular'] = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Formulario.' . $dataxxxx['accionxx'][1];
        $this->opciones['ruarchjs'] = [
            ['jsxxxxxx' => $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Js.js']
        ];
    }
    public function view($dataxxxx)
    {

        $this->opciones['parametr'][] = $this->opciones['padrexxx']->id;
        $this->getVista($dataxxxx);
        $this->getTablas($dataxxxx);
        // indica si se esta actualizando o viendo
        $dataxxxx['selected'] = 0;

        if ($dataxxxx['modeloxx'] != '') {

            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $this->opciones['parametr'][] = $dataxxxx['modeloxx']->id;
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($this->opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }
}
