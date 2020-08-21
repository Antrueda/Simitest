<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgResponsable;
use App\Models\Acciones\Grupales\Logs\HAgResponsable;

class AgResponsableObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_responsable_id'] = $modeloxx->i_prm_responsable_id;
        $log['ag_actividad_id'] = $modeloxx->ag_actividad_id;
        $log['sis_obse_id'] = $modeloxx->sis_obse_id;
        $log['user_id'] = $modeloxx->user_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgResponsable $modeloxx)
    {
        HAgResponsable::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgResponsable "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgResponsable  $modeloxx
     * @return void
     */
    public function updated(AgResponsable $modeloxx)
    {
        HAgResponsable::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgResponsable "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgResponsable  $modeloxx
     * @return void
     */
    public function deleted(AgResponsable $modeloxx)
    {
        HAgResponsable::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgResponsable "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgResponsable  $modeloxx
     * @return void
     */
    public function restored(AgResponsable $modeloxx)
    {
        HAgResponsable::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgResponsable "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgResponsable  $modeloxx
     * @return void
     */
    public function forceDeleted(AgResponsable $modeloxx)
    {
        HAgResponsable::create($this->getLog($modeloxx));
    }
}