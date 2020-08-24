<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisActividadProceso;
use App\Models\sistema\SisActividadProceso;

class SisActividadProcesoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_actividad_id'] = $modeloxx->sis_actividad_id;
        $log['sis_proceso_id'] = $modeloxx->sis_proceso_id;
        $log['tiempo'] = $modeloxx->tiempo;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisActividadProceso $modeloxx)
    {
        HSisActividadProceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisActividadProceso "updated" event.
     *
     * @param  \App\Models\sistema\SisActividadProceso  $modeloxx
     * @return void
     */
    public function updated(SisActividadProceso $modeloxx)
    {
        HSisActividadProceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisActividadProceso "deleted" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function deleted(SisActividadProceso $modeloxx)
    {
        HSisActividadProceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisActividadProceso "restored" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function restored(SisActividadProceso $modeloxx)
    {
        HSisActividadProceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisActividadProceso "force deleted" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function forceDeleted(SisActividadProceso $modeloxx)
    {
        HSisActividadProceso::create($this->getLog($modeloxx));
    }
}