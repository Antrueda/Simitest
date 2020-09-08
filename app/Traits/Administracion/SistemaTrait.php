<?php

namespace App\Traits\Administracion;

use App\Models\Indicadores\Area;
use App\Traits\DatatableTrait;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait SistemaTrait
{
    use DatatableTrait;
    public function getAreasTait($request)
    {
        $dataxxxx =  Area::select([
            'areas.id',
            'areas.nombre',
            'sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'areas.sis_esta_id', '=', 'sis_estas.id');
        return $this->getDtGeneral($dataxxxx, $request);
    }
}
