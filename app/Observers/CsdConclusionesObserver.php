<?php

namespace App\Observers;

use App\Models\consulta\CsdConclusiones;
use App\Models\consulta\Logs\HCsdConclusiones;

class CsdConclusionesObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['csd_id'] = $modeloxx->csd_id;
        $log['conclusiones'] = $modeloxx->conclusiones;
        $log['persona_nombre'] = $modeloxx->persona_nombre;
        $log['persona_doc'] = $modeloxx->persona_doc;
        $log['persona_parent_id'] = $modeloxx->persona_parent_id;
        $log['user_doc1_id'] = $modeloxx->user_doc1_id;
        $log['user_doc2_id'] = $modeloxx->user_doc2_id;
        $log['prm_tipofuen_id'] = $modeloxx->prm_tipofuen_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(CsdConclusiones $modeloxx)
    {
        HCsdConclusiones::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdConclusione "updated" event.
     *
     * @param  \App\Models\consulta\CsdConclusione  $modeloxx
     * @return void
     */
    public function updated(CsdConclusiones $modeloxx)
    {
        HCsdConclusiones::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdConclusione "deleted" event.
     *
     * @param  \App\Models\consulta\CsdConclusione  $modeloxx
     * @return void
     */
    public function deleted(CsdConclusiones $modeloxx)
    {
        HCsdConclusiones::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdConclusione "restored" event.
     *
     * @param  \App\Models\consulta\CsdConclusione  $modeloxx
     * @return void
     */
    public function restored(CsdConclusiones $modeloxx)
    {
        HCsdConclusiones::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdConclusione "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdConclusione  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdConclusiones $modeloxx)
    {
        HCsdConclusiones::create($this->getLog($modeloxx));
    }
}
