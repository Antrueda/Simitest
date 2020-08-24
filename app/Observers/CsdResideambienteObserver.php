<?php

namespace App\Observers;

use App\Models\consulta\pivotes\CsdResideambiente;
use App\Models\consulta\pivotes\Logs\HCsdResideambiente;

class CsdResideambienteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['csd_residencia_id'] = $modeloxx->csd_residencia_id;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(CsdResideambiente $modeloxx)
    {
        HCsdResideambiente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "updated" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function updated(CsdResideambiente $modeloxx)
    {
        HCsdResideambiente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "deleted" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function deleted(CsdResideambiente $modeloxx)
    {
        HCsdResideambiente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "restored" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function restored(CsdResideambiente $modeloxx)
    {
        HCsdResideambiente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the rangonpt "force deleted" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdResideambiente $modeloxx)
    {
        HCsdResideambiente::create($this->getLog($modeloxx));
    }
}