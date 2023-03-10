<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRelsolDificulta;
use App\Models\sicosocial\Pivotes\VsiRelsolDificulta;

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

    public function created(VsiRelsolDificulta $modeloxx)
    {
        HVsiRelsolDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelsolDificulta "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelsolDificulta  $modeloxx
     * @return void
     */
    public function updated(VsiRelsolDificulta $modeloxx)
    {
        HVsiRelsolDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelsolDificulta "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelsolDificulta  $modeloxx
     * @return void
     */
    public function deleted(VsiRelsolDificulta $modeloxx)
    {
        HVsiRelsolDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelsolDificulta "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelsolDificulta  $modeloxx
     * @return void
     */
    public function restored(VsiRelsolDificulta $modeloxx)
    {
        HVsiRelsolDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelsolDificulta "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelsolDificulta  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelsolDificulta $modeloxx)
    {
        HVsiRelsolDificulta::create($this->getLog($modeloxx));
    }
}
