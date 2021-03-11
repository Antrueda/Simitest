<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiSituacionVulneracion;
use App\Models\fichaIngreso\Logs\HFiSituacionVulneracion;

class FiSituacionVulneracionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_situacion_especial_id'] = $modeloxx->fi_situacion_especial_id;
        $log['prm_situacion_vulnera_id'] = $modeloxx->prm_situacion_vulnera_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiSituacionVulneracion $modeloxx)
    {
        HFiSituacionVulneracion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSituacionVulneracion "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiSituacionVulneracion  $modeloxx
     * @return void
     */
    public function updated(FiSituacionVulneracion $modeloxx)
    {
        HFiSituacionVulneracion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSituacionVulneracion "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSituacionVulneracion  $modeloxx
     * @return void
     */
    public function deleted(FiSituacionVulneracion $modeloxx)
    {
        HFiSituacionVulneracion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSituacionVulneracion "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiSituacionVulneracion  $modeloxx
     * @return void
     */
    public function restored(FiSituacionVulneracion $modeloxx)
    {
        HFiSituacionVulneracion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSituacionVulneracion "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSituacionVulneracion  $modeloxx
     * @return void
     */
    public function forceDeleted(FiSituacionVulneracion $modeloxx)
    {
        HFiSituacionVulneracion::create($this->getLog($modeloxx));
    }
}