<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiRedesApoyo;
use App\Models\fichaIngreso\Logs\HFiRedesApoyo;

class FiRedesApoyoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['entidadAtiende_id'] = $modeloxx->entidadAtiende_id;
        $log['ServPrestados_id'] = $modeloxx->ServPrestados_id;
        $log['tiempoBeneficio'] = $modeloxx->tiempoBeneficio;
        $log['duracion_id'] = $modeloxx->duracion_id;
        $log['tiempoPrestacion_id'] = $modeloxx->tiempoPrestacion_id;
        $log['tipoRed_id'] = $modeloxx->tipoRed_id;
        $log['tipoRedPersona_id'] = $modeloxx->tipoRedPersona_id;
        $log['nombrePersona'] = $modeloxx->nombrePersona;
        $log['servBenePersona_id'] = $modeloxx->servBenePersona_id;
        $log['entidadAtiendeActual_id'] = $modeloxx->entidadAtiendeActual_id;
        $log['durTiempoBen_id'] = $modeloxx->durTiempoBen_id;
        $log['anioPrestServicio_id'] = $modeloxx->anioPrestServicio_id;
        $log['telApoyo'] = $modeloxx->telApoyo;
        $log['dirApoyo'] = $modeloxx->dirApoyo;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiRedesApoyo $modeloxx)
    {
        HFiRedesApoyo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedesApoyo "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiRedesApoyo  $modeloxx
     * @return void
     */
    public function updated(FiRedesApoyo $modeloxx)
    {
        HFiRedesApoyo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedesApoyo "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRedesApoyo  $modeloxx
     * @return void
     */
    public function deleted(FiRedesApoyo $modeloxx)
    {
        HFiRedesApoyo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedesApoyo "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiRedesApoyo  $modeloxx
     * @return void
     */
    public function restored(FiRedesApoyo $modeloxx)
    {
        HFiRedesApoyo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedesApoyo "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRedesApoyo  $modeloxx
     * @return void
     */
    public function forceDeleted(FiRedesApoyo $modeloxx)
    {
        HFiRedesApoyo::create($this->getLog($modeloxx));
    }
}