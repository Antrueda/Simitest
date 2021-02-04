<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiMotivoVinculacion;
use App\Models\fichaIngreso\Logs\HFiMotivoVinculacion;

class FiMotivoVinculacionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_formacion_id'] = $modeloxx->fi_formacion_id;
        $log['prm_motivinc_id'] = $modeloxx->prm_motivinc_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiMotivoVinculacion $modeloxx)
    {
        HFiMotivoVinculacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiMotivoVinculacion "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiMotivoVinculacion  $modeloxx
     * @return void
     */
    public function updated(FiMotivoVinculacion $modeloxx)
    {
        HFiMotivoVinculacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiMotivoVinculacion "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiMotivoVinculacion  $modeloxx
     * @return void
     */
    public function deleted(FiMotivoVinculacion $modeloxx)
    {
        HFiMotivoVinculacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiMotivoVinculacion "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiMotivoVinculacion  $modeloxx
     * @return void
     */
    public function restored(FiMotivoVinculacion $modeloxx)
    {
        HFiMotivoVinculacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiMotivoVinculacion "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiMotivoVinculacion  $modeloxx
     * @return void
     */
    public function forceDeleted(FiMotivoVinculacion $modeloxx)
    {
        HFiMotivoVinculacion::create($this->getLog($modeloxx));
    }
}