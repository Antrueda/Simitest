<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiRelFamiliar;
use App\Models\sicosocial\VsiRelFamiliar;

class VsiRelFamiliarObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_representativa_id'] = $modeloxx->prm_representativa_id;
        $log['representativa'] = $modeloxx->representativa;
        $log['prm_mala_id'] = $modeloxx->prm_mala_id;
        $log['prm_relacion_id'] = $modeloxx->prm_relacion_id;
        $log['prm_gusto_id'] = $modeloxx->prm_gusto_id;
        $log['porque'] = $modeloxx->porque;
        $log['prm_familia_id'] = $modeloxx->prm_familia_id;
        $log['prm_denuncia_id'] = $modeloxx->prm_denuncia_id;
        $log['prm_denunante_id'] = $modeloxx->prm_denunante_id;
        
        $log['descripcion'] = $modeloxx->descripcion;
        $log['prm_pareja_id'] = $modeloxx->prm_pareja_id;
        $log['prm_dificultad_id'] = $modeloxx->prm_dificultad_id;
        $log['dia'] = $modeloxx->dia;
        $log['mes'] = $modeloxx->mes;
        $log['ano'] = $modeloxx->ano;
        $log['prm_responde_id'] = $modeloxx->prm_responde_id;
        $log['descripcion1'] = $modeloxx->descripcion1;
        // campos por defecto, no borrar.
        
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRelFamiliar $modeloxx)
    {
        HVsiRelFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelFamiliar "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiRelFamiliar  $modeloxx
     * @return void
     */
    public function updated(VsiRelFamiliar $modeloxx)
    {
        HVsiRelFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelFamiliar "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiRelFamiliar  $modeloxx
     * @return void
     */
    public function deleted(VsiRelFamiliar $modeloxx)
    {
        HVsiRelFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelFamiliar "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiRelFamiliar  $modeloxx
     * @return void
     */
    public function restored(VsiRelFamiliar $modeloxx)
    {
        HVsiRelFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelFamiliar "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiRelFamiliar  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelFamiliar $modeloxx)
    {
        HVsiRelFamiliar::create($this->getLog($modeloxx));
    }
}