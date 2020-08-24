<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRedSocMotivo;
use App\Models\sicosocial\Pivotes\VsiRedSocMotivo;

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

    public function created(VsiRedSocMotivo $modeloxx)
    {
        HVsiRedSocMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedSocMotivo "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\HVsiRedSocMotivo  $modeloxx
     * @return void
     */
    public function updated(VsiRedSocMotivo $modeloxx)
    {
        HVsiRedSocMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedSocMotivo "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\HVsiRedSocMotivo  $modeloxx
     * @return void
     */
    public function deleted(VsiRedSocMotivo $modeloxx)
    {
        HVsiRedSocMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedSocMotivo "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\HVsiRedSocMotivo  $modeloxx
     * @return void
     */
    public function restored(VsiRedSocMotivo $modeloxx)
    {
        HVsiRedSocMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedSocMotivo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\HVsiRedSocMotivo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRedSocMotivo $modeloxx)
    {
        HVsiRedSocMotivo::create($this->getLog($modeloxx));
    }
}