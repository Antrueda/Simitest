<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiJustrest;
use App\Models\fichaIngreso\Logs\HFiJustrest;

class FiJustrestObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['i_prm_vinculado_violencia_id'] = $modeloxx->i_prm_vinculado_violencia_id;
        $log['i_prm_causa_vincula_vio_id'] = $modeloxx->i_prm_causa_vincula_vio_id;
        $log['i_prm_riesgo_participar_id'] = $modeloxx->i_prm_riesgo_participar_id;
        $log['i_prm_causa_riesgo_part_id'] = $modeloxx->i_prm_causa_riesgo_part_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiJustrest $modeloxx)
    {
        HFiJustrest::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJustrest "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiJustrest  $modeloxx
     * @return void
     */
    public function updated(FiJustrest $modeloxx)
    {
        HFiJustrest::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJustrest "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiJustrest  $modeloxx
     * @return void
     */
    public function deleted(FiJustrest $modeloxx)
    {
        HFiJustrest::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJustrest "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiJustrest  $modeloxx
     * @return void
     */
    public function restored(FiJustrest $modeloxx)
    {
        HFiJustrest::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiJustrest "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiJustrest  $modeloxx
     * @return void
     */
    public function forceDeleted(FiJustrest $modeloxx)
    {
        HFiJustrest::create($this->getLog($modeloxx));
    }
}
