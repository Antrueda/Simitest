<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiFormacion;
use App\Models\fichaIngreso\Logs\HFiFormacion;

class FiFormacionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_lee_id'] = $modeloxx->i_prm_lee_id;
        $log['i_prm_escribe_id'] = $modeloxx->i_prm_escribe_id;
        $log['i_prm_operaciones_id'] = $modeloxx->i_prm_operaciones_id;
        $log['i_prm_estudia_id'] = $modeloxx->i_prm_estudia_id;
        $log['i_prm_jornada_estudio_id'] = $modeloxx->i_prm_jornada_estudio_id;
        $log['i_prm_naturaleza_entidad_id'] = $modeloxx->i_prm_naturaleza_entidad_id;
        $log['s_institucion_edu'] = $modeloxx->s_institucion_edu;
        $log['i_dias_sin_estudio'] = $modeloxx->i_dias_sin_estudio;
        $log['i_meses_sin_estudio'] = $modeloxx->i_meses_sin_estudio;
        $log['i_anos_sin_estudio'] = $modeloxx->i_anos_sin_estudio;
        $log['i_prm_ultimo_nivel_estudio_id'] = $modeloxx->i_prm_ultimo_nivel_estudio_id;
        $log['i_prm_ultimo_grado_aprobado_id'] = $modeloxx->i_prm_ultimo_grado_aprobado_id;
        $log['i_prm_certificado_ultimo_nivel_id'] = $modeloxx->i_prm_certificado_ultimo_nivel_id;
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

    public function created(FiFormacion $modeloxx)
    {
        HFiFormacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiFormacion "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiFormacion  $modeloxx
     * @return void
     */
    public function updated(FiFormacion $modeloxx)
    {
        HFiFormacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiFormacion "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiFormacion  $modeloxx
     * @return void
     */
    public function deleted(FiFormacion $modeloxx)
    {
        HFiFormacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiFormacion "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiFormacion  $modeloxx
     * @return void
     */
    public function restored(FiFormacion $modeloxx)
    {
        HFiFormacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiFormacion "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiFormacion  $modeloxx
     * @return void
     */
    public function forceDeleted(FiFormacion $modeloxx)
    {
        HFiFormacion::create($this->getLog($modeloxx));
    }
}