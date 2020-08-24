<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiConsumoExpectativa;
use App\Models\sicosocial\Pivotes\VsiConsumoExpectativa;

class VsiConsumoExpectativaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_consumo_id'] = $modeloxx->vsi_consumo_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiConsumoExpectativa $modeloxx)
    {
        HVsiConsumoExpectativa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumoExpectativa "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumoExpectativa  $modeloxx
     * @return void
     */
    public function updated(VsiConsumoExpectativa $modeloxx)
    {
        HVsiConsumoExpectativa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumoExpectativa "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumoExpectativa  $modeloxx
     * @return void
     */
    public function deleted(VsiConsumoExpectativa $modeloxx)
    {
        HVsiConsumoExpectativa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumoExpectativa "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumoExpectativa  $modeloxx
     * @return void
     */
    public function restored(VsiConsumoExpectativa $modeloxx)
    {
        HVsiConsumoExpectativa::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumoExpectativa "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumoExpectativa  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiConsumoExpectativa $modeloxx)
    {
        HVsiConsumoExpectativa::create($this->getLog($modeloxx));
    }
}