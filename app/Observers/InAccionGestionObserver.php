<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInAccionGestion;
use App\Models\Indicadores\InAccionGestion;

class InAccionGestionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_actividad_id'] = $modeloxx->sis_actividad_id;
        $log['i_prm_ttiempo_id'] = $modeloxx->i_prm_ttiempo_id;
        $log['in_lineabase_nnaj_id'] = $modeloxx->in_lineabase_nnaj_id;
        $log['sis_documento_fuente_id'] = $modeloxx->sis_documento_fuente_id;
        $log['i_tiempo'] = $modeloxx->i_tiempo;
        $log['i_porcentaje'] = $modeloxx->i_porcentaje;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InAccionGestion $modeloxx)
    {
        HInAccionGestion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InAccionGestion "updated" event.
     *
     * @param  \App\Models\Indicadores\InAccionGestion  $modeloxx
     * @return void
     */
    public function updated(InAccionGestion $modeloxx)
    {
        HInAccionGestion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InAccionGestion "deleted" event.
     *
     * @param  \App\Models\Indicadores\InAccionGestion  $modeloxx
     * @return void
     */
    public function deleted(InAccionGestion $modeloxx)
    {
        HInAccionGestion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InAccionGestion "restored" event.
     *
     * @param  \App\Models\Indicadores\InAccionGestion  $modeloxx
     * @return void
     */
    public function restored(InAccionGestion $modeloxx)
    {
        HInAccionGestion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InAccionGestion "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InAccionGestion  $modeloxx
     * @return void
     */
    public function forceDeleted(InAccionGestion $modeloxx)
    {
        HInAccionGestion::create($this->getLog($modeloxx));
    }
}