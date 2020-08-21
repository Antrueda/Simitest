<?php

namespace App\Observers;

use App\Models\Salud\Mitigacion\Vma\Logs\HMitVma;
use App\Models\Salud\Mitigacion\Vma\MitVma;

class MitVmaObserver
{
    private function getLog($modeloxx)
    {
        // campos por defecto, no borrar.
        $log = [];
        $log['id_old'] = $modeloxx->id;
        // campos nuevos traidos desde $fillable -> modelo 
        $log['sis_nnaj_id'] = $modeloxx->sis_nnaj_id;
        $log['prm_upi_id'] = $modeloxx->prm_upi_id;
        $log['fecha'] = $modeloxx->fecha;
        $log['prm_valoracion_id'] = $modeloxx->prm_valoracion_id;
        $log['sesion'] = $modeloxx->sesion;
        $log['prm_probado_id'] = $modeloxx->prm_probado_id;
        $log['prm_sustancia_id'] = $modeloxx->prm_sustancia_id;
        $log['edad'] = $modeloxx->edad;
        $log['prm_calle_id'] = $modeloxx->prm_calle_id;
        $log['prm_ansiedad_id'] = $modeloxx->prm_ansiedad_id;
        $log['prm_mari_sino_id'] = $modeloxx->prm_mari_sino_id;
        $log['mari_edad'] = $modeloxx->mari_edad;
        $log['prm_mari_frec_id'] = $modeloxx->prm_mari_frec_id;
        $log['mari_dosis'] = $modeloxx->mari_dosis;
        $log['mari_dia'] = $modeloxx->mari_dia;
        $log['mari_mes'] = $modeloxx->mari_mes;
        $log['mari_anio'] = $modeloxx->mari_anio;
        $log['mari_dejo'] = $modeloxx->mari_dejo;
        $log['prm_tabaco_sino_id'] = $modeloxx->prm_tabaco_sino_id;
        $log['tabaco_edad'] = $modeloxx->tabaco_edad;
        $log['prm_tabaco_frec_id'] = $modeloxx->prm_tabaco_frec_id;
        $log['tabaco_dosis'] = $modeloxx->tabaco_dosis;
        $log['tabaco_dia'] = $modeloxx->tabaco_dia;
        $log['tabaco_mes'] = $modeloxx->tabaco_mes;
        $log['tabaco_anio'] = $modeloxx->tabaco_anio;
        $log['tabaco_dejo'] = $modeloxx->tabaco_dejo;
        $log['prm_alcohol_sino_id'] = $modeloxx->prm_alcohol_sino_id;
        $log['alcohol_edad'] = $modeloxx->alcohol_edad;
        $log['prm_alcohol_frec_id'] = $modeloxx->prm_alcohol_frec_id;
        $log['alcohol_dosis'] = $modeloxx->alcohol_dosis;
        $log['alcohol_dia'] = $modeloxx->alcohol_dia;
        $log['alcohol_mes'] = $modeloxx->alcohol_mes;
        $log['alcohol_anio'] = $modeloxx->alcohol_anio;
        $log['alcohol_dejo'] = $modeloxx->alcohol_dejo;
        $log['prm_tran_sino_id'] = $modeloxx->prm_tran_sino_id;
        $log['tran_edad'] = $modeloxx->tran_edad;
        $log['prm_tran_frec_id'] = $modeloxx->prm_tran_frec_id;
        $log['tran_dosis'] = $modeloxx->tran_dosis;
        $log['tran_dia'] = $modeloxx->tran_dia;
        $log['tran_mes'] = $modeloxx->tran_mes;
        $log['tran_anio'] = $modeloxx->tran_anio;
        $log['tran_dejo'] = $modeloxx->tran_dejo;
        $log['prm_pegante_sino_id'] = $modeloxx->prm_pegante_sino_id;
        $log['pegante_edad'] = $modeloxx->pegante_edad;
        $log['prm_pegante_frec_id'] = $modeloxx->prm_pegante_frec_id;
        $log['pegante_dosis'] = $modeloxx->pegante_dosis;
        $log['pegante_dia'] = $modeloxx->pegante_dia;
        $log['pegante_mes'] = $modeloxx->pegante_mes;
        $log['pegante_anio'] = $modeloxx->pegante_anio;
        $log['pegante_dejo'] = $modeloxx->pegante_dejo;
        $log['prm_popper_sino_id'] = $modeloxx->prm_popper_sino_id;
        $log['popper_edad'] = $modeloxx->popper_edad;
        $log['prm_popper_frec_id'] = $modeloxx->prm_popper_frec_id;
        $log['popper_dosis'] = $modeloxx->popper_dosis;
        $log['popper_dia'] = $modeloxx->popper_dia;
        $log['popper_mes'] = $modeloxx->popper_mes;
        $log['popper_anio'] = $modeloxx->popper_anio;
        $log['popper_dejo'] = $modeloxx->popper_dejo;
        $log['prm_dick_sino_id'] = $modeloxx->prm_dick_sino_id;
        $log['dick_edad'] = $modeloxx->dick_edad;
        $log['prm_dick_frec_id'] = $modeloxx->prm_dick_frec_id;
        $log['dick_dosis'] = $modeloxx->dick_dosis;
        $log['dick_dia'] = $modeloxx->dick_dia;
        $log['dick_mes'] = $modeloxx->dick_mes;
        $log['dick_anio'] = $modeloxx->dick_anio;
        $log['dick_dejo'] = $modeloxx->dick_dejo;
        $log['prm_basuco_sino_id'] = $modeloxx->prm_basuco_sino_id;
        $log['basuco_edad'] = $modeloxx->basuco_edad;
        $log['prm_basuco_frec_id'] = $modeloxx->prm_basuco_frec_id;
        $log['basuco_dosis'] = $modeloxx->basuco_dosis;
        $log['basuco_dia'] = $modeloxx->basuco_dia;
        $log['basuco_mes'] = $modeloxx->basuco_mes;
        $log['basuco_anio'] = $modeloxx->basuco_anio;
        $log['basuco_dejo'] = $modeloxx->basuco_dejo;
        $log['prm_cocaina_sino_id'] = $modeloxx->prm_cocaina_sino_id;
        $log['cocaina_edad'] = $modeloxx->cocaina_edad;
        $log['prm_cocaina_frec_id'] = $modeloxx->prm_cocaina_frec_id;
        $log['cocaina_dosis'] = $modeloxx->cocaina_dosis;
        $log['cocaina_dia'] = $modeloxx->cocaina_dia;
        $log['cocaina_mes'] = $modeloxx->cocaina_mes;
        $log['cocaina_anio'] = $modeloxx->cocaina_anio;
        $log['cocaina_dejo'] = $modeloxx->cocaina_dejo;
        $log['prm_heroina_sino_id'] = $modeloxx->prm_heroina_sino_id;
        $log['heroina_edad'] = $modeloxx->heroina_edad;
        $log['prm_heroina_frec_id'] = $modeloxx->prm_heroina_frec_id;
        $log['heroina_dosis'] = $modeloxx->heroina_dosis;
        $log['heroina_dia'] = $modeloxx->heroina_dia;
        $log['heroina_mes'] = $modeloxx->heroina_mes;
        $log['heroina_anio'] = $modeloxx->heroina_anio;
        $log['heroina_dejo'] = $modeloxx->heroina_dejo;
        $log['prm_2cb_sino_id'] = $modeloxx->prm_2cb_sino_id;
        
        // $log['2cb_edad'] = $modeloxx->2cb_edad;
        // $log['prm_2cb_frec_id'] = $modeloxx->prm_2cb_frec_id;
        // $log['2cb_dosis'] = $modeloxx->2cb_dosis;
        // $log['2cb_dia'] = $modeloxx->2cb_dia;
        // $log['2cb_mes'] = $modeloxx->2cb_mes;
        // $log['2cb_anio'] = $modeloxx->2cb_anio;
        // $log['2cb_dejo'] = $modeloxx->2cb_dejo;

        $log['prm_acidos_sino_id'] = $modeloxx->prm_acidos_sino_id;
        $log['acidos_edad'] = $modeloxx->acidos_edad;
        $log['prm_acidos_frec_id'] = $modeloxx->prm_acidos_frec_id;
        $log['acidos_dosis'] = $modeloxx->acidos_dosis;
        $log['acidos_dia'] = $modeloxx->acidos_dia;
        $log['acidos_mes'] = $modeloxx->acidos_mes;
        $log['acidos_anio'] = $modeloxx->acidos_anio;
        $log['acidos_dejo'] = $modeloxx->acidos_dejo;
        $log['prm_lsd_sino_id'] = $modeloxx->prm_lsd_sino_id;
        $log['lsd_edad'] = $modeloxx->lsd_edad;
        $log['prm_lsd_frec_id'] = $modeloxx->prm_lsd_frec_id;
        $log['lsd_dosis'] = $modeloxx->lsd_dosis;
        $log['lsd_dia'] = $modeloxx->lsd_dia;
        $log['lsd_mes'] = $modeloxx->lsd_mes;
        $log['lsd_anio'] = $modeloxx->lsd_anio;
        $log['lsd_dejo'] = $modeloxx->lsd_dejo;
        $log['sustancias_consumidas'] = $modeloxx->sustancias_consumidas;
        $log['prm_recaida_id'] = $modeloxx->prm_recaida_id;
        $log['prm_niv_ansiedad_id'] = $modeloxx->prm_niv_ansiedad_id;
        $log['prm_trastorno_id'] = $modeloxx->prm_trastorno_id;
        $log['prm_tTrastorno_id'] = $modeloxx->prm_tTrastorno_id;
        $log['prm_apetito_id'] = $modeloxx->prm_apetito_id;
        $log['prm_tapetito_id'] = $modeloxx->prm_tapetito_id;
        $log['prm_sudoracion_id'] = $modeloxx->prm_sudoracion_id;
        $log['prm_tsudoracion_id'] = $modeloxx->prm_tsudoracion_id;
        $log['prm_animo_id'] = $modeloxx->prm_animo_id;
        $log['prm_tanimo_id'] = $modeloxx->prm_tanimo_id;
        $log['prm_palpitaciones_id'] = $modeloxx->prm_palpitaciones_id;
        $log['prm_dolor_id'] = $modeloxx->prm_dolor_id;
        $log['patologicos'] = $modeloxx->patologicos;
        $log['quirurgicos'] = $modeloxx->quirurgicos;
        $log['familiares'] = $modeloxx->familiares;
        $log['traumaticos'] = $modeloxx->traumaticos;
        $log['gineco'] = $modeloxx->gineco;
        $log['prm_tatuajes_id'] = $modeloxx->prm_tatuajes_id;
        $log['prm_piercing_id'] = $modeloxx->prm_piercing_id;
        $log['prm_dx_ppal_id'] = $modeloxx->prm_dx_ppal_id;
        $log['prm_dx_rel_uno_id'] = $modeloxx->prm_dx_rel_uno_id;
        $log['prm_dx_rel_dos_id'] = $modeloxx->prm_dx_rel_dos_id;
        $log['prm_dx_rel_tres_id'] = $modeloxx->prm_dx_rel_tres_id;
        $log['prm_dx_rel_com_id'] = $modeloxx->prm_dx_rel_com_id;
        $log['prm_tipo_dx_id'] = $modeloxx->prm_tipo_dx_id;
        $log['prm_conducta_id'] = $modeloxx->prm_conducta_id;
        $log['alerta'] = $modeloxx->alerta;
        $log['observaciones'] = $modeloxx->observaciones;
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

    public function created(MitVma $modeloxx)
    {
        HMitVma::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MitVma "updated" event.
     *
     * @param  \App\Models\Salud\Mitigacion\Vma\MitVma  $modeloxx
     * @return void
     */
    public function updated(MitVma $modeloxx)
    {
        HMitVma::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MitVma "deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\Vma\MitVma  $modeloxx
     * @return void
     */
    public function deleted(MitVma $modeloxx)
    {
        HMitVma::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MitVma "restored" event.
     *
     * @param  \App\Models\Salud\Mitigacion\Vma\MitVma  $modeloxx
     * @return void
     */
    public function restored(MitVma $modeloxx)
    {
        HMitVma::create($this->getLog($modeloxx));
    }

    /**
     * Handle the MitVma "force deleted" event.
     *
     * @param  \App\Models\Salud\Mitigacion\Vma\MitVma  $modeloxx
     * @return void
     */
    public function forceDeleted(MitVma $modeloxx)
    {
        HMitVma::create($this->getLog($modeloxx));
    }
}