<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisProceso;
use App\Models\Sistema\SisProceso;

class SisProcesoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_proceso_id'] = $modeloxx->sis_proceso_id;
        $log['sis_mapa_proc_id'] = $modeloxx->sis_mapa_proc_id;
        $log['prm_proceso_id'] = $modeloxx->prm_proceso_id;
        $log['nombre'] = $modeloxx->nombre;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisProceso $modeloxx)
    {
        HSisProceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisProceso "updated" event.
     *
     * @param  \App\Models\Sistema\SisProceso  $modeloxx
     * @return void
     */
    public function updated(SisProceso $modeloxx)
    {
        HSisProceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisProceso "deleted" event.
     *
     * @param  \App\Models\Sistema\SisProceso  $modeloxx
     * @return void
     */
    public function deleted(SisProceso $modeloxx)
    {
        HSisProceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisProceso "restored" event.
     *
     * @param  \App\Models\Sistema\SisProceso  $modeloxx
     * @return void
     */
    public function restored(SisProceso $modeloxx)
    {
        HSisProceso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisProceso "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisProceso  $modeloxx
     * @return void
     */
    public function forceDeleted(SisProceso $modeloxx)
    {
        HSisProceso::create($this->getLog($modeloxx));
    }
}