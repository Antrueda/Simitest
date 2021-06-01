<?php

namespace App\Observers;

use App\Models\Indicadores\Logs\HInLibagrup;
use App\Models\Indicadores\Admin\InLibagrup;

class InLibagrupObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['in_indiliba_id'] = $modeloxx->in_indiliba_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(InLibagrup $modeloxx)
    {
        HInLibagrup::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLibagrup "updated" event.
     *
     * @param  \App\Models\Indicadores\InLibagrup  $modeloxx
     * @return void
     */
    public function updated(InLibagrup $modeloxx)
    {
        HInLibagrup::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLibagrup "deleted" event.
     *
     * @param  \App\Models\Indicadores\InLibagrup  $modeloxx
     * @return void
     */
    public function deleted(InLibagrup $modeloxx)
    {
        HInLibagrup::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLibagrup "restored" event.
     *
     * @param  \App\Models\Indicadores\InLibagrup  $modeloxx
     * @return void
     */
    public function restored(InLibagrup $modeloxx)
    {
        HInLibagrup::create($this->getLog($modeloxx));
    }

    /**
     * Handle the InLibagrup "force deleted" event.
     *
     * @param  \App\Models\Indicadores\InLibagrup  $modeloxx
     * @return void
     */
    public function forceDeleted(InLibagrup $modeloxx)
    {
        HInLibagrup::create($this->getLog($modeloxx));
    }
}
