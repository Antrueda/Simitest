<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiNnajSexual;
use App\Models\sicosocial\Pivotes\VsiNnajSexual;

class VsiNnajSexualObserver
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

    public function created(VsiNnajSexual $modeloxx)
    {
        HVsiNnajSexual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajSexual "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajSexual  $modeloxx
     * @return void
     */
    public function updated(VsiNnajSexual $modeloxx)
    {
        HVsiNnajSexual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajSexual "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajSexual  $modeloxx
     * @return void
     */
    public function deleted(VsiNnajSexual $modeloxx)
    {
        HVsiNnajSexual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajSexual "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajSexual  $modeloxx
     * @return void
     */
    public function restored(VsiNnajSexual $modeloxx)
    {
        HVsiNnajSexual::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiNnajSexual "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiNnajSexual  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiNnajSexual $modeloxx)
    {
        HVsiNnajSexual::create($this->getLog($modeloxx));
    }
}
