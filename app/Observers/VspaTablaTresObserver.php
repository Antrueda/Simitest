<?php

namespace App\Observers;

use App\Models\Salud\Mitigacion\Logs\HVspaTablaTres;
use App\Models\Salud\Mitigacion\VspaTablaTres;

class VspaTablaTresObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['mit_vspa_id'] = $modeloxx->mit_vspa_id;
        $log['prm_cinco_uno_id'] = $modeloxx->prm_cinco_uno_id;
        $log['prm_cinco_dos_id'] = $modeloxx->prm_cinco_dos_id;
        $log['prm_cinco_tres_id'] = $modeloxx->prm_cinco_tres_id;
        $log['prm_cinco_cuatro_id'] = $modeloxx->prm_cinco_cuatro_id;
        $log['prm_cinco_cinco_id'] = $modeloxx->prm_cinco_cinco_id;
        $log['prm_cinco_seis_id'] = $modeloxx->prm_cinco_seis_id;
        $log['prm_cinco_siete_id'] = $modeloxx->prm_cinco_siete_id;
        $log['prm_cinco_ocho_id'] = $modeloxx->prm_cinco_ocho_id;
        $log['prm_cinco_nueve_id'] = $modeloxx->prm_cinco_nueve_id;
        $log['prm_cinco_diez_id'] = $modeloxx->prm_cinco_diez_id;
        $log['prm_cinco_once_id'] = $modeloxx->prm_cinco_once_id;
        $log['prm_cinco_doce_id'] = $modeloxx->prm_cinco_doce_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VspaTablaTres $modeloxx)
    {
        HVspaTablaTres::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTablaTres "updated" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaTres  $modeloxx
     * @return void
     */
    public function updated(VspaTablaTres $modeloxx)
    {
        HVspaTablaTres::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTablaTres "deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaTres  $modeloxx
     * @return void
     */
    public function deleted(VspaTablaTres $modeloxx)
    {
        HVspaTablaTres::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTablaTres "restored" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaTres  $modeloxx
     * @return void
     */
    public function restored(VspaTablaTres $modeloxx)
    {
        HVspaTablaTres::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTablaTres "force deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaTres  $modeloxx
     * @return void
     */
    public function forceDeleted(VspaTablaTres $modeloxx)
    {
        HVspaTablaTres::create($this->getLog($modeloxx));
    }
}