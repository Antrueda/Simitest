<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Diaria;

use App\Models\Acciones\Grupales\Asistencias\Diaria\AsdDiaria;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait DiariaListadosTrait
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
     * encontrar la lisa de actas de encuentro
     */


    public function getListaxxx(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AsdDiaria::select([
                'asd_diarias.id',
                'sis_depens.nombre as dependencia',
                'sis_servicios.s_servicio',
                'sis_localidads.s_localidad',
                'sis_upzs.s_upz',
                'sis_barrios.s_barrio',
                'lugactiv.nombre as lugactiv',
                'actividad.nombre as actividad', 
                'asd_diarias.sis_esta_id', 
                'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'asd_diarias.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'asd_diarias.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_localidads', 'asd_diarias.sis_localidad_id', '=', 'sis_localidads.id')
                ->join('sis_upzs', 'asd_diarias.sis_upz_id', '=', 'sis_upzs.id')
                ->join('sis_barrios', 'asd_diarias.sis_barrio_id', '=', 'sis_barrios.id')
                ->join('parametros as lugactiv', 'asd_diarias.prm_lugactiv_id', '=', 'lugactiv.id')
                ->join('parametros as actividad', 'asd_diarias.prm_actividad_id', '=', 'actividad.id')
                ->join('sis_estas', 'asd_diarias.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }
}
