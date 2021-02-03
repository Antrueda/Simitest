<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisBarrio;
use App\Models\Sistema\SisBarrio;

class SisBarrioObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_barrio'] = $modeloxx->s_barrio;

        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisBarrio $modeloxx)
    {
        HSisBarrio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisBarrio "updated" event.
     *
     * @param  \App\Models\Sistema\SisBarrio  $modeloxx
     * @return void
     */
    public function updated(SisBarrio $modeloxx)
    {
        HSisBarrio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisBarrio "deleted" event.
     *
     * @param  \App\Models\Sistema\SisBarrio  $modeloxx
     * @return void
     */
    public function deleted(SisBarrio $modeloxx)
    {
        HSisBarrio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisBarrio "restored" event.
     *
     * @param  \App\Models\Sistema\SisBarrio  $modeloxx
     * @return void
     */
    public function restored(SisBarrio $modeloxx)
    {
        HSisBarrio::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisBarrio "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisBarrio  $modeloxx
     * @return void
     */
    public function forceDeleted(SisBarrio $modeloxx)
    {
        HSisBarrio::create($this->getLog($modeloxx));
    }
}
