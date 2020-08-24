<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiGeningLabor;
use App\Models\sicosocial\Pivotes\VsiGeningLabor;

class VsiGeningLaborObserver
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

    public function created(VsiGeningLabor $modeloxx)
    {
        HVsiGeningLabor::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningLabor "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiGeningLabor  $modeloxx
     * @return void
     */
    public function updated(VsiGeningLabor $modeloxx)
    {
        HVsiGeningLabor::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningLabor "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiGeningLabor  $modeloxx
     * @return void
     */
    public function deleted(VsiGeningLabor $modeloxx)
    {
        HVsiGeningLabor::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningLabor "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiGeningLabor  $modeloxx
     * @return void
     */
    public function restored(VsiGeningLabor $modeloxx)
    {
        HVsiGeningLabor::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiGeningLabor "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiGeningLabor  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiGeningLabor $modeloxx)
    {
        HVsiGeningLabor::create($this->getLog($modeloxx));
    }
}
