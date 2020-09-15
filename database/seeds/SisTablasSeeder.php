<?php

use App\Models\Sistema\SisTabla;
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
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_actividad_tiempo_libres', 's_descripcion' => 'fi_actividad_tiempo_libres','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //1
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_actividadestls', 's_descripcion' => 'fi_actividadestls','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //2
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_autorizacions', 's_descripcion' => 'fi_autorizacions','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //3
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_bienvenidas', 's_descripcion' => 'fi_bienvenidas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //4
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_compfamis', 's_descripcion' => 'fi_compfamis','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //5
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_condicion_ambientes', 's_descripcion' => 'fi_condicion_ambientes','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //6
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_consumo_spas', 's_descripcion' => 'fi_consumo_spas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //7
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_contactos', 's_descripcion' => 'fi_contactos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //8
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_datos_basicos', 's_descripcion' => 'fi_datos_basicos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //9
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_dias_genera_ingresos', 's_descripcion' => 'fi_dias_genera_ingresos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //10
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_documentos_anexas', 's_descripcion' => 'fi_documentos_anexas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //11
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_enfermedades_familias', 's_descripcion' => 'fi_enfermedades_familias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //12
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_eventos_medicos', 's_descripcion' => 'fi_eventos_medicos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //13
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_formacions', 's_descripcion' => 'fi_formacions','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //14
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_generacion_ingresos', 's_descripcion' => 'fi_generacion_ingresos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //15
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_jr_familiars', 's_descripcion' => 'fi_jr_familiars','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //16
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_justrests', 's_descripcion' => 'fi_justrests','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //17
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_modalidads', 's_descripcion' => 'fi_modalidads','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //18
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_motivo_vinculacions', 's_descripcion' => 'fi_motivo_vinculacions','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //19
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_nucleo_familiars', 's_descripcion' => 'fi_nucleo_familiars','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //20
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_proceso_familias', 's_descripcion' => 'fi_proceso_familias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //21
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_proceso_pards', 's_descripcion' => 'fi_proceso_pards','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //22
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_proceso_spoas', 's_descripcion' => 'fi_proceso_spoas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //23
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_proceso_srpas', 's_descripcion' => 'fi_proceso_srpas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //24
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_razon_continuas', 's_descripcion' => 'fi_razon_continuas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //25
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_razon_iniciados', 's_descripcion' => 'fi_razon_iniciados','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //26
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_razones', 's_descripcion' => 'fi_razones','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //27
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_red_apoyo_actuals', 's_descripcion' => 'fi_red_apoyo_actuals','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //28
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_red_apoyo_antecedentes', 's_descripcion' => 'fi_red_apoyo_antecedentes','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //29
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_residencias', 's_descripcion' => 'fi_residencias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //30
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_riesgo_escnnas', 's_descripcion' => 'fi_riesgo_escnnas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //31
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_sacramentos', 's_descripcion' => 'fi_sacramentos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //32
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_saluds', 's_descripcion' => 'fi_saluds','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //33
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_situacion_especials', 's_descripcion' => 'fi_situacion_especials','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //34
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_situacion_vulneracions', 's_descripcion' => 'fi_situacion_vulneracions','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //35
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_sustancia_consumidas', 's_descripcion' => 'fi_sustancia_consumidas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //36
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_vestuario_nnajs', 's_descripcion' => 'fi_vestuario_nnajs','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //37
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_victima_escnnas', 's_descripcion' => 'fi_victima_escnnas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //38
        SisTabla::create(['sis_docfuen_id' => 2, 's_tabla' => 'fi_violencias', 's_descripcion' => 'fi_violencias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //39

        /**
         * tablas para valoración sicosocial incial
         */
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_abu_sexuals', 's_descripcion' => 'vsi_abu_sexuals','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //40
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_act_emocionals', 's_descripcion' => 'vsi_act_emocionals','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //41
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_actemo_fisiologica', 's_descripcion' => 'vsi_actemo_fisiologica','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //42
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_antecedentes', 's_descripcion' => 'vsi_antecedentes','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //43
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_bienvenida_motivo', 's_descripcion' => 'vsi_bienvenida_motivo','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //44
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_bienvenidas', 's_descripcion' => 'vsi_bienvenidas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //45
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_concep_red', 's_descripcion' => 'vsi_concep_red','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //46
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_conceptos', 's_descripcion' => 'vsi_conceptos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //47
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_consentimientos', 's_descripcion' => 'vsi_consentimientos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //48
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_consumo_expectativa', 's_descripcion' => 'vsi_consumo_expectativa','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //49
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_consumo_quien', 's_descripcion' => 'vsi_consumo_quien','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //50
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_consumos', 's_descripcion' => 'vsi_consumos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //51
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_datos_vinculas', 's_descripcion' => 'vsi_datos_vinculas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //52
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_din_familiars', 's_descripcion' => 'vsi_din_familiars','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //53
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_ausencia', 's_descripcion' => 'vsi_dinfam_ausencia','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //54
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_calle', 's_descripcion' => 'vsi_dinfam_calle','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //55
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_consumo', 's_descripcion' => 'vsi_dinfam_consumo','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //56
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_cuidador', 's_descripcion' => 'vsi_dinfam_cuidador','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //57
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_delito', 's_descripcion' => 'vsi_dinfam_delito','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //58
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_libertad', 's_descripcion' => 'vsi_dinfam_libertad','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //59
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_madres', 's_descripcion' => 'vsi_dinfam_madres','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //60
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_padres', 's_descripcion' => 'vsi_dinfam_padres','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //61
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_prostitucion', 's_descripcion' => 'vsi_dinfam_prostitucion','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //62
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_dinfam_salud', 's_descripcion' => 'vsi_dinfam_salud','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //63
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_edu_causa', 's_descripcion' => 'vsi_edu_causa','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //64
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_edu_dificultad', 's_descripcion' => 'vsi_edu_dificultad','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //65
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_edu_diftipo_a', 's_descripcion' => 'vsi_edu_diftipo_a','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //66
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_edu_diftipo_b', 's_descripcion' => 'vsi_edu_diftipo_b','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //67
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_edu_fortaleza', 's_descripcion' => 'vsi_edu_fortaleza','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //68
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_educacions', 's_descripcion' => 'vsi_educacions','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //69
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_emocion_vincula', 's_descripcion' => 'vsi_emocion_vincula','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //70
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_est_emocionals', 's_descripcion' => 'vsi_est_emocionals','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //71
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_estemo_adecuado', 's_descripcion' => 'vsi_estemo_adecuado','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //72
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_estemo_dificulta', 's_descripcion' => 'vsi_estemo_dificulta','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //73
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_estemo_estresante', 's_descripcion' => 'vsi_estemo_estresante','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //74
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_estemo_lesiva', 's_descripcion' => 'vsi_estemo_lesiva','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //75
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_estemo_motivo', 's_descripcion' => 'vsi_estemo_motivo','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //76
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_fac_protectors', 's_descripcion' => 'vsi_fac_protectors','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //77
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_fac_riesgos', 's_descripcion' => 'vsi_fac_riesgos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //78
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_gen_ingresos', 's_descripcion' => 'vsi_gen_ingresos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //79
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_gening_dias', 's_descripcion' => 'vsi_gening_dias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //80
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_gening_labor', 's_descripcion' => 'vsi_gening_labor','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //81
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_gening_quien', 's_descripcion' => 'vsi_gening_quien','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //82
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_metas', 's_descripcion' => 'vsi_metas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //83
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_nnaj_academica', 's_descripcion' => 'vsi_nnaj_academica','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //84
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_nnaj_comportamental', 's_descripcion' => 'vsi_nnaj_comportamental','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //85
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_nnaj_emocional', 's_descripcion' => 'vsi_nnaj_emocional','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //86
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_nnaj_familiar', 's_descripcion' => 'vsi_nnaj_familiar','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //87
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_nnaj_sexual', 's_descripcion' => 'vsi_nnaj_sexual','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //88
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_nnaj_social', 's_descripcion' => 'vsi_nnaj_social','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //89
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_potencialidads', 's_descripcion' => 'vsi_potencialidads','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //90
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_red_socials', 's_descripcion' => 'vsi_red_socials','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //91
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_redsoc_acceso', 's_descripcion' => 'vsi_redsoc_acceso','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //92
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_redsoc_actuals', 's_descripcion' => 'vsi_redsoc_actuals','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //93
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_redsoc_motivo', 's_descripcion' => 'vsi_redsoc_motivo','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //94
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_redsoc_pasados', 's_descripcion' => 'vsi_redsoc_pasados','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //95
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_rel_familiars', 's_descripcion' => 'vsi_rel_familiars','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //96
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_rel_sociales', 's_descripcion' => 'vsi_rel_sociales','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //97
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_relfam_acciones', 's_descripcion' => 'vsi_relfam_acciones','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //98
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_relfam_dificultad', 's_descripcion' => 'vsi_relfam_dificultad','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //99
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_relfam_motivo', 's_descripcion' => 'vsi_relfam_motivo','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //100
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_relsol_dificulta', 's_descripcion' => 'vsi_relsol_dificulta','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //101
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_relsol_facilita', 's_descripcion' => 'vsi_relsol_facilita','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //102
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_saluds', 's_descripcion' => 'vsi_saluds','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //103
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_sit_especials', 's_descripcion' => 'vsi_sit_especials','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //104
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_sitesp_riesgo', 's_descripcion' => 'vsi_sitesp_riesgo','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //105
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_sitesp_victima', 's_descripcion' => 'vsi_sitesp_victima','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //106
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_situacion_vincula', 's_descripcion' => 'vsi_situacion_vincula','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //107
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_vio_contexto', 's_descripcion' => 'vsi_vio_contexto','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //108
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_vio_tipo', 's_descripcion' => 'vsi_vio_tipo','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //109
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsi_violencias', 's_descripcion' => 'vsi_violencias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //110
        SisTabla::create(['sis_docfuen_id' => 3, 's_tabla' => 'vsis', 's_descripcion' => 'vsis','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //111

        /**
         * tablas para consulta social en domicilio
         */

        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_aliment_compra', 's_descripcion' => 'csd_aliment_compra','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //112
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_aliment_frec', 's_descripcion' => 'csd_aliment_frec','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //113
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_aliment_inge', 's_descripcion' => 'csd_aliment_inge','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //114
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_aliment_prepara', 's_descripcion' => 'csd_aliment_prepara','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //115
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_alimentacions', 's_descripcion' => 'csd_alimentacions','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //116
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_bienvenidas', 's_descripcion' => 'csd_bienvenidas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //117
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_bienvenidas_motivos', 's_descripcion' => 'csd_bienvenidas_motivos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //118
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_com_familiars', 's_descripcion' => 'csd_com_familiars','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //119
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_com_familiars_observacions', 's_descripcion' => 'csd_com_familiars_observacions','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //120
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_conclusiones', 's_descripcion' => 'csd_conclusiones','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //121
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_datos_basicos', 's_descripcion' => 'csd_datos_basicos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //122
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_din_familiars', 's_descripcion' => 'csd_din_familiars','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //123
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_dinfam_antecedente', 's_descripcion' => 'csd_dinfam_antecedente','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //124
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_dinfam_establecen', 's_descripcion' => 'csd_dinfam_establecen','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //125
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_dinfam_incumple', 's_descripcion' => 'csd_dinfam_incumple','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //126
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_dinfam_madres', 's_descripcion' => 'csd_dinfam_madres','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //127
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_dinfam_norma', 's_descripcion' => 'csd_dinfam_norma','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //128
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_dinfam_padres', 's_descripcion' => 'csd_dinfam_padres','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //129
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_dinfam_problema', 's_descripcion' => 'csd_dinfam_problema','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //130
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_gen_ingresos', 's_descripcion' => 'csd_gen_ingresos','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //131
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_gening_aportas', 's_descripcion' => 'csd_gening_aportas','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //132
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_gening_dias', 's_descripcion' => 'csd_gening_dias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //133
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_justicias', 's_descripcion' => 'csd_justicias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //134
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_nnaj_especial', 's_descripcion' => 'csd_nnaj_especial','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //135
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_redsoc_actuals', 's_descripcion' => 'csd_redsoc_actuals','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //136
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_redsoc_pasados', 's_descripcion' => 'csd_redsoc_pasados','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //137
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_reside_ambiente', 's_descripcion' => 'csd_reside_ambiente','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //138
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_residencias', 's_descripcion' => 'csd_residencias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //139
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_sis_nnaj', 's_descripcion' => 'csd_sis_nnaj','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //140
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csd_violencias', 's_descripcion' => 'csd_violencias','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //141
        SisTabla::create(['sis_docfuen_id' => 4, 's_tabla' => 'csds', 's_descripcion' => 'csds','sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,]); //142
    }
}
