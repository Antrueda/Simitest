<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisEntidadSalud;
use App\Models\Sistema\SisEntidadSalud;

class SisEntidadSaludObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_nombre_entidad'] = $modeloxx->s_nombre_entidad;
        $log['i_prm_tentidad_id'] = $modeloxx->i_prm_tentidad_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisEntidadSalud $modeloxx)
    {
        HSisEntidadSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEntidadSalud "updated" event.
     *
     * @param  \App\Models\Sistema\SisEntidadSalud  $modeloxx
     * @return void
     */
    public function updated(SisEntidadSalud $modeloxx)
    {
        HSisEntidadSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEntidadSalud "deleted" event.
     *
     * @param  \App\Models\Sistema\SisEntidadSalud  $modeloxx
     * @return void
     */
    public function deleted(SisEntidadSalud $modeloxx)
    {
        HSisEntidadSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEntidadSalud "restored" event.
     *
     * @param  \App\Models\Sistema\SisEntidadSalud  $modeloxx
     * @return void
     */
    public function restored(SisEntidadSalud $modeloxx)
    {
        HSisEntidadSalud::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEntidadSalud "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisEntidadSalud  $modeloxx
     * @return void
     */
    public function forceDeleted(SisEntidadSalud $modeloxx)
    {
        HSisEntidadSalud::create($this->getLog($modeloxx));
    }
}