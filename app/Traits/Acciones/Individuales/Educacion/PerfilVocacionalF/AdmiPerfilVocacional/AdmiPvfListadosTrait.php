<?php

namespace App\Traits\Acciones\Individuales\Educacion\PerfilVocacionalF\AdmiPerfilVocacional;

use Illuminate\Http\Request;

use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfArea;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiPvfListadosTrait
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
     * encontrar la lista de actividades Diarias
     */
    public function getListaAreas(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  PvfArea::select([
                'pvf_areas.id',
                'pvf_areas.nombre',
                'pvf_areas.descripcion',
                'pvf_areas.sis_esta_id',
                'sis_estas.s_estado'

            ])
            ->join('sis_estas', 'pvf_areas.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaActividades(Request $request,$padrexx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  PvfActividade::select([
                'pvf_actividades.id',
                'pvf_actividades.nombre',
                'pvf_actividades.descripcion',
                'pvf_actividades.sis_esta_id',
                'pvf_areas.nombre AS area',
                'sis_estas.s_estado'
            ])
                ->join('pvf_areas', 'pvf_actividades.area_id', '=', 'pvf_areas.id')
                ->join('sis_estas', 'pvf_actividades.sis_esta_id', '=', 'sis_estas.id')
                ->where('pvf_actividades.area_id',$padrexx);
            return $this->getDt($dataxxxx, $request);
        }
    }
    
}
