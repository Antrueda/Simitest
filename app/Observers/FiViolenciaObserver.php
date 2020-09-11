<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiViolencia;
use App\Models\fichaIngreso\Logs\HFiViolencia;

class FiViolenciaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_presenta_violencia_id'] = $modeloxx->i_prm_presenta_violencia_id;
        $log['prm_ejerviol_id'] = $modeloxx->prm_ejerviol_id;
        $log['prm_cabefami_id'] = $modeloxx->prm_cabefami_id;
        $log['i_prm_violencia_genero_id'] = $modeloxx->i_prm_violencia_genero_id;
        $log['i_prm_condicion_presenta_id'] = $modeloxx->i_prm_condicion_presenta_id;
        $log['i_prm_depto_condicion_id'] = $modeloxx->i_prm_depto_condicion_id;
        $log['i_prm_municipio_condicion_id'] = $modeloxx->i_prm_municipio_condicion_id;
        $log['i_prm_tiene_certificado_id'] = $modeloxx->i_prm_tiene_certificado_id;
        $log['i_prm_depto_certifica_id'] = $modeloxx->i_prm_depto_certifica_id;
        $log['i_prm_municipio_certifica_id'] = $modeloxx->i_prm_municipio_certifica_id;
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

    public function created(FiViolencia $modeloxx)
    {
        HFiViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiViolencia "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolencia  $modeloxx
     * @return void
     */
    public function updated(FiViolencia $modeloxx)
    {
        HFiViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiViolencia "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolencia  $modeloxx
     * @return void
     */
    public function deleted(FiViolencia $modeloxx)
    {
        HFiViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiViolencia "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolencia  $modeloxx
     * @return void
     */
    public function restored(FiViolencia $modeloxx)
    {
        HFiViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiViolencia "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolencia  $modeloxx
     * @return void
     */
    public function forceDeleted(FiViolencia $modeloxx)
    {
        HFiViolencia::create($this->getLog($modeloxx));
    }
}
