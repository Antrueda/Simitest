<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgAsistente;
use App\Models\Acciones\Grupales\Logs\HAgAsistente;

class AgAsistenteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['ag_actividad_id'] = $modeloxx->ag_actividad_id;
        $log['fi_dato_basico_id'] = $modeloxx->fi_dato_basico_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgAsistente $modeloxx)
    {
        HAgAsistente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgAsistente "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgAsistente  $modeloxx
     * @return void
     */
    public function updated(AgAsistente $modeloxx)
    {
        HAgAsistente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgAsistente "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgAsistente  $modeloxx
     * @return void
     */
    public function deleted(AgAsistente $modeloxx)
    {
        HAgAsistente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgAsistente "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgAsistente  $modeloxx
     * @return void
     */
    public function restored(AgAsistente $modeloxx)
    {
        HAgAsistente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgAsistente "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgAsistente  $modeloxx
     * @return void
     */
    public function forceDeleted(AgAsistente $modeloxx)
    {
        HAgAsistente::create($this->getLog($modeloxx));
    }
}