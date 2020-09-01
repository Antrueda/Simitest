<?php

namespace App\Observers;

use App\Models\Logs\HUser;
use App\Models\User;

class UserObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['name'] = $modeloxx->name;
        $log['s_primer_nombre'] = $modeloxx->s_primer_nombre;
        $log['s_segundo_nombre'] = $modeloxx->s_segundo_nombre;
        $log['s_primer_apellido'] = $modeloxx->s_primer_apellido;
        $log['s_segundo_apellido'] = $modeloxx->s_segundo_apellido;
        $log['email'] = $modeloxx->email;
        $log['s_telefono'] = $modeloxx->s_telefono;
        $log['s_matriculap'] = $modeloxx->s_matriculap;
        $log['s_documento'] = $modeloxx->s_documento;
        $log['d_vinculacion'] = $modeloxx->d_vinculacion;
        $log['itiestan'] = $modeloxx->itiestan;
        $log['itiegabe'] = $modeloxx->itiegabe;
        $log['itigafin'] = $modeloxx->itigafin;
        $log['email_verified_at'] = $modeloxx->email_verified_at;
        $log['password'] = $modeloxx->password;
        $log['remember_token'] = $modeloxx->remember_token;
        $log['sis_municipio_id'] = $modeloxx->sis_municipio_id;
        $log['sis_cargo_id'] = $modeloxx->sis_cargo_id;
        $log['d_finvinculacion'] = $modeloxx->d_finvinculacion;
        $log['prm_tvinculacion_id'] = $modeloxx->prm_tvinculacion_id;
        $log['prm_documento_id'] = $modeloxx->prm_documento_id;
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

    public function created(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $modeloxx
     * @return void
     */
    public function updated(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $modeloxx
     * @return void
     */
    public function deleted(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $modeloxx
     * @return void
     */
    public function restored(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $modeloxx
     * @return void
     */
    public function forceDeleted(User $modeloxx)
    {
        HUser::create($this->getLog($modeloxx));
    }
}
