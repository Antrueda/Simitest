<?php

namespace App\Observers;

use App\Models\fichaIngreso\FiVictataq;
use App\Models\fichaIngreso\Logs\HFiVictataq;

class FiVictataqObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo
        $log['fi_salud_id'] = $modeloxx->fi_salud_id;
        $log['prm_victataq_id'] = $modeloxx->prm_victataq_id;
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
     * Handle the fi victataq "created" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictataq  $fiVictataq
     * @return void
     */
    public function created(FiVictataq $fiVictataq)
    {
        HFiVictataq::create($this->getLog($fiVictataq));
    }

    /**
     * Handle the fi victataq "updated" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictataq  $fiVictataq
     * @return void
     */
    public function updated(FiVictataq $fiVictataq)
    {
        HFiVictataq::create($this->getLog($fiVictataq));
    }

    /**
     * Handle the fi victataq "deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictataq  $fiVictataq
     * @return void
     */
    public function deleted(FiVictataq $fiVictataq)
    {
        HFiVictataq::create($this->getLog($fiVictataq));
    }

    /**
     * Handle the fi victataq "restored" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictataq  $fiVictataq
     * @return void
     */
    public function restored(FiVictataq $fiVictataq)
    {
        HFiVictataq::create($this->getLog($fiVictataq));
    }

    /**
     * Handle the fi victataq "force deleted" event.
     *
     * @param  \App\Models\fichaIngreso\FiVictataq  $fiVictataq
     * @return void
     */
    public function forceDeleted(FiVictataq $fiVictataq)
    {
        HFiVictataq::create($this->getLog($fiVictataq));
    }
}
