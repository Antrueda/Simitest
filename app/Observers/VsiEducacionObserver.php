<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiEducacion;
use App\Models\sicosocial\VsiEducacion;

class VsiEducacionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_estudia_id'] = $modeloxx->prm_estudia_id;
        $log['dia'] = $modeloxx->dia;
        $log['mes'] = $modeloxx->mes;
        $log['ano'] = $modeloxx->ano;
        $log['prm_motivo_id'] = $modeloxx->prm_motivo_id;
        $log['prm_rendimiento_id'] = $modeloxx->prm_rendimiento_id;
        $log['prm_dificultad_id'] = $modeloxx->prm_dificultad_id;
        $log['prm_leer_id'] = $modeloxx->prm_leer_id;
        $log['prm_escribir_id'] = $modeloxx->prm_escribir_id;
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

    public function created(VsiEducacion $modeloxx)
    {
        HVsiEducacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEducacion "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiEducacion  $modeloxx
     * @return void
     */
    public function updated(VsiEducacion $modeloxx)
    {
        HVsiEducacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEducacion "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiEducacion  $modeloxx
     * @return void
     */
    public function deleted(VsiEducacion $modeloxx)
    {
        HVsiEducacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEducacion "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiEducacion  $modeloxx
     * @return void
     */
    public function restored(VsiEducacion $modeloxx)
    {
        HVsiEducacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEducacion "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiEducacion  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEducacion $modeloxx)
    {
        HVsiEducacion::create($this->getLog($modeloxx));
    }
}
