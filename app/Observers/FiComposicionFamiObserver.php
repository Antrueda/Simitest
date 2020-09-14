<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiComposicionFami;
use App\Models\fichaIngreso\Logs\HFiComposicionFami;

class FiComposicionFamiObserver
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

        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiComposicionFami $modeloxx)
    {
        HFiComposicionFami::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiComposicionFami "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiComposicionFami  $modeloxx
     * @return void
     */
    public function updated(FiComposicionFami $modeloxx)
    {
        HFiComposicionFami::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiComposicionFami "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiComposicionFami  $modeloxx
     * @return void
     */
    public function deleted(FiComposicionFami $modeloxx)
    {
        HFiComposicionFami::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiComposicionFami "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiComposicionFami  $modeloxx
     * @return void
     */
    public function restored(FiComposicionFami $modeloxx)
    {
        HFiComposicionFami::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiComposicionFami "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiComposicionFami  $modeloxx
     * @return void
     */
    public function forceDeleted(FiComposicionFami $modeloxx)
    {
        HFiComposicionFami::create($this->getLog($modeloxx));
    }
}
