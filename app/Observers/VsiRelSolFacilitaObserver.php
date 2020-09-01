<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRelsolFacilita;
use App\Models\sicosocial\Pivotes\VsiRelsolFacilita;

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

    public function created(VsiRelsolFacilita $modeloxx)
    {
        HVsiRelsolFacilita::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelsolFacilita "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelsolFacilita  $modeloxx
     * @return void
     */
    public function updated(VsiRelsolFacilita $modeloxx)
    {
        HVsiRelsolFacilita::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelsolFacilita "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelsolFacilita  $modeloxx
     * @return void
     */
    public function deleted(VsiRelsolFacilita $modeloxx)
    {
        HVsiRelsolFacilita::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelsolFacilita "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelsolFacilita  $modeloxx
     * @return void
     */
    public function restored(VsiRelsolFacilita $modeloxx)
    {
        HVsiRelsolFacilita::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelsolFacilita "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelsolFacilita  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelsolFacilita $modeloxx)
    {
        HVsiRelsolFacilita::create($this->getLog($modeloxx));
    }
}
