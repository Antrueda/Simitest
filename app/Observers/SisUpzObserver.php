<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisUpz;
use App\Models\sistema\SisUpz;

class SisUpzObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_upz'] = $modeloxx->s_upz;
        $log['s_codigo'] = $modeloxx->s_codigo;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisUpz $modeloxx)
    {
        HSisUpz::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisUpz "updated" event.
     *
     * @param  \App\Models\sistema\SisUpz  $modeloxx
     * @return void
     */
    public function updated(SisUpz $modeloxx)
    {
        HSisUpz::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisUpz "deleted" event.
     *
     * @param  \App\Models\sistema\SisUpz  $modeloxx
     * @return void
     */
    public function deleted(SisUpz $modeloxx)
    {
        HSisUpz::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisUpz "restored" event.
     *
     * @param  \App\Models\sistema\SisUpz  $modeloxx
     * @return void
     */
    public function restored(SisUpz $modeloxx)
    {
        HSisUpz::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisUpz "force deleted" event.
     *
     * @param  \App\Models\sistema\SisUpz  $modeloxx
     * @return void
     */
    public function forceDeleted(SisUpz $modeloxx)
    {
        HSisUpz::create($this->getLog($modeloxx));
    }
}