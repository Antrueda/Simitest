<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisEntidad;
use App\Models\Sistema\SisEntidad;

class SisEntidadObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['nombre'] = $modeloxx->nombre;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisEntidad $modeloxx)
    {
        HSisEntidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEntidad "updated" event.
     *
     * @param  \App\Models\Sistema\SisEntidad  $modeloxx
     * @return void
     */
    public function updated(SisEntidad $modeloxx)
    {
        HSisEntidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEntidad "deleted" event.
     *
     * @param  \App\Models\Sistema\SisEntidad  $modeloxx
     * @return void
     */
    public function deleted(SisEntidad $modeloxx)
    {
        HSisEntidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEntidad "restored" event.
     *
     * @param  \App\Models\Sistema\SisEntidad  $modeloxx
     * @return void
     */
    public function restored(SisEntidad $modeloxx)
    {
        HSisEntidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEntidad "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisEntidad  $modeloxx
     * @return void
     */
    public function forceDeleted(SisEntidad $modeloxx)
    {
        HSisEntidad::create($this->getLog($modeloxx));
    }
}