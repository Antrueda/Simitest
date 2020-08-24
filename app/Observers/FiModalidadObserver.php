<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiModalidad;
use App\Models\fichaIngreso\Logs\HFiModalidad;

class FiModalidadObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_autorizacion_id'] = $modeloxx->fi_autorizacion_id;
        $log['i_prm_modalidad_id'] = $modeloxx->i_prm_modalidad_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiModalidad $modeloxx)
    {
        HFiModalidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiModalidad "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiModalidad  $modeloxx
     * @return void
     */
    public function updated(FiModalidad $modeloxx)
    {
        HFiModalidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiModalidad "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiModalidad  $modeloxx
     * @return void
     */
    public function deleted(FiModalidad $modeloxx)
    {
        HFiModalidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiModalidad "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiModalidad  $modeloxx
     * @return void
     */
    public function restored(FiModalidad $modeloxx)
    {
        HFiModalidad::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiModalidad "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiModalidad  $modeloxx
     * @return void
     */
    public function forceDeleted(FiModalidad $modeloxx)
    {
        HFiModalidad::create($this->getLog($modeloxx));
    }
}