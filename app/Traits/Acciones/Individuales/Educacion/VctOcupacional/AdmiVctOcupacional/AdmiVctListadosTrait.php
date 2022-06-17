<?php

namespace App\Traits\Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional;

use Illuminate\Http\Request;

use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoArea;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoItem;
use App\Models\Acciones\Individuales\Educacion\VctOcupacional\VctoSubarea;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiVctListadosTrait
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

            $dataxxxx =  VctoArea::select([
                'vcto_areas.id',
                'vcto_areas.nombre',
                'vcto_areas.descripcion',
                'vcto_areas.sis_esta_id',
                'sis_estas.s_estado'

            ])
            ->join('sis_estas', 'vcto_areas.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    //lista subareas volaracion e identificacion de habilidades ocupacional
    public function getListaSubareas(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VctoSubarea::select([
                'vcto_subareas.id',
                'vcto_subareas.nombre',
                'vcto_subareas.descripcion',
                'vcto_subareas.sis_esta_id',
                'vcto_areas.nombre AS area',
                'sis_estas.s_estado'
            ])
                ->join('vcto_areas', 'vcto_subareas.vcto_area_id', '=', 'vcto_areas.id')
                ->join('sis_estas', 'vcto_subareas.sis_esta_id', '=', 'sis_estas.id');

                return $this->getDt($dataxxxx, $request);
        }
    }
    
    //lista items volaracion e identificacion de habilidades ocupacional
    public function getListaItems(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  VctoItem::select([
                'vcto_items.id',
                'vcto_items.nombre',
                'vcto_items.sis_esta_id',
                'vcto_subareas.nombre AS subarea',
                'sis_estas.s_estado'
            ])
                ->join('vcto_subareas', 'vcto_items.vcto_subarea_id', '=', 'vcto_subareas.id')
                ->join('sis_estas', 'vcto_items.sis_esta_id', '=', 'sis_estas.id');

                return $this->getDt($dataxxxx, $request);
        }
    }
    
}
