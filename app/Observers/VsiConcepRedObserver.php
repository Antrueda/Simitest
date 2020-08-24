<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiConcepRed;
use App\Models\sicosocial\Pivotes\VsiConcepRed;

class VsiConcepRedObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_concepto_id'] = $modeloxx->vsi_concepto_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiConcepRed $modeloxx)
    {
        HVsiConcepRed::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConcepRed "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiConcepRed  $modeloxx
     * @return void
     */
    public function updated(VsiConcepRed $modeloxx)
    {
        HVsiConcepRed::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConcepRed "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiConcepRed  $modeloxx
     * @return void
     */
    public function deleted(VsiConcepRed $modeloxx)
    {
        HVsiConcepRed::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConcepRed "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiConcepRed  $modeloxx
     * @return void
     */
    public function restored(VsiConcepRed $modeloxx)
    {
        HVsiConcepRed::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConcepRed "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiConcepRed  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiConcepRed $modeloxx)
    {
        HVsiConcepRed::create($this->getLog($modeloxx));
    }
}
