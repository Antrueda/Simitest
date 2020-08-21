<?php

namespace App\Observers;

use App\Models\sicosocial\FiNucleoFamiliar;
use App\Models\sicosocial\Logs\HFiNucleoFamiliar;

class FiNucleoFamiliarObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_en_uso'] = $modeloxx->i_en_uso;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiNucleoFamiliar $modeloxx)
    {
        HFiNucleoFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiNucleoFamiliar "updated" event.
     *
     * @param  \App\Models\sicosocial\FiNucleoFamiliar  $modeloxx
     * @return void
     */
    public function updated(FiNucleoFamiliar $modeloxx)
    {
        HFiNucleoFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiNucleoFamiliar "deleted" event.
     *
     * @param  \App\Models\sicosocial\FiNucleoFamiliar  $modeloxx
     * @return void
     */
    public function deleted(FiNucleoFamiliar $modeloxx)
    {
        HFiNucleoFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiNucleoFamiliar "restored" event.
     *
     * @param  \App\Models\sicosocial\FiNucleoFamiliar  $modeloxx
     * @return void
     */
    public function restored(FiNucleoFamiliar $modeloxx)
    {
        HFiNucleoFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiNucleoFamiliar "force deleted" event.
     *
     * @param  \App\Models\sicosocial\FiNucleoFamiliar  $modeloxx
     * @return void
     */
    public function forceDeleted(FiNucleoFamiliar $modeloxx)
    {
        HFiNucleoFamiliar::create($this->getLog($modeloxx));
    }
}