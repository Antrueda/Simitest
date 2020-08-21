<?php

namespace App\Observers;

use App\Models\Acciones\Grupales\AgContexto;
use App\Models\Acciones\Grupales\Logs\HAgContexto;

class AgContextoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_contexto'] = $modeloxx->s_contexto;
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

    public function created(AgContexto $modeloxx)
    {
        HAgContexto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgContexto "updated" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgContexto  $modeloxx
     * @return void
     */
    public function updated(AgContexto $modeloxx)
    {
        HAgContexto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgContexto "deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgContexto  $modeloxx
     * @return void
     */
    public function deleted(AgContexto $modeloxx)
    {
        HAgContexto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgContexto "restored" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgContexto  $modeloxx
     * @return void
     */
    public function restored(AgContexto $modeloxx)
    {
        HAgContexto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AgContexto "force deleted" event.
     *
     * @param  \App\Models\Acciones\Grupales\AgContexto  $modeloxx
     * @return void
     */
    public function forceDeleted(AgContexto $modeloxx)
    {
        HAgContexto::create($this->getLog($modeloxx));
    }
}
