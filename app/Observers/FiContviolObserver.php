<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiContviol;
use App\Models\fichaIngreso\Logs\HFiContviol;

class FiContviolObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 

        $log['fi_violencia_id'] = $modeloxx->fi_violencia_id;
        $log['prm_violenci_id'] = $modeloxx->prm_violenci_id;
        $log['prm_contexto_id'] = $modeloxx->prm_contexto_id;
        $log['prm_respuest_id'] = $modeloxx->prm_respuest_id;
        $log['tema_id'] = $modeloxx->tema_id;
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
    /**
     * Handle the fi contviol "created" event.
     *
     * @param  \App\Models\fichaIngreso\FiContviol  $fiContviol
     * @return void
     */
    public function created(FiContviol $fiContviol)
    {
        HFiContviol::create($this->getLog($fiContviol));
    }

    /**
     * Handle the fi contviol "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiContviol  $fiContviol
     * @return void
     */
    public function updated(FiContviol $fiContviol)
    {
        HFiContviol::create($this->getLog($fiContviol));
    }

    /**
     * Handle the fi contviol "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiContviol  $fiContviol
     * @return void
     */
    public function deleted(FiContviol $fiContviol)
    {
        HFiContviol::create($this->getLog($fiContviol));
    }

    /**
     * Handle the fi contviol "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiContviol  $fiContviol
     * @return void
     */
    public function restored(FiContviol $fiContviol)
    {
        HFiContviol::create($this->getLog($fiContviol));
    }

    /**
     * Handle the fi contviol "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiContviol  $fiContviol
     * @return void
     */
    public function forceDeleted(FiContviol $fiContviol)
    {
        HFiContviol::create($this->getLog($fiContviol));
    }
}
