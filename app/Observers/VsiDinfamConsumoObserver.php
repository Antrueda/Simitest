<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiDinfamConsumo;
use App\Models\sicosocial\Pivotes\VsiDinfamConsumo;

class VsiDinfamConsumoObserver
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

    public function created(VsiDinfamConsumo $modeloxx)
    {
        HVsiDinfamConsumo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamConsumo "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamConsumo  $modeloxx
     * @return void
     */
    public function updated(VsiDinfamConsumo $modeloxx)
    {
        HVsiDinfamConsumo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamConsumo "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamConsumo  $modeloxx
     * @return void
     */
    public function deleted(VsiDinfamConsumo $modeloxx)
    {
        HVsiDinfamConsumo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamConsumo "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamConsumo  $modeloxx
     * @return void
     */
    public function restored(VsiDinfamConsumo $modeloxx)
    {
        HVsiDinfamConsumo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiDinfamConsumo "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiDinfamConsumo  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiDinfamConsumo $modeloxx)
    {
        HVsiDinfamConsumo::create($this->getLog($modeloxx));
    }
}
