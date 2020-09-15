<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiProcesoPard;
use App\Models\fichaIngreso\Logs\HFiProcesoPard;

class FiProcesoPardObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_justrest_id'] = $modeloxx->fi_justrest_id;
        $log['i_prm_ha_estado_pard_id'] = $modeloxx->i_prm_ha_estado_pard_id;
        $log['i_prm_actualmente_pard_id'] = $modeloxx->i_prm_actualmente_pard_id;
        $log['i_prm_tipo_tiempo_pard_id'] = $modeloxx->i_prm_tipo_tiempo_pard_id;
        $log['i_cuanto_pard'] = $modeloxx->i_cuanto_pard;
        $log['i_prm_motivo_pard_id'] = $modeloxx->i_prm_motivo_pard_id;
        $log['s_nombre_defensor'] = $modeloxx->s_nombre_defensor;
        $log['s_telefono_defensor'] = $modeloxx->s_telefono_defensor;
        $log['s_lugar_abierto_pard'] = $modeloxx->s_lugar_abierto_pard;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiProcesoPard $modeloxx)
    {
        HFiProcesoPard::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoPard "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoPard  $modeloxx
     * @return void
     */
    public function updated(FiProcesoPard $modeloxx)
    {
        HFiProcesoPard::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoPard "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoPard  $modeloxx
     * @return void
     */
    public function deleted(FiProcesoPard $modeloxx)
    {
        HFiProcesoPard::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoPard "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoPard  $modeloxx
     * @return void
     */
    public function restored(FiProcesoPard $modeloxx)
    {
        HFiProcesoPard::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiProcesoPard "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiProcesoPard  $modeloxx
     * @return void
     */
    public function forceDeleted(FiProcesoPard $modeloxx)
    {
        HFiProcesoPard::create($this->getLog($modeloxx));
    }
}
