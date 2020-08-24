<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdAlimentFrec;
use App\Models\consulta\pivotes\Logs\HCsdAlimentFrec;

class CsdAlimentFrecObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['csd_alimentacion_id'] = $modeloxx->csd_alimentacion_id;
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

    public function created(CsdAlimentFrec $modeloxx)
    {
        HCsdAlimentFrec::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentFrec "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdAlimentFrec  $modeloxx
     * @return void
     */
    public function updated(CsdAlimentFrec $modeloxx)
    {
        HCsdAlimentFrec::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentFrec "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdAlimentFrec  $modeloxx
     * @return void
     */
    public function deleted(CsdAlimentFrec $modeloxx)
    {
        HCsdAlimentFrec::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentFrec "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdAlimentFrec  $modeloxx
     * @return void
     */
    public function restored(CsdAlimentFrec $modeloxx)
    {
        HCsdAlimentFrec::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentFrec "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdAlimentFrec  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdAlimentFrec $modeloxx)
    {
        HCsdAlimentFrec::create($this->getLog($modeloxx));
    }
}