<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRelSolDificulta;
use App\Models\sicosocial\Pivotes\VsiRelSolDificulta;

class VsiRelSolDificultaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_relsocial_id'] = $modeloxx->vsi_relsocial_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRelSolDificulta $modeloxx)
    {
        HVsiRelSolDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSolDificulta "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelSolDificulta  $modeloxx
     * @return void
     */
    public function updated(VsiRelSolDificulta $modeloxx)
    {
        HVsiRelSolDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSolDificulta "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelSolDificulta  $modeloxx
     * @return void
     */
    public function deleted(VsiRelSolDificulta $modeloxx)
    {
        HVsiRelSolDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSolDificulta "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelSolDificulta  $modeloxx
     * @return void
     */
    public function restored(VsiRelSolDificulta $modeloxx)
    {
        HVsiRelSolDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSolDificulta "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelSolDificulta  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelSolDificulta $modeloxx)
    {
        HVsiRelSolDificulta::create($this->getLog($modeloxx));
    }
}