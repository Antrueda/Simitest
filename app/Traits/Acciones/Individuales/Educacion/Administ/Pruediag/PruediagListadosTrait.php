<?php

namespace App\Traits\Acciones\Individuales\Educacion\Administ\Pruediag;

use App\Models\Actaencu\AeEncuentro;
use App\Models\Educacion\Administ\Pruediag\EdaAsignatu;
use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\Educacion\Administ\Pruediag\EdaPresaber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait PruediagListadosTrait
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


    public function getGrados(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  EdaGrado::select([
                'eda_grados.id',
                'eda_grados.s_grado',
                'eda_grados.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'eda_grados.sis_esta_id', '=', 'sis_estas.id')
                ->where(function ($queryxxx) use ($request) {
                    $usuariox = Auth::user();
                    if (!$usuariox->hasRole([Role::find(1)->name])) {
                        $queryxxx->where('eda_asignatus.sis_esta_id', 1);
                    }
                });
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getAsignaturas(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  EdaAsignatu::select([
                'eda_asignatus.id',
                'eda_asignatus.s_asignatura',
                'eda_asignatus.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'eda_asignatus.sis_esta_id', '=', 'sis_estas.id')
                ->where(function ($queryxxx) use ($request) {
                    $usuariox = Auth::user();
                    if (!$usuariox->hasRole([Role::find(1)->name])) {
                        $queryxxx->where('eda_asignatus.sis_esta_id', 1);
                    }
                });
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getPresaberes(Request $request)
    {

        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox'], 'comboxxx'];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  EdaPresaber::select([
                'eda_presabers.id',
                'eda_presabers.s_presaber',
                'eda_presabers.sis_esta_id',
                'sis_estas.s_estado'
            ])
                ->join('sis_estas', 'eda_presabers.sis_esta_id', '=', 'sis_estas.id')
                ->where(function ($queryxxx) use ($request) {
                    $usuariox = Auth::user();
                    if (!$usuariox->hasRole([Role::find(1)->name])) {
                        $queryxxx->where('eda_presabers.sis_esta_id', 1);
                    }
                });
            return $this->getDt($dataxxxx, $request);
        }
    }
}
