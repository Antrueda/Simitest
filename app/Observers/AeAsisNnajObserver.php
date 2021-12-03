<?php

namespace App\Observers;

use App\Models\Actaencu\AeAsisNnaj;
use App\Models\Actaencu\Logs\HAeAsisNnaj;

class AeAsisNnajObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['ae_asistencia_id'] = $modeloxx->ae_asistencia_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(AeAsisNnaj $modeloxx)
    {
        HAeAsisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\AeAsisNnaj  $modeloxx
     * @return void
     */
    public function updated(AeAsisNnaj $modeloxx)
    {
        HAeAsisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeAsisNnaj "deleted" event.
     *
     * @param  \App\Models\Actaencu\AeAsisNnaj  $modeloxx
     * @return void
     */
    public function deleted(AeAsisNnaj $modeloxx)
    {
        HAeAsisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeAsisNnaj "restored" event.
     *
     * @param  \App\Models\Actaencu\AeAsisNnaj  $modeloxx
     * @return void
     */
    public function restored(AeAsisNnaj $modeloxx)
    {
        HAeAsisNnaj::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeAsisNnaj "force deleted" event.
     *
     * @param  \App\Models\Actaencu\AeAsisNnaj  $modeloxx
     * @return void
     */
    public function forceDeleted(AeAsisNnaj $modeloxx)
    {
        HAeAsisNnaj::create($this->getLog($modeloxx));
    }
}