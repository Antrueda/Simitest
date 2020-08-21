<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiPotencialidad;
use App\Models\sicosocial\VsiPotencialidad;

class VsiPotencialidadObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['potencialidad'] = $modeloxx->potencialidad;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiPotencialidad $modeloxx)
    {
        HVsiPotencialidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiPotencialidad "updated" event.
     *
     * @param  \App\Models\sicosocial\HVsiPotencialidad  $modeloxx
     * @return void
     */
    public function updated(VsiPotencialidad $modeloxx)
    {
        HVsiPotencialidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiPotencialidad "deleted" event.
     *
     * @param  \App\Models\sicosocial\HVsiPotencialidad  $modeloxx
     * @return void
     */
    public function deleted(VsiPotencialidad $modeloxx)
    {
        HVsiPotencialidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiPotencialidad "restored" event.
     *
     * @param  \App\Models\sicosocial\HVsiPotencialidad  $modeloxx
     * @return void
     */
    public function restored(VsiPotencialidad $modeloxx)
    {
        HVsiPotencialidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiPotencialidad "force deleted" event.
     *
     * @param  \App\Models\sicosocial\HVsiPotencialidad  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiPotencialidad $modeloxx)
    {
        HVsiPotencialidad::create($this->getLog($modeloxx));
    }
}