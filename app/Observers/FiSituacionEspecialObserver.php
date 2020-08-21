<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiSituacionEspecial;
use App\Models\fichaIngreso\Logs\HFiSituacionEspecial;

class FiSituacionEspecialObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['i_prm_tipo_id'] = $modeloxx->i_prm_tipo_id;
        $log['i_tiempo'] = $modeloxx->i_tiempo;
        $log['i_prm_ttiempo_id'] = $modeloxx->i_prm_ttiempo_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiSituacionEspecial $modeloxx)
    {
        HFiSituacionEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSituacionEspecial "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiSituacionEspecial  $modeloxx
     * @return void
     */
    public function updated(FiSituacionEspecial $modeloxx)
    {
        HFiSituacionEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSituacionEspecial "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSituacionEspecial  $modeloxx
     * @return void
     */
    public function deleted(FiSituacionEspecial $modeloxx)
    {
        HFiSituacionEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSituacionEspecial "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiSituacionEspecial  $modeloxx
     * @return void
     */
    public function restored(FiSituacionEspecial $modeloxx)
    {
        HFiSituacionEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiSituacionEspecial "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiSituacionEspecial  $modeloxx
     * @return void
     */
    public function forceDeleted(FiSituacionEspecial $modeloxx)
    {
        HFiSituacionEspecial::create($this->getLog($modeloxx));
    }
}