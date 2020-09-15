<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiProcesoSpoa;
use App\Models\fichaIngreso\Logs\HFiProcesoSpoa;

class FiProcesoSpoaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_justrest_id'] = $modeloxx->fi_justrest_id;
        $log['i_prm_ha_estado_spoa_id'] = $modeloxx->i_prm_ha_estado_spoa_id;
        $log['i_prm_actualmente_spoa_id'] = $modeloxx->i_prm_actualmente_spoa_id;
        $log['i_prm_tipo_tiempo_spoa_id'] = $modeloxx->i_prm_tipo_tiempo_spoa_id;
        $log['i_cuanto_spoa'] = $modeloxx->i_cuanto_spoa;
        $log['i_prm_motivo_spoa_id'] = $modeloxx->i_prm_motivo_spoa_id;
        $log['i_prm_mod_cumple_pena_id'] = $modeloxx->i_prm_mod_cumple_pena_id;
        $log['i_prm_ha_estado_preso_id'] = $modeloxx->i_prm_ha_estado_preso_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiProcesoSpoa $modeloxx)
    {
        HFiProcesoSpoa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoSpoa "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoSpoa  $modeloxx
     * @return void
     */
    public function updated(FiProcesoSpoa $modeloxx)
    {
        HFiProcesoSpoa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoSpoa "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoSpoa  $modeloxx
     * @return void
     */
    public function deleted(FiProcesoSpoa $modeloxx)
    {
        HFiProcesoSpoa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoSpoa "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoSpoa  $modeloxx
     * @return void
     */
    public function restored(FiProcesoSpoa $modeloxx)
    {
        HFiProcesoSpoa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoSpoa "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoSpoa  $modeloxx
     * @return void
     */
    public function forceDeleted(FiProcesoSpoa $modeloxx)
    {
        HFiProcesoSpoa::create($this->getLog($modeloxx));
    }
}
