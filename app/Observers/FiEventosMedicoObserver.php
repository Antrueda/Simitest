<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiEventosMedico;
use App\Models\fichaIngreso\Logs\HFiEventosMedico;

class FiEventosMedicoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_salud_id'] = $modeloxx->fi_salud_id;
        $log['i_prm_evento_medico_id'] = $modeloxx->i_prm_evento_medico_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiEventosMedico $modeloxx)
    {
        HFiEventosMedico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiEventosMedico "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiEventosMedico  $modeloxx
     * @return void
     */
    public function updated(FiEventosMedico $modeloxx)
    {
        HFiEventosMedico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiEventosMedico "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiEventosMedico  $modeloxx
     * @return void
     */
    public function deleted(FiEventosMedico $modeloxx)
    {
        HFiEventosMedico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiEventosMedico "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiEventosMedico  $modeloxx
     * @return void
     */
    public function restored(FiEventosMedico $modeloxx)
    {
        HFiEventosMedico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiEventosMedico "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiEventosMedico  $modeloxx
     * @return void
     */
    public function forceDeleted(FiEventosMedico $modeloxx)
    {
        HFiEventosMedico::create($this->getLog($modeloxx));
    }
}