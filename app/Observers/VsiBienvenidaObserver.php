<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiBienvenida;
use App\Models\sicosocial\VsiBienvenida;

class VsiBienvenidaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['descripcion'] = $modeloxx->descripcion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiBienvenida $modeloxx)
    {
        HVsiBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiBienvenida "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiBienvenida  $modeloxx
     * @return void
     */
    public function updated(VsiBienvenida $modeloxx)
    {
        HVsiBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiBienvenida "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiBienvenida  $modeloxx
     * @return void
     */
    public function deleted(VsiBienvenida $modeloxx)
    {
        HVsiBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiBienvenida "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiBienvenida  $modeloxx
     * @return void
     */
    public function restored(VsiBienvenida $modeloxx)
    {
        HVsiBienvenida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiBienvenida "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiBienvenida  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiBienvenida $modeloxx)
    {
        HVsiBienvenida::create($this->getLog($modeloxx));
    }
}