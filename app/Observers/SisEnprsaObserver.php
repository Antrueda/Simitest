<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisEnprsa;
use App\Models\Sistema\SisEnprsa;

class SisEnprsaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_enprsa'] = $modeloxx->s_enprsa;
        $log['deleted_at'] = $modeloxx->deleted_at;
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
     * Handle the sis enprsa "created" event.
     *
     * @param  \App\Models\Sistema\SisEnprsa  $sisEnprsa
     * @return void
     */
    public function created(SisEnprsa $sisEnprsa)
    {
        HSisEnprsa::create($this->getLog($sisEnprsa));
    }

    /**
     * Handle the sis enprsa "updated" event.
     *
     * @param  \App\Models\Sistema\SisEnprsa  $sisEnprsa
     * @return void
     */
    public function updated(SisEnprsa $sisEnprsa)
    {
        HSisEnprsa::create($this->getLog($sisEnprsa));
    }

    /**
     * Handle the sis enprsa "deleted" event.
     *
     * @param  \App\Models\Sistema\SisEnprsa  $sisEnprsa
     * @return void
     */
    public function deleted(SisEnprsa $sisEnprsa)
    {
        HSisEnprsa::create($this->getLog($sisEnprsa));
    }

    /**
     * Handle the sis enprsa "restored" event.
     *
     * @param  \App\Models\Sistema\SisEnprsa  $sisEnprsa
     * @return void
     */
    public function restored(SisEnprsa $sisEnprsa)
    {
        HSisEnprsa::create($this->getLog($sisEnprsa));
    }

    /**
     * Handle the sis enprsa "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisEnprsa  $sisEnprsa
     * @return void
     */
    public function forceDeleted(SisEnprsa $sisEnprsa)
    {
        HSisEnprsa::create($this->getLog($sisEnprsa));
    }
}
