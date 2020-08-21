<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiDinfamMadre;
use App\Models\sicosocial\VsiDinfamMadre;

class VsiDinfamMadreObserver
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

    public function created(VsiDinfamMadre $modeloxx)
    {
        HVsiDinfamMadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinfamMadre "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamMadre  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamMadre $modeloxx)
    {
        HVsiDinfamMadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinfamMadre "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamMadre  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamMadre $modeloxx)
    {
        HVsiDinfamMadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinfamMadre "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamMadre  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamMadre $modeloxx)
    {
        HVsiDinfamMadre::create($this->getLog($modeloxx));
    }

    /**
     * Handle then VsiDinfamMadre "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiDinfamMadre  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamMadre $modeloxx)
    {
        HVsiDinfamMadre::create($this->getLog($modeloxx));
    }
}