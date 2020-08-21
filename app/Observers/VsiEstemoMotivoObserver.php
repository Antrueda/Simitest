<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEstemoMotivo;
use App\Models\sicosocial\Pivotes\VsiEstemoMotivo;

class VsiEstemoMotivoObserver
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

    public function created(VsiEstemoMotivo $modeloxx)
    {
        HVsiEstemoMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoMotivo "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoMotivo  $modeloxx
     * @return void
     */
    public function updated(VsiEstemoMotivo $modeloxx)
    {
        HVsiEstemoMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoMotivo "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoMotivo  $modeloxx
     * @return void
     */
    public function deleted(VsiEstemoMotivo $modeloxx)
    {
        HVsiEstemoMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoMotivo "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoMotivo  $modeloxx
     * @return void
     */
    public function restored(VsiEstemoMotivo $modeloxx)
    {
        HVsiEstemoMotivo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoMotivo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoMotivo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEstemoMotivo $modeloxx)
    {
        HVsiEstemoMotivo::create($this->getLog($modeloxx));
    }
}