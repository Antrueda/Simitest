<?php

namespace App\Observers;

use App\Models\sicosocial\Pivotes\Logs\HVsiActemoFisiologica;
use App\Models\sicosocial\Pivotes\VsiActemoFisiologica;

class VsiActemoFisiologicaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['parametro_id'] = $modeloxx->parametro_id;
        $log['vsi_actemocional_id'] = $modeloxx->vsi_actemocional_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VsiActemoFisiologica $modeloxx)
    {
        HVsiActemoFisiologica::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiActemoFisiologica "updated" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiActemoFisiologica  $modeloxx
     * @return void
     */
    public function updated(VsiActemoFisiologica $modeloxx)
    {
        HVsiActemoFisiologica::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiActemoFisiologica "deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiActemoFisiologica  $modeloxx
     * @return void
     */
    public function deleted(VsiActemoFisiologica $modeloxx)
    {
        HVsiActemoFisiologica::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiActemoFisiologica "restored" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiActemoFisiologica  $modeloxx
     * @return void
     */
    public function restored(VsiActemoFisiologica $modeloxx)
    {
        HVsiActemoFisiologica::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiActemoFisiologica "force deleted" event.
     *
     * @param  \App\Models\sicosocial\Pivotes\VsiActemoFisiologica  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiActemoFisiologica $modeloxx)
    {
        HVsiActemoFisiologica::create($this->getLog($modeloxx));
    }
}
