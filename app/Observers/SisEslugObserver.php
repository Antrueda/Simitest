<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisEslug;
use App\Models\sistema\SisEslug;

class SisEslugObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_espaluga'] = $modeloxx->s_espaluga;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisEslug $modeloxx)
    {
        HSisEslug::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEslug "updated" event.
     *
     * @param  \App\Models\sistema\SisEslug  $modeloxx
     * @return void
     */
    public function updated(SisEslug $modeloxx)
    {
        HSisEslug::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEslug "deleted" event.
     *
     * @param  \App\Models\sistema\SisEslug  $modeloxx
     * @return void
     */
    public function deleted(SisEslug $modeloxx)
    {
        HSisEslug::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEslug "restored" event.
     *
     * @param  \App\Models\sistema\SisEslug  $modeloxx
     * @return void
     */
    public function restored(SisEslug $modeloxx)
    {
        HSisEslug::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEslug "force deleted" event.
     *
     * @param  \App\Models\sistema\SisEslug  $modeloxx
     * @return void
     */
    public function forceDeleted(SisEslug $modeloxx)
    {
        HSisEslug::create($this->getLog($modeloxx));
    }
}