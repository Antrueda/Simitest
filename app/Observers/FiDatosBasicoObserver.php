<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiDatosBasico;
use App\Models\fichaIngreso\Logs\HFiDatosBasico;

class FiDatosBasicoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['s_primer_nombre'] = $modeloxx->s_primer_nombre;
        $log['s_segundo_nombre'] = $modeloxx->s_segundo_nombre;
        $log['s_primer_apellido'] = $modeloxx->s_primer_apellido;
        $log['s_segundo_apellido'] = $modeloxx->s_segundo_apellido;
        $log['prm_poblacion_id'] = $modeloxx->prm_poblacion_id;
        $log['s_documento'] = $modeloxx->s_documento;
        $log['prm_documento_id'] = $modeloxx->prm_documento_id;
        $log['prm_doc_fisico_id'] = $modeloxx->prm_doc_fisico_id;
        $log['sis_municipioexp_id'] = $modeloxx->sis_municipioexp_id;
        $log['prm_sexo_id'] = $modeloxx->prm_sexo_id;
        $log['s_apodo'] = $modeloxx->s_apodo;
        $log['s_nombre_identitario'] = $modeloxx->s_nombre_identitario;
        $log['d_nacimiento'] = $modeloxx->d_nacimiento;
        $log['sis_municipio_id'] = $modeloxx->sis_municipio_id;
        $log['prm_gsanguino_id'] = $modeloxx->prm_gsanguino_id;
        $log['prm_factor_rh_id'] = $modeloxx->prm_factor_rh_id;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['fi_nucleo_familiar_id'] = $modeloxx->fi_nucleo_familiar_id;
        $log['prm_estado_civil_id'] = $modeloxx->prm_estado_civil_id;
        $log['prm_situacion_militar_id'] = $modeloxx->prm_situacion_militar_id;
        $log['prm_clase_libreta_id'] = $modeloxx->prm_clase_libreta_id;
        $log['i_prm_ayuda_id'] = $modeloxx->i_prm_ayuda_id;
        $log['prm_identidad_genero_id'] = $modeloxx->prm_identidad_genero_id;
        $log['prm_orientacion_sexual_id'] = $modeloxx->prm_orientacion_sexual_id;
        $log['prm_etnia_id'] = $modeloxx->prm_etnia_id;
        $log['prm_poblacion_etnia_id'] = $modeloxx->prm_poblacion_etnia_id;
        $log['prm_vestimenta_id'] = $modeloxx->prm_vestimenta_id;
        $log['s_nombre_focalizacion'] = $modeloxx->s_nombre_focalizacion;
        $log['s_lugar_focalizacion'] = $modeloxx->s_lugar_focalizacion;
        $log['sis_upzbarri_id'] = $modeloxx->sis_upzbarri_id;
        $log['sis_pai_id'] = $modeloxx->sis_pai_id;
        $log['sis_departamento_id'] = $modeloxx->sis_departamento_id;
        $log['sis_paiexp_id'] = $modeloxx->sis_paiexp_id;
        $log['sis_departamentoexp_id'] = $modeloxx->sis_departamentoexp_id;
        $log['i_prm_linea_base_id'] = $modeloxx->i_prm_linea_base_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDatosBasico "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiDatosBasico  $modeloxx
     * @return void
     */
    public function updated(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDatosBasico "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDatosBasico  $modeloxx
     * @return void
     */
    public function deleted(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDatosBasico "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiDatosBasico  $modeloxx
     * @return void
     */
    public function restored(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the FiDatosBasico "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDatosBasico  $modeloxx
     * @return void
     */
    public function forceDeleted(FiDatosBasico $modeloxx)
    {
        HFiDatosBasico::create($this->getLog($modeloxx));
    }
}