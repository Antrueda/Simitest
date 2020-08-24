<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiActEmocional;
use App\Models\sicosocial\VsiActEmocional;

class VsiActEmocionalObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_activa_id'] = $modeloxx->prm_activa_id;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['conductual'] = $modeloxx->conductual;
        $log['cognitiva'] = $modeloxx->cognitiva;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiActEmocional $modeloxx)
    {
        HVsiActEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiActEmocional "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiActEmocional  $modeloxx
     * @return void
     */
    public function updated(VsiActEmocional $modeloxx)
    {
        HVsiActEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiActEmocional "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiActEmocional  $modeloxx
     * @return void
     */
    public function deleted(VsiActEmocional $modeloxx)
    {
        HVsiActEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiActEmocional "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiActEmocional  $modeloxx
     * @return void
     */
    public function restored(VsiActEmocional $modeloxx)
    {
        HVsiActEmocional::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiActEmocional "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiActEmocional  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiActEmocional $modeloxx)
    {
        HVsiActEmocional::create($this->getLog($modeloxx));
    }
}