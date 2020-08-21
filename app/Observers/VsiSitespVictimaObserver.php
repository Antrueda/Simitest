<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiSitespVictima;
use App\Models\sicosocial\Pivotes\VsiSitespVictima;

class VsiSitespVictimaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_sitespecial_id'] = $modeloxx->vsi_sitespecial_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiSitespVictima $modeloxx)
    {
        HVsiSitespVictima::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitespVictima "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSitespVictima  $modeloxx
     * @return void
     */
    public function updated(VsiSitespVictima $modeloxx)
    {
        HVsiSitespVictima::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitespVictima "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSitespVictima  $modeloxx
     * @return void
     */
    public function deleted(VsiSitespVictima $modeloxx)
    {
        HVsiSitespVictima::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitespVictima "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSitespVictima  $modeloxx
     * @return void
     */
    public function restored(VsiSitespVictima $modeloxx)
    {
        HVsiSitespVictima::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiSitespVictima "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiSitespVictima  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiSitespVictima $modeloxx)
    {
        HVsiSitespVictima::create($this->getLog($modeloxx));
    }
}