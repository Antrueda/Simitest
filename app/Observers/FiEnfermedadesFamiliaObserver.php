<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiEnfermedadesFamilia;
use App\Models\fichaIngreso\Logs\HFiEnfermedadesFamilia;

class FiEnfermedadesFamiliaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_salud_id'] = $modeloxx->fi_salud_id;
        $log['fi_compfami_id'] = $modeloxx->fi_compfami_id;
        $log['s_tipo_enfermedad'] = $modeloxx->s_tipo_enfermedad;
        $log['prm_recimedi_id'] = $modeloxx->prm_recimedi_id;
        $log['s_medicamento'] = $modeloxx->s_medicamento;
        $log['prm_rectrata_id'] = $modeloxx->prm_rectrata_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiEnfermedadesFamilia $modeloxx)
    {
        HFiEnfermedadesFamilia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiEnfermedadesFamilia "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiEnfermedadesFamilia  $modeloxx
     * @return void
     */
    public function updated(FiEnfermedadesFamilia $modeloxx)
    {
        HFiEnfermedadesFamilia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiEnfermedadesFamilia "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiEnfermedadesFamilia  $modeloxx
     * @return void
     */
    public function deleted(FiEnfermedadesFamilia $modeloxx)
    {
        HFiEnfermedadesFamilia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiEnfermedadesFamilia "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiEnfermedadesFamilia  $modeloxx
     * @return void
     */
    public function restored(FiEnfermedadesFamilia $modeloxx)
    {
        HFiEnfermedadesFamilia::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiEnfermedadesFamilia "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiEnfermedadesFamilia  $modeloxx
     * @return void
     */
    public function forceDeleted(FiEnfermedadesFamilia $modeloxx)
    {
        HFiEnfermedadesFamilia::create($this->getLog($modeloxx));
    }
}
