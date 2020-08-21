<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEstemoEstresante;
use App\Models\sicosocial\Pivotes\VsiEstemoEstresante;

class VsiEstemoEstresanteObserver
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

    public function created(VsiEstemoEstresante $modeloxx)
    {
        HVsiEstemoEstresante::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoEstresante "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoEstresante  $modeloxx
     * @return void
     */
    public function updated(VsiEstemoEstresante $modeloxx)
    {
        HVsiEstemoEstresante::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoEstresante "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoEstresante  $modeloxx
     * @return void
     */
    public function deleted(VsiEstemoEstresante $modeloxx)
    {
        HVsiEstemoEstresante::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoEstresante "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoEstresante  $modeloxx
     * @return void
     */
    public function restored(VsiEstemoEstresante $modeloxx)
    {
        HVsiEstemoEstresante::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEstemoEstresante "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEstemoEstresante  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEstemoEstresante $modeloxx)
    {
        HVsiEstemoEstresante::create($this->getLog($modeloxx));
    }
}
