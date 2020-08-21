<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgSubtema;
use App\Models\Acciones\Grupales\Logs\HAgSubtema;

class AgSubtemaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['ag_taller_id'] = $modeloxx->ag_taller_id;
        $log['s_subtema'] = $modeloxx->s_subtema;
        $log['s_descripcion'] = $modeloxx->s_descripcion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgSubtema $modeloxx)
    {
        HAgSubtema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgSubtema "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgSubtema  $modeloxx
     * @return void
     */
    public function updated(AgSubtema $modeloxx)
    {
        HAgSubtema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgSubtema "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgSubtema  $modeloxx
     * @return void
     */
    public function deleted(AgSubtema $modeloxx)
    {
        HAgSubtema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgSubtema "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgSubtema  $modeloxx
     * @return void
     */
    public function restored(AgSubtema $modeloxx)
    {
        HAgSubtema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgSubtema "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgSubtema  $modeloxx
     * @return void
     */
    public function forceDeleted(AgSubtema $modeloxx)
    {
        HAgSubtema::create($this->getLog($modeloxx));
    }
}