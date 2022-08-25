<?php

namespace App\Traits\Acciones\Individuales\Educacion\perfilOcupacional\perfilOcupacional;

use Illuminate\Http\Request;
use App\Models\sistema\SisNnaj;
use App\Models\sistema\SisDepen;
use App\Models\Ejemplo\AeEncuentro;
use Illuminate\Support\Facades\Auth;
use App\Models\Acciones\Grupales\Educacion\IMatriculaNnaj;
use App\Models\Acciones\Individuales\Educacion\MatriculaCursos\MatriculaCurso;
use App\Models\Acciones\Individuales\Educacion\PerfilVocacional\PvfActividade;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCategoria;
use App\Models\Acciones\Individuales\Educacion\CuestionarioGustos\CgihCuestionario;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoPerfilOcupacional;

/**
 * Este trait permite armar las consultas para vsi que arman las datatable
 */
trait perfilOcupacionalListadosTrait
{
  
  
    public function getFpoListado($request)
    {
        $dataxxxx =  FpoPerfilOcupacional::select([
            'fpo_perfil_ocupacionals.id',
            'fpo_perfil_ocupacionals.fecha_registro',
            'fpo_perfil_ocupacionals.concepto_perfil',
            'fpo_perfil_ocupacionals.resultado_text',
            'fpo_perfil_ocupacionals.sis_esta_id',
            'fpo_perfil_ocupacionals.sis_nnaj_id',
            'users.name as nombre',
            'fpo_perfil_ocupacionals.created_at',
        ])
            ->join('users', 'fpo_perfil_ocupacionals.user_crea_id', '=', 'users.id')
            ->join('sis_estas', 'fpo_perfil_ocupacionals.sis_esta_id', '=', 'sis_estas.id')
            ->where('fpo_perfil_ocupacionals.sis_nnaj_id', $request->padrexxx);
        return $this->getDtGeneral($dataxxxx, $request);
    }
}



   
   

 

   
