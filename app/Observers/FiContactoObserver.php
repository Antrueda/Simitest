<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiContacto;
use App\Models\fichaIngreso\Logs\HFiContacto;

class FiContactoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['i_prm_tipo_contacto_id'] = $modeloxx->i_prm_tipo_contacto_id;
        $log['s_contacto_condicion'] = $modeloxx->s_contacto_condicion;
        $log['i_prm_contacto_opcion_id'] = $modeloxx->i_prm_contacto_opcion_id;
        $log['s_entidad_remite'] = $modeloxx->s_entidad_remite;
        $log['d_fecha_remite_id'] = $modeloxx->d_fecha_remite_id;
        $log['i_prm_motivo_contacto_id'] = $modeloxx->i_prm_motivo_contacto_id;
        $log['i_prm_aut_tratamiento_id'] = $modeloxx->i_prm_aut_tratamiento_id;
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

    public function created(FiContacto $modeloxx)
    {
        HFiContacto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiContacto "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiContacto  $modeloxx
     * @return void
     */
    public function updated(FiContacto $modeloxx)
    {
        HFiContacto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiContacto "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiContacto  $modeloxx
     * @return void
     */
    public function deleted(FiContacto $modeloxx)
    {
        HFiContacto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiContacto "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiContacto  $modeloxx
     * @return void
     */
    public function restored(FiContacto $modeloxx)
    {
        HFiContacto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiContacto "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiContacto  $modeloxx
     * @return void
     */
    public function forceDeleted(FiContacto $modeloxx)
    {
        HFiContacto::create($this->getLog($modeloxx));
    }
}