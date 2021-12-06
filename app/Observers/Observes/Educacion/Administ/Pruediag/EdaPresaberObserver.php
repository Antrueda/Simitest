<?php

namespace App\Observers\Observes\Educacion\Administ\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaPresaber;
use App\Models\Educacion\Administ\Pruediag\Log\HEdaPresaber;

class EdaPresaberObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_presaber'] = $modeloxx->s_presaber;
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
     * Handle the eda presaber "created" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaPresaber  $modeloxx
     * @return void
     */
    public function created(EdaPresaber $modeloxx)
    {
        HEdaPresaber::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda presaber "updated" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaPresaber  $modeloxx
     * @return void
     */
    public function updated(EdaPresaber $modeloxx)
    {
        HEdaPresaber::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda presaber "deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaPresaber  $modeloxx
     * @return void
     */
    public function deleted(EdaPresaber $modeloxx)
    {
        HEdaPresaber::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda presaber "restored" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaPresaber  $modeloxx
     * @return void
     */
    public function restored(EdaPresaber $modeloxx)
    {
        HEdaPresaber::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda presaber "force deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaPresaber  $modeloxx
     * @return void
     */
    public function forceDeleted(EdaPresaber $modeloxx)
    {
        HEdaPresaber::create($this->getLog($modeloxx));
    }
}
