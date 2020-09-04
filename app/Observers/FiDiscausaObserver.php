<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiDiscausa;
use App\Models\fichaIngreso\Logs\HFiDiscausa;

class FiDiscausaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_salud_id'] = $modeloxx->fi_salud_id;
        $log['prm_discausa_id'] = $modeloxx->prm_discausa_id;
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
     * Handle the fi discausa "created" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiscausa  $fiDiscausa
     * @return void
     */
    public function created(FiDiscausa $fiDiscausa)
    {
        HFiDiscausa::create($this->getLog($fiDiscausa));
    }

    /**
     * Handle the fi discausa "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiscausa  $fiDiscausa
     * @return void
     */
    public function updated(FiDiscausa $fiDiscausa)
    {
        HFiDiscausa::create($this->getLog($fiDiscausa));
    }

    /**
     * Handle the fi discausa "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiscausa  $fiDiscausa
     * @return void
     */
    public function deleted(FiDiscausa $fiDiscausa)
    {
        HFiDiscausa::create($this->getLog($fiDiscausa));
    }

    /**
     * Handle the fi discausa "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiscausa  $fiDiscausa
     * @return void
     */
    public function restored(FiDiscausa $fiDiscausa)
    {
        HFiDiscausa::create($this->getLog($fiDiscausa));
    }

    /**
     * Handle the fi discausa "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiDiscausa  $fiDiscausa
     * @return void
     */
    public function forceDeleted(FiDiscausa $fiDiscausa)
    {
        HFiDiscausa::create($this->getLog($fiDiscausa));
    }
}
