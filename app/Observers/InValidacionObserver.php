<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInValidacion;
use App\Models\Indicadores\InValidacion;

class InValidacionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['in_pregunta_id'] = $modeloxx->in_pregunta_id;
        $log['in_fuente_id'] = $modeloxx->in_fuente_id;
        $log['sis_tabla_id'] = $modeloxx->sis_tabla_id;
        $log['sis_tcampo_id'] = $modeloxx->sis_tcampo_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InValidacion $modeloxx)
    {
        HInValidacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InValidacion "updated" event.
     *
     * @param  \App\Models\Indicadores\InValidacion  $modeloxx
     * @return void
     */
    public function updated(InValidacion $modeloxx)
    {
        HInValidacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InValidacion "deleted" event.
     *
     * @param  \App\Models\Indicadores\InValidacion  $modeloxx
     * @return void
     */
    public function deleted(InValidacion $modeloxx)
    {
        HInValidacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InValidacion "restored" event.
     *
     * @param  \App\Models\Indicadores\InValidacion  $modeloxx
     * @return void
     */
    public function restored(InValidacion $modeloxx)
    {
        HInValidacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InValidacion "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InValidacion  $modeloxx
     * @return void
     */
    public function forceDeleted(InValidacion $modeloxx)
    {
        HInValidacion::create($this->getLog($modeloxx));
    }
}