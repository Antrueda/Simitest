<?php

namespace App\Traits\Ayudline;

use App\Models\Ayuda\Ayuda;
use App\Traits\DatatableTrait;
use App\Traits\ConfigController\OpcionesGeneralesTrait;
use Illuminate\Http\Request;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ListadosTrait
{
    use PestaniasTrait; // trit que construye las pestañas que va a tener el modulo con respectiva logica
    use DatatableTrait;
    public function getAyudasLT($request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'departam'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Ayuda::select(['ayudas.id', 'ayudas.titulo', 'ayudas.sis_esta_id', 'sis_estas.s_estado'])
                ->join('sis_estas', 'ayudas.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }
    public function listayudasfornt(Request $request)
    {
        return $this->getAyudasLT($request);
    }

    public function listayudasadmin(Request $request)
    {

        return $this->getAyudasLT($request);
    }
}
