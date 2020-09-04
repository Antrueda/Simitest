<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiRelSociale;
use App\Models\sicosocial\VsiRelSociale;

class VsiRelSocialeObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['prm_dificultad_id'] = $modeloxx->prm_dificultad_id;
        $log['completa'] = $modeloxx->completa;

        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRelSociale $modeloxx)
    {
        HVsiRelSociale::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSociale "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiRelSociale  $modeloxx
     * @return void
     */
    public function updated(VsiRelSociale $modeloxx)
    {
        HVsiRelSociale::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSociale "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiRelSociale  $modeloxx
     * @return void
     */
    public function deleted(VsiRelSociale $modeloxx)
    {
        HVsiRelSociale::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSociale "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiRelSociale  $modeloxx
     * @return void
     */
    public function restored(VsiRelSociale $modeloxx)
    {
        HVsiRelSociale::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRelSociale "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiRelSociale  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRelSociale $modeloxx)
    {
        HVsiRelSociale::create($this->getLog($modeloxx));
    }
}