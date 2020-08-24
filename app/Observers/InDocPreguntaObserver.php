<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInDocPregunta;
use App\Models\Indicadores\InDocPregunta;

class InDocPreguntaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['in_ligru_id'] = $modeloxx->in_ligru_id;
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

    public function created(InDocPregunta $modeloxx)
    {
        HInDocPregunta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InDocPregunta "updated" event.
     *
     * @param  \App\Models\Indicadores\InDocPregunta  $modeloxx
     * @return void
     */
    public function updated(InDocPregunta $modeloxx)
    {
        HInDocPregunta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InDocPregunta "deleted" event.
     *
     * @param  \App\Models\Indicadores\InDocPregunta  $modeloxx
     * @return void
     */
    public function deleted(InDocPregunta $modeloxx)
    {
        HInDocPregunta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InDocPregunta "restored" event.
     *
     * @param  \App\Models\Indicadores\InDocPregunta  $modeloxx
     * @return void
     */
    public function restored(InDocPregunta $modeloxx)
    {
        HInDocPregunta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InDocPregunta "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InDocPregunta  $modeloxx
     * @return void
     */
    public function forceDeleted(InDocPregunta $modeloxx)
    {
        HInDocPregunta::create($this->getLog($modeloxx));
    }
}