<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiCondicionAmbiente;
use App\Models\fichaIngreso\Logs\HFiCondicionAmbiente;

class FiCondicionAmbienteObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_residencia_id'] = $modeloxx->fi_residencia_id;
        $log['i_prm_condicion_amb_id'] = $modeloxx->i_prm_condicion_amb_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiCondicionAmbiente $modeloxx)
    {
        HFiCondicionAmbiente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiCondicionAmbiente "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiCondicionAmbiente  $modeloxx
     * @return void
     */
    public function updated(FiCondicionAmbiente $modeloxx)
    {
        HFiCondicionAmbiente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiCondicionAmbiente "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiCondicionAmbiente  $modeloxx
     * @return void
     */
    public function deleted(FiCondicionAmbiente $modeloxx)
    {
        HFiCondicionAmbiente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiCondicionAmbiente "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiCondicionAmbiente  $modeloxx
     * @return void
     */
    public function restored(FiCondicionAmbiente $modeloxx)
    {
        HFiCondicionAmbiente::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiCondicionAmbiente "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiCondicionAmbiente  $modeloxx
     * @return void
     */
    public function forceDeleted(FiCondicionAmbiente $modeloxx)
    {
        HFiCondicionAmbiente::create($this->getLog($modeloxx));
    }
}