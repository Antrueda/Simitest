<?php

namespace App\Traits\GestionConsecutivos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GestionConsecutivos\ConsecutAsistencia;


/**
 * Este trait permite armar las consultas para ubicacion que arman las datatable
 */
trait ConsecutivoTrait
{

    public function getConsecutivo($mesxxxxx,$anioxxxx,$sis_depen_id,$sis_servicio_id,$asi_planilla_id)
    {
        $respuest;
        $conse = ConsecutAsistencia::where('sis_depen_id',intval($sis_depen_id))
        ->where('sis_servicio_id',intval($sis_servicio_id))
        ->where('anioxxxx',$anioxxxx)
        ->where('asis_planilla',$asi_planilla_id)
        ->where('mesxxxxx',$mesxxxxx)
        ->first();
       
        if ($conse == null) {
            $dataxxxx= ConsecutAsistencia::create([
                'consecutivo'=>1,
                'mesxxxxx'=>$mesxxxxx,
                'anioxxxx'=>$anioxxxx,
                'sis_depen_id'=>intval($sis_depen_id),
                'sis_servicio_id'=>intval($sis_servicio_id),
                'asis_planilla'=>$asi_planilla_id,
                'sis_esta_id'=>1,
                'user_crea_id'=>1,
                'user_edita_id'=>1,
            ]);
            $respuest=$dataxxxx->consecutivo;
        }else{
            $actualizar=$conse->consecutivo + 1;
            $conse->update([
                'consecutivo'=>$actualizar,
            ]);
            $respuest=$conse->consecutivo;
        }
        return $respuest;
    }
    
    public function resetConsecutivo($mesxxxxx,$anioxxxx,$sis_depen_id,$sis_servicio_id,$asi_planilla_id)
    {
        $conse = ConsecutAsistencia::where('sis_depen_id',intval($sis_depen_id))
        ->where('sis_servicio_id',intval($sis_servicio_id))
        ->where('anioxxxx',$anioxxxx)
        ->where('asis_planilla',$asi_planilla_id)
        ->where('mesxxxxx',$mesxxxxx)
        ->first();

        $actualizar=$conse->consecutivo - 1;
        $conse->update([
            'consecutivo'=>$actualizar,
        ]);
    }
}
