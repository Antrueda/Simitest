<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiRedSocial;
use App\Models\sicosocial\VsiRedSocial;

class VsiRedSocialObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_presenta_id'] = $modeloxx->prm_presenta_id;
        $log['prm_protector_id'] = $modeloxx->prm_protector_id;
        $log['prm_dificultad_id'] = $modeloxx->prm_dificultad_id;
        $log['prm_quien_id'] = $modeloxx->prm_quien_id;
        $log['prm_ruptura_genero_id'] = $modeloxx->prm_ruptura_genero_id;
        $log['prm_ruptura_sexual_id'] = $modeloxx->prm_ruptura_sexual_id;
        $log['prm_acceso_id'] = $modeloxx->prm_acceso_id;
        $log['prm_servicio_id'] = $modeloxx->prm_servicio_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiRedSocial $modeloxx)
    {
        HVsiRedSocial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedSocial "updated" event.
     *
     * @param  \App\Models\sicosocial\HVsiRedSocial  $modeloxx
     * @return void
     */
    public function updated(VsiRedSocial $modeloxx)
    {
        HVsiRedSocial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedSocial "deleted" event.
     *
     * @param  \App\Models\sicosocial\HVsiRedSocial  $modeloxx
     * @return void
     */
    public function deleted(VsiRedSocial $modeloxx)
    {
        HVsiRedSocial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedSocial "restored" event.
     *
     * @param  \App\Models\sicosocial\HVsiRedSocial  $modeloxx
     * @return void
     */
    public function restored(VsiRedSocial $modeloxx)
    {
        HVsiRedSocial::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiRedSocial "force deleted" event.
     *
     * @param  \App\Models\sicosocial\HVsiRedSocial  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiRedSocial $modeloxx)
    {
        HVsiRedSocial::create($this->getLog($modeloxx));
    }
}