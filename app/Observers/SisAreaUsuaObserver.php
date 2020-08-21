<?php

namespace App\Observers;

use App\Models\Usuario\Logs\HSisAreaUsua;
use App\Models\Usuario\SisAreaUsua;

class SisAreaUsuaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['area_id'] = $modeloxx->area_id;
        $log['user_id'] = $modeloxx->user_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisAreaUsua $modeloxx)
    {
        HSisAreaUsua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisAreaUsua "updated" event.
     *
     * @param  \App\Models\Usuario\SisAreaUsua  $modeloxx
     * @return void
     */
    public function updated(SisAreaUsua $modeloxx)
    {
        HSisAreaUsua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisAreaUsua "deleted" event.
     *
     * @param  \App\Models\Usuario\SisAreaUsua  $modeloxx
     * @return void
     */
    public function deleted(SisAreaUsua $modeloxx)
    {
        HSisAreaUsua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisAreaUsua "restored" event.
     *
     * @param  \App\Models\Usuario\SisAreaUsua  $modeloxx
     * @return void
     */
    public function restored(SisAreaUsua $modeloxx)
    {
        HSisAreaUsua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisAreaUsua "force deleted" event.
     *
     * @param  \App\Models\Usuario\SisAreaUsua  $modeloxx
     * @return void
     */
    public function forceDeleted(SisAreaUsua $modeloxx)
    {
        HSisAreaUsua::create($this->getLog($modeloxx));
    }
}