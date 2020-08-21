<?php

namespace App\Observers;

use App\Models\consulta\CsdAlimentacion;
use App\Models\consulta\Logs\HCsdAlimentacion;

class CsdAlimentacionObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['cant_personas'] = $modeloxx->cant_personas;
        $log['prm_horario_id'] = $modeloxx->prm_horario_id;
        $log['prm_apoyo_id'] = $modeloxx->prm_apoyo_id;
        $log['prm_entidad_id'] = $modeloxx->prm_entidad_id;
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

    public function created(CsdAlimentacion $modeloxx)
    {
        HCsdAlimentacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentacion "updated" event.
     *
     * @param  \App\Models\consulta\CsdAlimentacion  $modeloxx
     * @return void
     */
    public function updated(CsdAlimentacion $modeloxx)
    {
        HCsdAlimentacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentacion "deleted" event.
     *
     * @param  \App\Models\consulta\CsdAlimentacion  $modeloxx
     * @return void
     */
    public function deleted(CsdAlimentacion $modeloxx)
    {
        HCsdAlimentacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentacion "restored" event.
     *
     * @param  \App\Models\consulta\CsdAlimentacion  $modeloxx
     * @return void
     */
    public function restored(CsdAlimentacion $modeloxx)
    {
        HCsdAlimentacion::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdAlimentacion "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdAlimentacion  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdAlimentacion $modeloxx)
    {
        HCsdAlimentacion::create($this->getLog($modeloxx));
    }
}