<?php

namespace App\Observers;

use App\Models\fichaIngreso\NnajUpis;
use App\Models\Logs\HNnajUpis;

class NnajUpisrObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
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
     * @param  \App\NnajUpis  $modeloxx
     * @return void
     */
    public function created(NnajUpis $modeloxx)
    {
        HNnajUpis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj upis "updated" event.
     *
     * @param  \App\NnajUpis  $modeloxx
     * @return void
     */
    public function updated(NnajUpis $modeloxx)
    {
        HNnajUpis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj upis "deleted" event.
     *
     * @param  \App\NnajUpis  $modeloxx
     * @return void
     */
    public function deleted(NnajUpis $modeloxx)
    {
        HNnajUpis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj upis "restored" event.
     *
     * @param  \App\NnajUpis  $modeloxx
     * @return void
     */
    public function restored(NnajUpis $modeloxx)
    {
        HNnajUpis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the nnaj upis "force deleted" event.
     *
     * @param  \App\NnajUpis  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajUpis $modeloxx)
    {
        HNnajUpis::create($this->getLog($modeloxx));
    }
}
