<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiSustanciaConsumida;
use App\Models\fichaIngreso\Logs\HFiSustanciaConsumida;

class FiSustanciaConsumidaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_consumo_spa_id'] = $modeloxx->fi_consumo_spa_id;
        $log['i_prm_sustancia_id'] = $modeloxx->i_prm_sustancia_id;
        $log['i_edad_uso'] = $modeloxx->i_edad_uso;
        $log['i_prm_consume_id'] = $modeloxx->i_prm_consume_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiSustanciaConsumida $modeloxx)
    {
        HFiSustanciaConsumida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSustanciaConsumida "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiSustanciaConsumida  $modeloxx
     * @return void
     */
    public function updated(FiSustanciaConsumida $modeloxx)
    {
        HFiSustanciaConsumida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSustanciaConsumida "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSustanciaConsumida  $modeloxx
     * @return void
     */
    public function deleted(FiSustanciaConsumida $modeloxx)
    {
        HFiSustanciaConsumida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSustanciaConsumida "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiSustanciaConsumida  $modeloxx
     * @return void
     */
    public function restored(FiSustanciaConsumida $modeloxx)
    {
        HFiSustanciaConsumida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSustanciaConsumida "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSustanciaConsumida  $modeloxx
     * @return void
     */
    public function forceDeleted(FiSustanciaConsumida $modeloxx)
    {
        HFiSustanciaConsumida::create($this->getLog($modeloxx));
    }
}