<?php

namespace App\Observers;


use App\Models\fichaIngreso\NnajDeses;
use App\Models\Logs\HNnajDeses;

class NnajDesesObserver
{

    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        $log['sis_depser_id'] = $modeloxx->sis_depser_id;
        $log['nnaj_upi_id'] = $modeloxx->nnaj_upi_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }
    /**
     * Handle the nnaj deses "created" event.
     *
     * @param  \App\NnajDeses  $nnajDeses
     * @return void
     */
    public function created(NnajDeses $modeloxx)
    {
        HNnajDeses::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj deses "updated" event.
     *
     * @param  \App\NnajDeses  $modeloxx
     * @return void
     */
    public function updated(NnajDeses $modeloxx)
    {
        HNnajDeses::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj deses "deleted" event.
     *
     * @param  \App\NnajDeses  $modeloxx
     * @return void
     */
    public function deleted(NnajDeses $modeloxx)
    {
        HNnajDeses::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj deses "restored" event.
     *
     * @param  \App\NnajDeses  $modeloxx
     * @return void
     */
    public function restored(NnajDeses $modeloxx)
    {
        HNnajDeses::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj deses "force deleted" event.
     *
     * @param  \App\NnajDeses  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajDeses $modeloxx)
    {
        HNnajDeses::create($this->getLog($modeloxx));
    }
}
