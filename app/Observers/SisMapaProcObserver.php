<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisMapaProc;
use App\Models\sistema\SisMapaProc;

class SisMapaProcObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['version'] = $modeloxx->version;
        $log['sis_entidad_id'] = $modeloxx->sis_entidad_id;
        $log['vigencia'] = $modeloxx->vigencia;
        $log['cierre'] = $modeloxx->cierre;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisMapaProc $modeloxx)
    {
        HSisMapaProc::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisMapaProc "updated" event.
     *
     * @param  \App\Models\sistema\SisMapaProc  $modeloxx
     * @return void
     */
    public function updated(SisMapaProc $modeloxx)
    {
        HSisMapaProc::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisMapaProc "deleted" event.
     *
     * @param  \App\Models\sistema\SisMapaProc  $modeloxx
     * @return void
     */
    public function deleted(SisMapaProc $modeloxx)
    {
        HSisMapaProc::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisMapaProc "restored" event.
     *
     * @param  \App\Models\sistema\SisMapaProc  $modeloxx
     * @return void
     */
    public function restored(SisMapaProc $modeloxx)
    {
        HSisMapaProc::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisMapaProc "force deleted" event.
     *
     * @param  \App\Models\sistema\SisMapaProc  $modeloxx
     * @return void
     */
    public function forceDeleted(SisMapaProc $modeloxx)
    {
        HSisMapaProc::create($this->getLog($modeloxx));
    }
}