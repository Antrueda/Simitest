<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiRedApoyoActual;
use App\Models\fichaIngreso\Logs\HFiRedApoyoActual;

class FiRedApoyoActualObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['i_prm_tipo_red_id'] = $modeloxx->i_prm_tipo_red_id;
        $log['s_nombre_persona'] = $modeloxx->s_nombre_persona;
        $log['s_servicio'] = $modeloxx->s_servicio;
        $log['s_telefono'] = $modeloxx->s_telefono;
        $log['s_direccion'] = $modeloxx->s_direccion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiRedApoyoActual $modeloxx)
    {
        HFiRedApoyoActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedApoyoActual "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiRedApoyoActual  $modeloxx
     * @return void
     */
    public function updated(FiRedApoyoActual $modeloxx)
    {
        HFiRedApoyoActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedApoyoActual "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRedApoyoActual  $modeloxx
     * @return void
     */
    public function deleted(FiRedApoyoActual $modeloxx)
    {
        HFiRedApoyoActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedApoyoActual "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiRedApoyoActual  $modeloxx
     * @return void
     */
    public function restored(FiRedApoyoActual $modeloxx)
    {
        HFiRedApoyoActual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedApoyoActual "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiRedApoyoActual  $modeloxx
     * @return void
     */
    public function forceDeleted(FiRedApoyoActual $modeloxx)
    {
        HFiRedApoyoActual::create($this->getLog($modeloxx));
    }
}