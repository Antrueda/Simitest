<?php

namespace App\Observers;

use App\Models\fichaIngreso\NnajNacimi;
use App\Models\Logs\HNnajNacimi;

class NnajNacimiObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
        $log['d_nacimiento'] = $modeloxx->d_nacimiento;
        $log['sis_municipio_id'] = $modeloxx->sis_municipio_id;
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

    public function created(NnajNacimi $modeloxx)
    {
        HNnajNacimi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajNacimi "updated" event.
     *
     * @param  \App\Models\Logs\HNnajNacimi  $modeloxx
     * @return void
     */
    public function updated(NnajNacimi $modeloxx)
    {
        HNnajNacimi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajNacimi "deleted" event.
     *
     * @param  \App\Models\Logs\HNnajNacimi  $modeloxx
     * @return void
     */
    public function deleted(NnajNacimi $modeloxx)
    {
        HNnajNacimi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajNacimi "restored" event.
     *
     * @param  \App\Models\Logs\HNnajNacimi  $modeloxx
     * @return void
     */
    public function restored(NnajNacimi $modeloxx)
    {
        HNnajNacimi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajNacimi "force deleted" event.
     *
     * @param  \App\Models\Logs\HNnajNacimi  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajNacimi $modeloxx)
    {
        HNnajNacimi::create($this->getLog($modeloxx));
    }
}
