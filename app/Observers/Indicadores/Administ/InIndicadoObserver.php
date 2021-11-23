<?php

namespace App\Observers\Indicadores\Administ;

use App\Models\Indicadores\Administ\Logs\HInIndicado;
use App\Models\Indicadores\Administ\InIndicado;

class InIndicadoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_indicador'] = $modeloxx->s_indicador;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InIndicado $modeloxx)
    {
        HInIndicado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InIndicado "updated" event.
     *
     * @param  \App\Models\Indicadores\InIndicado  $modeloxx
     * @return void
     */
    public function updated(InIndicado $modeloxx)
    {
        HInIndicado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InIndicado "deleted" event.
     *
     * @param  \App\Models\Indicadores\InIndicado  $modeloxx
     * @return void
     */
    public function deleted(InIndicado $modeloxx)
    {
        HInIndicado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InIndicado "restored" event.
     *
     * @param  \App\Models\Indicadores\InIndicado  $modeloxx
     * @return void
     */
    public function restored(InIndicado $modeloxx)
    {
        HInIndicado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InIndicado "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InIndicado  $modeloxx
     * @return void
     */
    public function forceDeleted(InIndicado $modeloxx)
    {
        HInIndicado::create($this->getLog($modeloxx));
    }
}
