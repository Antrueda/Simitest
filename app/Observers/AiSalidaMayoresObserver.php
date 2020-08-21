<?php

namespace App\Observers;

use App\Models\Acciones\Individuales\AiSalidaMayores;
use App\Models\Acciones\Individuales\Logs\HAiSalidaMayores;

class AiSalidaMayoresObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['fecha'] = $modeloxx->fecha;
        $log['prm_upi_id'] = $modeloxx->prm_upi_id;
        $log['descripcion'] = $modeloxx->descripcion;
        $log['user_doc1_id'] = $modeloxx->user_doc1_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(AiSalidaMayores $modeloxx)
    {
        HAiSalidaMayores::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiSalidaMayores "updated" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiSalidaMayores  $modeloxx
     * @return void
     */
    public function updated(AiSalidaMayores $modeloxx)
    {
        HAiSalidaMayores::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiSalidaMayores "deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiSalidaMayores  $modeloxx
     * @return void
     */
    public function deleted(AiSalidaMayores $modeloxx)
    {
        HAiSalidaMayores::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiSalidaMayores "restored" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiSalidaMayores  $modeloxx
     * @return void
     */
    public function restored(AiSalidaMayores $modeloxx)
    {
        HAiSalidaMayores::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiSalidaMayores "force deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiSalidaMayores  $modeloxx
     * @return void
     */
    public function forceDeleted(AiSalidaMayores $modeloxx)
    {
        HAiSalidaMayores::create($this->getLog($modeloxx));
    }
}