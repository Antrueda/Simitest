<?php

namespace App\Observers;

use App\Models\Logs\HTema;
use App\Models\Tema;

class TemaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['nombre'] = $modeloxx->nombre;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(Tema $modeloxx)
    {
        HTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Tema "updated" event.
     *
     * @param  \App\Models\Tema  $modeloxx
     * @return void
     */
    public function updated(Tema $modeloxx)
    {
        HTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Tema "deleted" event.
     *
     * @param  \App\Models\Tema  $modeloxx
     * @return void
     */
    public function deleted(Tema $modeloxx)
    {
        HTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Tema "restored" event.
     *
     * @param  \App\Models\Tema  $modeloxx
     * @return void
     */
    public function restored(Tema $modeloxx)
    {
        HTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Tema "force deleted" event.
     *
     * @param  \App\Models\Tema  $modeloxx
     * @return void
     */
    public function forceDeleted(Tema $modeloxx)
    {
        HTema::create($this->getLog($modeloxx));
    }
}