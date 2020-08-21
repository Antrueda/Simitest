<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdAlimentCompra;
use App\Models\consulta\pivotes\Logs\HCsdAlimentCompra;

class CsdAlimentCompraObserver
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

    public function created(CsdAlimentCompra $modeloxx)
    {
        HCsdAlimentCompra::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentCompra "updated" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdAlimentCompra  $modeloxx
     * @return void
     */
    public function updated(CsdAlimentCompra $modeloxx)
    {
        HCsdAlimentCompra::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentCompra "deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdAlimentCompra  $modeloxx
     * @return void
     */
    public function deleted(CsdAlimentCompra $modeloxx)
    {
        HCsdAlimentCompra::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentCompra "restored" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdAlimentCompra  $modeloxx
     * @return void
     */
    public function restored(CsdAlimentCompra $modeloxx)
    {
        HCsdAlimentCompra::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentCompra "force deleted" event.
     *
     * @param  \App\Models\consulta\pivotes\CsdAlimentCompra  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdAlimentCompra $modeloxx)
    {
        HCsdAlimentCompra::create($this->getLog($modeloxx));
    }
}