<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiNnajEmocional;
use App\Models\sicosocial\Pivotes\VsiNnajEmocional;

class VsiNnajEmocionalObserver
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

    public function created(VsiNnajEmocional $modeloxx)
    {
        HVsiNnajEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajEmocional "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajEmocional  $modeloxx
     * @return void
     */
    public function updated(VsiNnajEmocional $modeloxx)
    {
        HVsiNnajEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajEmocional "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajEmocional  $modeloxx
     * @return void
     */
    public function deleted(VsiNnajEmocional $modeloxx)
    {
        HVsiNnajEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajEmocional "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajEmocional  $modeloxx
     * @return void
     */
    public function restored(VsiNnajEmocional $modeloxx)
    {
        HVsiNnajEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajEmocional "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajEmocional  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiNnajEmocional $modeloxx)
    {
        HVsiNnajEmocional::create($this->getLog($modeloxx));
    }
}
