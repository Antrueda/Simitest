<?php

namespace App\Traits\Acciones\Individuales\Educacion\Usuariox\Pruediag;

use App\Models\Educacion\Usuariox\Pruediag\EduPresaber;
use App\Models\Educacion\Usuariox\Pruediag\EduPruediag;
use App\Models\fichaIngreso\FiDatosBasico;
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
     * encontrar la lista de pruebas diagnósticas del nnaj
     */
    public function getPruediagIndex(Request $request, FiDatosBasico $padrexxx)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['permisox']];
            $request->padrexxx = $padrexxx->id;
            $request->botonesx = $this->opciones['rutacarp'] .
                ucfirst($this->opciones['permisox']) . '.Botones.botonesapi';
            $request->razonesx = $this->opciones['rutacarp'] .
                ucfirst($this->opciones['permisox']) . '.Botones.razonesx';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx =  EduPruediag::select([
                'edu_pruediags.id',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                's_grado',
                'fechdili',
                'sis_depens.nombre',
                'users.name',
                'edu_pruediags.sis_esta_id',
                'sis_estas.s_estado',
                'edu_pruediags.user_crea_id',
            ])
                ->join('fi_datos_basicos', 'edu_pruediags.fi_datos_basico_id', '=', 'fi_datos_basicos.id')
                ->join('sis_depens', 'edu_pruediags.sis_depen_id', '=', 'sis_depens.id')
                ->join('eda_grados', 'edu_pruediags.eda_grado_id', '=', 'eda_grados.id')
                ->join('users', 'edu_pruediags.persdili_id', '=', 'users.id')
                ->join('sis_estas', 'edu_pruediags.sis_esta_id', '=', 'sis_estas.id')
                ->where(function ($queryxxx) use ($padrexxx) {
                    $usuariox = Auth::user();
                    if (!$usuariox->hasRole([Role::find(1)->name])) {
                        $queryxxx->where('eda_asignatus.sis_esta_id', 1);
                    }
                    $queryxxx->where('edu_pruediags.fi_datos_basico_id', $padrexxx->id);
                });
            return $this->getDt($dataxxxx, $request);
        }
    }

    public function getEdupresaIndex(Request $request, $padrexxx)
    {
        if ($request->ajax()) {

            $request->routexxx = [$this->opciones['permisox']];
            $request->padrexxx = $padrexxx;
            $request->botonesx = $this->opciones['rutacarp'] .
                ucfirst($this->opciones['permisox']) . '.Botones.botonesapi';
            $request->razonesx = $this->opciones['rutacarp'] .
                ucfirst($this->opciones['permisox']) . '.Botones.razonesx';
            $request->estadoxx = 'layouts.components.botones.estadosx';

            $dataxxxx =  EduPresaber::select([
                'edu_presabers.id',
                'eda_asignatus.s_asignatura',
                'eda_presabers.s_presaber',
                'edu_presabers.sis_esta_id',
                'users.name',
                'sis_estas.s_estado',
                'edu_presabers.user_crea_id',
                'edu_pruediags.sis_esta_id as estapadr_id',
            ])
                ->join('edu_pruediags', 'edu_presabers.edu_pruediag_id', '=', 'edu_pruediags.id')
                ->join('eda_asignatus', 'edu_presabers.eda_asignatu_id', '=', 'eda_asignatus.id')
                ->join('users', 'edu_presabers.user_crea_id', '=', 'users.id')
                ->join('eda_presabers', 'edu_presabers.eda_presaber_id', '=', 'eda_presabers.id')
                ->join('sis_estas', 'edu_presabers.sis_esta_id', '=', 'sis_estas.id')
                ->where('edu_presabers.edu_pruediag_id', $padrexxx);
            return $this->getDt($dataxxxx, $request);
        }
    }
}
