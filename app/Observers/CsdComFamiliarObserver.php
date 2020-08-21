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
        $log['primer_apellido'] = $modeloxx->primer_apellido;
        $log['segundo_apellido'] = $modeloxx->segundo_apellido;
        $log['primer_nombre'] = $modeloxx->primer_nombre;
        $log['segundo_nombre'] = $modeloxx->segundo_nombre;
        $log['identitario'] = $modeloxx->identitario;
        $log['prm_documento_id'] = $modeloxx->prm_documento_id;
        $log['documento'] = $modeloxx->documento;
        $log['nacimiento'] = $modeloxx->nacimiento;
        $log['prm_sexo_id'] = $modeloxx->prm_sexo_id;
        $log['prm_estadoivil_id'] = $modeloxx->prm_estadoivil_id;
        $log['prm_genero_id'] = $modeloxx->prm_genero_id;
        $log['prm_sexual_id'] = $modeloxx->prm_sexual_id;
        $log['prm_grupo_etnico_id'] = $modeloxx->prm_grupo_etnico_id;
        $log['prm_cualGrupo_id'] = $modeloxx->prm_cualGrupo_id;
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