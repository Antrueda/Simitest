<?php

use Illuminate\Database\Seeder;
use App\Models\Indicadores\InIndicador;
use App\Models\Indicadores\InPregunta;
use App\Models\sistema\SisCampoTabla;
use App\Models\sistema\SisTabla;

class InIndicadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InIndicador::create(['s_indicador' => 'Dificultad habilidades Sociales', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'Ausencia redes de apoyo', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'Identificación de víctima y/o riesgo ESCNNA y afectaciones psicosociales desencadenadas', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'IDENTIFICACIÓN  DE PRESUNTO ABUSO SEXUAL', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'IDENTIFICACIÓN DE AFECTACIONES PSICOSOCIALES ANTE PRESUNTO ABUSO SEXUAL', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'EVENTOS DE IMPACTO PSICOSOCIAL RELACIONADOS CON EL GÉNERO, LA IDENTIDAD DE GÉNERO U ORIENTACIÓN SEXUAL ', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'PRESUNTA NEGLIGENCIA DE LOS PROGENITORES Y/O CUIDADORES', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'DIFICULTADES EN RELACIONES FAMILIARES', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'PAUTAS DE CRIANZA INADECUADA', 'area_id' => 1]);
        InIndicador::create(['s_indicador' => 'IDENTIFICACIÓN DE VIOLENCIA INTRAFAMILIAR', 'area_id' => 1]);

        // sis_tablas
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_datos_basicos', 's_descripcion' => 'DATOS BÁSICOS DE FI']);
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_vestuarios_nnajs', 's_descripcion' => 'VESTUARIO FI']);
        SisTabla::create(['sis_documento_fuente_id' => 2, 's_tabla' => 'fi_residencias', 's_descripcion' => 'RESIDENCIA FI']);
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_relsol_dificulta', 's_descripcion' => 'Cuál es la dificultad para lograr la interacción']);
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_relsol_facilita', 's_descripcion' => 'En qué contextos se le dificilta interactuar con otras personas']);
        SisTabla::create(['sis_documento_fuente_id' => 3, 's_tabla' => 'vsi_est_emocionals', 's_descripcion' => '¿Cómo reacciona ante eventos o situaciones que le generen un cambio emocional?']);
        
        // sis_campos
        SisCampoTabla::create(['sis_tabla_id' => 1, 's_campo' => 'prm_documento_id', 's_descripcion' => 'pregunta del instrumento a medir 1']);
        SisCampoTabla::create(['sis_tabla_id' => 1, 's_campo' => 'prm_doc_fisico_id', 's_descripcion' => 'pregunta del instrumento a medir 2']);
        SisCampoTabla::create(['sis_tabla_id' => 1, 's_campo' => 'sis_municipioexp_id', 's_descripcion' => 'pregunta del instrumento a medir 3']);
        SisCampoTabla::create(['sis_tabla_id' => 1, 's_campo' => 'prm_sexo_id', 's_descripcion' => 'pregunta del instrumento a medir 4']);
        SisCampoTabla::create(['sis_tabla_id' => 1, 's_campo' => 's_apodo', 's_descripcion' => 'pregunta del instrumento a medir 5']);
        SisCampoTabla::create(['sis_tabla_id' => 1, 's_campo' => 's_nombre_identitario', 's_descripcion' => 'pregunta del instrumento a medir 6']);
        SisCampoTabla::create(['sis_tabla_id' => 1, 's_campo' => 'd_nacimiento', 's_descripcion' => 'pregunta del instrumento a medir 7']);
        SisCampoTabla::create(['sis_tabla_id' => 2, 's_campo' => 'prm_t_pantalon_id', 's_descripcion' => 'pregunta del instrumento a medir 8']);
        SisCampoTabla::create(['sis_tabla_id' => 2, 's_campo' => 'prm_t_camisa_id', 's_descripcion' => 'pregunta del instrumento a medir 9']);
        SisCampoTabla::create(['sis_tabla_id' => 2, 's_campo' => 'prm_t_zapato_id', 's_descripcion' => 'pregunta del instrumento a medir 10']);
        SisCampoTabla::create(['sis_tabla_id' => 2, 's_campo' => 'prm_sexo_etario_id', 's_descripcion' => 'pregunta del instrumento a medir 11']);
        SisCampoTabla::create(['sis_tabla_id' => 3, 's_campo' => 'i_prm_tiene_dormir_id', 's_descripcion' => '2.1 ¿Tiene lugar de residencia dónde dormir?']);
        SisCampoTabla::create(['sis_tabla_id' => 3, 's_campo' => 'i_prm_tipo_duerme_id', 's_descripcion' => '2.2 Tipo de residencia o lugar donde duerme']);
        SisCampoTabla::create(['sis_tabla_id' => 4, 's_campo' => 'parametro_id', 's_descripcion' => 'Cuál es la dificultad para lograr la interacción']);
        SisCampoTabla::create(['sis_tabla_id' => 5, 's_campo' => 'parametro_id', 's_descripcion' => 'En qué contextos se le dificilta interactuar con otras personas']);
        SisCampoTabla::create(['sis_tabla_id' => 6, 's_campo' => 'prm_reacciona_id', 's_descripcion' => '¿Cómo reacciona ante eventos o situaciones que le generen un cambio emocional?']);



        InPregunta::create(['s_pregunta' => 'Edad', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cuál es su sexo?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Con cuál identidad de género se identifica?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cuál es su orientación sexual?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Se ha sentido discriminado/a por su identidad de género?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Se ha sentido discriminado/a por su orientación sexual?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'En caso de responder afirmativo el ítem 1.10 o 1.11 responder ¿En qué contexto se ha sentido discriminado/a?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Qué tipo de violencia ha recibido cuando ha sido discriminado/a?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Razones o problemas por las que el NNAJ se vincula al IDIPRON', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Tiene lugar de residencia dónde dormir? ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Tipo de residencia o lugar donde duerme.', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Qué situaciones, condiciones o actividades parecen producir o emperar estas dificultades', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Condiciones del ambiente y riesgos cerca de la vivienda.', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Condiciones del ambiente y riesgo cerca de la vivienda (para CHC lugar de focalización)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Hacinamiento ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Antecedentes de Problemas socialesasociados con la familia actual y extensa', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Por qué motivo decidió vincularse o vincular al NNA al Proyecto Pedagógico? ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Quien asume el cuidado y crianza de los menores de 18 años en ausencia de padres o representante legal?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cuáles cree que son las principales problemáticas por las que atraviesa la familia?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Al interior de la familia hay normas y límites?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Los integrantes del nucleo familiar conocen estas normas y limites?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Quién(es) establece(n) las órdenes y reglas al interior del hogar?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cómo las establece?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cómo actúan los demás miembros de la familia frente a las normas?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Cuando hay problemas en casa, ¿cómo lo solucionan?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cuál es el modo de actuar cuando no se cumplen las reglas? ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Los miembros de la familia se destacan por:', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cuál es la persona con quien no tiene buenas relaciones en su familia?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Relacione el motivo por lo cual no se tienen buenas relaciones?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cómo es la relación con su familia?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Se siente a gusto con el tipo de relación?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Tiene dificultades con su pareja?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Qué tipo de dificultades con pareja? ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cómo afrontan las dificultades?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Parentesco con el NNAJ principal de referencia ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Ha interpuesto denuncia ante las autoridades competentes por la violencia presentada?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '4.12 ¿Ha denunciado ante las autoridades competentes la violencia', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Quién (es) asumen el cuidado y crianza de los menores de 18 años en ausencia de representante legales?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿ Motivos por el cual hay ausencia del/los representantes legales? ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿En cuáles contextos se le dificultad interactuar con otras personas?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cuál es la dificultad para lograr la interacción?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Qué actividades realiza para generar ingresos?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Ha recibido atención psicológica, médica especializada u otra?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Por cuál condición? ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Actualmente se encuentra en PARD?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cómo se siente la mayor parte del tiempo?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Ha estado en Proceso Administrativo de Restablecimiento de Derechos -PARD?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'ª Motivo del PARD', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cómo reacciona ante eventos o situaciones que le generen un cambio emocional significativo?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Ha ocurrido en su vida algún acontecimiento estresante o traumático que le haya generado dificultades emocionales?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '9.17 ¿Alguna vez ha tenido amenazas relacionadas con quitarse la vida?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '1 ¿Ha presentado conductas auto lesivas?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿En algún momento de su vida ha ocurrido algún evento sexual negativo?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Presenta algún tipo de violencia?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'a El tipo de violencia referenciado corresponde a:', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cuál fue el tipo de evento sexualnegativo?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿ Actualmente convive con el presunto agresor en este evento?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿ Hay presencia o cercania en la vivienda del presunto agresor?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Existe apoyo familiar de la situación?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Se ha presentado denuncia ante las autoridades competentes?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Ha recibido apoyo terapéutico?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Presenta alguna red de apoyo? ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Considera que actualmente puede encontrarse en alguna de las siguientes situaciones?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Situaciones de vulneración', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Considera que se encuentra inmerso en algunos de los siguientes riesgos?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Ha presentado dificultades para acceder a alguna red de apoyo?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Victima ESCNNA (Modalidad)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿La red de apoyo con la que cuenta actualmente es un factor de riesgo? ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'En riesgo de ESCNNA (modalidad)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Existe reconocimiento por parte del NNA como victima ESCNNA?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Riesgo de ESCNNA ', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Cuáles fueron las razones para haber iniciado la habitanza en calle?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Razones por las cuales continua la habitanza en calle?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Tipo de población', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Presenta dificultades para acceder a alguna red de apoyo?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => 'Motivos por el cual se presenta la restricción', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Existe la ruptura de redes de apoyo por la exteriorización de su identidad de género?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        InPregunta::create(['s_pregunta' => '¿Existe la ruptura de redes de apoyo por la exteriorización de su orientación sexual?', 'user_crea_id' => 1, 'user_edita_id' => 1, 'created_at' => '2019-10-24 18:26:09', 'updated_at' => '2019-10-24 18:26:09', 'activo' => 1]);
        
       }
}
