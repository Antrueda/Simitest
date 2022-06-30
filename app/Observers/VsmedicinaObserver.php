<?php

namespace App\Observers;

use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Logs\HVsmedicina;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Vsmedicina;

class VsmedicinaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['upi_id'] = $modeloxx->upi_id;
        $log['upiorigen_id'] = $modeloxx->upiorigen_id;
        $log['afili_id'] = $modeloxx->afili_id;
        $log['entidad_id'] = $modeloxx->entidad_id;
        $log['fecha'] = $modeloxx->fecha;
        $log['consul_id'] = $modeloxx->consul_id;
        $log['entidad_id'] = $modeloxx->entidad_id;
        $log['poblaci_id'] = $modeloxx->poblaci_id;
        $log['remigen_id'] = $modeloxx->remigen_id;
        $log['remisal_id'] = $modeloxx->remisal_id;
        $log['remiint_id'] = $modeloxx->remiint_id;
        $log['remiesp_id'] = $modeloxx->remiesp_id;
        $log['certifi_id'] = $modeloxx->certifi_id;
        $log['remico_id'] = $modeloxx->remico_id;
        $log['recomenda'] = $modeloxx->recomenda;
        $log['motivoval'] = $modeloxx->motivoval;
        $log['user_id'] = $modeloxx->user_id;
        $log['modal_id'] = $modeloxx->modal_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(Vsmedicina $modeloxx)
    {
        HVsmedicina::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "updated" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function updated(Vsmedicina $modeloxx)
    {
        HVsmedicina::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function deleted(Vsmedicina $modeloxx)
    {
        HVsmedicina::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "restored" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function restored(Vsmedicina $modeloxx)
    {
        HVsmedicina::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "force deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function forceDeleted(Vsmedicina $modeloxx)
    {
        HVsmedicina::create($this->getLog($modeloxx));
    }
}