<?php

namespace App\Observers;

use App\Models\consulta\CsdComfamob;
use App\Models\consulta\Logs\HCsdComfamob;

class CsdComfamobObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['csd_id'] = $modeloxx->csd_id;
        $log['observaciones'] = $modeloxx->observaciones;
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

    public function created(CsdComfamob $modeloxx)
    {
        HCsdComfamob::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComfamob "updated" event.
     *
     * @param  \App\Models\consulta\CsdComfamob  $modeloxx
     * @return void
     */
    public function updated(CsdComfamob $modeloxx)
    {
        HCsdComfamob::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComfamob "deleted" event.
     *
     * @param  \App\Models\consulta\CsdComfamob  $modeloxx
     * @return void
     */
    public function deleted(CsdComfamob $modeloxx)
    {
        HCsdComfamob::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComfamob "restored" event.
     *
     * @param  \App\Models\consulta\CsdComfamob  $modeloxx
     * @return void
     */
    public function restored(CsdComfamob $modeloxx)
    {
        HCsdComfamob::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComfamob "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdComfamob  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdComfamob $modeloxx)
    {
        HCsdComfamob::create($this->getLog($modeloxx));
    }
}
