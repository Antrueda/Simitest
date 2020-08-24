<?php

namespace App\Observers;

use App\Models\Logs\HPermissionext;
use App\Models\Permissionext;

class PermissionextObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['name'] = $modeloxx->name;
        $log['guard_name'] = $modeloxx->guard_name;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(Permissionext $modeloxx)
    {
        HPermissionext::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Permissionext "updated" event.
     *
     * @param  \App\Models\Permissionext  $modeloxx
     * @return void
     */
    public function updated(Permissionext $modeloxx)
    {
        HPermissionext::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Permissionext "deleted" event.
     *
     * @param  \App\Models\Permissionext  $modeloxx
     * @return void
     */
    public function deleted(Permissionext $modeloxx)
    {
        HPermissionext::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Permissionext "restored" event.
     *
     * @param  \App\Models\Permissionext  $modeloxx
     * @return void
     */
    public function restored(Permissionext $modeloxx)
    {
        HPermissionext::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Permissionext "force deleted" event.
     *
     * @param  \App\Models\Permissionext  $modeloxx
     * @return void
     */
    public function forceDeleted(Permissionext $modeloxx)
    {
        HPermissionext::create($this->getLog($modeloxx));
    }
}