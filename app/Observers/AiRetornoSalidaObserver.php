<?php

namespace App\Observers;

use App\Models\Acciones\Individuales\AiRetornoSalida;
use App\Models\Acciones\Individuales\Logs\HAiRetornoSalida;

class AiRetornoSalidaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['prm_upi_id'] = $modeloxx->prm_upi_id;
        $log['fecha'] = $modeloxx->fecha;
        $log['hora_retorno'] = $modeloxx->hora_retorno;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['observaciones'] = $modeloxx->observaciones;
        $log['nombres_retorna'] = $modeloxx->nombres_retorna;
        $log['prm_doc_id'] = $modeloxx->prm_doc_id;
        $log['doc_retorna'] = $modeloxx->doc_retorna;
        $log['prm_parentezco_id'] = $modeloxx->prm_parentezco_id;
        $log['responsable'] = $modeloxx->responsable;
        $log['user_doc1_id'] = $modeloxx->user_doc1_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AiRetornoSalida $modeloxx)
    {
        HAiRetornoSalida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "updated" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function updated(AiRetornoSalida $modeloxx)
    {
        HAiRetornoSalida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function deleted(AiRetornoSalida $modeloxx)
    {
        HAiRetornoSalida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "restored" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function restored(AiRetornoSalida $modeloxx)
    {
        HAiRetornoSalida::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "force deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function forceDeleted(AiRetornoSalida $modeloxx)
    {
        HAiRetornoSalida::create($this->getLog($modeloxx));
    }
}