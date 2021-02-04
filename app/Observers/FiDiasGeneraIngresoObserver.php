<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiDiasGeneraIngreso;
use App\Models\fichaIngreso\Logs\HFiDiasGeneraIngreso;

class FiDiasGeneraIngresoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_generacion_ingreso_id'] = $modeloxx->fi_generacion_ingreso_id;
        $log['prm_diagener_id'] = $modeloxx->prm_diagener_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiDiasGeneraIngreso $modeloxx)
    {
        HFiDiasGeneraIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDiasGeneraIngreso "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiasGeneraIngreso  $modeloxx
     * @return void
     */
    public function updated(FiDiasGeneraIngreso $modeloxx)
    {
        HFiDiasGeneraIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDiasGeneraIngreso "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiasGeneraIngreso  $modeloxx
     * @return void
     */
    public function deleted(FiDiasGeneraIngreso $modeloxx)
    {
        HFiDiasGeneraIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDiasGeneraIngreso "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiasGeneraIngreso  $modeloxx
     * @return void
     */
    public function restored(FiDiasGeneraIngreso $modeloxx)
    {
        HFiDiasGeneraIngreso::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDiasGeneraIngreso "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiasGeneraIngreso  $modeloxx
     * @return void
     */
    public function forceDeleted(FiDiasGeneraIngreso $modeloxx)
    {
        HFiDiasGeneraIngreso::create($this->getLog($modeloxx));
    }
}