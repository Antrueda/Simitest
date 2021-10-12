<?php

namespace App\Traits\Indicadores\Modulo;

use App\Models\Sistema\SisEsta;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait IndimoduVistasTrait
{


    public function view($opciones, $dataxxxx)
    {
        $this->getVista();
        // indica si se esta actualizando o viendo
        if ($dataxxxx['modeloxx'] != '') {
            $opciones['modeloxx'] = $dataxxxx['modeloxx'];
            $opciones['parametr'] = [$dataxxxx['modeloxx']->id];
            $opciones['routnuev'] = [$opciones['permisox'] . '.nuevo', []];
        }
        // Se arma el titulo de acuerdo al array opciones
        return view($opciones['rutacarp'] . 'pestanias', ['todoxxxx' => $opciones]);
    }
}
