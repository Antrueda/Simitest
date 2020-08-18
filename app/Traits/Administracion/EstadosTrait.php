<?php

namespace App\Traits\Administracion;


use App\Models\Usuario\Estusuario;
use App\Traits\DatatableTrait;

/**
 * Este trait permite realizar los calculos para encontrar cuantos días adicionales se le darán
 * terminado el mes para el carge de información
 */
trait EstadosTrait
{
    use DatatableTrait;
    public function getEstados($request)
    {
        $dataxxxx =  Estusuario::select([
            'estusuarios.id',
            'estusuarios.estado',
            'sis_esta_id',
            'sis_estas.s_estado'
        ])
            ->join('sis_estas', 'estusuarios.sis_esta_id', '=', 'sis_estas.id');
        return $this->getDtGeneral($dataxxxx, $request);
    }
}
