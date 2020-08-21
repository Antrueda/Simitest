<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiConsumoSpa;
use App\Models\fichaIngreso\Logs\HFiConsumoSpa;

class FiConsumoSpaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_consume_spa_id'] = $modeloxx->i_prm_consume_spa_id;
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

    public function created(FiConsumoSpa $modeloxx)
    {
        HFiConsumoSpa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiConsumoSpa "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiConsumoSpa  $modeloxx
     * @return void
     */
    public function updated(FiConsumoSpa $modeloxx)
    {
        HFiConsumoSpa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiConsumoSpa "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiConsumoSpa  $modeloxx
     * @return void
     */
    public function deleted(FiConsumoSpa $modeloxx)
    {
        HFiConsumoSpa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiConsumoSpa "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiConsumoSpa  $modeloxx
     * @return void
     */
    public function restored(FiConsumoSpa $modeloxx)
    {
        HFiConsumoSpa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiConsumoSpa "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiConsumoSpa  $modeloxx
     * @return void
     */
    public function forceDeleted(FiConsumoSpa $modeloxx)
    {
        HFiConsumoSpa::create($this->getLog($modeloxx));
    }
}