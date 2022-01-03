<?php

namespace App\Observers;

use App\Models\Actaencu\AeRecurso;
use App\Models\Actaencu\Logs\HAeRecurso;

class AeRecursoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['ae_encuentro_id'] = $modeloxx->ae_encuentro_id;
        $log['ae_recuadmi_id'] = $modeloxx->ae_recuadmi_id;
        $log['cantidad'] = $modeloxx->cantidad;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(AeRecurso $modeloxx)
    {
        HAeRecurso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\AeRecurso  $modeloxx
     * @return void
     */
    public function updated(AeRecurso $modeloxx)
    {
        HAeRecurso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeRecurso "deleted" event.
     *
     * @param  \App\Models\Actaencu\AeRecurso  $modeloxx
     * @return void
     */
    public function deleted(AeRecurso $modeloxx)
    {
        HAeRecurso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeRecurso "restored" event.
     *
     * @param  \App\Models\Actaencu\AeRecurso  $modeloxx
     * @return void
     */
    public function restored(AeRecurso $modeloxx)
    {
        HAeRecurso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeRecurso "force deleted" event.
     *
     * @param  \App\Models\Actaencu\AeRecurso  $modeloxx
     * @return void
     */
    public function forceDeleted(AeRecurso $modeloxx)
    {
        HAeRecurso::create($this->getLog($modeloxx));
    }
}