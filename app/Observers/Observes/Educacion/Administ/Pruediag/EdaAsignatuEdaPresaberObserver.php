<?php

namespace App\Observers\Observes\Educacion\Administ\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaPresaber;
use App\Models\Educacion\Administ\Pruediag\Log\HEdaAsignatuEdaPresaber;

class EdaAsignatuEdaPresaberObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['eda_asignatu_id'] = $modeloxx->eda_asignatu_id;
        $log['eda_presaber_id'] = $modeloxx->eda_presaber_id;
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
     * Handle the eda asignatu eda presaber "created" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaPresaber  $modeloxx
     * @return void
     */
    public function created(EdaAsignatuEdaPresaber $modeloxx)
    {
        HEdaAsignatuEdaPresaber::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu eda presaber "updated" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaPresaber  $modeloxx
     * @return void
     */
    public function updated(EdaAsignatuEdaPresaber $modeloxx)
    {
        HEdaAsignatuEdaPresaber::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu eda presaber "deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaPresaber  $modeloxx
     * @return void
     */
    public function deleted(EdaAsignatuEdaPresaber $modeloxx)
    {
        HEdaAsignatuEdaPresaber::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu eda presaber "restored" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaPresaber  $modeloxx
     * @return void
     */
    public function restored(EdaAsignatuEdaPresaber $modeloxx)
    {
        HEdaAsignatuEdaPresaber::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu eda presaber "force deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaPresaber  $modeloxx
     * @return void
     */
    public function forceDeleted(EdaAsignatuEdaPresaber $modeloxx)
    {
        HEdaAsignatuEdaPresaber::create($this->getLog($modeloxx));
    }
}
