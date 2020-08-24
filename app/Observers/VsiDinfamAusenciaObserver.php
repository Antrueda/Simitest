<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiDinfamAusencia;
use App\Models\sicosocial\Pivotes\VsiDinfamAusencia;

class VsiDinfamAusenciaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_dinfamiliar_id'] = $modeloxx->vsi_dinfamiliar_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiDinfamAusencia $modeloxx)
    {
        HVsiDinfamAusencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamAusencia "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamAusencia  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamAusencia $modeloxx)
    {
        HVsiDinfamAusencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamAusencia "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamAusencia  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamAusencia $modeloxx)
    {
        HVsiDinfamAusencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamAusencia "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamAusencia  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamAusencia $modeloxx)
    {
        HVsiDinfamAusencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamAusencia "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamAusencia  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamAusencia $modeloxx)
    {
        HVsiDinfamAusencia::create($this->getLog($modeloxx));
    }
}