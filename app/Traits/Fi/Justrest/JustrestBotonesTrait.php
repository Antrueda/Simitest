<?php

namespace App\Traits\FI\Justrest;

use App\Models\Tema;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait JustrestBotonesTrait
{
    public function getBotonJBT($dataxxxx)
    {

        if (auth()->user()->can($this->opciones['permisox'] . '-' . $dataxxxx[0])) {
            $this->opciones['botoform'][] = [
                'routingx' => $dataxxxx[1],
                'formhref' => $dataxxxx[2],
                'tituloxx' => $dataxxxx[3],
                'clasexxx' => $dataxxxx[4],
            ];
        }else{
            $this->opciones['botoform'][]=[];
        }
        return $this->opciones;
    }

}
