<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiLesicome;
use App\Models\fichaIngreso\Logs\HFiLesicome;

class FiLesicomeObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fi_violencia_id'] = $modeloxx->fi_violencia_id;
        $log['prm_lesicome_id'] = $modeloxx->prm_lesicome_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }



    public function created(FiLesicome $fiLesicome)
    {
        HFiLesicome::create($this->getLog($fiLesicome));
    }

    /**
     * Handle the fi lesicome "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiLesicome  $fiLesicome
     * @return void
     */
    public function updated(FiLesicome $fiLesicome)
    {
        HFiLesicome::create($this->getLog($fiLesicome));
    }

    /**
     * Handle the fi lesicome "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiLesicome  $fiLesicome
     * @return void
     */
    public function deleted(FiLesicome $fiLesicome)
    {
        HFiLesicome::create($this->getLog($fiLesicome));
    }

    /**
     * Handle the fi lesicome "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiLesicome  $fiLesicome
     * @return void
     */
    public function restored(FiLesicome $fiLesicome)
    {
        HFiLesicome::create($this->getLog($fiLesicome));
    }

    /**
     * Handle the fi lesicome "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiLesicome  $fiLesicome
     * @return void
     */
    public function forceDeleted(FiLesicome $fiLesicome)
    {
        HFiLesicome::create($this->getLog($fiLesicome));
    }
}
