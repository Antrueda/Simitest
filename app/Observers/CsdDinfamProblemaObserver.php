<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdDinfamProblema;
use App\Models\consulta\pivotes\Logs\HCsdDinfamProblema;

class CsdDinfamProblemaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['csd_dinfamiliar_id'] = $modeloxx->csd_dinfamiliar_id;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(CsdDinfamProblema $modeloxx)
    {
        HCsdDinfamProblema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamProblema "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamProblema  $modeloxx
     * @return void
     */
    public function updated(CsdDinfamProblema $modeloxx)
    {
        HCsdDinfamProblema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamProblema "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamProblema  $modeloxx
     * @return void
     */
    public function deleted(CsdDinfamProblema $modeloxx)
    {
        HCsdDinfamProblema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamProblema "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamProblema  $modeloxx
     * @return void
     */
    public function restored(CsdDinfamProblema $modeloxx)
    {
        HCsdDinfamProblema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamProblema "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdDinfamProblema  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdDinfamProblema $modeloxx)
    {
        HCsdDinfamProblema::create($this->getLog($modeloxx));
    }
}