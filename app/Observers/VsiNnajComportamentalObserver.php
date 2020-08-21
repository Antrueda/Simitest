<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiNnajComportamental;
use App\Models\sicosocial\Pivotes\VsiNnajComportamental;

class VsiNnajComportamentalObserver
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

    public function created(VsiNnajComportamental $modeloxx)
    {
        HVsiNnajComportamental::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajComportamental "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajComportamental  $modeloxx
     * @return void
     */
    public function updated(VsiNnajComportamental $modeloxx)
    {
        HVsiNnajComportamental::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajComportamental "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajComportamental  $modeloxx
     * @return void
     */
    public function deleted(VsiNnajComportamental $modeloxx)
    {
        HVsiNnajComportamental::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajComportamental "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajComportamental  $modeloxx
     * @return void
     */
    public function restored(VsiNnajComportamental $modeloxx)
    {
        HVsiNnajComportamental::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajComportamental "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajComportamental  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiNnajComportamental $modeloxx)
    {
        HVsiNnajComportamental::create($this->getLog($modeloxx));
    }
}
