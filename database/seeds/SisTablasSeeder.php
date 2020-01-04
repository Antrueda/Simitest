<?php

use App\Models\sistema\SisTabla;
use Illuminate\Database\Seeder;

class SisTablasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * tablas para ficha de ingreso
         */
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_actividad_tiempo_libres', 's_descripcion' => 'fi_actividad_tiempo_libres']); //1
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_actividadestls', 's_descripcion' => 'fi_actividadestls']); //2
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_autorizacions', 's_descripcion' => 'fi_autorizacions']); //3
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_bienvenidas', 's_descripcion' => 'fi_bienvenidas']); //4
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_composicion_famis', 's_descripcion' => 'fi_composicion_famis']); //5
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_condicion_ambientes', 's_descripcion' => 'fi_condicion_ambientes']); //6
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_consumo_spas', 's_descripcion' => 'fi_consumo_spas']); //7
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_contactos', 's_descripcion' => 'fi_contactos']); //8
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_datos_basicos', 's_descripcion' => 'fi_datos_basicos']); //9
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_dias_genera_ingresos', 's_descripcion' => 'fi_dias_genera_ingresos']); //10
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_documentos_anexas', 's_descripcion' => 'fi_documentos_anexas']); //11
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_enfermedades_familias', 's_descripcion' => 'fi_enfermedades_familias']); //12
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_eventos_medicos', 's_descripcion' => 'fi_eventos_medicos']); //13
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_formacions', 's_descripcion' => 'fi_formacions']); //14
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_generacion_ingresos', 's_descripcion' => 'fi_generacion_ingresos']); //15
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_jr_familiars', 's_descripcion' => 'fi_jr_familiars']); //16
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_justicia_restaurativas', 's_descripcion' => 'fi_justicia_restaurativas']); //17
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_modalidads', 's_descripcion' => 'fi_modalidads']); //18
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_motivo_vinculacions', 's_descripcion' => 'fi_motivo_vinculacions']); //19
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_nucleo_familiars', 's_descripcion' => 'fi_nucleo_familiars']); //20
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_proceso_familias', 's_descripcion' => 'fi_proceso_familias']); //21
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_proceso_pards', 's_descripcion' => 'fi_proceso_pards']); //22
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_proceso_spoas', 's_descripcion' => 'fi_proceso_spoas']); //23
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_proceso_srpas', 's_descripcion' => 'fi_proceso_srpas']); //24
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_razon_continuas', 's_descripcion' => 'fi_razon_continuas']); //25
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_razon_iniciados', 's_descripcion' => 'fi_razon_iniciados']); //26
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_razones', 's_descripcion' => 'fi_razones']); //27
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_red_apoyo_actuals', 's_descripcion' => 'fi_red_apoyo_actuals']); //28
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_red_apoyo_antecedentes', 's_descripcion' => 'fi_red_apoyo_antecedentes']); //29
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_residencias', 's_descripcion' => 'fi_residencias']); //30
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_riesgo_escnnas', 's_descripcion' => 'fi_riesgo_escnnas']); //31
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_sacramentos', 's_descripcion' => 'fi_sacramentos']); //32
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_saluds', 's_descripcion' => 'fi_saluds']); //33
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_situacion_especials', 's_descripcion' => 'fi_situacion_especials']); //34
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_situacion_vulneracions', 's_descripcion' => 'fi_situacion_vulneracions']); //35
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_sustancia_consumidas', 's_descripcion' => 'fi_sustancia_consumidas']); //36
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_vestuario_nnajs', 's_descripcion' => 'fi_vestuario_nnajs']); //37
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_victima_escnnas', 's_descripcion' => 'fi_victima_escnnas']); //38
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_violencias', 's_descripcion' => 'fi_violencias']); //39

        /**
         * tablas para valoración sicosocial incial
         */
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_abu_sexuals', 's_descripcion' => 'vsi_abu_sexuals']); //40
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_act_emocionals', 's_descripcion' => 'vsi_act_emocionals']); //41
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_actemo_fisiologica', 's_descripcion' => 'vsi_actemo_fisiologica']); //42
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_antecedentes', 's_descripcion' => 'vsi_antecedentes']); //43
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_bienvenida_motivo', 's_descripcion' => 'vsi_bienvenida_motivo']); //44
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_bienvenidas', 's_descripcion' => 'vsi_bienvenidas']); //45
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_concep_red', 's_descripcion' => 'vsi_concep_red']); //46
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_conceptos', 's_descripcion' => 'vsi_conceptos']); //47
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_consentimientos', 's_descripcion' => 'vsi_consentimientos']); //48
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_consumo_expectativa', 's_descripcion' => 'vsi_consumo_expectativa']); //49
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_consumo_quien', 's_descripcion' => 'vsi_consumo_quien']); //50
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_consumos', 's_descripcion' => 'vsi_consumos']); //51
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_datos_vinculas', 's_descripcion' => 'vsi_datos_vinculas']); //52
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_din_familiars', 's_descripcion' => 'vsi_din_familiars']); //53
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_ausencia', 's_descripcion' => 'vsi_dinfam_ausencia']); //54
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_calle', 's_descripcion' => 'vsi_dinfam_calle']); //55
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_consumo', 's_descripcion' => 'vsi_dinfam_consumo']); //56
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_cuidador', 's_descripcion' => 'vsi_dinfam_cuidador']); //57
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_delito', 's_descripcion' => 'vsi_dinfam_delito']); //58
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_libertad', 's_descripcion' => 'vsi_dinfam_libertad']); //59
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_madres', 's_descripcion' => 'vsi_dinfam_madres']); //60
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_padres', 's_descripcion' => 'vsi_dinfam_padres']); //61
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_prostitucion', 's_descripcion' => 'vsi_dinfam_prostitucion']); //62
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_dinfam_salud', 's_descripcion' => 'vsi_dinfam_salud']); //63
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_edu_causa', 's_descripcion' => 'vsi_edu_causa']); //64
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_edu_dificultad', 's_descripcion' => 'vsi_edu_dificultad']); //65
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_edu_diftipo_a', 's_descripcion' => 'vsi_edu_diftipo_a']); //66
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_edu_diftipo_b', 's_descripcion' => 'vsi_edu_diftipo_b']); //67
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_edu_fortaleza', 's_descripcion' => 'vsi_edu_fortaleza']); //68
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_educacions', 's_descripcion' => 'vsi_educacions']); //69
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_emocion_vincula', 's_descripcion' => 'vsi_emocion_vincula']); //70
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_est_emocionals', 's_descripcion' => 'vsi_est_emocionals']); //71
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_estemo_adecuado', 's_descripcion' => 'vsi_estemo_adecuado']); //72
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_estemo_dificulta', 's_descripcion' => 'vsi_estemo_dificulta']); //73
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_estemo_estresante', 's_descripcion' => 'vsi_estemo_estresante']); //74
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_estemo_lesiva', 's_descripcion' => 'vsi_estemo_lesiva']); //75
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_estemo_motivo', 's_descripcion' => 'vsi_estemo_motivo']); //76
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_fac_protectors', 's_descripcion' => 'vsi_fac_protectors']); //77
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_fac_riesgos', 's_descripcion' => 'vsi_fac_riesgos']); //78
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_gen_ingresos', 's_descripcion' => 'vsi_gen_ingresos']); //79
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_gening_dias', 's_descripcion' => 'vsi_gening_dias']); //80
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_gening_labor', 's_descripcion' => 'vsi_gening_labor']); //81
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_gening_quien', 's_descripcion' => 'vsi_gening_quien']); //82
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_metas', 's_descripcion' => 'vsi_metas']); //83
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_nnaj_academica', 's_descripcion' => 'vsi_nnaj_academica']); //84
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_nnaj_comportamental', 's_descripcion' => 'vsi_nnaj_comportamental']); //85
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_nnaj_emocional', 's_descripcion' => 'vsi_nnaj_emocional']); //86
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_nnaj_familiar', 's_descripcion' => 'vsi_nnaj_familiar']); //87
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_nnaj_sexual', 's_descripcion' => 'vsi_nnaj_sexual']); //88
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_nnaj_social', 's_descripcion' => 'vsi_nnaj_social']); //89
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_potencialidads', 's_descripcion' => 'vsi_potencialidads']); //90
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_red_socials', 's_descripcion' => 'vsi_red_socials']); //91
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_redsoc_acceso', 's_descripcion' => 'vsi_redsoc_acceso']); //92
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_redsoc_actuals', 's_descripcion' => 'vsi_redsoc_actuals']); //93
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_redsoc_motivo', 's_descripcion' => 'vsi_redsoc_motivo']); //94
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_redsoc_pasados', 's_descripcion' => 'vsi_redsoc_pasados']); //95
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_rel_familiars', 's_descripcion' => 'vsi_rel_familiars']); //96
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_rel_sociales', 's_descripcion' => 'vsi_rel_sociales']); //97
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_relfam_acciones', 's_descripcion' => 'vsi_relfam_acciones']); //98
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_relfam_dificultad', 's_descripcion' => 'vsi_relfam_dificultad']); //99
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_relfam_motivo', 's_descripcion' => 'vsi_relfam_motivo']); //100
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_relsol_dificulta', 's_descripcion' => 'vsi_relsol_dificulta']); //101
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_relsol_facilita', 's_descripcion' => 'vsi_relsol_facilita']); //102
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_saluds', 's_descripcion' => 'vsi_saluds']); //103
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_sit_especials', 's_descripcion' => 'vsi_sit_especials']); //104
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_sitesp_riesgo', 's_descripcion' => 'vsi_sitesp_riesgo']); //105
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_sitesp_victima', 's_descripcion' => 'vsi_sitesp_victima']); //106
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_situacion_vincula', 's_descripcion' => 'vsi_situacion_vincula']); //107
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_vio_contexto', 's_descripcion' => 'vsi_vio_contexto']); //108
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_vio_tipo', 's_descripcion' => 'vsi_vio_tipo']); //109
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_violencias', 's_descripcion' => 'vsi_violencias']); //110
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsis', 's_descripcion' => 'vsis']); //111

        /**
         * tablas para consulta social en domicilio
         */

        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_aliment_compra', 's_descripcion' => 'csd_aliment_compra']); //112
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_aliment_frec', 's_descripcion' => 'csd_aliment_frec']); //113
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_aliment_inge', 's_descripcion' => 'csd_aliment_inge']); //114
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_aliment_prepara', 's_descripcion' => 'csd_aliment_prepara']); //115
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_alimentacions', 's_descripcion' => 'csd_alimentacions']); //116
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_bienvenidas', 's_descripcion' => 'csd_bienvenidas']); //117
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_bienvenidas_motivos', 's_descripcion' => 'csd_bienvenidas_motivos']); //118
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_com_familiars', 's_descripcion' => 'csd_com_familiars']); //119
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_com_familiars_observacions', 's_descripcion' => 'csd_com_familiars_observacions']); //120
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_conclusiones', 's_descripcion' => 'csd_conclusiones']); //121
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_datos_basicos', 's_descripcion' => 'csd_datos_basicos']); //122
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_din_familiars', 's_descripcion' => 'csd_din_familiars']); //123
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_dinfam_antecedente', 's_descripcion' => 'csd_dinfam_antecedente']); //124
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_dinfam_establecen', 's_descripcion' => 'csd_dinfam_establecen']); //125
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_dinfam_incumple', 's_descripcion' => 'csd_dinfam_incumple']); //126
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_dinfam_madres', 's_descripcion' => 'csd_dinfam_madres']); //127
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_dinfam_norma', 's_descripcion' => 'csd_dinfam_norma']); //128
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_dinfam_padres', 's_descripcion' => 'csd_dinfam_padres']); //129
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_dinfam_problema', 's_descripcion' => 'csd_dinfam_problema']); //130
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_gen_ingresos', 's_descripcion' => 'csd_gen_ingresos']); //131
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_gening_aportas', 's_descripcion' => 'csd_gening_aportas']); //132
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_gening_dias', 's_descripcion' => 'csd_gening_dias']); //133
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_justicias', 's_descripcion' => 'csd_justicias']); //134
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_nnaj_especial', 's_descripcion' => 'csd_nnaj_especial']); //135
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_redsoc_actuals', 's_descripcion' => 'csd_redsoc_actuals']); //136
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_redsoc_pasados', 's_descripcion' => 'csd_redsoc_pasados']); //137
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_reside_ambiente', 's_descripcion' => 'csd_reside_ambiente']); //138
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_residencias', 's_descripcion' => 'csd_residencias']); //139
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_sis_nnaj', 's_descripcion' => 'csd_sis_nnaj']); //140
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csd_violencias', 's_descripcion' => 'csd_violencias']); //141
        SisTabla::create(['sis_documento_fuente_id' => 4, 's_tabla' => 'csds', 's_descripcion' => 'csds']); //142
    }
}
