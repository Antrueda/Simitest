<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInActsoporte;
use App\Models\Indicadores\InActsoporte;

class InActsoporteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['in_accion_gestion_id'] = $modeloxx->in_accion_gestion_id;
        $log['sis_fsoporte_id'] = $modeloxx->sis_fsoporte_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InActsoporte $modeloxx)
    {
        HInActsoporte::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InActsoporte "updated" event.
     *
     * @param  \App\Models\Indicadores\InActsoporte  $modeloxx
     * @return void
     */
    public function updated(InActsoporte $modeloxx)
    {
        HInActsoporte::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InActsoporte "deleted" event.
     *
     * @param  \App\Models\Indicadores\InActsoporte  $modeloxx
     * @return void
     */
    public function deleted(InActsoporte $modeloxx)
    {
        HInActsoporte::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InActsoporte "restored" event.
     *
     * @param  \App\Models\Indicadores\InActsoporte  $modeloxx
     * @return void
     */
    public function restored(InActsoporte $modeloxx)
    {
        HInActsoporte::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InActsoporte "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InActsoporte  $modeloxx
     * @return void
     */
    public function forceDeleted(InActsoporte $modeloxx)
    {
        HInActsoporte::create($this->getLog($modeloxx));
    }
}