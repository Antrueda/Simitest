<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRedsocMotivo;
use App\Models\sicosocial\Pivotes\VsiRedsocMotivo;

class VsiRedSocMotivoObserver
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

    public function created(VsiRedsocMotivo $modeloxx)
    {
        HVsiRedsocMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocMotivo "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\HVsiRedsocMotivo  $modeloxx
     * @return void
     */
    public function updated(VsiRedsocMotivo $modeloxx)
    {
        HVsiRedsocMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocMotivo "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\HVsiRedsocMotivo  $modeloxx
     * @return void
     */
    public function deleted(VsiRedsocMotivo $modeloxx)
    {
        HVsiRedsocMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocMotivo "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\HVsiRedsocMotivo  $modeloxx
     * @return void
     */
    public function restored(VsiRedsocMotivo $modeloxx)
    {
        HVsiRedsocMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocMotivo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\HVsiRedsocMotivo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRedsocMotivo $modeloxx)
    {
        HVsiRedsocMotivo::create($this->getLog($modeloxx));
    }
}
