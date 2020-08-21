<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisObse;
use App\Models\sistema\SisObse;

class SisObseObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_observ'] = $modeloxx->s_observ;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisObse $modeloxx)
    {
        HSisObse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisObse "updated" event.
     *
     * @param  \App\Models\sistema\SisObse  $modeloxx
     * @return void
     */
    public function updated(SisObse $modeloxx)
    {
        HSisObse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisObse "deleted" event.
     *
     * @param  \App\Models\sistema\SisObse  $modeloxx
     * @return void
     */
    public function deleted(SisObse $modeloxx)
    {
        HSisObse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisObse "restored" event.
     *
     * @param  \App\Models\sistema\SisObse  $modeloxx
     * @return void
     */
    public function restored(SisObse $modeloxx)
    {
        HSisObse::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisObse "force deleted" event.
     *
     * @param  \App\Models\sistema\SisObse  $modeloxx
     * @return void
     */
    public function forceDeleted(SisObse $modeloxx)
    {
        HSisObse::create($this->getLog($modeloxx));
    }
}