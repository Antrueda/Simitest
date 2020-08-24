<?php

namespace App\Observers;

use App\Models\sistema\Logs\HSisEsta;
use App\Models\sistema\SisEsta;

class SisEstaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_estado'] = $modeloxx->s_estado;
        $log['i_estado'] = $modeloxx->i_estado;
        // campos por defecto, no borrar.
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisEsta $modeloxx)
    {
        HSisEsta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEsta "updated" event.
     *
     * @param  \App\Models\sistema\SisEsta  $modeloxx
     * @return void
     */
    public function updated(SisEsta $modeloxx)
    {
        HSisEsta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEsta "deleted" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function deleted(SisEsta $modeloxx)
    {
        HSisEsta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEsta "restored" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function restored(SisEsta $modeloxx)
    {
        HSisEsta::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisEsta "force deleted" event.
     *
     * @param  \App\Models\Medicamentos\Unidad\Rangonpt  $modeloxx
     * @return void
     */
    public function forceDeleted(SisEsta $modeloxx)
    {
        HSisEsta::create($this->getLog($modeloxx));
    }
}