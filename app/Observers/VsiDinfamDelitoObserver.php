<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiDinfamDelito;
use App\Models\sicosocial\Pivotes\VsiDinfamDelito;

class VsiDinfamDelitoObserver
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

    public function created(VsiDinfamDelito $modeloxx)
    {
        HVsiDinfamDelito::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamDelito "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamDelito  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamDelito $modeloxx)
    {
        HVsiDinfamDelito::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamDelito "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamDelito  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamDelito $modeloxx)
    {
        HVsiDinfamDelito::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamDelito "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamDelito  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamDelito $modeloxx)
    {
        HVsiDinfamDelito::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamDelito "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamDelito  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamDelito $modeloxx)
    {
        HVsiDinfamDelito::create($this->getLog($modeloxx));
    }
}
