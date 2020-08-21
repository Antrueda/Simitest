<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEstemoAdecuado;
use App\Models\sicosocial\Pivotes\VsiEstemoAdecuado;

class VsiEstemoAdecuadoObserver
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

    public function created(VsiEstemoAdecuado $modeloxx)
    {
        HVsiEstemoAdecuado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoAdecuado "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoAdecuado  $modeloxx
     * @return void
     */
    public function updated(VsiEstemoAdecuado $modeloxx)
    {
        HVsiEstemoAdecuado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoAdecuado "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoAdecuado  $modeloxx
     * @return void
     */
    public function deleted(VsiEstemoAdecuado $modeloxx)
    {
        HVsiEstemoAdecuado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoAdecuado "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoAdecuado  $modeloxx
     * @return void
     */
    public function restored(VsiEstemoAdecuado $modeloxx)
    {
        HVsiEstemoAdecuado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoAdecuado "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoAdecuado  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEstemoAdecuado $modeloxx)
    {
        HVsiEstemoAdecuado::create($this->getLog($modeloxx));
    }
}
