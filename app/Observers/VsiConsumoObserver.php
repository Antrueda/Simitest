<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiConsumo;
use App\Models\sicosocial\VsiConsumo;

class VsiConsumoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_consumo_id'] = $modeloxx->prm_consumo_id;
        $log['cantidad'] = $modeloxx->cantidad;
        $log['inicio'] = $modeloxx->inicio;
        $log['prm_contexto_ini_id'] = $modeloxx->prm_contexto_ini_id;
        $log['prm_consume_id'] = $modeloxx->prm_consume_id;
        $log['prm_contexto_man_id'] = $modeloxx->prm_contexto_man_id;
        $log['prm_problema_id'] = $modeloxx->prm_problema_id;
        $log['porque'] = $modeloxx->porque;
        $log['prm_motivo_id'] = $modeloxx->prm_motivo_id;
        $log['prm_expectativa_id'] = $modeloxx->prm_expectativa_id;
        $log['prm_familia_id'] = $modeloxx->prm_familia_id;
        $log['descripcion'] = $modeloxx->descripcion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiConsumo $modeloxx)
    {
        HVsiConsumo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumo "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumo  $modeloxx
     * @return void
     */
    public function updated(VsiConsumo $modeloxx)
    {
        HVsiConsumo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumo "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumo  $modeloxx
     * @return void
     */
    public function deleted(VsiConsumo $modeloxx)
    {
        HVsiConsumo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumo "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumo  $modeloxx
     * @return void
     */
    public function restored(VsiConsumo $modeloxx)
    {
        HVsiConsumo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiConsumo $modeloxx)
    {
        HVsiConsumo::create($this->getLog($modeloxx));
    }
}