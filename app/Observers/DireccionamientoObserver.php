<?php

namespace App\Observers;

use App\Models\Direccionamiento\Direccionamiento;
use App\Models\Direccionamiento\Logs\HDireccionamiento;

class DireccionamientoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['fecha'] = $modeloxx->fecha;
        $log['upi_id'] = $modeloxx->upi_id;
        $log['s_primer_nombre'] = $modeloxx->s_primer_nombre;
        $log['s_segundo_nombre'] = $modeloxx->s_segundo_nombre;
        $log['s_primer_apellido'] = $modeloxx->s_primer_apellido;
        $log['s_segundo_apellido'] = $modeloxx->s_segundo_apellido;
        $log['s_nombre_identitario'] = $modeloxx->s_nombre_identitario;
        $log['apodo'] = $modeloxx->apodo;
        $log['s_documento'] = $modeloxx->s_documento;
        $log['prm_tipodocu_id'] = $modeloxx->prm_tipodocu_id;
        $log['sis_municipio_id'] = $modeloxx->sis_municipio_id;
        $log['prm_sexo_id'] = $modeloxx->prm_sexo_id;
        $log['prm_identidad_genero_id'] = $modeloxx->prm_identidad_genero_id;
        $log['prm_orientacion_sexual_id'] = $modeloxx->prm_orientacion_sexual_id;
        $log['prm_etnia_id'] = $modeloxx->prm_etnia_id;
        $log['prm_poblacion_etnia_id'] = $modeloxx->prm_poblacion_etnia_id;
        $log['prm_discapacidad_id'] = $modeloxx->prm_discapacidad_id;
        $log['prm_cuentadisc_id'] = $modeloxx->prm_cuentadisc_id;
        $log['prm_condicion_id'] = $modeloxx->prm_condicion_id;
        $log['prm_certifica_id'] = $modeloxx->prm_certifica_id;
        $log['prm_cabeza_id'] = $modeloxx->prm_cabeza_id;
        $log['departamento_cond_id'] = $modeloxx->departamento_cond_id;
        $log['municipio_cond_id'] = $modeloxx->municipio_cond_id;
        $log['prm_docuaco_id'] = $modeloxx->prm_docuaco_id;
        $log['primer_nombreaco'] = $modeloxx->primer_nombreaco;
        $log['segundo_nombreaco'] = $modeloxx->segundo_nombreaco;
        $log['primer_apellidoaco'] = $modeloxx->primer_apellidoaco;
        $log['segundo_apellidoaco'] = $modeloxx->segundo_apellidoaco;
        $log['documentoaco'] = $modeloxx->documentoaco;
        $log['userd_doc'] = $modeloxx->userd_doc;
        $log['userr_doc'] = $modeloxx->userr_doc;
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['area_id'] = $modeloxx->area_id;
        $log['sis_pai_id'] = $modeloxx->sis_pai_id;
        $log['sis_departam_id'] = $modeloxx->sis_departam_id;
        $log['d_nacimiento'] = $modeloxx->d_nacimiento;
        $log['incompleto'] = $modeloxx->incompleto;
        $log['departamento_cert_id'] = $modeloxx->departamento_cert_id;
        $log['municipio_cert_id'] = $modeloxx->municipio_cert_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(Direccionamiento $modeloxx)
    {
        HDireccionamiento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the CsdResidencia "updated" event.
     *
     * @param  \App\Models\consulta\CsdResidencia  $modeloxx
     * @return void
     */
    public function updated(Direccionamiento $modeloxx)
    {
        HDireccionamiento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Direccionamiento "deleted" event.
     *
     * @param  \App\Models\consulta\Direccionamiento  $modeloxx
     * @return void
     */
    public function deleted(Direccionamiento $modeloxx)
    {
        HDireccionamiento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Direccionamiento "restored" event.
     *
     * @param  \App\Models\consulta\Direccionamiento  $modeloxx
     * @return void
     */
    public function restored(Direccionamiento $modeloxx)
    {
        HDireccionamiento::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Direccionamiento "force deleted" event.
     *
     * @param  \App\Models\consulta\Direccionamiento  $modeloxx
     * @return void
     */
    public function forceDeleted(Direccionamiento $modeloxx)
    {
        HDireccionamiento::create($this->getLog($modeloxx));
    }
}