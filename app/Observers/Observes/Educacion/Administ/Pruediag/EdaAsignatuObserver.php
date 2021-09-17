<?php

namespace App\Observers\Observes\Educacion\Administ\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaAsignatu;
use App\Models\Educacion\Administ\Pruediag\Log\HEdaAsignatu;

class EdaAsignatuObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_asignatura'] = $modeloxx->s_asignatura;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }
    /**
     * Handle the eda asignatu "created" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatu  $modeloxx
     * @return void
     */
    public function created(EdaAsignatu $modeloxx)
    {
        HEdaAsignatu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu "updated" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatu  $modeloxx
     * @return void
     */
    public function updated(EdaAsignatu $modeloxx)
    {
        HEdaAsignatu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu "deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatu  $modeloxx
     * @return void
     */
    public function deleted(EdaAsignatu $modeloxx)
    {
        HEdaAsignatu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu "restored" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatu  $modeloxx
     * @return void
     */
    public function restored(EdaAsignatu $modeloxx)
    {
        HEdaAsignatu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu "force deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatu  $modeloxx
     * @return void
     */
    public function forceDeleted(EdaAsignatu $modeloxx)
    {
        HEdaAsignatu::create($this->getLog($modeloxx));
    }
}
