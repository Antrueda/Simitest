<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiRedsocPasado;
use App\Models\sicosocial\VsiRedsocPasado;

class VsiRedsocPasadoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['nombre'] = $modeloxx->nombre;
        $log['servicio'] = $modeloxx->servicio;
        $log['dia'] = $modeloxx->dia;
        $log['mes'] = $modeloxx->mes;
        $log['ano'] = $modeloxx->ano;
        $log['ano_prestacion'] = $modeloxx->ano_prestacion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRedsocPasado $modeloxx)
    {
        HVsiRedsocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocPasado "updated" event.
     *
     * @param  App\Models\sicosocial\HVsiRedsocPasado  $modeloxx
     * @return void
     */
    public function updated(VsiRedsocPasado $modeloxx)
    {
        HVsiRedsocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocPasado "deleted" event.
     *
     * @param  App\Models\sicosocial\HVsiRedsocPasado  $modeloxx
     * @return void
     */
    public function deleted(VsiRedsocPasado $modeloxx)
    {
        HVsiRedsocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocPasado "restored" event.
     *
     * @param  App\Models\sicosocial\HVsiRedsocPasado  $modeloxx
     * @return void
     */
    public function restored(VsiRedsocPasado $modeloxx)
    {
        HVsiRedsocPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedsocPasado "force deleted" event.
     *
     * @param  App\Models\sicosocial\HVsiRedsocPasado  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRedsocPasado $modeloxx)
    {
        HVsiRedsocPasado::create($this->getLog($modeloxx));
    }
}