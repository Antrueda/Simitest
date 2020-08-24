<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiGeningDia;
use App\Models\sicosocial\Pivotes\VsiGeningDia;

class VsiGeningDiaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.        
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_geningreso_id'] = $modeloxx->vsi_geningreso_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiGeningDia $modeloxx)
    {
        HVsiGeningDia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningDia "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiGeningDia  $modeloxx
     * @return void
     */
    public function updated(VsiGeningDia $modeloxx)
    {
        HVsiGeningDia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningDia "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiGeningDia  $modeloxx
     * @return void
     */
    public function deleted(VsiGeningDia $modeloxx)
    {
        HVsiGeningDia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningDia "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiGeningDia  $modeloxx
     * @return void
     */
    public function restored(VsiGeningDia $modeloxx)
    {
        HVsiGeningDia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningDia "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiGeningDia  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiGeningDia $modeloxx)
    {
        HVsiGeningDia::create($this->getLog($modeloxx));
    }
}
