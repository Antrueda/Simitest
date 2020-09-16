<?php

namespace App\Observers;

use App\Models\fichaIngreso\NnajUpi;
use App\Models\Logs\HNnajUpi;

class NnajUpisObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
        $log['prm_principa_id'] = $modeloxx->prm_principa_id;
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
     * Handle the nnaj upis "created" event.
     *
     * @param  \App\NnajUpi  $modeloxx
     * @return void
     */
    public function created(NnajUpi $modeloxx)
    {
        HNnajUpi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj upis "updated" event.
     *
     * @param  \App\NnajUpi  $modeloxx
     * @return void
     */
    public function updated(NnajUpi $modeloxx)
    {
        HNnajUpi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj upis "deleted" event.
     *
     * @param  \App\NnajUpi  $modeloxx
     * @return void
     */
    public function deleted(NnajUpi $modeloxx)
    {
        HNnajUpi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj upis "restored" event.
     *
     * @param  \App\NnajUpi  $modeloxx
     * @return void
     */
    public function restored(NnajUpi $modeloxx)
    {
        HNnajUpi::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj upis "force deleted" event.
     *
     * @param  \App\NnajUpi  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajUpi $modeloxx)
    {
        HNnajUpi::create($this->getLog($modeloxx));
    }
}
