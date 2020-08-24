<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiMeta;
use App\Models\sicosocial\VsiMeta;

class VsiMetaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.        
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['meta'] = $modeloxx->meta;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiMeta $modeloxx)
    {
        HVsiMeta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiMeta "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiMeta  $modeloxx
     * @return void
     */
    public function updated(VsiMeta $modeloxx)
    {
        HVsiMeta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiMeta "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiMeta  $modeloxx
     * @return void
     */
    public function deleted(VsiMeta $modeloxx)
    {
        HVsiMeta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiMeta "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiMeta  $modeloxx
     * @return void
     */
    public function restored(VsiMeta $modeloxx)
    {
        HVsiMeta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiMeta "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiMeta  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiMeta $modeloxx)
    {
        HVsiMeta::create($this->getLog($modeloxx));
    }
}
