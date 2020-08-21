<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRelSolFacilita;
use App\Models\sicosocial\Pivotes\VsiRelSolFacilita;

class VsiRelSolFacilitaObserver
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

    public function created(VsiRelSolFacilita $modeloxx)
    {
        HVsiRelSolFacilita::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSolFacilita "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelSolFacilita  $modeloxx
     * @return void
     */
    public function updated(VsiRelSolFacilita $modeloxx)
    {
        HVsiRelSolFacilita::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSolFacilita "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelSolFacilita  $modeloxx
     * @return void
     */
    public function deleted(VsiRelSolFacilita $modeloxx)
    {
        HVsiRelSolFacilita::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSolFacilita "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelSolFacilita  $modeloxx
     * @return void
     */
    public function restored(VsiRelSolFacilita $modeloxx)
    {
        HVsiRelSolFacilita::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSolFacilita "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelSolFacilita  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelSolFacilita $modeloxx)
    {
        HVsiRelSolFacilita::create($this->getLog($modeloxx));
    }
}