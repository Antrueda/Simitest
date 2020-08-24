<?php

namespace App\Observers;

use App\Models\Salud\Mitigacion\Logs\HVspaTablaCuatro;
use App\Models\Salud\Mitigacion\VspaTablaCuatro;

class VspaTablaCuatroObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['mit_vspa_id'] = $modeloxx->mit_vspa_id;
        $log['prm_seis_uno_id'] = $modeloxx->prm_seis_uno_id;
        $log['prm_seis_dos_id'] = $modeloxx->prm_seis_dos_id;
        $log['prm_seis_tres_id'] = $modeloxx->prm_seis_tres_id;
        $log['prm_seis_cuatro_id'] = $modeloxx->prm_seis_cuatro_id;
        $log['prm_seis_cinco_id'] = $modeloxx->prm_seis_cinco_id;
        $log['prm_seis_seis_id'] = $modeloxx->prm_seis_seis_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VspaTablaCuatro $modeloxx)
    {
        HVspaTablaCuatro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the      * @param  \App\Models\Salud\Mitigacion\VspaTablaCuatro  $modeloxx "updated" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaCuatro  $modeloxx
     * @return void
     */
    public function updated(VspaTablaCuatro $modeloxx)
    {
        HVspaTablaCuatro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the      * @param  \App\Models\Salud\Mitigacion\VspaTablaCuatro  $modeloxx "deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaCuatro  $modeloxx
     * @return void
     */
    public function deleted(VspaTablaCuatro $modeloxx)
    {
        HVspaTablaCuatro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the      * @param  \App\Models\Salud\Mitigacion\VspaTablaCuatro  $modeloxx "restored" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaCuatro  $modeloxx
     * @return void
     */
    public function restored(VspaTablaCuatro $modeloxx)
    {
        HVspaTablaCuatro::create($this->getLog($modeloxx));
    }

    /**
     * Handle the      * @param  \App\Models\Salud\Mitigacion\VspaTablaCuatro  $modeloxx "force deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTablaCuatro  $modeloxx
     * @return void
     */
    public function forceDeleted(VspaTablaCuatro $modeloxx)
    {
        HVspaTablaCuatro::create($this->getLog($modeloxx));
    }
}