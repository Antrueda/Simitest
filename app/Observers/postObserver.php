<?php

namespace App\Observers;

use App\Models\Logs\HPost;
use App\Models\Post;

class PostObserver
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

    public function created(Post $modeloxx)
    {
        HPost::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  App\Models\Post  $modeloxx
     * @return void
     */
    public function updated(Post $modeloxx)
    {
        HPost::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  App\Models\Post  $modeloxx
     * @return void
     */
    public function deleted(Post $modeloxx)
    {
        HPost::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  App\Models\Post  $modeloxx
     * @return void
     */
    public function restored(Post $modeloxx)
    {
        HPost::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  App\Models\Post  $modeloxx
     * @return void
     */
    public function forceDeleted(Post $modeloxx)
    {
        HPost::create($this->getLog($modeloxx));
    }
}
