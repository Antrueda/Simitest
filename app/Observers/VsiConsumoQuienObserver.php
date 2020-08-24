<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiConsumoQuien;
use App\Models\sicosocial\Pivotes\VsiConsumoQuien;

class VsiConsumoQuienObserver
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

    public function created(VsiConsumoQuien $modeloxx)
    {
        HVsiConsumoQuien::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumoQuien "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumoQuien  $modeloxx
     * @return void
     */
    public function updated(VsiConsumoQuien $modeloxx)
    {
        HVsiConsumoQuien::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumoQuien "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumoQuien  $modeloxx
     * @return void
     */
    public function deleted(VsiConsumoQuien $modeloxx)
    {
        HVsiConsumoQuien::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumoQuien "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumoQuien  $modeloxx
     * @return void
     */
    public function restored(VsiConsumoQuien $modeloxx)
    {
        HVsiConsumoQuien::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiConsumoQuien "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiConsumoQuien  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiConsumoQuien $modeloxx)
    {
        HVsiConsumoQuien::create($this->getLog($modeloxx));
    }
}