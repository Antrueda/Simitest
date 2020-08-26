<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisTabla;
use App\Models\Sistema\SisTabla;

class SisTablaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_tabla'] = $modeloxx->s_tabla;
        $log['s_descripcion'] = $modeloxx->s_descripcion;
        $log['sis_docfuen_id'] = $modeloxx->sis_docfuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisTabla $modeloxx)
    {
        HSisTabla::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTabla "updated" event.
     *
     * @param  \App\Models\Sistema\SisTabla  $modeloxx
     * @return void
     */
    public function updated(SisTabla $modeloxx)
    {
        HSisTabla::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTabla "deleted" event.
     *
     * @param  \App\Models\Sistema\SisTabla  $modeloxx
     * @return void
     */
    public function deleted(SisTabla $modeloxx)
    {
        HSisTabla::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTabla "restored" event.
     *
     * @param  \App\Models\Sistema\SisTabla  $modeloxx
     * @return void
     */
    public function restored(SisTabla $modeloxx)
    {
        HSisTabla::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisTabla "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisTabla  $modeloxx
     * @return void
     */
    public function forceDeleted(SisTabla $modeloxx)
    {
        HSisTabla::create($this->getLog($modeloxx));
    }
}