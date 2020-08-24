<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisTcampo;
use App\Models\sistema\SisTcampo;

class SisTcampoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_campo'] = $modeloxx->s_campo;
        $log['s_numero'] = $modeloxx->s_numero;
        $log['sis_tabla_id'] = $modeloxx->sis_tabla_id;
        $log['in_pregunta_id'] = $modeloxx->in_pregunta_id;
        $log['tema_id'] = $modeloxx->tema_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisTcampo $modeloxx)
    {
        HSisTcampo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTcampo "updated" event.
     *
     * @param  \App\Models\sistema\SisTcampo  $modeloxx
     * @return void
     */
    public function updated(SisTcampo $modeloxx)
    {
        HSisTcampo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTcampo "deleted" event.
     *
     * @param  \App\Models\sistema\SisTcampo  $modeloxx
     * @return void
     */
    public function deleted(SisTcampo $modeloxx)
    {
        HSisTcampo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTcampo "restored" event.
     *
     * @param  \App\Models\sistema\SisTcampo  $modeloxx
     * @return void
     */
    public function restored(SisTcampo $modeloxx)
    {
        HSisTcampo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTcampo "force deleted" event.
     *
     * @param  \App\Models\sistema\SisTcampo  $modeloxx
     * @return void
     */
    public function forceDeleted(SisTcampo $modeloxx)
    {
        HSisTcampo::create($this->getLog($modeloxx));
    }
}