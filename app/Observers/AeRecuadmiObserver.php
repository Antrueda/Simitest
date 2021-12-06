<?php

namespace App\Observers;

use App\Models\Actaencu\AeRecuadmi;
use App\Models\Actaencu\Logs\HAeRecuadmi;

class AeRecuadmiObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_recurso'] = $modeloxx->s_recurso;
        $log['prm_trecurso_id'] = $modeloxx->prm_trecurso_id;
        $log['prm_umedida_id'] = $modeloxx->prm_umedida_id;
        $log['estusuario_id'] = $modeloxx->estusuario_id;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(AeRecuadmi $modeloxx)
    {
        HAeRecuadmi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\AeRecuadmi  $modeloxx
     * @return void
     */
    public function updated(AeRecuadmi $modeloxx)
    {
        HAeRecuadmi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeRecuadmi "deleted" event.
     *
     * @param  \App\Models\Actaencu\AeRecuadmi  $modeloxx
     * @return void
     */
    public function deleted(AeRecuadmi $modeloxx)
    {
        HAeRecuadmi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeRecuadmi "restored" event.
     *
     * @param  \App\Models\Actaencu\AeRecuadmi  $modeloxx
     * @return void
     */
    public function restored(AeRecuadmi $modeloxx)
    {
        HAeRecuadmi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeRecuadmi "force deleted" event.
     *
     * @param  \App\Models\Actaencu\AeRecuadmi  $modeloxx
     * @return void
     */
    public function forceDeleted(AeRecuadmi $modeloxx)
    {
        HAeRecuadmi::create($this->getLog($modeloxx));
    }
}