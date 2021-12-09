<?php

namespace App\Observers;

use App\Models\Actaencu\AeAsistencia;
use App\Models\Actaencu\Logs\HAeAsistencia;

class AeAsistenciaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['ae_encuentro_id'] = $modeloxx->ae_encuentro_id;
        $log['user_funcontr_id'] = $modeloxx->user_funcontr_id;
        $log['respoupi_id'] = $modeloxx->respoupi_id;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(AeAsistencia $modeloxx)
    {
        HAeAsistencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\AeAsistencia  $modeloxx
     * @return void
     */
    public function updated(AeAsistencia $modeloxx)
    {
        HAeAsistencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeAsistencia "deleted" event.
     *
     * @param  \App\Models\Actaencu\AeAsistencia  $modeloxx
     * @return void
     */
    public function deleted(AeAsistencia $modeloxx)
    {
        HAeAsistencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeAsistencia "restored" event.
     *
     * @param  \App\Models\Actaencu\AeAsistencia  $modeloxx
     * @return void
     */
    public function restored(AeAsistencia $modeloxx)
    {
        HAeAsistencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeAsistencia "force deleted" event.
     *
     * @param  \App\Models\Actaencu\AeAsistencia  $modeloxx
     * @return void
     */
    public function forceDeleted(AeAsistencia $modeloxx)
    {
        HAeAsistencia::create($this->getLog($modeloxx));
    }
}