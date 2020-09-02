<?php

namespace App\Observers;

use App\HFiCsdComposicionfamis;

class HFiCsdComposicionfamisrObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['i_prm_parentesco_id'] = $modeloxx->i_prm_parentesco_id;
        $log['s_primer_nombre'] = $modeloxx->s_primer_nombre;
        $log['s_segundo_nombre'] = $modeloxx->s_segundo_nombre;
        $log['s_primer_apellido'] = $modeloxx->s_primer_apellido;
        $log['s_segundo_apellido'] = $modeloxx->s_segundo_apellido;
        $log['s_nombre_identitario'] = $modeloxx->s_nombre_identitario;
        $log['s_telefono'] = $modeloxx->s_telefono;
        $log['s_documento'] = $modeloxx->s_documento;
        $log['d_nacimiento'] = $modeloxx->d_nacimiento;
        $log['i_prm_ocupacion_id'] = $modeloxx->i_prm_ocupacion_id;
        
        $log['i_prm_vinculado_idipron_id'] = $modeloxx->i_prm_vinculado_idipron_id;
        $log['i_prm_convive_nnaj_id'] = $modeloxx->i_prm_convive_nnaj_id;
        $log['prm_documento_id'] = $modeloxx->prm_documento_id;
        $log['nnaj_nfamili_id'] = $modeloxx->nnaj_nfamili_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }
    public function created(HFiCsdComposicionfamis $modeloxx)
    {
        HFiCsdComposicionfamis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd composicionfamis "updated" event.
     *
     * @param  \App\HFiCsdComposicionfamis  $modeloxx
     * @return void
     */
    public function updated(HFiCsdComposicionfamis $modeloxx)
    {
        HFiCsdComposicionfamis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd composicionfamis "deleted" event.
     *
     * @param  \App\HFiCsdComposicionfamis  $modeloxx
     * @return void
     */
    public function deleted(HFiCsdComposicionfamis $modeloxx)
    {
        HFiCsdComposicionfamis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd composicionfamis "restored" event.
     *
     * @param  \App\HFiCsdComposicionfamis  $modeloxx
     * @return void
     */
    public function restored(HFiCsdComposicionfamis $modeloxx)
    {
        HFiCsdComposicionfamis::create($this->getLog($modeloxx));
    }

    /**
     * Handle the h fi csd composicionfamis "force deleted" event.
     *
     * @param  \App\HFiCsdComposicionfamis  $modeloxx
     * @return void
     */
    public function forceDeleted(HFiCsdComposicionfamis $modeloxx)
    {
        HFiCsdComposicionfamis::create($this->getLog($modeloxx));
    }
}
