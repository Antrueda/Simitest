<?php

namespace App\Observers;

use App\Models\Usuario\Logs\HRolUsuario;
use App\Models\Usuario\RolUsuario;

class RolUsuarioObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['role_id'] = $modeloxx->role_id;
        $log['model_type'] = $modeloxx->model_type;
        $log['model_id'] = $modeloxx->model_id;
        $log['deleted_at'] = $modeloxx->deleted_at;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(RolUsuario $modeloxx)
    {
        HRolUsuario::create($this->getLog($modeloxx));
    }

    /**
     * Handle the RolUsuario "updated" event.
     *
     * @param  \App\Models\Usuario\RolUsuario  $modeloxx
     * @return void
     */
    public function updated(RolUsuario $modeloxx)
    {
        HRolUsuario::create($this->getLog($modeloxx));
    }

    /**
     * Handle the RolUsuario "deleted" event.
     *
     * @param  \App\Models\Usuario\RolUsuario  $modeloxx
     * @return void
     */
    public function deleted(RolUsuario $modeloxx)
    {
        HRolUsuario::create($this->getLog($modeloxx));
    }

    /**
     * Handle the RolUsuario "restored" event.
     *
     * @param  \App\Models\Usuario\RolUsuario  $modeloxx
     * @return void
     */
    public function restored(RolUsuario $modeloxx)
    {
        HRolUsuario::create($this->getLog($modeloxx));
    }

    /**
     * Handle the RolUsuario "force deleted" event.
     *
     * @param  \App\Models\Usuario\RolUsuario  $modeloxx
     * @return void
     */
    public function forceDeleted(RolUsuario $modeloxx)
    {
        HRolUsuario::create($this->getLog($modeloxx));
    }
}