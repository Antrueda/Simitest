<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiDinfamSalud;
use App\Models\sicosocial\Pivotes\VsiDinfamSalud;

class VsiDinfamSaludObserver
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

    public function created(VsiDinfamSalud $modeloxx)
    {
        HVsiDinfamSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamSalud "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamSalud  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamSalud $modeloxx)
    {
        HVsiDinfamSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamSalud "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamSalud  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamSalud $modeloxx)
    {
        HVsiDinfamSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamSalud "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamSalud  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamSalud $modeloxx)
    {
        HVsiDinfamSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamSalud "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamSalud  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamSalud $modeloxx)
    {
        HVsiDinfamSalud::create($this->getLog($modeloxx));
    }
}