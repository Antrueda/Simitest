<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEduDiftipoB;
use App\Models\sicosocial\Pivotes\VsiEduDiftipoB;

class VsiEduDiftipoBObserver
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

    public function created(VsiEduDiftipoB $modeloxx)
    {
        HVsiEduDiftipoB::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDiftipoB "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDiftipoB  $modeloxx
     * @return void
     */
    public function updated(VsiEduDiftipoB $modeloxx)
    {
        HVsiEduDiftipoB::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDiftipoB "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDiftipoB  $modeloxx
     * @return void
     */
    public function deleted(VsiEduDiftipoB $modeloxx)
    {
        HVsiEduDiftipoB::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDiftipoB "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDiftipoB  $modeloxx
     * @return void
     */
    public function restored(VsiEduDiftipoB $modeloxx)
    {
        HVsiEduDiftipoB::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDiftipoB "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDiftipoB  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEduDiftipoB $modeloxx)
    {
        HVsiEduDiftipoB::create($this->getLog($modeloxx));
    }
}