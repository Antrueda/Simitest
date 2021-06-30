<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiRazone;
use App\Models\fichaIngreso\Logs\HFiRazone;

class FiRazoneObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_porque_ingresar'] = $modeloxx->s_porque_ingresar;
        $log['observaciones'] = $modeloxx->observaciones;
        $log['userd_id'] = $modeloxx->userd_id;
        $log['sis_depend_id'] = $modeloxx->sis_depend_id;
        $log['userr_id'] = $modeloxx->userr_id;
        $log['sis_depenr_id'] = $modeloxx->sis_depenr_id;
        $log['i_prm_estado_ingreso_id'] = $modeloxx->i_prm_estado_ingreso_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiRazone $modeloxx)
    {
        HFiRazone::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazone "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazone  $modeloxx
     * @return void
     */
    public function updated(FiRazone $modeloxx)
    {
        HFiRazone::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazone "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazone  $modeloxx
     * @return void
     */
    public function deleted(FiRazone $modeloxx)
    {
        HFiRazone::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazone "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazone  $modeloxx
     * @return void
     */
    public function restored(FiRazone $modeloxx)
    {
        HFiRazone::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazone "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazone  $modeloxx
     * @return void
     */
    public function forceDeleted(FiRazone $modeloxx)
    {
        HFiRazone::create($this->getLog($modeloxx));
    }
}