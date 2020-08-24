<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgRelacion;
use App\Models\Acciones\Grupales\Logs\HAgRelacion;

class AgRelacionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['ag_actividad_id'] = $modeloxx->ag_actividad_id;
        $log['ag_recurso_id'] = $modeloxx->ag_recurso_id;
        $log['i_cantidad'] = $modeloxx->i_cantidad;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgRelacion $modeloxx)
    {
        HAgRelacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgRelacion "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgRelacion  $modeloxx
     * @return void
     */
    public function updated(AgRelacion $modeloxx)
    {
        HAgRelacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgRelacion "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgRelacion  $modeloxx
     * @return void
     */
    public function deleted(AgRelacion $modeloxx)
    {
        HAgRelacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgRelacion "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgRelacion  $modeloxx
     * @return void
     */
    public function restored(AgRelacion $modeloxx)
    {
        HAgRelacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgRelacion "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgRelacion  $modeloxx
     * @return void
     */
    public function forceDeleted(AgRelacion $modeloxx)
    {
        HAgRelacion::create($this->getLog($modeloxx));
    }
}