<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdBienvenidaMotivos;
use App\Models\consulta\pivotes\Logs\HCsdBienvenidaMotivos;

class CsdBienvenidaMotivosObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['csd_bienvenidas_id'] = $modeloxx->csd_bienvenidas_id;
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

    public function created(CsdBienvenidaMotivos $modeloxx)
    {
        HCsdBienvenidaMotivos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenidaMotivos "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdBienvenidaMotivos  $modeloxx
     * @return void
     */
    public function updated(CsdBienvenidaMotivos $modeloxx)
    {
        HCsdBienvenidaMotivos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenidaMotivos "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdBienvenidaMotivos  $modeloxx
     * @return void
     */
    public function deleted(CsdBienvenidaMotivos $modeloxx)
    {
        HCsdBienvenidaMotivos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenidaMotivos "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdBienvenidaMotivos  $modeloxx
     * @return void
     */
    public function restored(CsdBienvenidaMotivos $modeloxx)
    {
        HCsdBienvenidaMotivos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenidaMotivos "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdBienvenidaMotivos  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdBienvenidaMotivos $modeloxx)
    {
        HCsdBienvenidaMotivos::create($this->getLog($modeloxx));
    }
}