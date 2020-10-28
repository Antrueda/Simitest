<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiEstEmocional;
use App\Models\sicosocial\VsiEstEmocional;

class VsiEstEmocionalObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_siente_id'] = $modeloxx->prm_siente_id;
        $log['descripcion_siente'] = $modeloxx->descripcion_siente;
        $log['prm_reacciona_id'] = $modeloxx->prm_reacciona_id;
        $log['descripcion_reacciona'] = $modeloxx->descripcion_reacciona;
        $log['descripcion_adecuado'] = $modeloxx->descripcion_adecuado;
        $log['descripcion_dificulta'] = $modeloxx->descripcion_dificulta;
        $log['prm_estresante_id'] = $modeloxx->prm_estresante_id;
        $log['descripcion_estresante'] = $modeloxx->descripcion_estresante;
        $log['prm_morir_id'] = $modeloxx->prm_morir_id;
        $log['dia_morir'] = $modeloxx->dia_morir;
        $log['mes_morir'] = $modeloxx->mes_morir;
        $log['ano_morir'] = $modeloxx->ano_morir;
        $log['prm_pensamiento_id'] = $modeloxx->prm_pensamiento_id;
        $log['prm_amenaza_id'] = $modeloxx->prm_amenaza_id;
        $log['prm_intento_id'] = $modeloxx->prm_intento_id;
        $log['ideacion'] = $modeloxx->ideacion;
        $log['amenaza'] = $modeloxx->amenaza;
        $log['intento'] = $modeloxx->intento;
        $log['prm_riesgo_id'] = $modeloxx->prm_riesgo_id;
        $log['dia_ultimo'] = $modeloxx->dia_ultimo;
        $log['mes_ultimo'] = $modeloxx->mes_ultimo;
        $log['ano_ultimo'] = $modeloxx->ano_ultimo;
        $log['descripcion_motivo'] = $modeloxx->descripcion_motivo;
        $log['prm_lesiva_id'] = $modeloxx->prm_lesiva_id;
        $log['descripcion_lesiva'] = $modeloxx->descripcion_lesiva;
        $log['prm_sueno_id'] = $modeloxx->prm_sueno_id;
        $log['dia_sueno'] = $modeloxx->dia_sueno;
        $log['mes_sueno'] = $modeloxx->mes_sueno;
        $log['ano_sueno'] = $modeloxx->ano_sueno;
        $log['descripcion_sueno'] = $modeloxx->descripcion_sueno;
        $log['prm_alimenticio_id'] = $modeloxx->prm_alimenticio_id;
        $log['dia_alimenticio'] = $modeloxx->dia_alimenticio;
        $log['mes_alimenticio'] = $modeloxx->mes_alimenticio;
        $log['ano_alimenticio'] = $modeloxx->ano_alimenticio;
        $log['descripcion_alimenticio'] = $modeloxx->descripcion_alimenticio;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiEstEmocional $modeloxx)
    {
        HVsiEstEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstEmocional "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiEstEmocional  $modeloxx
     * @return void
     */
    public function updated(VsiEstEmocional $modeloxx)
    {
        HVsiEstEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstEmocional "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiEstEmocional  $modeloxx
     * @return void
     */
    public function deleted(VsiEstEmocional $modeloxx)
    {
        HVsiEstEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstEmocional "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiEstEmocional  $modeloxx
     * @return void
     */
    public function restored(VsiEstEmocional $modeloxx)
    {
        HVsiEstEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstEmocional "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiEstEmocional  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEstEmocional $modeloxx)
    {
        HVsiEstEmocional::create($this->getLog($modeloxx));
    }
}
