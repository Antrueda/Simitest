<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiDinfamPadre;
use App\Models\sicosocial\VsiDinfamPadre;

class VsiDinfamPadreObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_convive_id'] = $modeloxx->prm_convive_id;
        $log['dia'] = $modeloxx->dia;
        $log['mes'] = $modeloxx->mes;
        $log['ano'] = $modeloxx->ano;
        $log['hijo'] = $modeloxx->hijo;
        $log['prm_separa_id'] = $modeloxx->prm_separa_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiDinfamPadre $modeloxx)
    {
        HVsiDinfamPadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinfamPadre "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamPadre  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamPadre $modeloxx)
    {
        HVsiDinfamPadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinfamPadre "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamPadre  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamPadre $modeloxx)
    {
        HVsiDinfamPadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinfamPadre "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamPadre  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamPadre $modeloxx)
    {
        HVsiDinfamPadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinfamPadre "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamPadre  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamPadre $modeloxx)
    {
        HVsiDinfamPadre::create($this->getLog($modeloxx));
    }
}