<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiObservacione;
use App\Models\fichaIngreso\Logs\HFiObservacione;

class FiObservacionesObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['observaciones'] = $modeloxx->observaciones;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiObservacione $modeloxx)
    {
        HFiObservacione::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRazone "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiRazone  $modeloxx
     * @return void
     */
    public function updated(FiObservacione $modeloxx)
    {
        HFiObservacione::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiObservacione "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiObservacione  $modeloxx
     * @return void
     */
    public function deleted(FiObservacione $modeloxx)
    {
        HFiObservacione::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiObservacione "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiObservacione  $modeloxx
     * @return void
     */
    public function restored(FiObservacione $modeloxx)
    {
        HFiObservacione::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiObservacione "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiObservacione  $modeloxx
     * @return void
     */
    public function forceDeleted(FiObservacione $modeloxx)
    {
        HFiObservacione::create($this->getLog($modeloxx));
    }
}