<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInDocIndi;
use App\Models\Indicadores\InDocIndi;

class InDocIndiObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['in_indicador_id'] = $modeloxx->in_indicador_id;
        $log['sis_docfuen_id'] = $modeloxx->sis_docfuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InDocIndi $modeloxx)
    {
        HInDocIndi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InDocIndi "updated" event.
     *
     * @param  \App\Models\Indicadores\InDocIndi  $modeloxx
     * @return void
     */
    public function updated(InDocIndi $modeloxx)
    {
        HInDocIndi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InDocIndi "deleted" event.
     *
     * @param  \App\Models\Indicadores\InDocIndi  $modeloxx
     * @return void
     */
    public function deleted(InDocIndi $modeloxx)
    {
        HInDocIndi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InDocIndi "restored" event.
     *
     * @param  \App\Models\Indicadores\InDocIndi  $modeloxx
     * @return void
     */
    public function restored(InDocIndi $modeloxx)
    {
        HInDocIndi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InDocIndi "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InDocIndi  $modeloxx
     * @return void
     */
    public function forceDeleted(InDocIndi $modeloxx)
    {
        HInDocIndi::create($this->getLog($modeloxx));
    }
}