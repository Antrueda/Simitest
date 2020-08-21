<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use App\Models\fichaIngreso\Logs\HFiRedApoyoAntecedente;

class FiRedApoyoAntecedenteObserver
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

    public function created(FiRedApoyoAntecedente $modeloxx)
    {
        HFiRedApoyoAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedApoyoAntecedente "updated" event.
     *
     * @param  \App\Models\fichaIngreso\HFiRedApoyoAntecedente  $modeloxx
     * @return void
     */
    public function updated(FiRedApoyoAntecedente $modeloxx)
    {
        HFiRedApoyoAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedApoyoAntecedente "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\HFiRedApoyoAntecedente  $modeloxx
     * @return void
     */
    public function deleted(FiRedApoyoAntecedente $modeloxx)
    {
        HFiRedApoyoAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedApoyoAntecedente "restored" event.
     *
     * @param  \App\Models\fichaIngreso\HFiRedApoyoAntecedente  $modeloxx
     * @return void
     */
    public function restored(FiRedApoyoAntecedente $modeloxx)
    {
        HFiRedApoyoAntecedente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiRedApoyoAntecedente "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\HFiRedApoyoAntecedente  $modeloxx
     * @return void
     */
    public function forceDeleted(FiRedApoyoAntecedente $modeloxx)
    {
        HFiRedApoyoAntecedente::create($this->getLog($modeloxx));
    }
}