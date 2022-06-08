<?php

namespace App\Observers;

use App\Models\Indicadores\Administ\Area;
use App\Models\Indicadores\Administ\Logs\HArea;

class AreaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['nombre'] = $modeloxx->nombre;
        $log['contexto'] = $modeloxx->contexto;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['estusuario_id'] = $modeloxx->estusuario_id;
        $log['prm_principal'] = $modeloxx->prm_principal;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(Area $modeloxx)
    {
        HArea::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Area "updated" event.
     *
     * @param  \App\Models\Indicadores\Area  $modeloxx
     * @return void
     */
    public function updated(Area $modeloxx)
    {
        HArea::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Area "deleted" event.
     *
     * @param  \App\Models\Indicadores\Area  $modeloxx
     * @return void
     */
    public function deleted(Area $modeloxx)
    {
        HArea::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Area "restored" event.
     *
     * @param  \App\Models\Indicadores\Area  $modeloxx
     * @return void
     */
    public function restored(Area $modeloxx)
    {
        HArea::create($this->getLog($modeloxx));
    }

    /**
     * Handle the Area "force deleted" event.
     *
     * @param  \App\Models\Indicadores\Area  $modeloxx
     * @return void
     */
    public function forceDeleted(Area $modeloxx)
    {
        HArea::create($this->getLog($modeloxx));
    }
}
