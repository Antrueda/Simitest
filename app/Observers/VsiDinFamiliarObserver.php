<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiDinFamiliar;
use App\Models\sicosocial\VsiDinFamiliar;

class VsiDinFamiliarObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_familiar_id'] = $modeloxx->prm_familiar_id;
        $log['prm_hogar_id'] = $modeloxx->prm_hogar_id;
        $log['lugar'] = $modeloxx->lugar;
        $log['prm_motivo_id'] = $modeloxx->prm_motivo_id;
        $log['s_doc_adjunto'] = $modeloxx->s_doc_adjunto;
        $log['descripcion'] = $modeloxx->descripcion;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiDinFamiliar $modeloxx)
    {
        HVsiDinFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinFamiliar "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiDinFamiliar  $modeloxx
     * @return void
     */
    public function updated(VsiDinFamiliar $modeloxx)
    {
        HVsiDinFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinFamiliar "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDinFamiliar  $modeloxx
     * @return void
     */
    public function deleted(VsiDinFamiliar $modeloxx)
    {
        HVsiDinFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinFamiliar "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiDinFamiliar  $modeloxx
     * @return void
     */
    public function restored(VsiDinFamiliar $modeloxx)
    {
        HVsiDinFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinFamiliar "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDinFamiliar  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinFamiliar $modeloxx)
    {
        HVsiDinFamiliar::create($this->getLog($modeloxx));
    }
}