<?php

namespace App\Observers;

use App\Models\consulta\CsdDinfamPadre;
use App\Models\consulta\Logs\HCsdDinfamPadre;

class CsdDinfamPadreObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['prm_convive_id'] = $modeloxx->prm_convive_id;
        $log['dia'] = $modeloxx->dia;
        $log['mes'] = $modeloxx->mes;
        $log['ano'] = $modeloxx->ano;
        $log['hijo'] = $modeloxx->hijo;
        $log['prm_separa_id'] = $modeloxx->prm_separa_id;
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

    public function created(CsdDinfamPadre $modeloxx)
    {
        HCsdDinfamPadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamPadre "updated" event.
     *
     * @param  \App\Models\consulta\CsdDinfamPadre  $modeloxx
     * @return void
     */
    public function updated(CsdDinfamPadre $modeloxx)
    {
        HCsdDinfamPadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamPadre "deleted" event.
     *
     * @param  \App\Models\consulta\CsdDinfamPadre  $modeloxx
     * @return void
     */
    public function deleted(CsdDinfamPadre $modeloxx)
    {
        HCsdDinfamPadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamPadre "restored" event.
     *
     * @param  \App\Models\consulta\CsdDinfamPadre  $modeloxx
     * @return void
     */
    public function restored(CsdDinfamPadre $modeloxx)
    {
        HCsdDinfamPadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinfamPadre "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdDinfamPadre  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdDinfamPadre $modeloxx)
    {
        HCsdDinfamPadre::create($this->getLog($modeloxx));
    }
}