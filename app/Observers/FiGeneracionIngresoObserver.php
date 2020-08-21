<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiGeneracionIngreso;
use App\Models\fichaIngreso\Logs\HFiGeneracionIngreso;

class FiGeneracionIngresoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_actividad_genera_ingreso_id'] = $modeloxx->i_prm_actividad_genera_ingreso_id;
        $log['s_trabajo_formal'] = $modeloxx->s_trabajo_formal;
        $log['i_prm_trabajo_informal_id'] = $modeloxx->i_prm_trabajo_informal_id;
        $log['i_prm_otra_actividad_id'] = $modeloxx->i_prm_otra_actividad_id;
        $log['i_prm_razon_no_genera_ingreso_id'] = $modeloxx->i_prm_razon_no_genera_ingreso_id;
        $log['i_dias_buscando_empleo'] = $modeloxx->i_dias_buscando_empleo;
        $log['i_meses_buscando_empleo'] = $modeloxx->i_meses_buscando_empleo;
        $log['i_anos_buscando_empleo'] = $modeloxx->i_anos_buscando_empleo;
        $log['i_prm_jornada_genera_ingreso_id'] = $modeloxx->i_prm_jornada_genera_ingreso_id;
        $log['s_hora_inicial'] = $modeloxx->s_hora_inicial;
        $log['s_hora_final'] = $modeloxx->s_hora_final;
        $log['i_prm_frec_ingreso_id'] = $modeloxx->i_prm_frec_ingreso_id;
        $log['i_total_ingreso_mensual'] = $modeloxx->i_total_ingreso_mensual;
        $log['i_prm_tipo_relacion_laboral_id'] = $modeloxx->i_prm_tipo_relacion_laboral_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiGeneracionIngreso $modeloxx)
    {
        HFiGeneracionIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiGeneracionIngreso "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiGeneracionIngreso  $modeloxx
     * @return void
     */
    public function updated(FiGeneracionIngreso $modeloxx)
    {
        HFiGeneracionIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiGeneracionIngreso "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiGeneracionIngreso  $modeloxx
     * @return void
     */
    public function deleted(FiGeneracionIngreso $modeloxx)
    {
        HFiGeneracionIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiGeneracionIngreso "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiGeneracionIngreso  $modeloxx
     * @return void
     */
    public function restored(FiGeneracionIngreso $modeloxx)
    {
        HFiGeneracionIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiGeneracionIngreso "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiGeneracionIngreso  $modeloxx
     * @return void
     */
    public function forceDeleted(FiGeneracionIngreso $modeloxx)
    {
        HFiGeneracionIngreso::create($this->getLog($modeloxx));
    }
}