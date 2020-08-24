<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiVictimaEscnna;
use App\Models\fichaIngreso\Logs\HFiVictimaEscnna;

class FiVictimaEscnnaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_situacion_especial_id'] = $modeloxx->fi_situacion_especial_id;
        $log['i_prm_victima_escnna_id'] = $modeloxx->i_prm_victima_escnna_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiVictimaEscnna $modeloxx)
    {
        HFiVictimaEscnna::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiVictimaEscnna "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictimaEscnna  $modeloxx
     * @return void
     */
    public function updated(FiVictimaEscnna $modeloxx)
    {
        HFiVictimaEscnna::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiVictimaEscnna "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictimaEscnna  $modeloxx
     * @return void
     */
    public function deleted(FiVictimaEscnna $modeloxx)
    {
        HFiVictimaEscnna::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiVictimaEscnna "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictimaEscnna  $modeloxx
     * @return void
     */
    public function restored(FiVictimaEscnna $modeloxx)
    {
        HFiVictimaEscnna::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiVictimaEscnna "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictimaEscnna  $modeloxx
     * @return void
     */
    public function forceDeleted(FiVictimaEscnna $modeloxx)
    {
        HFiVictimaEscnna::create($this->getLog($modeloxx));
    }
}