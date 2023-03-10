<?php

namespace App\Traits\Fos;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\Sistema\SisDepeUsua;
use App\Traits\DatatableTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

/**
 * Este trait permite armar las consultas para FOS que arman las datatable
 */
trait FosTrait
{
    use DatatableTrait;
    public  function getDtAccionesFos($queryxxx, $requestx)
    {

        return datatables()
            ->of($queryxxx)
            ->addColumn(
                'botonexx',
                function ($queryxxx) use ($requestx) {

                    $puedexxx = $this->getPuedeCargar([
                        'estoyenx' => 1,
                        'fechregi' => explode(' ', $queryxxx->created_at)[0]
                    ]);
                    /**
                     * validaciones para los permisos
                     */
                    $requestx->puedever = auth()->user()->can($requestx->routexxx[0] . '-leer');
                    $requestx->pueditar = auth()->user()->can($requestx->routexxx[0] . '-editar');
                    if ($requestx->pueditar == false || $puedexxx['tienperm'] == false) {
                        $requestx->pueditar = false;
                    }
                    $requestx->puedinac = auth()->user()->can($requestx->routexxx[0] . '-borrar');
                    if ($requestx->puedinac == false || $puedexxx['tienperm'] == false) {
                        $requestx->puedinac = false;
                    }
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
            ->addColumn(
                's_observacion',
                function ($queryxxx) {
                    return strtoupper($queryxxx->s_observacion);
                }
            )
            ->rawColumns(['botonexx', 's_estado'])
            ->toJson();
    }

    public function getNotInt()
    {
        $userxxxx = Auth::user();
        $userxxxx = SisDepeUsua::select('sis_depen_id')->where(function ($queryxxx) use ($userxxxx) {
            $queryxxx->where('user_id', $userxxxx->id);
            $queryxxx->where('sis_esta_id', 1);
        })->get();

        return $userxxxx;
    }
    public function getNnajs($request)
    {
        $dataxxxx =  FiDatosBasico::select([
            'sis_nnajs.id',
            'fi_datos_basicos.sis_nnaj_id',
            'tipodocumento.nombre as tipodocumento',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_nacimis.d_nacimiento',
            'sexos.nombre as sexoss',
            'fi_datos_basicos.sis_esta_id',
            'fi_datos_basicos.created_at',
            'sis_estas.s_estado',
            'fi_datos_basicos.user_crea_id',
        ])
            ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('parametros as tipodocumento', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocumento.id')
            ->join('parametros as sexos', 'nnaj_sexos.prm_sexo_id', '=', 'sexos.id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
            ->where('sis_nnajs.prm_escomfam_id', 227)
            ->whereIn('nnaj_upis.sis_depen_id', $this->getNotInt())->groupBy([
                'sis_nnajs.id',
                'fi_datos_basicos.sis_nnaj_id',
                'tipodocumento.nombre',
                'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'nnaj_nacimis.d_nacimiento',
                'sexos.nombre',
                'fi_datos_basicos.sis_esta_id',
                'fi_datos_basicos.created_at',
                'sis_estas.s_estado',
                'fi_datos_basicos.user_crea_id',
            ]);
        return $this->getDtAccionesUpi($dataxxxx, $request);
    }

    public function getFosDiligenciado(request $request)
    {
        $dataxxxx = FosDatosBasico::select(
            'fos_datos_basicos.id',
            'areas.nombre as areas',
            'fos_tses.nombre as seguimiento',
            'fos_stses.nombre as subseguimiento',
            'upi.nombre as upi',
            'fos_datos_basicos.d_fecha_diligencia',
            'fos_datos_basicos.s_observacion',
            'users.name',
            'sis_estas.s_estado',
            'fos_datos_basicos.sis_esta_id',
            'fos_datos_basicos.created_at',
            'fos_datos_basicos.sis_nnaj_id',
        )
            ->join('sis_estas', 'fos_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->join('sis_depens as upi', 'fos_datos_basicos.sis_depen_id', '=', 'upi.id')
            ->join('users', 'fos_datos_basicos.i_responsable', '=', 'users.id')
            ->join('areas', 'fos_datos_basicos.area_id', '=', 'areas.id')
            ->join('fos_tses', 'fos_datos_basicos.fos_tse_id', '=', 'fos_tses.id')
            ->join('fos_stses', 'fos_datos_basicos.fos_stse_id', '=', 'fos_stses.id')
            // ->where('fos_datos_basicos.sis_nnaj_id', $request->padrexxx)

            ->where(function ($queryxxx) use ($request) {
                $usuariox = Auth::user();
                if (!$usuariox->hasRole([Role::find(1)->name])) {
                    $queryxxx->where('fos_datos_basicos.sis_esta_id', 1);
                }
                $queryxxx->where('fos_datos_basicos.sis_nnaj_id', $request->padrexxx);
            });
        // ->where('fos_datos_basicos.sis_esta_id', 1)

        return $this->getDtAccionesFos($dataxxxx, $request);
    }

    public function getFosnnaj(Request $request)
    {
        if ($request->ajax()) {
            $request->routexxx = [$this->opciones['routxxxx']];
            $request->botonesx = $this->opciones['rutacarp'] .
                $this->opciones['carpetax'] . '.Botones.botonesapi';
            $request->estadoxx = 'layouts.components.botones.estadosx';
            $dataxxxx = FiDatosBasico::select(
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_primer_nombre',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_datos_basicos.s_apodo',
                'nnaj_sexos.s_nombre_identitario',
                'fi_datos_basicos.id',
                'fi_datos_basicos.sis_nnaj_id',
                'fi_datos_basicos.sis_esta_id'
            )
                ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
                ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id');

            return $this->getDtAcciones($dataxxxx, $request);
        }
    }

    public function getTodoComFami(request $request)
    {
        $dataxxxx = FosDatosBasico::select(
            'fos_datos_basicos.id',
            'area.nombre as area',
            'seguimiento.nombre as seguimiento',
            'subseguimiento.nombre as seguimiento',
            'upi.nombre as upi',
            'fos_datos_basicos.d_fecha_diligencia',
            'fos_datos_basicos.sis_esta_id',
            'fos_datos_basicos.sis_nnaj_id',
        )
            ->join('sis_estas', 'fos_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->join('sis_depens as upi', 'fos_datos_basicos.sis_depen_id', '=', 'upi.id')
            ->join('areas as area', 'fos_datos_basicos.area_id', '=', 'area.id')
            ->join('parametros as seguimiento', 'fos_datos_basicos.fos_tse_id', '=', 'seguimiento.id')
            ->join('parametros as subseguimiento', 'fos_datos_basicos.fos_stse_id', '=', 'subseguimiento.id')
            ->join('fos_stses', 'fos_datos_basicos.fos_stse_id', '=', 'fos_stses.id')
            ->where('fos_datos_basicos.sis_nnaj_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }

}
