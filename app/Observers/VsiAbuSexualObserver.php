<?php

namespace App\Observers;

use App\Models\sicosocial\Logs\HVsiAbuSexuals;
use App\Models\sicosocial\VsiAbuSexual;

class VsiAbuSexualObserver
{
    private function getLog($modeloxx)
    {
// campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
// campos nuevo traidos desde $fillable -> modelo H, HVsiAbuSexual
        $log['vsi_id'] = $modeloxx->vsi_id;
        $log['prm_evento_id'] = $modeloxx->prm_evento_id;
        $log['dia'] = $modeloxx->dia;
        $log['mes'] = $modeloxx->mes;
        $log['ano'] = $modeloxx->ano;
        $log['prm_momento_id'] = $modeloxx->prm_momento_id;
        $log['prm_persona_id'] = $modeloxx->prm_persona_id;
        $log['prm_tipo_id'] = $modeloxx->prm_tipo_id;
        $log['dia_ult'] = $modeloxx->dia_ult;
        $log['mes_ult'] = $modeloxx->mes_ult;
        $log['ano_ult'] = $modeloxx->ano_ult;
        $log['prm_momento_ult_id'] = $modeloxx->prm_momento_ult_id;
        $log['prm_persona_ult_id'] = $modeloxx->prm_persona_ult_id;
        $log['prm_tipo_ult_id'] = $modeloxx->prm_tipo_ult_id;
        $log['prm_convive_id'] = $modeloxx->prm_convive_id;
        $log['prm_presencia_id'] = $modeloxx->prm_presencia_id;
        $log['prm_reconoce_id'] = $modeloxx->prm_reconoce_id;
        $log['prm_apoyo_id'] = $modeloxx->prm_apoyo_id;
        $log['prm_denuncia_id'] = $modeloxx->prm_denuncia_id;
        $log['prm_terapia_id'] = $modeloxx->prm_terapia_id;
        $log['prm_estado_id'] = $modeloxx->prm_estado_id;
        $log['informacion'] = $modeloxx->informacion;
// campos por defecto, no borrar
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    } 
    
    public function created(VsiAbuSexual $modeloxx)
    {
        HVsiAbuSexuals::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiAbuSexual "updated" event.
     *
     * @param  \App\Models\sicosocial\VsiAbuSexual  $modeloxx
     * @return void
     */
    public function updated(VsiAbuSexual $modeloxx)
    {
        HVsiAbuSexuals::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiAbuSexual "deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiAbuSexual  $modeloxx
     * @return void
     */
    public function deleted(VsiAbuSexual $modeloxx)
    {
        HVsiAbuSexuals::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiAbuSexual "restored" event.
     *
     * @param  \App\Models\sicosocial\VsiAbuSexual  $modeloxx
     * @return void
     */
    public function restored(VsiAbuSexual $modeloxx)
    {
        HVsiAbuSexuals::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VsiAbuSexual "force deleted" event.
     *
     * @param  \App\Models\sicosocial\VsiAbuSexual  $modeloxx
     * @return void
     */
    public function forceDeleted(VsiAbuSexual $modeloxx)
    {
        HVsiAbuSexuals::create($this->getLog($modeloxx));
    }
}