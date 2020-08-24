<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiActividadTiempoLibre;
use App\Models\fichaIngreso\Logs\HFiActividadTiempoLibre;

class FiActividadTiempoLibreObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_actividadestl_id'] = $modeloxx->fi_actividadestl_id;
        $log['i_prm_actividad_tl_id'] = $modeloxx->i_prm_actividad_tl_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiActividadTiempoLibre $modeloxx)
    {
        HFiActividadTiempoLibre::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiActividadTiempoLibre "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiActividadTiempoLibre  $modeloxx
     * @return void
     */
    public function updated(FiActividadTiempoLibre $modeloxx)
    {
        HFiActividadTiempoLibre::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiActividadTiempoLibre "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiActividadTiempoLibre  $modeloxx
     * @return void
     */
    public function deleted(FiActividadTiempoLibre $modeloxx)
    {
        HFiActividadTiempoLibre::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiActividadTiempoLibre "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiActividadTiempoLibre  $modeloxx
     * @return void
     */
    public function restored(FiActividadTiempoLibre $modeloxx)
    {
        HFiActividadTiempoLibre::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiActividadTiempoLibre "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiActividadTiempoLibre  $modeloxx
     * @return void
     */
    public function forceDeleted(FiActividadTiempoLibre $modeloxx)
    {
        HFiActividadTiempoLibre::create($this->getLog($modeloxx));
    }
}