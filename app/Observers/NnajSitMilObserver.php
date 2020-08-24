<?php

namespace App\Observers;

use App\Models\fichaIngreso\NnajSitMil;
use App\Models\Logs\HNnajSitMil;

class NnajSitMilObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
        $log['prm_situacion_militar_id'] = $modeloxx->prm_situacion_militar_id;
        $log['prm_clase_libreta_id'] = $modeloxx->prm_clase_libreta_id;
        $log['sis_docfuen_id'] = $modeloxx->sis_docfuen_id;
        $log['deleted_at'] = $modeloxx->deleted_at;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(NnajSitMil $modeloxx)
    {
        HNnajSitMil::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajSitMil "updated" event.
     *
     * @param  \App\Models\Logs\HNnajSitMil  $modeloxx
     * @return void
     */
    public function updated(NnajSitMil $modeloxx)
    {
        HNnajSitMil::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajSitMil "deleted" event.
     *
     * @param  \App\Models\Logs\HNnajSitMil  $modeloxx
     * @return void
     */
    public function deleted(NnajSitMil $modeloxx)
    {
        HNnajSitMil::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajSitMil "restored" event.
     *
     * @param  \App\Models\Logs\HNnajSitMil  $modeloxx
     * @return void
     */
    public function restored(NnajSitMil $modeloxx)
    {
        HNnajSitMil::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajSitMil "force deleted" event.
     *
     * @param  \App\Models\Logs\HNnajSitMil  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajSitMil $modeloxx)
    {
        HNnajSitMil::create($this->getLog($modeloxx));
    }
}