<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiBienvenidaMotivo;
use App\Models\sicosocial\Pivotes\VsiBienvenidaMotivo;

class VsiBienvenidaMotivoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_bienvenida_id'] = $modeloxx->vsi_bienvenida_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiBienvenidaMotivo $modeloxx)
    {
        HVsiBienvenidaMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiBienvenidaMotivo "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiBienvenidaMotivo  $modeloxx
     * @return void
     */
    public function updated(VsiBienvenidaMotivo $modeloxx)
    {
        HVsiBienvenidaMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiBienvenidaMotivo "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiBienvenidaMotivo  $modeloxx
     * @return void
     */
    public function deleted(VsiBienvenidaMotivo $modeloxx)
    {
        HVsiBienvenidaMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiBienvenidaMotivo "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiBienvenidaMotivo  $modeloxx
     * @return void
     */
    public function restored(VsiBienvenidaMotivo $modeloxx)
    {
        HVsiBienvenidaMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiBienvenidaMotivo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiBienvenidaMotivo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiBienvenidaMotivo $modeloxx)
    {
        HVsiBienvenidaMotivo::create($this->getLog($modeloxx));
    }
}
