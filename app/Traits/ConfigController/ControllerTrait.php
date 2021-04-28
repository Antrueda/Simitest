<?php

namespace App\Traits\ConfigController;



/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ControllerTrait
{
    public $opciones = [
        'parametr' => [],
        'routingx' => [],
        'vocalesx' => ['Á', 'É', 'Í', 'Ó', 'Ú'],
        'perfilxx' => 'sinperfi',

    ];
    public function indexOGT()
    {
        $this->getPestanias([]);
        return view($this->opciones['rutacomp'] . 'pestanias', ['todoxxxx' => $this->opciones]);
    }


}
