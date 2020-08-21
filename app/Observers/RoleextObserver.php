<?php

namespace App\Observers;

use App\Models\Logs\HRoleext;
use App\Models\Roleext;

class RoleextObserver
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

    public function created(Roleext $modeloxx)
    {
        HRoleext::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Roleext "updated" event.
     *
     * @param  \App\Models\Roleext  $modeloxx
     * @return void
     */
    public function updated(Roleext $modeloxx)
    {
        HRoleext::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Roleext "deleted" event.
     *
     * @param  \App\Models\Roleext  $modeloxx
     * @return void
     */
    public function deleted(Roleext $modeloxx)
    {
        HRoleext::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Roleext "restored" event.
     *
     * @param  \App\Models\Roleext  $modeloxx
     * @return void
     */
    public function restored(Roleext $modeloxx)
    {
        HRoleext::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Roleext "force deleted" event.
     *
     * @param  \App\Models\Roleext  $modeloxx
     * @return void
     */
    public function forceDeleted(Roleext $modeloxx)
    {
        HRoleext::create($this->getLog($modeloxx));
    }
}