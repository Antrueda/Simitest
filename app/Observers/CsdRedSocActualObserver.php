<?php

namespace App\Observers;

use App\Models\consulta\CsdRedsocActual;
use App\Models\consulta\Logs\HCsdRedsocActual;

class CsdRedSocActualObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['csd_id'] = $modeloxx->csd_id;
        $log['prm_tipo_id'] = $modeloxx->prm_tipo_id;
        $log['nombre'] = $modeloxx->nombre;
        $log['servicios'] = $modeloxx->servicios;
        $log['telefono'] = $modeloxx->telefono;
        $log['direccion'] = $modeloxx->direccion;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(CsdRedsocActual $modeloxx)
    {
        HCsdRedsocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedsocActual "updated" event.
     *
     * @param  \App\Models\consulta\CsdRedsocActual  $modeloxx
     * @return void
     */
    public function updated(CsdRedsocActual $modeloxx)
    {
        HCsdRedsocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedsocActual "deleted" event.
     *
     * @param  \App\Models\consulta\CsdRedsocActual  $modeloxx
     * @return void
     */
    public function deleted(CsdRedsocActual $modeloxx)
    {
        HCsdRedsocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedsocActual "restored" event.
     *
     * @param  \App\Models\consulta\CsdRedsocActual  $modeloxx
     * @return void
     */
    public function restored(CsdRedsocActual $modeloxx)
    {
        HCsdRedsocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedsocActual "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdRedsocActual  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdRedsocActual $modeloxx)
    {
        HCsdRedsocActual::create($this->getLog($modeloxx));
    }
}
