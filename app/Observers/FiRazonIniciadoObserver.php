<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiRazonIniciado;
use App\Models\fichaIngreso\Logs\HFiRazonIniciado;

class FiRazonIniciadoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_situacion_especial_id'] = $modeloxx->fi_situacion_especial_id;
        $log['i_prm_iniciado_id'] = $modeloxx->i_prm_iniciado_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiRazonIniciado $modeloxx)
    {
        HFiRazonIniciado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazonIniciado "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazonIniciado  $modeloxx
     * @return void
     */
    public function updated(FiRazonIniciado $modeloxx)
    {
        HFiRazonIniciado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazonIniciado "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazonIniciado  $modeloxx
     * @return void
     */
    public function deleted(FiRazonIniciado $modeloxx)
    {
        HFiRazonIniciado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazonIniciado "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazonIniciado  $modeloxx
     * @return void
     */
    public function restored(FiRazonIniciado $modeloxx)
    {
        HFiRazonIniciado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazonIniciado "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazonIniciado  $modeloxx
     * @return void
     */
    public function forceDeleted(FiRazonIniciado $modeloxx)
    {
        HFiRazonIniciado::create($this->getLog($modeloxx));
    }
}