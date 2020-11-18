<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiPersona;
use App\Models\sicosocial\Pivotes\VsiPersona;

class VsiPersonaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_datos_vincula_id'] = $modeloxx->vsi_datos_vincula_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiPersona $modeloxx)
    {
        HVsiPersona::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiEmocionVincula  $modeloxx
     * @return void
     */
    public function updated(VsiPersona $modeloxx)
    {
        HVsiPersona::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiPersona  $modeloxx
     * @return void
     */
    public function deleted(VsiPersona $modeloxx)
    {
        HVsiPersona::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiPersona  $modeloxx
     * @return void
     */
    public function restored(VsiPersona $modeloxx)
    {
        HVsiPersona::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiPersona  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiPersona $modeloxx)
    {
        HVsiPersona::create($this->getLog($modeloxx));
    }
}