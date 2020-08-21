<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiDinfamCuidador;
use App\Models\sicosocial\Pivotes\VsiDinfamCuidador;

class VsiDinfamCuidadorObserver
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

    public function created(VsiDinfamCuidador $modeloxx)
    {
        HVsiDinfamCuidador::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamCuidador "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamCuidador  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamCuidador $modeloxx)
    {
        HVsiDinfamCuidador::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamCuidador "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamCuidador  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamCuidador $modeloxx)
    {
        HVsiDinfamCuidador::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamCuidador "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamCuidador  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamCuidador $modeloxx)
    {
        HVsiDinfamCuidador::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamCuidador "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamCuidador  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamCuidador $modeloxx)
    {
        HVsiDinfamCuidador::create($this->getLog($modeloxx));
    }
}