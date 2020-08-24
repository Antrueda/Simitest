<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEstemoDificulta;
use App\Models\sicosocial\Pivotes\VsiEstemoDificulta;

class VsiEstemoDificultaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_estemocional_id'] = $modeloxx->vsi_estemocional_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiEstemoDificulta $modeloxx)
    {
        HVsiEstemoDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoDificulta "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoDificulta  $modeloxx
     * @return void
     */
    public function updated(VsiEstemoDificulta $modeloxx)
    {
        HVsiEstemoDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoDificulta "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoDificulta  $modeloxx
     * @return void
     */
    public function deleted(VsiEstemoDificulta $modeloxx)
    {
        HVsiEstemoDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoDificulta "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoDificulta  $modeloxx
     * @return void
     */
    public function restored(VsiEstemoDificulta $modeloxx)
    {
        HVsiEstemoDificulta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoDificulta "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoDificulta  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEstemoDificulta $modeloxx)
    {
        HVsiEstemoDificulta::create($this->getLog($modeloxx));
    }
}