<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HParametroTema;
use App\Models\Sistema\ParametroTema;

class ParametroTemaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['tema_id'] = $modeloxx->tema_id;
        $log['simianti_id'] = $modeloxx->simianti_id;

        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(ParametroTema $modeloxx)
    {
        HParametroTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the ParametroTema "updated" event.
     *
     * @param  \App\Models\Sistema\ParametroTema  $modeloxx
     * @return void
     */
    public function updated(ParametroTema $modeloxx)
    {
        HParametroTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the ParametroTema "deleted" event.
     *
     * @param  \App\Models\Sistema\ParametroTema  $modeloxx
     * @return void
     */
    public function deleted(ParametroTema $modeloxx)
    {
        HParametroTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the ParametroTema "restored" event.
     *
     * @param  \App\Models\Sistema\ParametroTema  $modeloxx
     * @return void
     */
    public function restored(ParametroTema $modeloxx)
    {
        HParametroTema::create($this->getLog($modeloxx));
    }

    /**
     * Handle the ParametroTema "force deleted" event.
     *
     * @param  \App\Models\Sistema\ParametroTema  $modeloxx
     * @return void
     */
    public function forceDeleted(ParametroTema $modeloxx)
    {
        HParametroTema::create($this->getLog($modeloxx));
    }
}
