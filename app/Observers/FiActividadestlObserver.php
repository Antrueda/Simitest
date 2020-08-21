<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiActividadestl;
use App\Models\fichaIngreso\Logs\HFiActividadestl;

class FiActividadestlObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_horas_permanencia_calle'] = $modeloxx->i_horas_permanencia_calle;
        $log['i_dias_permanencia_calle'] = $modeloxx->i_dias_permanencia_calle;
        $log['i_prm_pertenece_parche_id'] = $modeloxx->i_prm_pertenece_parche_id;
        $log['s_nombre_parche'] = $modeloxx->s_nombre_parche;
        $log['i_prm_acceso_recreacion_id'] = $modeloxx->i_prm_acceso_recreacion_id;
        $log['i_prm_practica_religiosa_id'] = $modeloxx->i_prm_practica_religiosa_id;
        $log['i_prm_religion_practica_id'] = $modeloxx->i_prm_religion_practica_id;
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

    public function created(FiActividadestl $modeloxx)
    {
        HFiActividadestl::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiActividadestl "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiActividadestl  $modeloxx
     * @return void
     */
    public function updated(FiActividadestl $modeloxx)
    {
        HFiActividadestl::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiActividadestl "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiActividadestl  $modeloxx
     * @return void
     */
    public function deleted(FiActividadestl $modeloxx)
    {
        HFiActividadestl::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiActividadestl "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiActividadestl  $modeloxx
     * @return void
     */
    public function restored(FiActividadestl $modeloxx)
    {
        HFiActividadestl::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiActividadestl "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiActividadestl  $modeloxx
     * @return void
     */
    public function forceDeleted(FiActividadestl $modeloxx)
    {
        HFiActividadestl::create($this->getLog($modeloxx));
    }
}