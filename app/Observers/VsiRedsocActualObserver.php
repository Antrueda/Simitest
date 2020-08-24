<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiRedsocActual;
use App\Models\sicosocial\VsiRedsocActual;

class VsiRedsocActualObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_tipo_id'] = $modeloxx->prm_tipo_id;
        $log['nombre'] = $modeloxx->nombre;
        $log['servicio'] = $modeloxx->servicio;
        $log['telefono'] = $modeloxx->telefono;
        $log['direccion'] = $modeloxx->direccion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRedsocActual $modeloxx)
    {
        HVsiRedsocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocActual "updated" event.
     *
     * @param  \App\Models\sicosocial\HVsiRedsocActual  $modeloxx
     * @return void
     */
    public function updated(VsiRedsocActual $modeloxx)
    {
        HVsiRedsocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocActual "deleted" event.
     *
     * @param  \App\Models\sicosocial\HVsiRedsocActual  $modeloxx
     * @return void
     */
    public function deleted(VsiRedsocActual $modeloxx)
    {
        HVsiRedsocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocActual "restored" event.
     *
     * @param  \App\Models\sicosocial\HVsiRedsocActual  $modeloxx
     * @return void
     */
    public function restored(VsiRedsocActual $modeloxx)
    {
        HVsiRedsocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocActual "force deleted" event.
     *
     * @param  \App\Models\sicosocial\HVsiRedsocActual  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRedsocActual $modeloxx)
    {
        HVsiRedsocActual::create($this->getLog($modeloxx));
    }
}