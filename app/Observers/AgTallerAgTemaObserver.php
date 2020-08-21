<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgTallerAgTema;
use App\Models\Acciones\Grupales\Logs\HAgTallerAgTema;

class AgTallerAgTemaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['ag_taller_id'] = $modeloxx->ag_taller_id;
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

    public function created(AgTallerAgTema $modeloxx)
    {
        HAgTallerAgTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTallerAgTema "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTallerAgTema  $modeloxx
     * @return void
     */
    public function updated(AgTallerAgTema $modeloxx)
    {
        HAgTallerAgTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTallerAgTema "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTallerAgTema  $modeloxx
     * @return void
     */
    public function deleted(AgTallerAgTema $modeloxx)
    {
        HAgTallerAgTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTallerAgTema "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTallerAgTema  $modeloxx
     * @return void
     */
    public function restored(AgTallerAgTema $modeloxx)
    {
        HAgTallerAgTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTallerAgTema "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTallerAgTema  $modeloxx
     * @return void
     */
    public function forceDeleted(AgTallerAgTema $modeloxx)
    {
        HAgTallerAgTema::create($this->getLog($modeloxx));
    }
}