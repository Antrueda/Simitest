<?php

namespace App\Observers;

use App\Models\fichaIngreso\NnajFiCsd;
use App\Models\Logs\HNnajFiCsd;

class NnajFiCsdObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
        $log['prm_etnia_id'] = $modeloxx->prm_etnia_id;
        $log['prm_poblacion_etnia_id'] = $modeloxx->prm_poblacion_etnia_id;
        $log['s_apodo'] = $modeloxx->s_apodo;
        $log['prm_gsanguino_id'] = $modeloxx->prm_gsanguino_id;
        $log['prm_factor_rh_id'] = $modeloxx->prm_factor_rh_id;
        $log['prm_estado_civil_id'] = $modeloxx->prm_estado_civil_id;
        $log['sis_docfuen_id'] = $modeloxx->sis_docfuen_id;
        $log['deleted_at'] = $modeloxx->deleted_at;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(NnajFiCsd $modeloxx)
    {
        HNnajFiCsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajFiCsd "updated" event.
     *
     * @param  App\Models\Logs\HNnajFiCsd  $modeloxx
     * @return void
     */
    public function updated(NnajFiCsd $modeloxx)
    {
        HNnajFiCsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajFiCsd "deleted" event.
     *
     * @param  App\Models\Logs\HNnajFiCsd  $modeloxx
     * @return void
     */
    public function deleted(NnajFiCsd $modeloxx)
    {
        HNnajFiCsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajFiCsd "restored" event.
     *
     * @param  App\Models\Logs\HNnajFiCsd  $modeloxx
     * @return void
     */
    public function restored(NnajFiCsd $modeloxx)
    {
        HNnajFiCsd::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajFiCsd "force deleted" event.
     *
     * @param  App\Models\Logs\HNnajFiCsd  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajFiCsd $modeloxx)
    {
        HNnajFiCsd::create($this->getLog($modeloxx));
    }
}