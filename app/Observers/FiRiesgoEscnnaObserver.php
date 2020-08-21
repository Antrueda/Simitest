<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiRiesgoEscnna;
use App\Models\fichaIngreso\Logs\HFiRiesgoEscnna;

class FiRiesgoEscnnaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_situacion_especial_id'] = $modeloxx->fi_situacion_especial_id;
        $log['i_prm_riesgo_escnna_id'] = $modeloxx->i_prm_riesgo_escnna_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiRiesgoEscnna $modeloxx)
    {
        HFiRiesgoEscnna::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRiesgoEscnna "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiRiesgoEscnna  $modeloxx
     * @return void
     */
    public function updated(FiRiesgoEscnna $modeloxx)
    {
        HFiRiesgoEscnna::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRiesgoEscnna "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRiesgoEscnna  $modeloxx
     * @return void
     */
    public function deleted(FiRiesgoEscnna $modeloxx)
    {
        HFiRiesgoEscnna::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRiesgoEscnna "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiRiesgoEscnna  $modeloxx
     * @return void
     */
    public function restored(FiRiesgoEscnna $modeloxx)
    {
        HFiRiesgoEscnna::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRiesgoEscnna "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRiesgoEscnna  $modeloxx
     * @return void
     */
    public function forceDeleted(FiRiesgoEscnna $modeloxx)
    {
        HFiRiesgoEscnna::create($this->getLog($modeloxx));
    }
}