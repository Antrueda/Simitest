<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiRelfamAccione;
use App\Models\sicosocial\Pivotes\VsiRelfamAccione;

class VsiRelfamAccioneObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_relfamiliar_id'] = $modeloxx->vsi_relfamiliar_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRelfamAccione $modeloxx)
    {
        HVsiRelfamAccione::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamAccione "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelfamAccione  $modeloxx
     * @return void
     */
    public function updated(VsiRelfamAccione $modeloxx)
    {
        HVsiRelfamAccione::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamAccione "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelfamAccione  $modeloxx
     * @return void
     */
    public function deleted(VsiRelfamAccione $modeloxx)
    {
        HVsiRelfamAccione::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamAccione "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelfamAccione  $modeloxx
     * @return void
     */
    public function restored(VsiRelfamAccione $modeloxx)
    {
        HVsiRelfamAccione::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelfamAccione "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiRelfamAccione  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelfamAccione $modeloxx)
    {
        HVsiRelfamAccione::create($this->getLog($modeloxx));
    }
}