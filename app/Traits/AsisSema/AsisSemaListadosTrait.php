<?php

namespace App\Traits\AsisSema;

use App\Models\Acciones\Grupales\Educacion\GradoAsignar;
use App\Models\Acciones\Grupales\Educacion\GrupoAsignar;
use App\Models\AsisSema\AeEncuentro;
use Illuminate\Http\Request;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AsisSemaListadosTrait
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
            $request->routexxx = [$this->opciones['routxxxx'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  AeEncuentro::select([
                'ae_encuentros.id',
                'sis_depens.nombre as dependencia',
                'sis_servicios.s_servicio',
                'sis_localidads.s_localidad',
                'sis_upzs.s_upz',
                'sis_barrios.s_barrio',
                'accion.nombre as accion',
                'actividad.nombre as actividad', 'ae_encuentros.sis_esta_id', 'sis_estas.s_estado'
            ])
                ->join('sis_depens', 'ae_encuentros.sis_depen_id', '=', 'sis_depens.id')
                ->join('sis_servicios', 'ae_encuentros.sis_servicio_id', '=', 'sis_servicios.id')
                ->join('sis_localidads', 'ae_encuentros.sis_localidad_id', '=', 'sis_localidads.id')
                ->join('sis_upzs', 'ae_encuentros.sis_upz_id', '=', 'sis_upzs.id')
                ->join('sis_barrios', 'ae_encuentros.sis_barrio_id', '=', 'sis_barrios.id')
                ->join('parametros as accion', 'ae_encuentros.prm_accion_id', '=', 'accion.id')
                ->join('parametros as actividad', 'ae_encuentros.prm_actividad_id', '=', 'actividad.id')
                ->join('sis_estas', 'ae_encuentros.sis_esta_id', '=', 'sis_estas.id');
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getGradoAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = GradoAsignar::select(['eda_grados.id as valuexxx', 'eda_grados.s_grado as optionxx'])
            ->join('eda_grados', 'grado_asignars.grado_matricula', '=', 'eda_grados.id')
            ->join('sis_depens', 'grado_asignars.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_servicios', 'grado_asignars.sis_servicio_id', '=', 'sis_servicios.id')
            ->where('grado_asignars.sis_depen_id', $dataxxxx['dependen'])
            ->where('grado_asignars.sis_servicio_id', $dataxxxx['servicio'])
            ->where('grado_asignars.sis_esta_id', 1)
            ->orderBy('grado_asignars.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }

    public function getGrupoAsignar($dataxxxx)
    {
        $dataxxxx['dataxxxx'] = GrupoAsignar::select(['parametros.id as valuexxx', 'parametros.nombre as optionxx'])
            ->join('parametros', 'grupo_asignars.grupo_matricula_id', '=', 'parametros.id')
            ->join('sis_depens', 'grupo_asignars.sis_depen_id', '=', 'sis_depens.id')
            ->join('sis_servicios', 'grupo_asignars.sis_servicio_id', '=', 'sis_servicios.id')
            ->where('grupo_asignars.sis_depen_id', $dataxxxx['dependen'])
            ->where('grupo_asignars.sis_servicio_id', $dataxxxx['servicio'])
            ->where('grupo_asignars.sis_esta_id', 1)
            ->orderBy('grupo_asignars.id', 'asc')
            ->get();
        $respuest = $this->getCuerpoComboSinValueCT($dataxxxx);
        return $respuest;
    }
}
