<?php

namespace App\Observers;

use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Logs\HVDiagnostico;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\VDiagnostico;

class VDiagnosticosObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['vmg_id'] = $modeloxx->vmg_id;
        $log['diag_id'] = $modeloxx->diag_id;
        $log['codigo'] = $modeloxx->codigo;
        $log['concepto'] = $modeloxx->concepto;
        $log['esta_id'] = $modeloxx->esta_id;
        $log['delete_at'] = $modeloxx->delete_at;
    
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VDiagnostico $modeloxx)
    {
        HVDiagnostico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "updated" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function updated(VDiagnostico $modeloxx)
    {
        HVDiagnostico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function deleted(VDiagnostico $modeloxx)
    {
        HVDiagnostico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "restored" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function restored(VDiagnostico $modeloxx)
    {
        HVDiagnostico::create($this->getLog($modeloxx));
    }

    /**
     * Handle the AiRetornoSalida "force deleted" event.
     *
     * @param  \App\Models\Acciones\Individuales\AiRetornoSalida  $modeloxx
     * @return void
     */
    public function forceDeleted(VDiagnostico $modeloxx)
    {
        HVDiagnostico::create($this->getLog($modeloxx));
    }
}