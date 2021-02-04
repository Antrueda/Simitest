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
        $log['prm_operacio_id'] = $modeloxx->prm_operacio_id;
        $log['i_prm_estudia_id'] = $modeloxx->i_prm_estudia_id;
        $log['prm_jornestu_id'] = $modeloxx->prm_jornestu_id;
        $log['prm_natuenti_id'] = $modeloxx->prm_natuenti_id;
        $log['s_institucion_edu'] = $modeloxx->s_institucion_edu;
        $log['diasines'] = $modeloxx->diasines;
        $log['mesinest'] = $modeloxx->mesinest;
        $log['anosines'] = $modeloxx->anosines;
        $log['prm_ultniest_id'] = $modeloxx->prm_ultniest_id;
        $log['prm_ultgrapr_id'] = $modeloxx->prm_ultgrapr_id;
        $log['prm_cerulniv_id'] = $modeloxx->prm_cerulniv_id;
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