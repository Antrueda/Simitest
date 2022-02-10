<?php

namespace App\Traits\AsisSema;

use DateTime;
use App\Models\AsisSema\Asissema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Traits\AsisSema\AsisConsecutivoTrait;

/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait AsisSemaCrudTrait
{

    use AsisConsecutivoTrait;
    /**
     * grabar o actualizar el acta de encuentro
     *
     * @param array $dataxxxx
     * @return $usuariox
     */
    public function setAsisSema($dataxxxx)
    {
        $respuest = DB::transaction(function () use ($dataxxxx) {
            $dataxxxx['requestx']->request->add(['user_edita_id' => Auth::user()->id]);
           
            if (isset($dataxxxx['modeloxx']->id)) {
                $dataxxxx['modeloxx']->update([
                    'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                    'h_final'=>$dataxxxx['requestx']->h_final,
                    'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                    'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                ]);
            } else {
                $dividirFecha = explode('-', $dataxxxx['requestx']->prm_fecha_inicio); 
                $planilla = function($id){
                    if ($id == 2710) { return "asistencia-academica";}
                    if ($id == 2707) { return "asistencia-convenio"; }
                    if ($id == 2708) {return "asistencia-tecnicaconv";}
                    if ($id == 2709) {return "asistencia-tecnicatalleres"; }
                };
                $consecutivo = $this->getConsecutivo($dividirFecha[1],$dividirFecha[0],$dataxxxx['requestx']->sis_depen_id,$dataxxxx['requestx']->sis_servicio_id,$planilla($dataxxxx['requestx']->prm_actividad_id));
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
                $fin = new DateTime($dataxxxx['requestx']->prm_fecha_inicio);
                $fin= $fin->modify( '+6 days' );
          
                if($dataxxxx['requestx']->prm_actividad_id == 2710){
                    $dataxxxx['modeloxx'] = Asissema::create([
                        'consecut'=>$consecutivo,
                        'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                        'sis_servicio_id'=>$dataxxxx['requestx']->sis_servicio_id,
                        'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                        'eda_grados_id'=>$dataxxxx['requestx']->eda_grados_id,
                        'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,

                        'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                        'h_final'=>$dataxxxx['requestx']->h_final,
                        'prm_fecha_inicio'=>$dataxxxx['requestx']->prm_fecha_inicio,
                        'prm_fecha_final'=> $fin,

                        'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    ]);
                }
                //asistencia convenio 
                if($dataxxxx['requestx']->prm_actividad_id == 2707){
                    $dataxxxx['modeloxx'] = Asissema::create([
                        'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                        'sis_servicio_id'=>$dataxxxx['requestx']->sis_servicio_id,
                        'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                        'actividade_id'=>$dataxxxx['requestx']->actividade_id,
                        'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                        'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                        'h_final'=>$dataxxxx['requestx']->h_final,
                        'prm_fecha_inicio'=>$dataxxxx['requestx']->prm_fecha_inicio,
                        'prm_fecha_final'=> $fin,
                        'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    ]);
                }
                //formacion tecnica-convenios
                if($dataxxxx['requestx']->prm_actividad_id == 2708){
                    $dataxxxx['modeloxx'] = Asissema::create([
                        'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                        'sis_servicio_id'=>$dataxxxx['requestx']->sis_servicio_id,
                        'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                        'convenio_prog_id'=>$dataxxxx['requestx']->convenio_prog_id,
                        'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                        'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                        'h_final'=>$dataxxxx['requestx']->h_final,
                        'prm_fecha_inicio'=>$dataxxxx['requestx']->prm_fecha_inicio,
                        'prm_fecha_final'=> $fin,
                        'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    ]);
                }
                //formscion tecnica talleres
                if($dataxxxx['requestx']->prm_actividad_id == 2709){
                    $dataxxxx['modeloxx'] = Asissema::create([
                        'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                        'sis_servicio_id'=>$dataxxxx['requestx']->sis_servicio_id,
                        'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                        'curso_id'=>$dataxxxx['requestx']->prm_curso,
                        'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                        'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                        'h_final'=>$dataxxxx['requestx']->h_final,
                        'prm_fecha_inicio'=>$dataxxxx['requestx']->prm_fecha_inicio,
                        'prm_fecha_final'=> $fin,
                        'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    ]);
                }
                
            }
            return $dataxxxx['modeloxx'];
        }, 5);
        return redirect()
            ->route($dataxxxx['routxxxx'], [$respuest->id])
            ->with('info', $dataxxxx['infoxxxx']);
    }
}
