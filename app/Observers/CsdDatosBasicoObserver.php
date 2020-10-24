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
        $log['s_primer_nombre'] = $modeloxx->s_primer_nombre;
        $log['s_segundo_nombre'] = $modeloxx->s_segundo_nombre;
        $log['s_primer_apellido'] = $modeloxx->s_primer_apellido;
        $log['s_segundo_apellido'] = $modeloxx->segundo_apellido;
        $log['s_nombre_identitario'] = $modeloxx->s_nombre_identitario;
        $log['s_apodo'] = $modeloxx->s_apodo;
        $log['prm_sexo_id'] = $modeloxx->prm_sexo_id;
        $log['prm_identidad_genero_id'] = $modeloxx->prm_identidad_genero_id;
        $log['prm_orientacion_sexual_id'] = $modeloxx->prm_orientacion_sexual_id;
        $log['d_nacimiento'] = $modeloxx->d_nacimiento;
        $log['sis_pai_id'] = $modeloxx->sis_pai_id;
        $log['sis_departamento_id'] = $modeloxx->sis_departamento_id;
        $log['sis_municipio_id'] = $modeloxx->sis_municipio_id;
        $log['prm_tipodocu_id'] = $modeloxx->prm_tipodocu_id;
        $log['prm_doc_fisico_id'] = $modeloxx->prm_doc_fisico_id;
        $log['prm_ayuda_id'] = $modeloxx->prm_ayuda_id;
        $log['s_documento'] = $modeloxx->s_documento;
        $log['sis_paiexp_id'] = $modeloxx->sis_paiexp_id;
        $log['sis_departamentoexp_id'] = $modeloxx->sis_departamentoexp_id;
        $log['sis_municipioexp_id'] = $modeloxx->sis_municipioexp_id;
        $log['prm_gsanguino_id'] = $modeloxx->prm_gsanguino_id;
        $log['prm_factor_rh_id'] = $modeloxx->prm_factor_rh_id;
        $log['prm_situacion_militar_id'] = $modeloxx->prm_situacion_militar_id;
        $log['prm_clase_libreta_id'] = $modeloxx->prm_clase_libreta_id;
        $log['prm_estado_civil_id'] = $modeloxx->prm_estado_civil_id;
        $log['prm_etnia_id'] = $modeloxx->prm_etnia_id;
        $log['prm_poblacion_etnia_id'] = $modeloxx->prm_poblacion_etnia_id;
        $log['prm_tipoblaci_id'] = $modeloxx->prm_tipoblaci_id;
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
