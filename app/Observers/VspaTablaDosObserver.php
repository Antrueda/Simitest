<?php

namespace App\Observers;

use App\Models\Salud\Mitigacion\Logs\HVspaTablaDos;
use App\Models\Salud\Mitigacion\VspaTablaDos;

class VspaTablaDosObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['mit_vspa_id'] = $modeloxx->mit_vspa_id;
        $log['prm_cuatro_uno_id'] = $modeloxx->prm_cuatro_uno_id;
        $log['prm_cuatro_dos_id'] = $modeloxx->prm_cuatro_dos_id;
        $log['prm_cuatro_tres_id'] = $modeloxx->prm_cuatro_tres_id;
        $log['prm_cuatro_cuatro_id'] = $modeloxx->prm_cuatro_cuatro_id;
        $log['prm_cuatro_cinco_id'] = $modeloxx->prm_cuatro_cinco_id;
        $log['prm_cuatro_seis_id'] = $modeloxx->prm_cuatro_seis_id;
        $log['prm_cuatro_siete_id'] = $modeloxx->prm_cuatro_siete_id;
        $log['prm_cuatro_ocho_id'] = $modeloxx->prm_cuatro_ocho_id;
        $log['prm_cuatro_nueve_id'] = $modeloxx->prm_cuatro_nueve_id;
        $log['prm_cuatro_diez_id'] = $modeloxx->prm_cuatro_diez_id;
        $log['prm_cuatro_once_id'] = $modeloxx->prm_cuatro_once_id;
        $log['prm_cuatro_doce_id'] = $modeloxx->prm_cuatro_doce_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VspaTablaDos $modeloxx)
    {
        HVspaTablaDos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTablaDos "updated" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaDos  $modeloxx
     * @return void
     */
    public function updated(VspaTablaDos $modeloxx)
    {
        HVspaTablaDos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTablaDos "deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaDos  $modeloxx
     * @return void
     */
    public function deleted(VspaTablaDos $modeloxx)
    {
        HVspaTablaDos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTablaDos "restored" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaDos  $modeloxx
     * @return void
     */
    public function restored(VspaTablaDos $modeloxx)
    {
        HVspaTablaDos::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTablaDos "force deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaDos  $modeloxx
     * @return void
     */
    public function forceDeleted(VspaTablaDos $modeloxx)
    {
        HVspaTablaDos::create($this->getLog($modeloxx));
    }
}