<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEduCausa;
use App\Models\sicosocial\Pivotes\VsiEduCausa;

class VsiEduCausaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_educacion_id'] = $modeloxx->vsi_educacion_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiEduCausa $modeloxx)
    {
        HVsiEduCausa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduCausa "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduCausa  $modeloxx
     * @return void
     */
    public function updated(VsiEduCausa $modeloxx)
    {
        HVsiEduCausa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduCausa "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduCausa  $modeloxx
     * @return void
     */
    public function deleted(VsiEduCausa $modeloxx)
    {
        HVsiEduCausa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduCausa "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduCausa  $modeloxx
     * @return void
     */
    public function restored(VsiEduCausa $modeloxx)
    {
        HVsiEduCausa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduCausa "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduCausa  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEduCausa $modeloxx)
    {
        HVsiEduCausa::create($this->getLog($modeloxx));
    }
}