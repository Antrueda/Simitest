<?php

namespace App\Observers;

use App\Models\Logs\Hpost;
use App\Models\post;

class postObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['titulo'] = $modeloxx->titulo;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['user_id'] = $modeloxx->user_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(post $modeloxx)
    {
        Hpost::create($this->getLog($modeloxx));
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  App\Models\post  $modeloxx
     * @return void
     */
    public function updated(post $modeloxx)
    {
        Hpost::create($this->getLog($modeloxx));
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  App\Models\post  $modeloxx
     * @return void
     */
    public function deleted(post $modeloxx)
    {
        Hpost::create($this->getLog($modeloxx));
    }

    /**
     * Handle the post "restored" event.
     *
     * @param  App\Models\post  $modeloxx
     * @return void
     */
    public function restored(post $modeloxx)
    {
        Hpost::create($this->getLog($modeloxx));
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  App\Models\post  $modeloxx
     * @return void
     */
    public function forceDeleted(post $modeloxx)
    {
        Hpost::create($this->getLog($modeloxx));
    }
}