<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiRazonContinua;
use App\Models\fichaIngreso\Logs\HFiRazonContinua;

class FiRazonContinuaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_situacion_especial_id'] = $modeloxx->fi_situacion_especial_id;
        $log['i_prm_continua_id'] = $modeloxx->i_prm_continua_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiRazonContinua $modeloxx)
    {
        HFiRazonContinua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazonContinua "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazonContinua  $modeloxx
     * @return void
     */
    public function updated(FiRazonContinua $modeloxx)
    {
        HFiRazonContinua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazonContinua "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazonContinua  $modeloxx
     * @return void
     */
    public function deleted(FiRazonContinua $modeloxx)
    {
        HFiRazonContinua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazonContinua "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazonContinua  $modeloxx
     * @return void
     */
    public function restored(FiRazonContinua $modeloxx)
    {
        HFiRazonContinua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazonContinua "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazonContinua  $modeloxx
     * @return void
     */
    public function forceDeleted(FiRazonContinua $modeloxx)
    {
        HFiRazonContinua::create($this->getLog($modeloxx));
    }
}