<?php

namespace App\Observers;

use App\Models\consulta\CsdComFamiliar;
use App\Models\consulta\Logs\HCsdComFamiliar;

class CsdComFamiliarObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['csd_id'] = $modeloxx->csd_id;
        $log['s_primer_apellido'] = $modeloxx->s_primer_apellido;
        $log['s_segundo_apellido'] = $modeloxx->s_segundo_apellido;
        $log['s_primer_nombre'] = $modeloxx->s_primer_nombre;
        $log['s_segundo_nombre'] = $modeloxx->s_segundo_nombre;
        $log['s_nombre_identitario'] = $modeloxx->s_nombre_identitario;
        $log['prm_tipodocu_id'] = $modeloxx->prm_tipodocu_id;
        $log['s_documento'] = $modeloxx->s_documento;
        $log['d_nacimiento'] = $modeloxx->d_nacimiento;
        $log['prm_sexo_id'] = $modeloxx->prm_sexo_id;
        $log['prm_estado_civil_id'] = $modeloxx->prm_estado_civil_id;
        $log['prm_identidad_genero_id'] = $modeloxx->prm_identidad_genero_id;
        $log['prm_orientacion_sexual_id'] = $modeloxx->prm_orientacion_sexual_id;
        $log['prm_etnia_id'] = $modeloxx->prm_etnia_id;
        $log['prm_poblacion_etnia_id'] = $modeloxx->prm_poblacion_etnia_id;
        $log['prm_ocupacion_id'] = $modeloxx->prm_ocupacion_id;
        $log['prm_parentezco_id'] = $modeloxx->prm_parentezco_id;
        $log['prm_convive_id'] = $modeloxx->prm_convive_id;
        $log['prm_visitado_id'] = $modeloxx->prm_visitado_id;
        $log['prm_vin_actual_id'] = $modeloxx->prm_vin_actual_id;
        $log['prm_vin_pasado_id'] = $modeloxx->prm_vin_pasado_id;
        $log['prm_regimen_id'] = $modeloxx->prm_regimen_id;
        $log['prm_cualeps_id'] = $modeloxx->prm_cualeps_id;
        $log['sisben'] = $modeloxx->sisben;
        $log['prm_sisben_id'] = $modeloxx->prm_sisben_id;
        $log['prm_discapacidad_id'] = $modeloxx->prm_discapacidad_id;
        $log['prm_cual_id'] = $modeloxx->prm_cual_id;
        $log['prm_peso_id'] = $modeloxx->prm_peso_id;
        $log['prm_peso_dos_id'] = $modeloxx->prm_peso_dos_id;
        $log['prm_leer_id'] = $modeloxx->prm_leer_id;
        $log['prm_escribir_id'] = $modeloxx->prm_escribir_id;
        $log['prm_operaciones_id'] = $modeloxx->prm_operaciones_id;
        $log['prm_aprobado_id'] = $modeloxx->prm_aprobado_id;
        $log['prm_educacion_id'] = $modeloxx->prm_educacion_id;
        $log['prm_estudia_id'] = $modeloxx->prm_estudia_id;
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

    public function created(CsdComFamiliar $modeloxx)
    {
        HCsdComFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComFamiliar "updated" event.
     *
     * @param  \App\Models\consulta\CsdComFamiliar  $modeloxx
     * @return void
     */
    public function updated(CsdComFamiliar $modeloxx)
    {
        HCsdComFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComFamiliar "deleted" event.
     *
     * @param  \App\Models\consulta\CsdComFamiliar  $modeloxx
     * @return void
     */
    public function deleted(CsdComFamiliar $modeloxx)
    {
        HCsdComFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComFamiliar "restored" event.
     *
     * @param  \App\Models\consulta\CsdComFamiliar  $modeloxx
     * @return void
     */
    public function restored(CsdComFamiliar $modeloxx)
    {
        HCsdComFamiliar::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdComFamiliar "force deleted" event.
     *
     * @param  \App\Models\consulta\CsdComFamiliar  $modeloxx
     * @return void
     */
    public function forceDeleted(CsdComFamiliar $modeloxx)
    {
        HCsdComFamiliar::create($this->getLog($modeloxx));
    }
}
