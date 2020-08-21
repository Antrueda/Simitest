<?php

namespace App\Observers;

use App\Models\consulta\CsdViolencia;
use App\Models\consulta\Logs\HCsdViolencia;

class CsdViolenciaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['prm_condicion_id'] = $modeloxx->prm_condicion_id;
        $log['departamento_cond_id'] = $modeloxx->departamento_cond_id;
        $log['municipio_cond_id'] = $modeloxx->municipio_cond_id;
        $log['prm_certificado_id'] = $modeloxx->prm_certificado_id;
        $log['departamento_cert_id'] = $modeloxx->departamento_cert_id;
        $log['municipio_cert_id'] = $modeloxx->municipio_cert_id;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(CsdViolencia $modeloxx)
    {
        HCsdViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdViolencia "updated" event.
     *
     * @param  \App\Models\consulta\CsdViolencia  $modeloxx
     * @return void
     */
    public function updated(CsdViolencia $modeloxx)
    {
        HCsdViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdViolencia "deleted" event.
     *
     * @param  \App\Models\consulta\CsdViolencia  $modeloxx
     * @return void
     */
    public function deleted(CsdViolencia $modeloxx)
    {
        HCsdViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdViolencia "restored" event.
     *
     * @param  \App\Models\consulta\CsdViolencia  $modeloxx
     * @return void
     */
    public function restored(CsdViolencia $modeloxx)
    {
        HCsdViolencia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdViolencia "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdViolencia  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdViolencia $modeloxx)
    {
        HCsdViolencia::create($this->getLog($modeloxx));
    }
}