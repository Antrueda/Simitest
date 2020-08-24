<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiEduFortaleza;
use App\Models\sicosocial\Pivotes\VsiEduFortaleza;

class VsiEduFortalezaObserver
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

    public function created(VsiEduFortaleza $modeloxx)
    {
        HVsiEduFortaleza::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduFortaleza  $modeloxx
     * @return void
     */
    public function updated(VsiEduFortaleza $modeloxx)
    {
        HVsiEduFortaleza::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduFortaleza  $modeloxx
     * @return void
     */
    public function deleted(VsiEduFortaleza $modeloxx)
    {
        HVsiEduFortaleza::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduFortaleza  $modeloxx
     * @return void
     */
    public function restored(VsiEduFortaleza $modeloxx)
    {
        HVsiEduFortaleza::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEduFortaleza  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiEduFortaleza $modeloxx)
    {
        HVsiEduFortaleza::create($this->getLog($modeloxx));
    }
}