<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisFsoporte;
use App\Models\sistema\SisFsoporte;

class SisFsoporteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['nombre'] = $modeloxx->nombre;
        $log['sis_actividad_id'] = $modeloxx->sis_actividad_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisFsoporte $modeloxx)
    {
        HSisFsoporte::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisFsoporte "updated" event.
     *
     * @param  \App\Models\sistema\SisFsoporte  $modeloxx
     * @return void
     */
    public function updated(SisFsoporte $modeloxx)
    {
        HSisFsoporte::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisFsoporte "deleted" event.
     *
     * @param  \App\Models\sistema\SisFsoporte  $modeloxx
     * @return void
     */
    public function deleted(SisFsoporte $modeloxx)
    {
        HSisFsoporte::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisFsoporte "restored" event.
     *
     * @param  \App\Models\sistema\SisFsoporte  $modeloxx
     * @return void
     */
    public function restored(SisFsoporte $modeloxx)
    {
        HSisFsoporte::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisFsoporte "force deleted" event.
     *
     * @param  \App\Models\sistema\SisFsoporte  $modeloxx
     * @return void
     */
    public function forceDeleted(SisFsoporte $modeloxx)
    {
        HSisFsoporte::create($this->getLog($modeloxx));
    }
}