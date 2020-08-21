<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRelfamMotivo;
use App\Models\sicosocial\Pivotes\VsiRelfamMotivo;

class VsiRelfamMotivoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_relfamiliar_id'] = $modeloxx->vsi_relfamiliar_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRelfamMotivo $modeloxx)
    {
        HVsiRelfamMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamMotivo "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelfamMotivo  $modeloxx
     * @return void
     */
    public function updated(VsiRelfamMotivo $modeloxx)
    {
        HVsiRelfamMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamMotivo "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelfamMotivo  $modeloxx
     * @return void
     */
    public function deleted(VsiRelfamMotivo $modeloxx)
    {
        HVsiRelfamMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamMotivo "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelfamMotivo  $modeloxx
     * @return void
     */
    public function restored(VsiRelfamMotivo $modeloxx)
    {
        HVsiRelfamMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamMotivo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelfamMotivo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelfamMotivo $modeloxx)
    {
        HVsiRelfamMotivo::create($this->getLog($modeloxx));
    }
}