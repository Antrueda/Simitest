<?php

namespace App\Observers;

use App\Models\consulta\CsdDatosBasico;
use App\Models\consulta\Logs\HCsdDatosBasico;

class CsdDatosBasicoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['csd_id'] = $modeloxx->csd_id;
        $log['primer_nombre'] = $modeloxx->primer_nombre;
        $log['segundo_nombre'] = $modeloxx->segundo_nombre;
        $log['primer_apellido'] = $modeloxx->primer_apellido;
        $log['segundo_apellido'] = $modeloxx->segundo_apellido;
        $log['identitario'] = $modeloxx->identitario;
        $log['apodo'] = $modeloxx->apodo;
        $log['prm_sexo_id'] = $modeloxx->prm_sexo_id;
        $log['prm_genero_id'] = $modeloxx->prm_genero_id;
        $log['prm_sexual_id'] = $modeloxx->prm_sexual_id;
        $log['nacimiento'] = $modeloxx->nacimiento;
        $log['pais_id'] = $modeloxx->pais_id;
        $log['departamento_id'] = $modeloxx->departamento_id;
        $log['municipio_id'] = $modeloxx->municipio_id;
        $log['prm_documento_id'] = $modeloxx->prm_documento_id;
        $log['prm_doc_fisico_id'] = $modeloxx->prm_doc_fisico_id;
        $log['prm_sin_fisico_id'] = $modeloxx->prm_sin_fisico_id;
        $log['documento'] = $modeloxx->documento;
        $log['pais_docum_id'] = $modeloxx->pais_docum_id;
        $log['departamento_docum_id'] = $modeloxx->departamento_docum_id;
        $log['municipio_docum_id'] = $modeloxx->municipio_docum_id;
        $log['prm_gruposang_id'] = $modeloxx->prm_gruposang_id;
        $log['prm_factorsang_id'] = $modeloxx->prm_factorsang_id;
        $log['prm_militar_id'] = $modeloxx->prm_militar_id;
        $log['prm_libreta_id'] = $modeloxx->prm_libreta_id;
        $log['prm_civil_id'] = $modeloxx->prm_civil_id;
        $log['prm_etnia_id'] = $modeloxx->prm_etnia_id;
        $log['prm_cual_id'] = $modeloxx->prm_cual_id;
        $log['prm_poblacion_id'] = $modeloxx->prm_poblacion_id;
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

    public function created(CsdDatosBasico $modeloxx)
    {
        HCsdDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDatosBasico "updated" event.
     *
     * @param  \App\Models\consulta\CsdDatosBasico  $modeloxx
     * @return void
     */
    public function updated(CsdDatosBasico $modeloxx)
    {
        HCsdDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDatosBasico "deleted" event.
     *
     * @param  \App\Models\consulta\CsdDatosBasico  $modeloxx
     * @return void
     */
    public function deleted(CsdDatosBasico $modeloxx)
    {
        HCsdDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDatosBasico "restored" event.
     *
     * @param  \App\Models\consulta\CsdDatosBasico  $modeloxx
     * @return void
     */
    public function restored(CsdDatosBasico $modeloxx)
    {
        HCsdDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdDatosBasico "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdDatosBasico  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdDatosBasico $modeloxx)
    {
        HCsdDatosBasico::create($this->getLog($modeloxx));
    }
}