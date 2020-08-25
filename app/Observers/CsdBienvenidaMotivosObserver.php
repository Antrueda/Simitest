<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdBienvenidaMotivo;
use App\Models\consulta\pivotes\Logs\HCsdBienvenidaMotivo;

class CsdBienvenidaMotivosObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['csd_bienvenida_id'] = $modeloxx->csd_bienvenida_id;
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

    public function created(CsdBienvenidaMotivo $modeloxx)
    {
        HCsdBienvenidaMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenidaMotivo "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdBienvenidaMotivo  $modeloxx
     * @return void
     */
    public function updated(CsdBienvenidaMotivo $modeloxx)
    {
        HCsdBienvenidaMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenidaMotivo "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdBienvenidaMotivo  $modeloxx
     * @return void
     */
    public function deleted(CsdBienvenidaMotivo $modeloxx)
    {
        HCsdBienvenidaMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenidaMotivo "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdBienvenidaMotivo  $modeloxx
     * @return void
     */
    public function restored(CsdBienvenidaMotivo $modeloxx)
    {
        HCsdBienvenidaMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdBienvenidaMotivo "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdBienvenidaMotivo  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdBienvenidaMotivo $modeloxx)
    {
        HCsdBienvenidaMotivo::create($this->getLog($modeloxx));
    }
}
