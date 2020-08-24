<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiNnajFamiliar;
use App\Models\sicosocial\Pivotes\VsiNnajFamiliar;

class VsiNnajFamiliarObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.        
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_id'] = $modeloxx->vsi_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiNnajFamiliar $modeloxx)
    {
        HVsiNnajFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajFamiliar "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajFamiliar  $modeloxx
     * @return void
     */
    public function updated(VsiNnajFamiliar $modeloxx)
    {
        HVsiNnajFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajFamiliar "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajFamiliar  $modeloxx
     * @return void
     */
    public function deleted(VsiNnajFamiliar $modeloxx)
    {
        HVsiNnajFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajFamiliar "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajFamiliar  $modeloxx
     * @return void
     */
    public function restored(VsiNnajFamiliar $modeloxx)
    {
        HVsiNnajFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajFamiliar "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajFamiliar  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiNnajFamiliar $modeloxx)
    {
        HVsiNnajFamiliar::create($this->getLog($modeloxx));
    }
}
