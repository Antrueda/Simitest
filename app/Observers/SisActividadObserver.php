<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisActividad;
use App\Models\sistema\SisActividad;

class SisActividadObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['nombre'] = $modeloxx->nombre;
        $log['sis_docfuen_id'] = $modeloxx->sis_docfuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisActividad $modeloxx)
    {
        HSisActividad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisActividad "updated" event.
     *
     * @param  \App\Models\sistema\SisActividad  $modeloxx
     * @return void
     */
    public function updated(SisActividad $modeloxx)
    {
        HSisActividad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisActividad "deleted" event.
     *
     * @param  \App\Models\sistema\SisActividad  $modeloxx
     * @return void
     */
    public function deleted(SisActividad $modeloxx)
    {
        HSisActividad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisActividad "restored" event.
     *
     * @param  \App\Models\sistema\SisActividad  $modeloxx
     * @return void
     */
    public function restored(SisActividad $modeloxx)
    {
        HSisActividad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisActividad "force deleted" event.
     *
     * @param  \App\Models\sistema\SisActividad  $modeloxx
     * @return void
     */
    public function forceDeleted(SisActividad $modeloxx)
    {
        HSisActividad::create($this->getLog($modeloxx));
    }
}
