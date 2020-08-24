<?php

namespace App\Observers;

use App\Models\consulta\CsdGenIngreso;
use App\Models\consulta\Logs\HCsdGenIngreso;

class CsdGenIngresoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['observacion'] = $modeloxx->observacion;
        $log['prm_actividad_id'] = $modeloxx->prm_actividad_id;
        $log['trabaja'] = $modeloxx->trabaja;
        $log['prm_informal_id'] = $modeloxx->prm_informal_id;
        $log['prm_otra_id'] = $modeloxx->prm_otra_id;
        $log['prm_laboral_id'] = $modeloxx->prm_laboral_id;
        $log['prm_frecuencia_id'] = $modeloxx->prm_frecuencia_id;
        $log['intensidad'] = $modeloxx->intensidad;
        $log['prm_dificultad_id'] = $modeloxx->prm_dificultad_id;
        $log['razon'] = $modeloxx->razon;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(CsdGenIngreso $modeloxx)
    {
        HCsdGenIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdGenIngreso "updated" event.
     *
     * @param  \App\Models\consulta\CsdGenIngreso  $modeloxx
     * @return void
     */
    public function updated(CsdGenIngreso $modeloxx)
    {
        HCsdGenIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdGenIngreso "deleted" event.
     *
     * @param  \App\Models\consulta\CsdGenIngreso  $modeloxx
     * @return void
     */
    public function deleted(CsdGenIngreso $modeloxx)
    {
        HCsdGenIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdGenIngreso "restored" event.
     *
     * @param  \App\Models\consulta\CsdGenIngreso  $modeloxx
     * @return void
     */
    public function restored(CsdGenIngreso $modeloxx)
    {
        HCsdGenIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdGenIngreso "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdGenIngreso  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdGenIngreso $modeloxx)
    {
        HCsdGenIngreso::create($this->getLog($modeloxx));
    }
}