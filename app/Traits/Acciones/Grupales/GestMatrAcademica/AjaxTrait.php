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
            ->where('sis_nnajs.prm_escomfam_id',227);
            if($request['data']['s_documento'] != "") {
                $respuest =  $respuest->where('nnaj_docus.s_documento','LIKE',"%{$request['data']['s_documento']}%");          
            }
            if ($request['data']['s_primer_nombre'] != "") {
                $respuest = $respuest->whereRaw('UPPER(fi_datos_basicos.s_primer_nombre) LIKE (?) ',["%{$request['data']['s_primer_nombre']}%"]);
            }
            if ($request['data']['s_segundo_nombre'] != "") {
                $respuest = $respuest->whereRaw('UPPER(fi_datos_basicos.s_segundo_nombre) LIKE (?) ',["%{$request['data']['s_segundo_nombre']}%"]);
            }
            if ($request['data']['s_primer_apellido'] != "") {
                $respuest = $respuest->whereRaw('UPPER(fi_datos_basicos.s_primer_apellido) LIKE (?) ',["%{$request['data']['s_primer_apellido']}%"]);
            }
            if ($request['data']['s_segundo_apellido'] != "") {
                $respuest = $respuest->whereRaw('UPPER(fi_datos_basicos.s_segundo_apellido) LIKE (?) ',["%{$request['data']['s_segundo_apellido']}%"]);
            }
            $respuest =$respuest->paginate(5);

            $respuest2 = response()->json($respuest);
            return $respuest2;

    }

    public function getMotivosRetiro(Request $request)
    {
    
        $data = $this->getTemacomboCT([
            'temaxxxx'=>433,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => true
        ])['comboxxx'];

        $respuest = response()->json($data);
        return $respuest;
    }
    public function getMotivosAplazado(Request $request)
    {
    
        $data = $this->getTemacomboCT([
            'temaxxxx'=>434,
            'campoxxx'=>'nombre',
            'orederby'=>'ASC',
            'cabecera' => true,
            'ajaxxxxx' => true
        ])['comboxxx'];

        $respuest = response()->json($data);
        return $respuest;
    }
    
}
