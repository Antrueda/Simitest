<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisDiagnosticos;
use App\Models\sistema\SisDiagnosticos;

class SisDiagnosticosObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['codigo'] = $modeloxx->codigo;
        $log['simbolo'] = $modeloxx->simbolo;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['sexo'] = $modeloxx->sexo;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisDiagnosticos $modeloxx)
    {
        HSisDiagnosticos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDiagnosticos "updated" event.
     *
     * @param  \App\Models\sistema\SisDiagnosticos  $modeloxx
     * @return void
     */
    public function updated(SisDiagnosticos $modeloxx)
    {
        HSisDiagnosticos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDiagnosticos "deleted" event.
     *
     * @param  \App\Models\sistema\SisDiagnosticos  $modeloxx
     * @return void
     */
    public function deleted(SisDiagnosticos $modeloxx)
    {
        HSisDiagnosticos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDiagnosticos "restored" event.
     *
     * @param  \App\Models\sistema\SisDiagnosticos  $modeloxx
     * @return void
     */
    public function restored(SisDiagnosticos $modeloxx)
    {
        HSisDiagnosticos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDiagnosticos "force deleted" event.
     *
     * @param  \App\Models\sistema\SisDiagnosticos  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDiagnosticos $modeloxx)
    {
        HSisDiagnosticos::create($this->getLog($modeloxx));
    }
}