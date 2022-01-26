<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInBaseFuente;
use App\Models\Indicadores\InBaseFuente;
use App\Traits\Utilidades\DefaultItem;

class InBaseFuenteObserver
{
    use DefaultItem;
    
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['in_fuente_id'] = $modeloxx->in_fuente_id;
        $log['sis_docfuen_id'] = $modeloxx->sis_docfuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $this->defaultSisEsta($modeloxx->sis_esta_id);
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InBaseFuente $modeloxx)
    {
        HInBaseFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InBaseFuente "updated" event.
     *
     * @param  \App\Models\Indicadores\InBaseFuente  $modeloxx
     * @return void
     */
    public function updated(InBaseFuente $modeloxx)
    {
        HInBaseFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InBaseFuente "deleted" event.
     *
     * @param  \App\Models\Indicadores\InBaseFuente  $modeloxx
     * @return void
     */
    public function deleted(InBaseFuente $modeloxx)
    {
        HInBaseFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InBaseFuente "restored" event.
     *
     * @param  \App\Models\Indicadores\InBaseFuente  $modeloxx
     * @return void
     */
    public function restored(InBaseFuente $modeloxx)
    {
        HInBaseFuente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InBaseFuente "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InBaseFuente  $modeloxx
     * @return void
     */
    public function forceDeleted(InBaseFuente $modeloxx)
    {
        HInBaseFuente::create($this->getLog($modeloxx));
    }
}
