<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEduDificultad;
use App\Models\sicosocial\Pivotes\VsiEduDificultad;

class VsiEduDificultadObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_educacion_id'] = $modeloxx->vsi_educacion_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiEduDificultad $modeloxx)
    {
        HVsiEduDificultad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDificultad "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDificultad  $modeloxx
     * @return void
     */
    public function updated(VsiEduDificultad $modeloxx)
    {
        HVsiEduDificultad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDificultad "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDificultad  $modeloxx
     * @return void
     */
    public function deleted(VsiEduDificultad $modeloxx)
    {
        HVsiEduDificultad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDificultad "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDificultad  $modeloxx
     * @return void
     */
    public function restored(VsiEduDificultad $modeloxx)
    {
        HVsiEduDificultad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDificultad "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDificultad  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEduDificultad $modeloxx)
    {
        HVsiEduDificultad::create($this->getLog($modeloxx));
    }
}
