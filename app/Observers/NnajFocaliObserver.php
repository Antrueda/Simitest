<?php

namespace App\Observers;

use App\Models\fichaIngreso\NnajFocali;
use App\Models\Logs\HNnajFocali;

class NnajFocaliObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
        $log['s_nombre_focalizacion'] = $modeloxx->s_nombre_focalizacion;
        $log['s_lugar_focalizacion'] = $modeloxx->s_lugar_focalizacion;
        $log['sis_upzbarri_id'] = $modeloxx->sis_upzbarri_id;
        $log['sis_docfuen_id'] = $modeloxx->sis_docfuen_id;
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

    public function created(NnajFocali $modeloxx)
    {
        HNnajFocali::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajFocali "updated" event.
     *
     * @param  \App\Models\Logs\HNnajFocali  $modeloxx
     * @return void
     */
    public function updated(NnajFocali $modeloxx)
    {
        HNnajFocali::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajFocali "deleted" event.
     *
     * @param  \App\Models\Logs\HNnajFocali  $modeloxx
     * @return void
     */
    public function deleted(NnajFocali $modeloxx)
    {
        HNnajFocali::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajFocali "restored" event.
     *
     * @param  \App\Models\Logs\HNnajFocali  $modeloxx
     * @return void
     */
    public function restored(NnajFocali $modeloxx)
    {
        HNnajFocali::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajFocali "force deleted" event.
     *
     * @param  \App\Models\Logs\HNnajFocali  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajFocali $modeloxx)
    {
        HNnajFocali::create($this->getLog($modeloxx));
    }
}