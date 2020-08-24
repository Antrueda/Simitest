<?php

namespace App\Observers;

use App\Models\Logs\HParametro;
use App\Models\Parametro;

class ParametroObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
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

    public function created(Parametro $modeloxx)
    {
        HParametro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Parametro  $modeloxx
     * @return void
     */
    public function updated(Parametro $modeloxx)
    {
        HParametro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "deleted" event.
     *
     * @param  \App\Models\Parametro  $modeloxx
     * @return void
     */
    public function deleted(Parametro $modeloxx)
    {
        HParametro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "restored" event.
     *
     * @param  \App\Models\Parametro  $modeloxx
     * @return void
     */
    public function restored(Parametro $modeloxx)
    {
        HParametro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "force deleted" event.
     *
     * @param  \App\Models\Parametro  $modeloxx
     * @return void
     */
    public function forceDeleted(Parametro $modeloxx)
    {
        HParametro::create($this->getLog($modeloxx));
    }
}