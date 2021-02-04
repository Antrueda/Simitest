<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisInstitucionEdu;
use App\Models\Sistema\SisInstitucionEdu;

class SisInstitucionEduObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['s_nombre'] = $modeloxx->s_nombre;
        $log['s_telefono'] = $modeloxx->s_telefono;
        $log['s_email'] = $modeloxx->s_email;
        $log['sis_municipio_id'] = $modeloxx->sis_municipio_id;
        $log['sis_departam_id'] = $modeloxx->sis_departam_id;
        $log['i_prm_sector_id'] = $modeloxx->i_prm_sector_id;
        $log['i_usr_rector_id'] = $modeloxx->i_usr_rector_id;
        $log['i_usr_secretario_id'] = $modeloxx->i_usr_secretario_id;
        $log['i_usr_coord_academico_id'] = $modeloxx->i_usr_coord_academico_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisInstitucionEdu $modeloxx)
    {
        HSisInstitucionEdu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisInstitucionEdu "updated" event.
     *
     * @param  \App\Models\Sistema\SisInstitucionEdu  $modeloxx
     * @return void
     */
    public function updated(SisInstitucionEdu $modeloxx)
    {
        HSisInstitucionEdu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisInstitucionEdu "deleted" event.
     *
     * @param  \App\Models\Sistema\SisInstitucionEdu  $modeloxx
     * @return void
     */
    public function deleted(SisInstitucionEdu $modeloxx)
    {
        HSisInstitucionEdu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisInstitucionEdu "restored" event.
     *
     * @param  \App\Models\Sistema\SisInstitucionEdu  $modeloxx
     * @return void
     */
    public function restored(SisInstitucionEdu $modeloxx)
    {
        HSisInstitucionEdu::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisInstitucionEdu "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisInstitucionEdu  $modeloxx
     * @return void
     */
    public function forceDeleted(SisInstitucionEdu $modeloxx)
    {
        HSisInstitucionEdu::create($this->getLog($modeloxx));
    }
}
