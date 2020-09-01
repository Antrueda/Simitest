<?php

namespace App\Observers;

use App\Models\consulta\CsdRedsocPasado;
use App\Models\consulta\Logs\HCsdRedsocPasado;

class CsdRedSocPasadoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['csd_id'] = $modeloxx->csd_id;
        $log['nombre'] = $modeloxx->nombre;
        $log['servicios'] = $modeloxx->servicios;
        $log['cantidad'] = $modeloxx->cantidad;
        $log['prm_unidad_id'] = $modeloxx->prm_unidad_id;
        $log['ano'] = $modeloxx->ano;
        $log['retiro'] = $modeloxx->retiro;
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

    public function created(CsdRedsocPasado $modeloxx)
    {
        HCsdRedsocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedsocPasado "updated" event.
     *
     * @param  \App\Models\consulta\CsdRedsocPasado  $modeloxx
     * @return void
     */
    public function updated(CsdRedsocPasado $modeloxx)
    {
        HCsdRedsocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedsocPasado "deleted" event.
     *
     * @param  \App\Models\consulta\CsdRedsocPasado  $modeloxx
     * @return void
     */
    public function deleted(CsdRedsocPasado $modeloxx)
    {
        HCsdRedsocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedsocPasado "restored" event.
     *
     * @param  \App\Models\consulta\CsdRedsocPasado  $modeloxx
     * @return void
     */
    public function restored(CsdRedsocPasado $modeloxx)
    {
        HCsdRedsocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedsocPasado "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdRedsocPasado  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdRedsocPasado $modeloxx)
    {
        HCsdRedsocPasado::create($this->getLog($modeloxx));
    }
}
