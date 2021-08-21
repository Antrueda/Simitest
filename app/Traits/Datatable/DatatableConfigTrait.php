<?php

namespace App\Traits\Datatable;



/**
 * configuraciones adicionales para las tablas cuando se utiliza collection
 */
trait DatatableConfigTrait
{
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param object $request
     * @param string $coludefa columna por defecto
     * @return $columnax
     */
    public function getOrderBy($request, $coludefa)
    {
        $orderxxx = $request->order;
        $columnax = $request->columns[$orderxxx[0]['column']]['data'];
        if ($orderxxx[0]['column'] == 0) {
            $columnax = $coludefa;
        }
        return $columnax;
    }
}
