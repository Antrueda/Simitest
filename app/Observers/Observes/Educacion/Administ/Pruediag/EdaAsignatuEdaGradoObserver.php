<?php

namespace App\Observers\Observes\Educacion\Administ\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaGrado;
use App\Models\Educacion\Administ\Pruediag\Log\HEdaAsignatuEdaGrado;

class EdaAsignatuEdaGradoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['eda_grado_id'] = $modeloxx->eda_grado_id;
        $log['eda_asignatu_id'] = $modeloxx->eda_asignatu_id;
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
     * Handle the eda asignatu eda grado "created" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaGrado  $modeloxx
     * @return void
     */
    public function created(EdaAsignatuEdaGrado $modeloxx)
    {
        HEdaAsignatuEdaGrado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu eda grado "updated" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaGrado  $modeloxx
     * @return void
     */
    public function updated(EdaAsignatuEdaGrado $modeloxx)
    {
        HEdaAsignatuEdaGrado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu eda grado "deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaGrado  $modeloxx
     * @return void
     */
    public function deleted(EdaAsignatuEdaGrado $modeloxx)
    {
        HEdaAsignatuEdaGrado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu eda grado "restored" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaGrado  $modeloxx
     * @return void
     */
    public function restored(EdaAsignatuEdaGrado $modeloxx)
    {
        HEdaAsignatuEdaGrado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda asignatu eda grado "force deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaAsignatuEdaGrado  $modeloxx
     * @return void
     */
    public function forceDeleted(EdaAsignatuEdaGrado $modeloxx)
    {
        HEdaAsignatuEdaGrado::create($this->getLog($modeloxx));
    }
}
