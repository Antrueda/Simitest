<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRedsocAceso;
use App\Models\sicosocial\Pivotes\VsiRedsocAceso;

class VsiRedsocAcesoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_redsocial_id'] = $modeloxx->vsi_redsocial_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRedsocAceso $modeloxx)
    {
        HVsiRedsocAceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocAceso "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRedsocAceso  $modeloxx
     * @return void
     */
    public function updated(VsiRedsocAceso $modeloxx)
    {
        HVsiRedsocAceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocAceso "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRedsocAceso  $modeloxx
     * @return void
     */
    public function deleted(VsiRedsocAceso $modeloxx)
    {
        HVsiRedsocAceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocAceso "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRedsocAceso  $modeloxx
     * @return void
     */
    public function restored(VsiRedsocAceso $modeloxx)
    {
        HVsiRedsocAceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocAceso "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRedsocAceso  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRedsocAceso $modeloxx)
    {
        HVsiRedsocAceso::create($this->getLog($modeloxx));
    }
}