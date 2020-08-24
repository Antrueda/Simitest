<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRelfamDificultad;
use App\Models\sicosocial\Pivotes\VsiRelfamDificultad;

class VsiRelfamDificultadObserver
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

    public function created(VsiRelfamDificultad $modeloxx)
    {
        HVsiRelfamDificultad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamDificultad "updated" event.
     *
     * @param  \App\Models\sicosocial\HVsiRelfamDificultad  $modeloxx
     * @return void
     */
    public function updated(VsiRelfamDificultad $modeloxx)
    {
        HVsiRelfamDificultad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamDificultad "deleted" event.
     *
     * @param  \App\Models\sicosocial\HVsiRelfamDificultad  $modeloxx
     * @return void
     */
    public function deleted(VsiRelfamDificultad $modeloxx)
    {
        HVsiRelfamDificultad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamDificultad "restored" event.
     *
     * @param  \App\Models\sicosocial\HVsiRelfamDificultad  $modeloxx
     * @return void
     */
    public function restored(VsiRelfamDificultad $modeloxx)
    {
        HVsiRelfamDificultad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamDificultad "force deleted" event.
     *
     * @param  \App\Models\sicosocial\HVsiRelfamDificultad  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelfamDificultad $modeloxx)
    {
        HVsiRelfamDificultad::create($this->getLog($modeloxx));
    }
}