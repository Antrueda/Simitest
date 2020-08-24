<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInPregunta;
use App\Models\Indicadores\InPregunta;

class InPreguntaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_pregunta'] = $modeloxx->s_pregunta;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InPregunta $modeloxx)
    {
        HInPregunta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InPregunta "updated" event.
     *
     * @param  \App\Models\Indicadores\InPregunta  $modeloxx
     * @return void
     */
    public function updated(InPregunta $modeloxx)
    {
        HInPregunta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InPregunta "deleted" event.
     *
     * @param  \App\Models\Indicadores\InPregunta  $modeloxx
     * @return void
     */
    public function deleted(InPregunta $modeloxx)
    {
        HInPregunta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InPregunta "restored" event.
     *
     * @param  \App\Models\Indicadores\InPregunta  $modeloxx
     * @return void
     */
    public function restored(InPregunta $modeloxx)
    {
        HInPregunta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InPregunta "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InPregunta  $modeloxx
     * @return void
     */
    public function forceDeleted(InPregunta $modeloxx)
    {
        HInPregunta::create($this->getLog($modeloxx));
    }
}