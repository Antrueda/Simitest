<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisDepartamento;
use App\Models\Sistema\SisDepartamento;

class SisDepartamentoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['sis_pai_id'] = $modeloxx->sis_pai_id;
        $log['s_departamento'] = $modeloxx->s_departamento;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisDepartamento $modeloxx)
    {
        HSisDepartamento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepartamento "updated" event.
     *
     * @param  \App\Models\Sistema\SisDepartamento  $modeloxx
     * @return void
     */
    public function updated(SisDepartamento $modeloxx)
    {
        HSisDepartamento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepartamento "deleted" event.
     *
     * @param  \App\Models\Sistema\SisDepartamento  $modeloxx
     * @return void
     */
    public function deleted(SisDepartamento $modeloxx)
    {
        HSisDepartamento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepartamento "restored" event.
     *
     * @param  \App\Models\Sistema\SisDepartamento  $modeloxx
     * @return void
     */
    public function restored(SisDepartamento $modeloxx)
    {
        HSisDepartamento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepartamento "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisDepartamento  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDepartamento $modeloxx)
    {
        HSisDepartamento::create($this->getLog($modeloxx));
    }
}
