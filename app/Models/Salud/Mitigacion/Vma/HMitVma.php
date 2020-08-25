<?php

namespace app\Models\Salud\Mitigacion\Vma;

use Illuminate\Database\Eloquent\Model;

class HMitVma extends Model
{
    protected $fillable = [
        'sis_nnaj_id',
        'prm_upi_id',
        'fecha',
        'prm_valoracion_id',
        'sesion',
        'prm_probado_id',
        'prm_sustancia_id',
        'edad',
        'prm_calle_id',
        'prm_ansiedad_id',
        'prm_mari_sino_id',
        'mari_edad',
        'prm_mari_frec_id',
        'mari_dosis',
        'mari_dia',
        'mari_mes',
        'mari_anio',
        'mari_dejo',
        'prm_tabaco_sino_id',
        'tabaco_edad',
        'prm_tabaco_frec_id',
        'tabaco_dosis',
        'tabaco_dia',
        'tabaco_mes',
        'tabaco_anio',
        'tabaco_dejo',
        'prm_alcohol_sino_id',
        'alcohol_edad',
        'prm_alcohol_frec_id',
        'alcohol_dosis',
        'alcohol_dia',
        'alcohol_mes',
        'alcohol_anio',
        'alcohol_dejo',
        'prm_tran_sino_id',
        'tran_edad',
        'prm_tran_frec_id',
        'tran_dosis',
        'tran_dia',
        'tran_mes',
        'tran_anio',
        'tran_dejo',
        'prm_pegante_sino_id',
        'pegante_edad',
        'prm_pegante_frec_id',
        'pegante_dosis',
        'pegante_dia',
        'pegante_mes',
        'pegante_anio',
        'pegante_dejo',
        'prm_popper_sino_id',
        'popper_edad',
        'prm_popper_frec_id',
        'popper_dosis',
        'popper_dia',
        'popper_mes',
        'popper_anio',
        'popper_dejo',
        'prm_dick_sino_id',
        'dick_edad',
        'prm_dick_frec_id',
        'dick_dosis',
        'dick_dia',
        'dick_mes',
        'dick_anio',
        'dick_dejo',
        'prm_basuco_sino_id',
        'basuco_edad',
        'prm_basuco_frec_id',
        'basuco_dosis',
        'basuco_dia',
        'basuco_mes',
        'basuco_anio',
        'basuco_dejo',
        'prm_cocaina_sino_id',
        'cocaina_edad',
        'prm_cocaina_frec_id',
        'cocaina_dosis',
        'cocaina_dia',
        'cocaina_mes',
        'cocaina_anio',
        'cocaina_dejo',
        'prm_heroina_sino_id',
        'heroina_edad',
        'prm_heroina_frec_id',
        'heroina_dosis',
        'heroina_dia',
        'heroina_mes',
        'heroina_anio',
        'heroina_dejo',
        'prm_2cb_sino_id',
        '2cb_edad',
        'prm_2cb_frec_id',
        '2cb_dosis',
        '2cb_dia',
        '2cb_mes',
        '2cb_anio',
        '2cb_dejo',
        'prm_acidos_sino_id',
        'acidos_edad',
        'prm_acidos_frec_id',
        'acidos_dosis',
        'acidos_dia',
        'acidos_mes',
        'acidos_anio',
        'acidos_dejo',
        'prm_lsd_sino_id',
        'lsd_edad',
        'prm_lsd_frec_id',
        'lsd_dosis',
        'lsd_dia',
        'lsd_mes',
        'lsd_anio',
        'lsd_dejo',
        'sustancias_consumidas',
        'prm_recaida_id',
        'prm_niv_ansiedad_id',
        'prm_trastorno_id',
        'prm_tTrastorno_id',
        'prm_apetito_id',
        'prm_tapetito_id',
        'prm_sudoracion_id',
        'prm_tsudoracion_id',
        'prm_animo_id',
        'prm_tanimo_id',
        'prm_palpitaciones_id',
        'prm_dolor_id',
        'patologicos',
        'quirurgicos',
        'familiares',
        'traumaticos',
        'gineco',
        'prm_tatuajes_id',
        'prm_piercing_id',
        'prm_dx_ppal_id',
        'prm_dx_rel_uno_id',
        'prm_dx_rel_dos_id',
        'prm_dx_rel_tres_id',
        'prm_dx_rel_com_id',
        'prm_tipo_dx_id',
        'prm_conducta_id',
        'alerta',
        'observaciones',
        'user_doc1_id',
        'user_crea_id',
        'user_edita_id',
        'sis_esta_id',

        'id_old', 'metodoxx', 'rutaxxxx', 'ipxxxxxx'
    ];
}