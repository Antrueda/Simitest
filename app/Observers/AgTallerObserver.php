<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgTaller;
use App\Models\Acciones\Grupales\Logs\HAgTaller;

class AgTallerObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_taller'] = $modeloxx->s_taller;
        $log['s_descripcion'] = $modeloxx->s_descripcion;
        $log['ag_tema_id'] = $modeloxx->ag_tema_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgTaller $modeloxx)
    {
        HAgTaller::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTaller "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTaller  $modeloxx
     * @return void
     */
    public function updated(AgTaller $modeloxx)
    {
        HAgTaller::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTaller "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTaller  $modeloxx
     * @return void
     */
    public function deleted(AgTaller $modeloxx)
    {
        HAgTaller::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTaller "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTaller  $modeloxx
     * @return void
     */
    public function restored(AgTaller $modeloxx)
    {
        HAgTaller::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTaller "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTaller  $modeloxx
     * @return void
     */
    public function forceDeleted(AgTaller $modeloxx)
    {
        HAgTaller::create($this->getLog($modeloxx));
    }
}