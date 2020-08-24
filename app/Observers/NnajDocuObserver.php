<?php

namespace App\Observers;

use App\Models\fichaIngreso\NnajDocu;
use App\Models\Logs\HNnajDocu;

class NnajDocuObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
        $log['s_documento'] = $modeloxx->s_documento;
        $log['prm_tipodocu_id'] = $modeloxx->prm_tipodocu_id;
        $log['prm_doc_fisico_id'] = $modeloxx->prm_doc_fisico_id;
        $log['prm_ayuda_id'] = $modeloxx->prm_ayuda_id;
        $log['sis_municipio_id'] = $modeloxx->sis_municipio_id;
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

    public function created(NnajDocu $modeloxx)
    {
        HNnajDocu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajDocu "updated" event.
     *
     * @param  \App\Models\Logs\HNnajDocu  $modeloxx
     * @return void
     */
    public function updated(NnajDocu $modeloxx)
    {
        HNnajDocu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajDocu "deleted" event.
     *
     * @param  \App\Models\Logs\HNnajDocu  $modeloxx
     * @return void
     */
    public function deleted(NnajDocu $modeloxx)
    {
        HNnajDocu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajDocu "restored" event.
     *
     * @param  \App\Models\Logs\HNnajDocu  $modeloxx
     * @return void
     */
    public function restored(NnajDocu $modeloxx)
    {
        HNnajDocu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajDocu "force deleted" event.
     *
     * @param  \App\Models\Logs\HNnajDocu  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajDocu $modeloxx)
    {
        HNnajDocu::create($this->getLog($modeloxx));
    }
}