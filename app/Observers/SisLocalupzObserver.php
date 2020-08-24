<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisLocalupz;
use App\Models\sistema\SisLocalupz;

class SisLocalupzObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_localidad_id'] = $modeloxx->sis_localidad_id;
        $log['sis_upz_id'] = $modeloxx->sis_upz_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisLocalupz $modeloxx)
    {
        HSisLocalupz::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisLocalupz "updated" event.
     *
     * @param  \App\Models\sistema\SisLocalupz  $modeloxx
     * @return void
     */
    public function updated(SisLocalupz $modeloxx)
    {
        HSisLocalupz::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisLocalupz "deleted" event.
     *
     * @param  \App\Models\sistema\SisLocalupz  $modeloxx
     * @return void
     */
    public function deleted(SisLocalupz $modeloxx)
    {
        HSisLocalupz::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisLocalupz "restored" event.
     *
     * @param  \App\Models\sistema\SisLocalupz  $modeloxx
     * @return void
     */
    public function restored(SisLocalupz $modeloxx)
    {
        HSisLocalupz::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisLocalupz "force deleted" event.
     *
     * @param  \App\Models\sistema\SisLocalupz  $modeloxx
     * @return void
     */
    public function forceDeleted(SisLocalupz $modeloxx)
    {
        HSisLocalupz::create($this->getLog($modeloxx));
    }
}