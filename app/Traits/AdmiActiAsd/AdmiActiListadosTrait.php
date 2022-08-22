<?php

namespace App\Traits\AdmiActiAsd;

use Illuminate\Http\Request;

use App\Models\AdmiActiAsd\AsdActividad;
use App\Models\AdmiActiAsd\AsdDependencia;
use App\Models\AdmiActiAsd\AsdTiactividad;


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

            $dataxxxx =  AsdTiactividad::select([
                'asd_tiactividads.id',
                'asd_tiactividads.nombre',
                'asd_tiactividads.prm_lugactiv_id',
                'asd_tiactividads.item',
                'asd_tiactividads.descripcion',
                'asd_tiactividads.sis_esta_id',
                'itemtipo.nombre as itemtipo',
                'actividad.nombre as actividad',
                'sis_estas.s_estado'

            ])
            ->join('sis_estas', 'asd_tiactividads.sis_esta_id', '=', 'sis_estas.id')
            ->join('parametros as actividad', 'asd_tiactividads.prm_lugactiv_id', '=', 'actividad.id')
            ->join('parametros as itemtipo', 'asd_tiactividads.item', '=', 'itemtipo.id');

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
            $dataxxxx =  AsdActividad::select([
                'asd_actividads.id',
                'asd_actividads.nombre',
                'asd_actividads.consectivo_item',
                'asd_actividads.descripcion',
                'asd_actividads.sis_esta_id',
                'asd_tiactividads.nombre AS tipo_actividad',
                'sis_estas.s_estado'
            ])

                ->join('asd_tiactividads', 'asd_actividads.tipos_actividad_id', '=', 'asd_tiactividads.id')
                ->join('sis_estas', 'asd_actividads.sis_esta_id', '=', 'sis_estas.id')
                ->where('asd_actividads.tipos_actividad_id',$padrexx);
            return $this->getDt($dataxxxx, $request);
        }
    }
}
