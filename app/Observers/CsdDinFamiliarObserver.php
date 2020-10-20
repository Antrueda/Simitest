<?php

namespace App\Observers;

use App\Models\consulta\CsdDinFamiliar;
use App\Models\consulta\Logs\HCsdDinFamiliar;

class CsdDinFamiliarObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['relevantes'] = $modeloxx->relevantes;
        $log['s_doc_adjunto'] = $modeloxx->s_doc_adjunto;        
        $log['prm_familiar_id'] = $modeloxx->prm_familiar_id;
        $log['prm_hogar_id'] = $modeloxx->prm_hogar_id;
        $log['descripcion_0'] = $modeloxx->descripcion_0;
        $log['prm_bogota_id'] = $modeloxx->prm_bogota_id;
        $log['prm_traslado_id'] = $modeloxx->prm_traslado_id;
        $log['jefe1'] = $modeloxx->jefe1;
        $log['prm_jefe1_id'] = $modeloxx->prm_jefe1_id;
        $log['jefe2'] = $modeloxx->jefe2;
        $log['prm_jefe2_id'] = $modeloxx->prm_jefe2_id;
        $log['descripcion_1'] = $modeloxx->descripcion_1;
        $log['prm_cuidador_id'] = $modeloxx->prm_cuidador_id;
        $log['descripcion_2'] = $modeloxx->descripcion_2;
        $log['afronta'] = $modeloxx->afronta;
        $log['prm_norma_id'] = $modeloxx->prm_norma_id;
        $log['prm_conoce_id'] = $modeloxx->prm_conoce_id;
        $log['observacion'] = $modeloxx->observacion;
        $log['prm_actuan_id'] = $modeloxx->prm_actuan_id;
        $log['porque'] = $modeloxx->porque;
        $log['prm_solucion_id'] = $modeloxx->prm_solucion_id;
        $log['prm_problema_id'] = $modeloxx->prm_problema_id;
        $log['prm_destaca_id'] = $modeloxx->prm_destaca_id;
        $log['prm_positivo_id'] = $modeloxx->prm_positivo_id;
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

    public function created(CsdDinFamiliar $modeloxx)
    {
        HCsdDinFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinFamiliar "updated" event.
     *
     * @param  \App\Models\consulta\CsdDinFamiliar  $modeloxx
     * @return void
     */
    public function updated(CsdDinFamiliar $modeloxx)
    {
        HCsdDinFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinFamiliar "deleted" event.
     *
     * @param  \App\Models\consulta\CsdDinFamiliar  $modeloxx
     * @return void
     */
    public function deleted(CsdDinFamiliar $modeloxx)
    {
        HCsdDinFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinFamiliar "restored" event.
     *
     * @param  \App\Models\consulta\CsdDinFamiliar  $modeloxx
     * @return void
     */
    public function restored(CsdDinFamiliar $modeloxx)
    {
        HCsdDinFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDinFamiliar "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdDinFamiliar  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdDinFamiliar $modeloxx)
    {
        HCsdDinFamiliar::create($this->getLog($modeloxx));
    }
}