<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisDepeUsua;
use App\Models\Sistema\SisDepeUsua;

class SisDepeUsuaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['user_id'] = $modeloxx->user_id;
        $log['sis_depen_id'] = $modeloxx->sis_depen_id;
        $log['i_prm_responsable_id'] = $modeloxx->i_prm_responsable_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisDepeUsua $modeloxx)
    {
        HSisDepeUsua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepeUsua "updated" event.
     *
     * @param  \App\Models\Sistema\SisDepeUsua  $modeloxx
     * @return void
     */
    public function updated(SisDepeUsua $modeloxx)
    {
        HSisDepeUsua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepeUsua "deleted" event.
     *
     * @param  \App\Models\Sistema\SisDepeUsua  $modeloxx
     * @return void
     */
    public function deleted(SisDepeUsua $modeloxx)
    {
        HSisDepeUsua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepeUsua "restored" event.
     *
     * @param  \App\Models\Sistema\SisDepeUsua  $modeloxx
     * @return void
     */
    public function restored(SisDepeUsua $modeloxx)
    {
        HSisDepeUsua::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepeUsua "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisDepeUsua  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDepeUsua $modeloxx)
    {
        HSisDepeUsua::create($this->getLog($modeloxx));
    }
}