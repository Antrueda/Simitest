<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiFacRiesgo;
use App\Models\sicosocial\VsiFacRiesgo;

class VsiFacRiesgoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.        
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['riesgo'] = $modeloxx->riesgo;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiFacRiesgo $modeloxx)
    {
        HVsiFacRiesgo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiFacRiesgo "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiFacRiesgo  $modeloxx
     * @return void
     */
    public function updated(VsiFacRiesgo $modeloxx)
    {
        HVsiFacRiesgo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiFacRiesgo "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiFacRiesgo  $modeloxx
     * @return void
     */
    public function deleted(VsiFacRiesgo $modeloxx)
    {
        HVsiFacRiesgo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiFacRiesgo "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiFacRiesgo  $modeloxx
     * @return void
     */
    public function restored(VsiFacRiesgo $modeloxx)
    {
        HVsiFacRiesgo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiFacRiesgo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiFacRiesgo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiFacRiesgo $modeloxx)
    {
        HVsiFacRiesgo::create($this->getLog($modeloxx));
    }
}
