<?php

namespace App\Observers;

use App\Models\intervencion\Logs\HIsDatosBasico;
use App\Models\intervencion\IsDatosBasico;

class IsDatosBasicoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
        $log['d_fecha_diligencia'] = $modeloxx->d_fecha_diligencia;
        $log['i_prm_tipo_atencion_id'] = $modeloxx->i_prm_tipo_atencion_id;
        $log['i_prm_area_ajuste_id'] = $modeloxx->i_prm_area_ajuste_id;
        $log['i_prm_subarea_ajuste_id'] = $modeloxx->i_prm_subarea_ajuste_id;
        $log['s_tema'] = $modeloxx->s_tema;
        $log['s_objetivo_sesion'] = $modeloxx->s_objetivo_sesion;
        $log['s_desarrollo_sesion'] = $modeloxx->s_desarrollo_sesion;
        $log['s_conclusiones_sesion'] = $modeloxx->s_conclusiones_sesion;
        $log['s_tareas'] = $modeloxx->s_tareas;
        $log['i_prm_subarea_emocional_id'] = $modeloxx->i_prm_subarea_emocional_id;
        $log['i_prm_avance_emocional_id'] = $modeloxx->i_prm_avance_emocional_id;
        $log['i_prm_subarea_familiar_id'] = $modeloxx->i_prm_subarea_familiar_id;
        $log['i_prm_avance_familiar_id'] = $modeloxx->i_prm_avance_familiar_id;
        $log['i_prm_subarea_sexual_id'] = $modeloxx->i_prm_subarea_sexual_id;
        $log['i_prm_avance_sexual_id'] = $modeloxx->i_prm_avance_sexual_id;
        $log['i_prm_subarea_compor_id'] = $modeloxx->i_prm_subarea_compor_id;
        $log['i_prm_avance_compor_id'] = $modeloxx->i_prm_avance_compor_id;
        $log['i_prm_subarea_social_id'] = $modeloxx->i_prm_subarea_social_id;
        $log['i_prm_avance_social_id'] = $modeloxx->i_prm_avance_social_id;
        $log['i_prm_subarea_academ_id'] = $modeloxx->i_prm_subarea_academ_id;
        $log['i_prm_avance_academ_id'] = $modeloxx->i_prm_avance_academ_id;
        $log['i_prm_area_emocional_id'] = $modeloxx->i_prm_area_emocional_id;
        $log['i_prm_area_sexual_id'] = $modeloxx->i_prm_area_sexual_id;
        $log['i_prm_area_comportam_id'] = $modeloxx->i_prm_area_comportam_id;
        $log['i_prm_area_academica_id'] = $modeloxx->i_prm_area_academica_id;
        $log['i_prm_area_social_id'] = $modeloxx->i_prm_area_social_id;
        $log['i_prm_area_familiar_id'] = $modeloxx->i_prm_area_familiar_id;
        $log['s_observaciones'] = $modeloxx->s_observaciones;
        $log['d_fecha_proxima'] = $modeloxx->d_fecha_proxima;
        $log['i_primer_responsable'] = $modeloxx->i_primer_responsable;
        $log['i_segundo_responsable'] = $modeloxx->i_segundo_responsable;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(IsDatosBasico $modeloxx)
    {
        HIsDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the IsDatosBasico "updated" event.
     *
     * @param  \App\Models\intervencion\IsDatosBasico  $modeloxx
     * @return void
     */
    public function updated(IsDatosBasico $modeloxx)
    {
        HIsDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the IsDatosBasico "deleted" event.
     *
     * @param  \App\Models\intervencion\IsDatosBasico  $modeloxx
     * @return void
     */
    public function deleted(IsDatosBasico $modeloxx)
    {
        HIsDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the IsDatosBasico "restored" event.
     *
     * @param  \App\Models\intervencion\IsDatosBasico  $modeloxx
     * @return void
     */
    public function restored(IsDatosBasico $modeloxx)
    {
        HIsDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the IsDatosBasico "force deleted" event.
     *
     * @param  \App\Models\intervencion\IsDatosBasico  $modeloxx
     * @return void
     */
    public function forceDeleted(IsDatosBasico $modeloxx)
    {
        HIsDatosBasico::create($this->getLog($modeloxx));
    }
}