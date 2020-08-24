<?php

namespace App\Observers;
use App\Models\fichaIngreso\NnajSexo;
use App\Models\Logs\HNnajSexo;

class NnajSexoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_datos_basico_id'] = $modeloxx->fi_datos_basico_id;
        $log['s_nombre_identitario'] = $modeloxx->s_nombre_identitario;
        $log['prm_sexo_id'] = $modeloxx->prm_sexo_id;
        $log['prm_identidad_genero_id'] = $modeloxx->prm_identidad_genero_id;
        $log['prm_orientacion_sexual_id'] = $modeloxx->prm_orientacion_sexual_id;
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

    public function created(NnajSexo $modeloxx)
    {
        HNnajSexo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajSexo "updated" event.
     *
     * @param  \App\Models\Logs\HNnajSexo  $modeloxx
     * @return void
     */
    public function updated(NnajSexo $modeloxx)
    {
        HNnajSexo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajSexo "deleted" event.
     *
     * @param  \App\Models\Logs\HNnajSexo  $modeloxx
     * @return void
     */
    public function deleted(NnajSexo $modeloxx)
    {
        HNnajSexo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajSexo "restored" event.
     *
     * @param  \App\Models\Logs\HNnajSexo  $modeloxx
     * @return void
     */
    public function restored(NnajSexo $modeloxx)
    {
        HNnajSexo::create($this->getLog($modeloxx));
    }

    /**
     * Handle the NnajSexo "force deleted" event.
     *
     * @param  \App\Models\Logs\HNnajSexo  $modeloxx
     * @return void
     */
    public function forceDeleted(NnajSexo $modeloxx)
    {
        HNnajSexo::create($this->getLog($modeloxx));
    }
}