<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiNnajSocial;
use App\Models\sicosocial\Pivotes\VsiNnajSocial;

class VsiNnajSocialObserver
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

    public function created(VsiNnajSocial $modeloxx)
    {
        HVsiNnajSocial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajSocial "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajSocial $modeloxx
     * @return void
     */
    public function updated(VsiNnajSocial $modeloxx)
    {
        HVsiNnajSocial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajSocial "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajSocial $modeloxx
     * @return void
     */
    public function deleted(VsiNnajSocial $modeloxx)
    {
        HVsiNnajSocial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajSocial "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajSocial $modeloxx
     * @return void
     */
    public function restored(VsiNnajSocial $modeloxx)
    {
        HVsiNnajSocial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajSocial "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajSocial $modeloxx
     * @return void
     */
    public function forceDeleted(VsiNnajSocial $modeloxx)
    {
        HVsiNnajSocial::create($this->getLog($modeloxx));
    }
}
