<?php

namespace App\Observers;

use App\Models\Indicadores\Administ\Logs\HInPregresp;
use App\Models\Indicadores\Administ\InPregresp;

class InPregrespObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['in_grupregu_id'] = $modeloxx->in_grupregu_id;
        $log['prm_respuest_id'] = $modeloxx->prm_respuest_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InPregresp $modeloxx)
    {
        HInPregresp::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InPregresp "updated" event.
     *
     * @param  \App\Models\Indicadores\InPregresp  $modeloxx
     * @return void
     */
    public function updated(InPregresp $modeloxx)
    {
        HInPregresp::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InPregresp "deleted" event.
     *
     * @param  \App\Models\Indicadores\InPregresp  $modeloxx
     * @return void
     */
    public function deleted(InPregresp $modeloxx)
    {
        HInPregresp::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InPregresp "restored" event.
     *
     * @param  \App\Models\Indicadores\InPregresp  $modeloxx
     * @return void
     */
    public function restored(InPregresp $modeloxx)
    {
        HInPregresp::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InPregresp "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InPregresp  $modeloxx
     * @return void
     */
    public function forceDeleted(InPregresp $modeloxx)
    {
        HInPregresp::create($this->getLog($modeloxx));
    }
}
