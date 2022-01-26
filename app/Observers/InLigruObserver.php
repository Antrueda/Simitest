<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInLigru;
use App\Models\Indicadores\InLigru;

class InLigruObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['in_base_fuente_id'] = $modeloxx->in_base_fuente_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InLigru $modeloxx)
    {
        HInLigru::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLigru "updated" event.
     *
     * @param  \App\Models\Indicadores\InLigru  $modeloxx
     * @return void
     */
    public function updated(InLigru $modeloxx)
    {
        HInLigru::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLigru "deleted" event.
     *
     * @param  \App\Models\Indicadores\InLigru  $modeloxx
     * @return void
     */
    public function deleted(InLigru $modeloxx)
    {
        HInLigru::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLigru "restored" event.
     *
     * @param  \App\Models\Indicadores\InLigru  $modeloxx
     * @return void
     */
    public function restored(InLigru $modeloxx)
    {
        HInLigru::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLigru "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InLigru  $modeloxx
     * @return void
     */
    public function forceDeleted(InLigru $modeloxx)
    {
        HInLigru::create($this->getLog($modeloxx));
    }
}