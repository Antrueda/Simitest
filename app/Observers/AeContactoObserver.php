<?php

namespace App\Observers;

use App\Models\Actaencu\AeContacto;
use App\Models\Actaencu\Logs\HAeContacto;

class AeContactoObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['ae_encuentro_id'] = $modeloxx->ae_encuentro_id;
        $log['nombres_apellidos'] = $modeloxx->nombres_apellidos;
        $log['index'] = $modeloxx->index;
        $log['sis_entidad_id'] = $modeloxx->sis_entidad_id;
        $log['cargo'] = $modeloxx->cargo;
        $log['phone'] = $modeloxx->phone;
        $log['email'] = $modeloxx->email;
        // campos por defecto, no borrar.

        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;



    }

    public function created(AeContacto $modeloxx)
    {
        HAeContacto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Parametro "updated" event.
     *
     * @param  \App\Models\Actaencu\AeContacto  $modeloxx
     * @return void
     */
    public function updated(AeContacto $modeloxx)
    {
        HAeContacto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeContacto "deleted" event.
     *
     * @param  \App\Models\Actaencu\AeContacto  $modeloxx
     * @return void
     */
    public function deleted(AeContacto $modeloxx)
    {
        HAeContacto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeContacto "restored" event.
     *
     * @param  \App\Models\Actaencu\AeContacto  $modeloxx
     * @return void
     */
    public function restored(AeContacto $modeloxx)
    {
        HAeContacto::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AeContacto "force deleted" event.
     *
     * @param  \App\Models\Actaencu\AeContacto  $modeloxx
     * @return void
     */
    public function forceDeleted(AeContacto $modeloxx)
    {
        HAeContacto::create($this->getLog($modeloxx));
    }
}