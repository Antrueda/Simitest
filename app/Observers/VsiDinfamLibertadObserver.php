<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiDinfamLibertad;
use App\Models\sicosocial\Pivotes\VsiDinfamLibertad;

class VsiDinfamLibertadObserver
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

    public function created(VsiDinfamLibertad $modeloxx)
    {
        HVsiDinfamLibertad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamLibertad  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamLibertad $modeloxx)
    {
        HVsiDinfamLibertad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamLibertad  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamLibertad $modeloxx)
    {
        HVsiDinfamLibertad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamLibertad  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamLibertad $modeloxx)
    {
        HVsiDinfamLibertad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamLibertad  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamLibertad $modeloxx)
    {
        HVsiDinfamLibertad::create($this->getLog($modeloxx));
    }
}