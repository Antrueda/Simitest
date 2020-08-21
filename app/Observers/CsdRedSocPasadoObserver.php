<?php

namespace App\Observers;

use App\Models\consulta\CsdRedSocPasado;
use App\Models\consulta\Logs\HCsdRedSocPasado;

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

    public function created(CsdRedSocPasado $modeloxx)
    {
        HCsdRedSocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedSocPasado "updated" event.
     *
     * @param  \App\Models\consulta\CsdRedSocPasado  $modeloxx
     * @return void
     */
    public function updated(CsdRedSocPasado $modeloxx)
    {
        HCsdRedSocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedSocPasado "deleted" event.
     *
     * @param  \App\Models\consulta\CsdRedSocPasado  $modeloxx
     * @return void
     */
    public function deleted(CsdRedSocPasado $modeloxx)
    {
        HCsdRedSocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedSocPasado "restored" event.
     *
     * @param  \App\Models\consulta\CsdRedSocPasado  $modeloxx
     * @return void
     */
    public function restored(CsdRedSocPasado $modeloxx)
    {
        HCsdRedSocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdRedSocPasado "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdRedSocPasado  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdRedSocPasado $modeloxx)
    {
        HCsdRedSocPasado::create($this->getLog($modeloxx));
    }
}