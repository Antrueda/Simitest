<?php

namespace App\Traits\Acciones\Grupales\GestMatrAcademica;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\fichaIngreso\FiDatosBasico;
/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait AjaxTrait
{
    public function getBuscarNnajs(Request $request)
    {
        // $puedecar = $this->getPuedeCargar([
        //     'estoyenx' => 1,
        //     'fechregi' => date('Y-m-d'),
        //     'upixxxxx' => $request->dependex,
        //     'formular' => 2,
        // ]);

        // $respuest = response()->json($puedecar);
        // return $respuest;
        $respuest = FiDatosBasico::select(
            'tipodocumento.nombre as tipodocumento',
            'nnaj_docus.s_documento',
            'fi_datos_basicos.s_primer_nombre',
            'fi_datos_basicos.s_segundo_nombre',
            'fi_datos_basicos.s_primer_apellido',
            'fi_datos_basicos.s_segundo_apellido',
            'nnaj_sexos.s_nombre_identitario',
            'nnaj_nacimis.d_nacimiento',
            'sexos.nombre as sexos',
            'fi_datos_basicos.s_apodo',
            'fi_datos_basicos.id',
            'fi_datos_basicos.sis_nnaj_id',
            'fi_datos_basicos.sis_esta_id'
        )
            ->join('nnaj_sexos', 'fi_datos_basicos.id', '=', 'nnaj_sexos.fi_datos_basico_id')
            ->join('nnaj_docus', 'fi_datos_basicos.id', '=', 'nnaj_docus.fi_datos_basico_id')
            ->join('nnaj_nacimis', 'fi_datos_basicos.id', '=', 'nnaj_nacimis.fi_datos_basico_id')
            ->join('parametros as tipodocumento', 'nnaj_docus.prm_tipodocu_id', '=', 'tipodocumento.id')
            ->join('parametros as sexos', 'nnaj_sexos.prm_sexo_id', '=', 'sexos.id')

            ->join('sis_nnajs', 'fi_datos_basicos.sis_nnaj_id', '=', 'sis_nnajs.id')
            ->where('sis_nnajs.prm_escomfam_id',227)->paginate(5);

            //->groupBy('fi_datos_basicos.id')

            //->where('fi_datos_basicos.sis_nnaj_id',1)
            $respuest2 = response()->json($respuest);
            return $respuest2;

    }
}
