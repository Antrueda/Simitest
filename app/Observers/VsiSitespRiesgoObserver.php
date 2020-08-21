<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiSitespRiesgo;
use App\Models\sicosocial\Pivotes\VsiSitespRiesgo;

class VsiSitespRiesgoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_sitespecial_id'] = $modeloxx->vsi_sitespecial_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiSitespRiesgo $modeloxx)
    {
        HVsiSitespRiesgo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitespRiesgo "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSitespRiesgo  $modeloxx
     * @return void
     */
    public function updated(VsiSitespRiesgo $modeloxx)
    {
        HVsiSitespRiesgo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitespRiesgo "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSitespRiesgo  $modeloxx
     * @return void
     */
    public function deleted(VsiSitespRiesgo $modeloxx)
    {
        HVsiSitespRiesgo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitespRiesgo "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSitespRiesgo  $modeloxx
     * @return void
     */
    public function restored(VsiSitespRiesgo $modeloxx)
    {
        HVsiSitespRiesgo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitespRiesgo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSitespRiesgo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiSitespRiesgo $modeloxx)
    {
        HVsiSitespRiesgo::create($this->getLog($modeloxx));
    }
}