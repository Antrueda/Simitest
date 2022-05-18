<?php

namespace App\Traits\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\AdmiValoIdentHab;

use Illuminate\Http\Request;

use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihArea;
use App\Models\Acciones\Individuales\Educacion\ValoIdentHabOcupacional\VihSubarea;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiVihListadosTrait
{
    public  function getDt($queryxxx, $requestx)
    {
        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {
                    /**
                     * validaciones para los permisos
                     */

                    return  view($requestx->botonesx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }
            )
            ->addColumn(
                's_estado',
                function ($queryxxx) use ($requestx) {
                    return  view($requestx->estadoxx, [
                        'queryxxx' => $queryxxx,
                        'requestx' => $requestx,
                    ]);
                }

            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    /**
     * encontrar la lista de areas volaracion e identificacion de habilidades ocupacional
     */
    public function getListaAreas(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  VihArea::select([
                'vih_areas.id',
                'vih_areas.nombre',
                'vih_areas.descripcion',
                'vih_areas.sis_esta_id',
                'sis_estas.s_estado'

            ])
            ->join('sis_estas', 'vih_areas.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    //lista subareas volaracion e identificacion de habilidades ocupacional
    public function getListaSubareas(Request $request,$padrexx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VihSubarea::select([
                'vih_actividades.id',
                'vih_actividades.nombre',
                'vih_actividades.descripcion',
                'vih_actividades.sis_esta_id',
                'vih_areas.nombre AS area',
                'sis_estas.s_estado'
            ])
                ->join('vih_areas', 'vih_actividades.area_id', '=', 'vih_areas.id')
                ->join('sis_estas', 'vih_actividades.sis_esta_id', '=', 'sis_estas.id')
                ->where('vih_actividades.area_id',$padrexx);
            return $this->getDt($dataxxxx, $request);
        }
    }
    
}
