<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiSitEspecial;
use App\Models\sicosocial\VsiSitEspecial;

class VsiSitEspecialObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_victima_id'] = $modeloxx->prm_victima_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiSitEspecial $modeloxx)
    {
        HVsiSitEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitEspecial "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiSitEspecial  $modeloxx
     * @return void
     */
    public function updated(VsiSitEspecial $modeloxx)
    {
        HVsiSitEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitEspecial "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiSitEspecial  $modeloxx
     * @return void
     */
    public function deleted(VsiSitEspecial $modeloxx)
    {
        HVsiSitEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitEspecial "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiSitEspecial  $modeloxx
     * @return void
     */
    public function restored(VsiSitEspecial $modeloxx)
    {
        HVsiSitEspecial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitEspecial "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiSitEspecial  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiSitEspecial $modeloxx)
    {
        HVsiSitEspecial::create($this->getLog($modeloxx));
    }
}