<?php

namespace App\Observers;

use App\Models\Indicadores\Administ\InLineaBase;
use App\Models\Indicadores\Logs\HInLineaBase;


class InLineaBaseObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_linea_base'] = $modeloxx->s_linea_base;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InLineaBase $modeloxx)
    {
        HInLineaBase::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLineaBase "updated" event.
     *
     * @param  \App\Models\Indicadores\InLineaBase  $modeloxx
     * @return void
     */
    public function updated(InLineaBase $modeloxx)
    {
        HInLineaBase::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLineaBase "deleted" event.
     *
     * @param  \App\Models\Indicadores\InLineaBase  $modeloxx
     * @return void
     */
    public function deleted(InLineaBase $modeloxx)
    {
        HInLineaBase::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLineaBase "restored" event.
     *
     * @param  \App\Models\Indicadores\InLineaBase  $modeloxx
     * @return void
     */
    public function restored(InLineaBase $modeloxx)
    {
        HInLineaBase::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLineaBase "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InLineaBase  $modeloxx
     * @return void
     */
    public function forceDeleted(InLineaBase $modeloxx)
    {
        HInLineaBase::create($this->getLog($modeloxx));
    }
}
