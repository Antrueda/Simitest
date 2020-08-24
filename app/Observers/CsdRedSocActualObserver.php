<?php

namespace App\Observers;

use App\Models\consulta\CsdRedSocActual;
use App\Models\consulta\Logs\HCsdRedSocActual;

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

    public function created(CsdRedSocActual $modeloxx)
    {
        HCsdRedSocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedSocActual "updated" event.
     *
     * @param  \App\Models\consulta\CsdRedSocActual  $modeloxx
     * @return void
     */
    public function updated(CsdRedSocActual $modeloxx)
    {
        HCsdRedSocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedSocActual "deleted" event.
     *
     * @param  \App\Models\consulta\CsdRedSocActual  $modeloxx
     * @return void
     */
    public function deleted(CsdRedSocActual $modeloxx)
    {
        HCsdRedSocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedSocActual "restored" event.
     *
     * @param  \App\Models\consulta\CsdRedSocActual  $modeloxx
     * @return void
     */
    public function restored(CsdRedSocActual $modeloxx)
    {
        HCsdRedSocActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedSocActual "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdRedSocActual  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdRedSocActual $modeloxx)
    {
        HCsdRedSocActual::create($this->getLog($modeloxx));
    }
}