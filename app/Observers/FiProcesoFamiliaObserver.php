<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiProcesoFamilia;
use App\Models\fichaIngreso\Logs\HFiProcesoFamilia;

class FiProcesoFamiliaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_justrest_id'] = $modeloxx->fi_justrest_id;
        $log['fi_compfami_id'] = $modeloxx->fi_compfami_id;
        $log['s_proceso'] = $modeloxx->s_proceso;
        $log['i_prm_vigente_id'] = $modeloxx->i_prm_vigente_id;
        $log['i_numero_veces'] = $modeloxx->i_numero_veces;
        $log['s_motivo'] = $modeloxx->s_motivo;
        $log['i_hace_cuanto'] = $modeloxx->i_hace_cuanto;
        $log['i_prm_tipo_tiempo_id'] = $modeloxx->i_prm_tipo_tiempo_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiProcesoFamilia $modeloxx)
    {
        HFiProcesoFamilia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoFamilia "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoFamilia  $modeloxx
     * @return void
     */
    public function updated(FiProcesoFamilia $modeloxx)
    {
        HFiProcesoFamilia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoFamilia "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoFamilia  $modeloxx
     * @return void
     */
    public function deleted(FiProcesoFamilia $modeloxx)
    {
        HFiProcesoFamilia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoFamilia "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoFamilia  $modeloxx
     * @return void
     */
    public function restored(FiProcesoFamilia $modeloxx)
    {
        HFiProcesoFamilia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoFamilia "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoFamilia  $modeloxx
     * @return void
     */
    public function forceDeleted(FiProcesoFamilia $modeloxx)
    {
        HFiProcesoFamilia::create($this->getLog($modeloxx));
    }
}
