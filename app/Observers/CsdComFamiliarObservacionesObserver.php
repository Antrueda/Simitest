<?php

namespace App\Observers;

use App\Models\consulta\CsdComFamiliarObservaciones;
use App\Models\consulta\Logs\HCsdComFamiliarObservaciones;

class CsdComFamiliarObservacionesObserver
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

    public function created(CsdComFamiliarObservaciones $modeloxx)
    {
        HCsdComFamiliarObservaciones::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComFamiliarObservaciones "updated" event.
     *
     * @param  \App\Models\consulta\CsdComFamiliarObservaciones  $modeloxx
     * @return void
     */
    public function updated(CsdComFamiliarObservaciones $modeloxx)
    {
        HCsdComFamiliarObservaciones::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComFamiliarObservaciones "deleted" event.
     *
     * @param  \App\Models\consulta\CsdComFamiliarObservaciones  $modeloxx
     * @return void
     */
    public function deleted(CsdComFamiliarObservaciones $modeloxx)
    {
        HCsdComFamiliarObservaciones::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComFamiliarObservaciones "restored" event.
     *
     * @param  \App\Models\consulta\CsdComFamiliarObservaciones  $modeloxx
     * @return void
     */
    public function restored(CsdComFamiliarObservaciones $modeloxx)
    {
        HCsdComFamiliarObservaciones::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComFamiliarObservaciones "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdComFamiliarObservaciones  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdComFamiliarObservaciones $modeloxx)
    {
        HCsdComFamiliarObservaciones::create($this->getLog($modeloxx));
    }
}