<?php

namespace App\Traits\Acciones\Grupales\Asistencias\Semanal;

use DateTime;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Traits\GestionConsecutivos\ConsecutivoTrait;
use App\Models\Acciones\Grupales\Asistencias\Semanal\Asissema;


/**
 * Este trait permite el crear y editar del acta de encuetro
 */
trait SemanalCrudTrait
{

    use ConsecutivoTrait;
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
                if ($dataxxxx['requestx']->puedeeditar == "1") {
                    if($dataxxxx['requestx']->prm_actividad_id == 2721){
                        $dataxxxx['modeloxx']->update([
                            'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                            'eda_grados_id'=>$dataxxxx['requestx']->eda_grados_id,
                            'actividade_id'=>null,
                            'convenio_prog_id'=>null,
                            'curso_id'=>null,
                            'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                            'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                            'h_final'=>$dataxxxx['requestx']->h_final,
                            'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                        ]);
                    }
                    //asistencia convenio 
                    if($dataxxxx['requestx']->prm_actividad_id == 2724){
                        $dataxxxx['modeloxx']->update([
                            'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                            'actividade_id'=>$dataxxxx['requestx']->actividade_id,
                            'eda_grados_id'=>null,
                            'convenio_prog_id'=>null,
                            'curso_id'=>null,
                            'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                            'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                            'h_final'=>$dataxxxx['requestx']->h_final,
                            'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                        ]);
                    }
                    //formacion tecnica-convenios
                    if($dataxxxx['requestx']->prm_actividad_id == 2723){
                        $dataxxxx['modeloxx']->update([
                            'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                            'convenio_prog_id'=>$dataxxxx['requestx']->convenio_prog_id,
                            'eda_grados_id'=>null,
                            'actividade_id'=>null,
                            'curso_id'=>null,
                            'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                            'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                            'h_final'=>$dataxxxx['requestx']->h_final,
                            'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                        ]);
                    }
                    //formscion tecnica talleres
                    if($dataxxxx['requestx']->prm_actividad_id == 2722){
                            $dataxxxx['modeloxx']->update([
                                'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                                'curso_id'=>$dataxxxx['requestx']->prm_curso,
                                'eda_grados_id'=>null,
                                'actividade_id'=>null,
                                'convenio_prog_id'=>null,
                                'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                                'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                                'h_final'=>$dataxxxx['requestx']->h_final,
                                'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                            ]);
                    }
                }else{
                    $dataxxxx['modeloxx']->update([
                        'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                        'h_final'=>$dataxxxx['requestx']->h_final,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    ]);
                }
            } else {
                $dividirFecha = explode('-', $dataxxxx['requestx']->prm_fecha_inicio); 
                $planilla = function($id){
                    if ($id == 2721) { return "asistencia-academica";}
                    if ($id == 2724) { return "asistencia-convenio"; }
                    if ($id == 2723) {return "asistencia-tecnicaconvenio";}
                    if ($id == 2722) {return "asistencia-tecnicatalleres"; }
                };
                $consecutivo = $this->getConsecutivo($dividirFecha[1],$dividirFecha[0],$dataxxxx['requestx']->sis_depen_id,$dataxxxx['requestx']->sis_servicio_id,$planilla($dataxxxx['requestx']->prm_actividad_id));
                $dataxxxx['requestx']->request->add(['user_crea_id' => Auth::user()->id]);
          
                if($dataxxxx['requestx']->prm_actividad_id == 2721){
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
                        'prm_fecha_final'=> $dataxxxx['requestx']->prm_fecha_final,
                        'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    ]);
                }
                //asistencia convenio 
                if($dataxxxx['requestx']->prm_actividad_id == 2724){
                    $dataxxxx['modeloxx'] = Asissema::create([
                        'consecut'=>$consecutivo,
                        'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                        'sis_servicio_id'=>$dataxxxx['requestx']->sis_servicio_id,
                        'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                        'actividade_id'=>$dataxxxx['requestx']->actividade_id,
                        'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                        'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                        'h_final'=>$dataxxxx['requestx']->h_final,
                        'prm_fecha_inicio'=>$dataxxxx['requestx']->prm_fecha_inicio,
                        'prm_fecha_final'=> $dataxxxx['requestx']->prm_fecha_final,
                        'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    ]);
                }
                //formacion tecnica-convenios
                if($dataxxxx['requestx']->prm_actividad_id == 2723){
                    $dataxxxx['modeloxx'] = Asissema::create([
                        'consecut'=>$consecutivo,
                        'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                        'sis_servicio_id'=>$dataxxxx['requestx']->sis_servicio_id,
                        'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                        'convenio_prog_id'=>$dataxxxx['requestx']->convenio_prog_id,
                        'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                        'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                        'h_final'=>$dataxxxx['requestx']->h_final,
                        'prm_fecha_inicio'=>$dataxxxx['requestx']->prm_fecha_inicio,
                        'prm_fecha_final'=> $dataxxxx['requestx']->prm_fecha_final,
                        'user_fun_id'=>$dataxxxx['requestx']->user_fun_id,
                        'user_res_id'=>$dataxxxx['requestx']->user_res_id,
                        'sis_esta_id'=>$dataxxxx['requestx']->sis_esta_id,
                        'user_crea_id'=>$dataxxxx['requestx']->user_crea_id,
                        'user_edita_id'=>$dataxxxx['requestx']->user_edita_id,
                    ]);
                }
                //formscion tecnica talleres
                if($dataxxxx['requestx']->prm_actividad_id == 2722){
                    $dataxxxx['modeloxx'] = Asissema::create([
                        'consecut'=>$consecutivo,
                        'sis_depen_id'=>$dataxxxx['requestx']->sis_depen_id,
                        'sis_servicio_id'=>$dataxxxx['requestx']->sis_servicio_id,
                        'prm_actividad_id'=>$dataxxxx['requestx']->prm_actividad_id,
                        'curso_id'=>$dataxxxx['requestx']->prm_curso,
                        'prm_grupo_id'=>$dataxxxx['requestx']->prm_grupo_id,
                        'h_inicio'=>$dataxxxx['requestx']->h_inicio,
                        'h_final'=>$dataxxxx['requestx']->h_final,
                        'prm_fecha_inicio'=>$dataxxxx['requestx']->prm_fecha_inicio,
                        'prm_fecha_final'=> $dataxxxx['requestx']->prm_fecha_final,
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
