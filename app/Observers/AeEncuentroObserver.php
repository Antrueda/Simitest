<?php

namespace App\Observers;

use App\Models\Actaencu\AeEncuentro;
use App\Models\Actaencu\Logs\HAeEncuentro;

class AeEncuentroObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
        $log['sis_servicio_id'] = $modeloxx->sis_servicio_id;
        $log['sis_localidad_id'] = $modeloxx->sis_localidad_id;
        $log['sis_upz_id'] = $modeloxx->sis_upz_id;
        $log['fechdili'] = $modeloxx->fechdili;
        $log['sis_barrio_id'] = $modeloxx->sis_barrio_id;
        $log['prm_accion_id'] = $modeloxx->prm_accion_id;
        $log['prm_actividad_id'] = $modeloxx->prm_actividad_id;
        $log['user_contdili_id'] = $modeloxx->user_contdili_id;
        $log['user_funcontr_id'] = $modeloxx->user_funcontr_id;
        $log['respoupi_id'] = $modeloxx->respoupi_id;
        $log['objetivo'] = $modeloxx->objetivo;
        $log['desarrollo_actividad'] = $modeloxx->desarrollo_actividad;
        $log['metodologia'] = $modeloxx->metodologia;
        $log['observaciones'] = $modeloxx->observaciones;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(AeEncuentro $modeloxx)
    {
        HAeEncuentro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\AeEncuentro  $modeloxx
     * @return void
     */
    public function updated(AeEncuentro $modeloxx)
    {
        HAeEncuentro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeEncuentro "deleted" event.
     *
     * @param  \App\Models\Actaencu\AeEncuentro  $modeloxx
     * @return void
     */
    public function deleted(AeEncuentro $modeloxx)
    {
        HAeEncuentro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeEncuentro "restored" event.
     *
     * @param  \App\Models\Actaencu\AeEncuentro  $modeloxx
     * @return void
     */
    public function restored(AeEncuentro $modeloxx)
    {
        HAeEncuentro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeEncuentro "force deleted" event.
     *
     * @param  \App\Models\Actaencu\AeEncuentro  $modeloxx
     * @return void
     */
    public function forceDeleted(AeEncuentro $modeloxx)
    {
        HAeEncuentro::create($this->getLog($modeloxx));
    }
}