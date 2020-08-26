<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisLocalidad;
use App\Models\Sistema\SisLocalidad;

class SisLocalidadObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_localidad'] = $modeloxx->s_localidad;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisLocalidad $modeloxx)
    {
        HSisLocalidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisLocalidad "updated" event.
     *
     * @param  \App\Models\Sistema\SisLocalidad  $modeloxx
     * @return void
     */
    public function updated(SisLocalidad $modeloxx)
    {
        HSisLocalidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisLocalidad "deleted" event.
     *
     * @param  \App\Models\Sistema\SisLocalidad  $modeloxx
     * @return void
     */
    public function deleted(SisLocalidad $modeloxx)
    {
        HSisLocalidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisLocalidad "restored" event.
     *
     * @param  \App\Models\Sistema\SisLocalidad  $modeloxx
     * @return void
     */
    public function restored(SisLocalidad $modeloxx)
    {
        HSisLocalidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisLocalidad "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisLocalidad  $modeloxx
     * @return void
     */
    public function forceDeleted(SisLocalidad $modeloxx)
    {
        HSisLocalidad::create($this->getLog($modeloxx));
    }
}