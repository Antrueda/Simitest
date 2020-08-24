<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiFacProtector;
use App\Models\sicosocial\VsiFacProtector;

class VsiFacProtectorObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['protector'] = $modeloxx->protector;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiFacProtector $modeloxx)
    {
        HVsiFacProtector::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiFacProtector "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiFacProtector  $modeloxx
     * @return void
     */
    public function updated(VsiFacProtector $modeloxx)
    {
        HVsiFacProtector::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiFacProtector "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiFacProtector  $modeloxx
     * @return void
     */
    public function deleted(VsiFacProtector $modeloxx)
    {
        HVsiFacProtector::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiFacProtector "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiFacProtector  $modeloxx
     * @return void
     */
    public function restored(VsiFacProtector $modeloxx)
    {
        HVsiFacProtector::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiFacProtector "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiFacProtector  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiFacProtector $modeloxx)
    {
        HVsiFacProtector::create($this->getLog($modeloxx));
    }
}
