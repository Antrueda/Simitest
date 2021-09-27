<?php

namespace App\Observers\Observes\Educacion\Administ\Pruediag;

use App\Models\Educacion\Administ\Pruediag\EdaGrado;
use App\Models\Educacion\Administ\Pruediag\Log\HEdaGrado;

class EdaGradoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo

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
     * Handle the eda grado "created" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaGrado  $modeloxx
     * @return void
     */
    public function created(EdaGrado $modeloxx)
    {
        HEdaGrado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda grado "updated" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaGrado  $modeloxx
     * @return void
     */
    public function updated(EdaGrado $modeloxx)
    {
        HEdaGrado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda grado "deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaGrado  $modeloxx
     * @return void
     */
    public function deleted(EdaGrado $modeloxx)
    {
        HEdaGrado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda grado "restored" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaGrado  $modeloxx
     * @return void
     */
    public function restored(EdaGrado $modeloxx)
    {
        HEdaGrado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the eda grado "force deleted" event.
     *
     * @param  \App\Models\Educacion\Administ\Pruediag\EdaGrado  $modeloxx
     * @return void
     */
    public function forceDeleted(EdaGrado $modeloxx)
    {
        HEdaGrado::create($this->getLog($modeloxx));
    }
}
