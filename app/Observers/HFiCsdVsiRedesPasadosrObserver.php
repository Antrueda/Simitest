<?php

namespace App\Observers;

use App\HFiCsdVsiRedesPasado;

class HFiCsdVsiRedesPasadosrObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_tiempo'] = $modeloxx->i_tiempo;
        $log['sis_entidad_id'] = $modeloxx->sis_entidad_id;
        $log['s_servicio'] = $modeloxx->s_servicio;
        $log['i_prm_tiempo_id'] = $modeloxx->i_prm_tiempo_id;
        $log['i_prm_anio_prestacion_id'] = $modeloxx->i_prm_anio_prestacion_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }
    public function created(HFiCsdVsiRedesPasado $modeloxx)
    {
        HFiCsdVsiRedesPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi redes pasado "updated" event.
     *
     * @param  \App\HFiCsdVsiRedesPasado  $modeloxx
     * @return void
     */
    public function updated(HFiCsdVsiRedesPasado $modeloxx)
    {
        HFiCsdVsiRedesPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi redes pasado "deleted" event.
     *
     * @param  \App\HFiCsdVsiRedesPasado  $modeloxx
     * @return void
     */
    public function deleted(HFiCsdVsiRedesPasado $modeloxx)
    {
        HFiCsdVsiRedesPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi redes pasado "restored" event.
     *
     * @param  \App\HFiCsdVsiRedesPasado  $modeloxx
     * @return void
     */
    public function restored(HFiCsdVsiRedesPasado $modeloxx)
    {
        HFiCsdVsiRedesPasado::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd vsi redes pasado "force deleted" event.
     *
     * @param  \App\HFiCsdVsiRedesPasado  $modeloxx
     * @return void
     */
    public function forceDeleted(HFiCsdVsiRedesPasado $modeloxx)
    {
        HFiCsdVsiRedesPasado::create($this->getLog($modeloxx));
    }
}
