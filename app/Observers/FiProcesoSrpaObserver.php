<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiProcesoSrpa;
use App\Models\fichaIngreso\Logs\HFiProcesoSrpa;

class FiProcesoSrpaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_justicia_restaurativa_id'] = $modeloxx->fi_justicia_restaurativa_id;
        $log['i_prm_ha_estado_srpa_id'] = $modeloxx->i_prm_ha_estado_srpa_id;
        $log['i_prm_actualmente_srpa_id'] = $modeloxx->i_prm_actualmente_srpa_id;
        $log['i_prm_tipo_tiempo_srpa_id'] = $modeloxx->i_prm_tipo_tiempo_srpa_id;
        $log['i_cuanto_srpa'] = $modeloxx->i_cuanto_srpa;
        $log['i_prm_motivo_srpa_id'] = $modeloxx->i_prm_motivo_srpa_id;
        $log['i_prm_sancion_srpa_id'] = $modeloxx->i_prm_sancion_srpa_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiProcesoSrpa $modeloxx)
    {
        HFiProcesoSrpa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoSrpa "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoSrpa  $modeloxx
     * @return void
     */
    public function updated(FiProcesoSrpa $modeloxx)
    {
        HFiProcesoSrpa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoSrpa "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoSrpa  $modeloxx
     * @return void
     */
    public function deleted(FiProcesoSrpa $modeloxx)
    {
        HFiProcesoSrpa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoSrpa "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoSrpa  $modeloxx
     * @return void
     */
    public function restored(FiProcesoSrpa $modeloxx)
    {
        HFiProcesoSrpa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoSrpa "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoSrpa  $modeloxx
     * @return void
     */
    public function forceDeleted(FiProcesoSrpa $modeloxx)
    {
        HFiProcesoSrpa::create($this->getLog($modeloxx));
    }
}