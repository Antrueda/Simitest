<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgTema;
use App\Models\Acciones\Grupales\Logs\HAgTema;

class AgTemaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_tema'] = $modeloxx->s_tema;
        $log['area_id'] = $modeloxx->area_id;
        $log['s_descripcion'] = $modeloxx->s_descripcion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['estusuario_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AgTema $modeloxx)
    {
        HAgTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTema "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTema  $modeloxx
     * @return void
     */
    public function updated(AgTema $modeloxx)
    {
        HAgTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTema "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTema  $modeloxx
     * @return void
     */
    public function deleted(AgTema $modeloxx)
    {
        HAgTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTema "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTema  $modeloxx
     * @return void
     */
    public function restored(AgTema $modeloxx)
    {
        HAgTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgTema "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgTema  $modeloxx
     * @return void
     */
    public function forceDeleted(AgTema $modeloxx)
    {
        HAgTema::create($this->getLog($modeloxx));
    }
}