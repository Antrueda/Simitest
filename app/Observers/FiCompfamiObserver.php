<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiCompfami;
use App\Models\fichaIngreso\Logs\HFiCompfami;

class FiCompfamiObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['i_prm_parentesco_id'] = $modeloxx->i_prm_parentesco_id;
        $log['s_nombre_identitario'] = $modeloxx->s_nombre_identitario;
        $log['s_telefono'] = $modeloxx->s_telefono;
        $log['d_nacimiento'] = $modeloxx->d_nacimiento;
        $log['i_prm_ocupacion_id'] = $modeloxx->i_prm_ocupacion_id;
        $log['i_prm_vinculado_idipron_id'] = $modeloxx->i_prm_vinculado_idipron_id;
        $log['i_prm_convive_nnaj_id'] = $modeloxx->i_prm_convive_nnaj_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['sis_nnajnnaj_id'] = $modeloxx->sis_nnajnnaj_id;
        $log['prm_reprlega_id'] = $modeloxx->prm_reprlega_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiCompfami $modeloxx)
    {
        HFiCompfami::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiCompfami "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiCompfami  $modeloxx
     * @return void
     */
    public function updated(FiCompfami $modeloxx)
    {
        HFiCompfami::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiCompfami "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiCompfami  $modeloxx
     * @return void
     */
    public function deleted(FiCompfami $modeloxx)
    {
        HFiCompfami::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiCompfami "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiCompfami  $modeloxx
     * @return void
     */
    public function restored(FiCompfami $modeloxx)
    {
        HFiCompfami::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiCompfami "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiCompfami  $modeloxx
     * @return void
     */
    public function forceDeleted(FiCompfami $modeloxx)
    {
        HFiCompfami::create($this->getLog($modeloxx));
    }
}
