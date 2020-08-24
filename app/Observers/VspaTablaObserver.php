<?php

namespace App\Observers;

use App\Models\Salud\Mitigacion\Logs\HVspaTabla;
use App\Models\Salud\Mitigacion\VspaTabla;

class VspaTablaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['mit_vspa_id'] = $modeloxx->mit_vspa_id;
        $log['prm_droga_ini_id'] = $modeloxx->prm_droga_ini_id;
        $log['prm_fre_ini_id'] = $modeloxx->prm_fre_ini_id;
        $log['prm_via_ini_id'] = $modeloxx->prm_via_ini_id;
        $log['primera_ini'] = $modeloxx->primera_ini;
        $log['prm_mes_ini_id'] = $modeloxx->prm_mes_ini_id;
        $log['prm_anio_ini_id'] = $modeloxx->prm_anio_ini_id;
        $log['ultima_ini'] = $modeloxx->ultima_ini;
        $log['prm_imp_ini_id'] = $modeloxx->prm_imp_ini_id;
        $log['prm_droga_dos_id'] = $modeloxx->prm_droga_dos_id;
        $log['prm_fre_dos_id'] = $modeloxx->prm_fre_dos_id;
        $log['prm_via_dos_id'] = $modeloxx->prm_via_dos_id;
        $log['primera_dos'] = $modeloxx->primera_dos;
        $log['prm_mes_dos_id'] = $modeloxx->prm_mes_dos_id;
        $log['prm_anio_dos_id'] = $modeloxx->prm_anio_dos_id;
        $log['ultima_dos'] = $modeloxx->ultima_dos;
        $log['prm_imp_dos_id'] = $modeloxx->prm_imp_dos_id;
        $log['prm_droga_tres_id'] = $modeloxx->prm_droga_tres_id;
        $log['prm_fre_tres_id'] = $modeloxx->prm_fre_tres_id;
        $log['prm_via_tres_id'] = $modeloxx->prm_via_tres_id;
        $log['primera_tres'] = $modeloxx->primera_tres;
        $log['prm_mes_tres_id'] = $modeloxx->prm_mes_tres_id;
        $log['prm_anio_tres_id'] = $modeloxx->prm_anio_tres_id;
        $log['ultima_tres'] = $modeloxx->ultima_tres;
        $log['prm_imp_tres_id'] = $modeloxx->prm_imp_tres_id;
        $log['prm_droga_cuatro_id'] = $modeloxx->prm_droga_cuatro_id;
        $log['prm_fre_cuatro_id'] = $modeloxx->prm_fre_cuatro_id;
        $log['prm_via_cuatro_id'] = $modeloxx->prm_via_cuatro_id;
        $log['primera_cuatro'] = $modeloxx->primera_cuatro;
        $log['prm_mes_cuatro_id'] = $modeloxx->prm_mes_cuatro_id;
        $log['prm_anio_cuatro_id'] = $modeloxx->prm_anio_cuatro_id;
        $log['ultima_cuatro'] = $modeloxx->ultima_cuatro;
        $log['prm_imp_cuatro_id'] = $modeloxx->prm_imp_cuatro_id;
        $log['prm_droga_cinco_id'] = $modeloxx->prm_droga_cinco_id;
        $log['prm_fre_cinco_id'] = $modeloxx->prm_fre_cinco_id;
        $log['prm_via_cinco_id'] = $modeloxx->prm_via_cinco_id;
        $log['primera_cinco'] = $modeloxx->primera_cinco;
        $log['prm_mes_cinco_id'] = $modeloxx->prm_mes_cinco_id;
        $log['prm_anio_cinco_id'] = $modeloxx->prm_anio_cinco_id;
        $log['ultima_cinco'] = $modeloxx->ultima_cinco;
        $log['prm_imp_cinco_id'] = $modeloxx->prm_imp_cinco_id;
        $log['prm_droga_seis_id'] = $modeloxx->prm_droga_seis_id;
        $log['prm_fre_seis_id'] = $modeloxx->prm_fre_seis_id;
        $log['prm_via_seis_id'] = $modeloxx->prm_via_seis_id;
        $log['primera_seis'] = $modeloxx->primera_seis;
        $log['prm_mes_seis_id'] = $modeloxx->prm_mes_seis_id;
        $log['prm_anio_seis_id'] = $modeloxx->prm_anio_seis_id;
        $log['ultima_seis'] = $modeloxx->ultima_seis;
        $log['prm_imp_seis_id'] = $modeloxx->prm_imp_seis_id;
        $log['prm_droga_siete_id'] = $modeloxx->prm_droga_siete_id;
        $log['prm_fre_siete_id'] = $modeloxx->prm_fre_siete_id;
        $log['prm_via_siete_id'] = $modeloxx->prm_via_siete_id;
        $log['primera_siete'] = $modeloxx->primera_siete;
        $log['prm_mes_siete_id'] = $modeloxx->prm_mes_siete_id;
        $log['prm_anio_siete_id'] = $modeloxx->prm_anio_siete_id;
        $log['ultima_siete'] = $modeloxx->ultima_siete;
        $log['prm_imp_siete_id'] = $modeloxx->prm_imp_siete_id;
        $log['prm_droga_dmi_id'] = $modeloxx->prm_droga_dmi_id;
        $log['prm_fre_dmi_id'] = $modeloxx->prm_fre_dmi_id;
        $log['prm_via_dmi_id'] = $modeloxx->prm_via_dmi_id;
        $log['primera_dmi'] = $modeloxx->primera_dmi;
        $log['prm_mes_dmi_id'] = $modeloxx->prm_mes_dmi_id;
        $log['prm_anio_dmi_id'] = $modeloxx->prm_anio_dmi_id;
        $log['ultima_dmi'] = $modeloxx->ultima_dmi;
        $log['prm_imp_dmi_id'] = $modeloxx->prm_imp_dmi_id;
        // campos por defecto, no borrar.
        $log['sis_esta_id'] = $modeloxx->sis_esta_id;
        $log['user_crea_id'] = $modeloxx->user_crea_id;
        $log['metodoxx'] = request()->method();
        $log['user_edita_id'] = $modeloxx->user_edita_id;
        $log['rutaxxxx'] = request()->fullUrl();
        $log['ipxxxxxx'] = request()->ip();
        return $log;
    }

    public function created(VspaTabla $modeloxx)
    {
        HVspaTabla::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTabla "updated" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTabla  $modeloxx
     * @return void
     */
    public function updated(VspaTabla $modeloxx)
    {
        HVspaTabla::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTabla "deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTabla  $modeloxx
     * @return void
     */
    public function deleted(VspaTabla $modeloxx)
    {
        HVspaTabla::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTabla "restored" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTabla  $modeloxx
     * @return void
     */
    public function restored(VspaTabla $modeloxx)
    {
        HVspaTabla::create($this->getLog($modeloxx));
    }

    /**
     * Handle the VspaTabla "force deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\VspaTabla  $modeloxx
     * @return void
     */
    public function forceDeleted(VspaTabla $modeloxx)
    {
        HVspaTabla::create($this->getLog($modeloxx));
    }
}