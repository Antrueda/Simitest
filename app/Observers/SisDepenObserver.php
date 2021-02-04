<?php

namespace App\Observers;

use App\Models\Sistema\Logs\HSisDepen;
use App\Models\Sistema\SisDepen;

class SisDepenObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['nombre'] = $modeloxx->nombre;
        $log['i_prm_cvital_id'] = $modeloxx->i_prm_cvital_id;
        $log['i_prm_tdependen_id'] = $modeloxx->i_prm_tdependen_id;
        $log['i_prm_sexo_id'] = $modeloxx->i_prm_sexo_id;
        $log['s_direccion'] = $modeloxx->s_direccion;
        $log['sis_departam_id'] = $modeloxx->sis_departam_id;
        $log['sis_municipio_id'] = $modeloxx->sis_municipio_id;
        $log['sis_upzbarri_id'] = $modeloxx->sis_upzbarri_id;
        $log['s_telefono'] = $modeloxx->s_telefono;
        $log['simianti_id'] = $modeloxx->simianti_id;
        $log['s_correo'] = $modeloxx->s_correo;
        $log['itiestan'] = $modeloxx->itiestan;
        $log['itiegabe'] = $modeloxx->itiegabe;
        $log['itigafin'] = $modeloxx->itigafin;
        $log['estusuario_id'] = $modeloxx->estusuario_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(SisDepen $modeloxx)
    {
        HSisDepen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepen "updated" event.
     *
     * @param  \App\Models\Sistema\SisDepen  $modeloxx
     * @return void
     */
    public function updated(SisDepen $modeloxx)
    {
        HSisDepen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepen "deleted" event.
     *
     * @param  \App\Models\Sistema\SisDepen  $modeloxx
     * @return void
     */
    public function deleted(SisDepen $modeloxx)
    {
        HSisDepen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepen "restored" event.
     *
     * @param  \App\Models\Sistema\SisDepen  $modeloxx
     * @return void
     */
    public function restored(SisDepen $modeloxx)
    {
        HSisDepen::create($this->getLog($modeloxx));
    }

    /**
     * Handle the SisDepen "force deleted" event.
     *
     * @param  \App\Models\Sistema\SisDepen  $modeloxx
     * @return void
     */
    public function forceDeleted(SisDepen $modeloxx)
    {
        HSisDepen::create($this->getLog($modeloxx));
    }
}
