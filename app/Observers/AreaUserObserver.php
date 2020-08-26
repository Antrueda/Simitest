<?php

namespace App\Observers;

use App\Models\Sistema\AreaUser;
use App\Models\Sistema\Logs\HAreaUser;

class AreaUserObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['area_id'] = $modeloxx->area_id;
        $log['user_id'] = $modeloxx->user_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AreaUser $modeloxx)
    {
        HAreaUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AreaUser "updated" event.
     *
     * @param  \App\Models\Sistema\AreaUser  $modeloxx
     * @return void
     */
    public function updated(AreaUser $modeloxx)
    {
        HAreaUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AreaUser "deleted" event.
     *
     * @param  \App\Models\Sistema\AreaUser  $modeloxx
     * @return void
     */
    public function deleted(AreaUser $modeloxx)
    {
        HAreaUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AreaUser "restored" event.
     *
     * @param  \App\Models\Sistema\AreaUser  $modeloxx
     * @return void
     */
    public function restored(AreaUser $modeloxx)
    {
        HAreaUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AreaUser "force deleted" event.
     *
     * @param  \App\Models\Sistema\AreaUser  $modeloxx
     * @return void
     */
    public function forceDeleted(AreaUser $modeloxx)
    {
        HAreaUser::create($this->getLog($modeloxx));
    }
}