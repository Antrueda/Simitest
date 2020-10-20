<?php

namespace App\Traits\Fos;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaobservacion\FosDatosBasico;
use App\Models\Sistema\SisDepeUsua;
use App\Traits\DatatableTrait;
use Illuminate\Support\Facades\Auth;

/**
 * Este trait permite armar las consultas para FOS que arman las datatable
 */
trait FosTrait
{
    use DatatableTrait;
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
            'fi_datos_basicos.id',
            'fi_datos_basicos.s_primer_nombre',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'fi_datos_basicos.sis_esta_id',
            'fi_datos_basicos.created_at',
            'sis_estas.s_estado',
            'fi_datos_basicos.user_crea_id',
        ])
            ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('sis_estas', 'fi_datos_basicos.sis_esta_id', '=', 'sis_estas.id')
            ->join('nnaj_upis', 'fi_datos_basicos.sis_nnaj_id', '=', 'nnaj_upis.sis_nnaj_id')
            ->where('sis_nnajs.prm_escomfam_id', 227)
            ->whereIn('nnaj_upis.sis_depen_id', $this->getNotInt())->groupBy([
                'fi_datos_basicos.sis_nnaj_id', 'fi_datos_basicos.id', 'fi_datos_basicos.s_primer_nombre',
                'nnaj_docus.s_documento',
                'fi_datos_basicos.s_segundo_nombre',
                'fi_datos_basicos.s_primer_apellido',
                'fi_datos_basicos.s_segundo_apellido',
                'fi_datos_basicos.sis_esta_id',
                'fi_datos_basicos.created_at',
                'sis_estas.s_estado',
                'fi_datos_basicos.user_crea_id',
            ]);
        return $this->getDtAcciones($dataxxxx, $request);
    }

    public function getFos($request)
    {
        $dataxxxx = FosDatosBasico::select(
            'fos_datos_basicos.id',
            'fos_datos_basicos.sis_nnaj_id',
            'fos_datos_basicos.d_fecha_diligencia',
            'sis_depens.nombre as s_upi',
            'areas.nombre as s_area',
            'fos_tses.nombre as s_tipo',
            'fos_stses.nombre as s_sub',
            'fos_datos_basicos.sis_esta_id'
        )
            ->join('sis_depens', 'fos_datos_basicos.sis_depen_id', '=', 'sis_depens.id')
            ->join('areas', 'fos_datos_basicos.area_id', '=', 'areas.id')
            ->join('fos_tses', 'fos_datos_basicos.fos_tse_id', '=', 'fos_tses.id')
            ->join('fos_stses', 'fos_datos_basicos.fos_stse_id', '=', 'fos_stses.id')
            ->where('fos_datos_basicos.sis_esta_id', 1)->where('fos_datos_basicos.sis_nnaj_id', $request->padrexxx);
        return $this->getDtAcciones($dataxxxx, $request);
    }
}