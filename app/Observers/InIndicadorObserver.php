<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInIndicador;
use App\Models\Indicadores\InIndicador;

class InIndicadorObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_indicador'] = $modeloxx->s_indicador;
        // $log['area_id'] = $modeloxx->area_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InIndicador $modeloxx)
    {
        HInIndicador::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InIndicador "updated" event.
     *
     * @param  \App\Models\Indicadores\InIndicador  $modeloxx
     * @return void
     */
    public function updated(InIndicador $modeloxx)
    {
        HInIndicador::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InIndicador "deleted" event.
     *
     * @param  \App\Models\Indicadores\InIndicador  $modeloxx
     * @return void
     */
    public function deleted(InIndicador $modeloxx)
    {
        HInIndicador::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InIndicador "restored" event.
     *
     * @param  \App\Models\Indicadores\InIndicador  $modeloxx
     * @return void
     */
    public function restored(InIndicador $modeloxx)
    {
        HInIndicador::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InIndicador "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InIndicador  $modeloxx
     * @return void
     */
    public function forceDeleted(InIndicador $modeloxx)
    {
        HInIndicador::create($this->getLog($modeloxx));
    }
}
