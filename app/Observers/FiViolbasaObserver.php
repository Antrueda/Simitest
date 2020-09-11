<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiViolbasa;
use App\Models\fichaIngreso\Logs\HFiViolbasa;

class FiViolbasaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_violencia_id'] = $modeloxx->fi_violencia_id;
        $log['prm_violbasa_id'] = $modeloxx->prm_violbasa_id;
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
     * Handle the fi violbasa "created" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolbasa  $fiViolbasa
     * @return void
     */
    public function created(FiViolbasa $fiViolbasa)
    {
        HFiViolbasa::create($this->getLog($fiViolbasa));
    }

    /**
     * Handle the fi violbasa "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolbasa  $fiViolbasa
     * @return void
     */
    public function updated(FiViolbasa $fiViolbasa)
    {
        HFiViolbasa::create($this->getLog($fiViolbasa));
    }

    /**
     * Handle the fi violbasa "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolbasa  $fiViolbasa
     * @return void
     */
    public function deleted(FiViolbasa $fiViolbasa)
    {
        HFiViolbasa::create($this->getLog($fiViolbasa));
    }

    /**
     * Handle the fi violbasa "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolbasa  $fiViolbasa
     * @return void
     */
    public function restored(FiViolbasa $fiViolbasa)
    {
        HFiViolbasa::create($this->getLog($fiViolbasa));
    }

    /**
     * Handle the fi violbasa "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiViolbasa  $fiViolbasa
     * @return void
     */
    public function forceDeleted(FiViolbasa $fiViolbasa)
    {
        HFiViolbasa::create($this->getLog($fiViolbasa));
    }
}
