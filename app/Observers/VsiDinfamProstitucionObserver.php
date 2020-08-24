<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiDinfamProstitucion;
use App\Models\sicosocial\Pivotes\VsiDinfamProstitucion;

class VsiDinfamProstitucionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_dinfamiliar_id'] = $modeloxx->vsi_dinfamiliar_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiDinfamProstitucion $modeloxx)
    {
        HVsiDinfamProstitucion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamProstitucion "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamProstitucion  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamProstitucion $modeloxx)
    {
        HVsiDinfamProstitucion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamProstitucion "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamProstitucion  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamProstitucion $modeloxx)
    {
        HVsiDinfamProstitucion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamProstitucion "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamProstitucion  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamProstitucion $modeloxx)
    {
        HVsiDinfamProstitucion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamProstitucion "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamProstitucion  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamProstitucion $modeloxx)
    {
        HVsiDinfamProstitucion::create($this->getLog($modeloxx));
    }
}
