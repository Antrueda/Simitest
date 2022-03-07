<?php

namespace App\Traits\AdmiActiAsd;

use App\Models\AdmiActiAsd\Actividade;

use Illuminate\Http\Request;
use App\Models\AdmiActiAsd\TiposActividad;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AdmiActiListadosTrait
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


    public function getListaTiposActividad(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] . $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  TiposActividad::select([
                'asd_tiactividad.id',
                'asd_tiactividad.nombre',
                'asd_tiactividad.prm_lugactiv_id',
                'asd_tiactividad.item',
                'asd_tiactividad.descripcion',
                'asd_tiactividad.sis_esta_id',
                'sis_estas.s_estado'

            ])
            ->join('sis_estas', 'asd_tiactividad.sis_esta_id', '=', 'sis_estas.id');

            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getListaActividades(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  Actividade::select([
                'asd_actividad.id',
                'asd_actividad.nombre',
                'asd_actividad.consectivo_item',
                'asd_actividad.descripcion',
                'asd_actividad.sis_esta_id',
                'asd_tiactividad.nombre AS tipos_actividad_id',
                'sis_estas.s_estado'
            ])
                ->join('asd_tiactividad', 'asd_actividad.tipos_actividad_id', '=', 'asd_tiactividad.id')
                ->join('sis_estas', 'asd_actividad.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }
    
}
