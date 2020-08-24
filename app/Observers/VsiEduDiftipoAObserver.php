<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEduDiftipoA;
use App\Models\sicosocial\Pivotes\VsiEduDiftipoA;

class VsiEduDiftipoAObserver
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

    public function created(VsiEduDiftipoA $modeloxx)
    {
        HVsiEduDiftipoA::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDiftipoA "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDiftipoA  $modeloxx
     * @return void
     */
    public function updated(VsiEduDiftipoA $modeloxx)
    {
        HVsiEduDiftipoA::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDiftipoA "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDiftipoA  $modeloxx
     * @return void
     */
    public function deleted(VsiEduDiftipoA $modeloxx)
    {
        HVsiEduDiftipoA::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDiftipoA "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDiftipoA  $modeloxx
     * @return void
     */
    public function restored(VsiEduDiftipoA $modeloxx)
    {
        HVsiEduDiftipoA::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiEduDiftipoA "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduDiftipoA  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEduDiftipoA $modeloxx)
    {
        HVsiEduDiftipoA::create($this->getLog($modeloxx));
    }
}