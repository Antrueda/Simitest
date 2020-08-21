<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiJrFamiliar;
use App\Models\fichaIngreso\Logs\HFiJrFamiliar;

class FiJrFamiliarObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_proceso'] = $modeloxx->s_proceso;
        $log['i_tiempo'] = $modeloxx->i_tiempo;
        $log['i_veces'] = $modeloxx->i_veces;
        $log['fi_composicion_fami_id'] = $modeloxx->fi_composicion_fami_id;
        $log['i_prm_vigente_id'] = $modeloxx->i_prm_vigente_id;
        $log['i_prm_motivo_id'] = $modeloxx->i_prm_motivo_id;
        $log['i_prm_tiempo_id'] = $modeloxx->i_prm_tiempo_id;
        $log['fi_justicia_restaurativa_id'] = $modeloxx->fi_justicia_restaurativa_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiJrFamiliar $modeloxx)
    {
        HFiJrFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJrFamiliar "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiJrFamiliar  $modeloxx
     * @return void
     */
    public function updated(FiJrFamiliar $modeloxx)
    {
        HFiJrFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJrFamiliar "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiJrFamiliar  $modeloxx
     * @return void
     */
    public function deleted(FiJrFamiliar $modeloxx)
    {
        HFiJrFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJrFamiliar "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiJrFamiliar  $modeloxx
     * @return void
     */
    public function restored(FiJrFamiliar $modeloxx)
    {
        HFiJrFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJrFamiliar "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiJrFamiliar  $modeloxx
     * @return void
     */
    public function forceDeleted(FiJrFamiliar $modeloxx)
    {
        HFiJrFamiliar::create($this->getLog($modeloxx));
    }
}