<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class FosTsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fos_tses')->delete();
        
        \DB::table('fos_tses')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'LA ACCIÓN RELACIONADA, SE REGISTRA CUANDO EL NNAJ INGRESA A LA UPI INICIALMENTE O REALIZA UN INGRESO CON ANTECEDENTES INSTITUCIONALES, EN ESTE ESPACIO EL EQUIPO PSICOSOCIAL REALIZA UNA ATENCIÓN CON EL BENEFICIARIO Y SE DAN A CONOCER DINÁMICAS DE LA UNIDAD, HORARIOS, NORMAS, Y REGLAS, ACOMPAÑADO DE UN RECORRIDO POR LA UNIDAD.',
            'nombre' => 'BIENVENIDA AL NNAJ A LA UPI (BAU)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '1',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'HACE REFERENCIA AL ACERCAMIENTO QUE SE REALIZA AL DOMICILIO DEL NNAJ POR PÉRDIDA DE CONTACTO, SEGUIMIENTO POR CONDICIONES DE RIESGOS IDENTIFICADOS EN EL PROCESO DEL BENEFICIARIO Y/O ACERCAMIENTO POR CONSULTA SOCIAL EN DOMICILIO NO EFECTIVA, ES DECIR NO SE RECIBE AL PROFESIONAL EN LA VIVIENDA PARA LA EJECUCIÓN DE LA CSD.',
            'nombre' => 'ACERCAMIENTO AL DOMICILIO (AD)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '2',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
            'descripcion' => 'HACE REFERENCIA A LA GESTIÓN INTERINSTITUCIONAL QUE REALIZA EL PROFESIONAL PSICOSOCIAL (EN PSICOLOGÍA O TRABAJO SOCIAL) CON ENTIDADES PRESTADORAS DEL SISTEMA.',
                'nombre' => 'GESTION INTER',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '3',
            ),
            3 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ A OTRAS INSTITUCIONES DEL SISTEMA.',
                'nombre' => 'ACOMPAÑAMIENTO INTER',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '4',
            ),
            4 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'SE CREA EL CRITERIO DE CARGUE PARA QUE LOS PROFESIONALES REGISTREN LA ATENCIÓN REALIZADA A EL/LA NNAJ RESPECTO A INFORMACIÓN, ORIENTACIÓN Y SEGUIMIENTO INMEDIATO.',
                'nombre' => 'ATENCIONES Y ACCIONES',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '5',
            ),
            5 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
            'descripcion' => 'SE CREAR ESTE CRITERIO DE CARGUE PARA REGISTRAR EL SEGUIMIENTO Y DECISIONES ESTABLECIDAS EN EL COMITÉ DESDE LAS UNIDADES DE PROTECCIÓN INTEGRAL (UPI), ZONAS TERRITORIALES, CONVENIOS INTERADMINISTRATIVOS, CONTEXTOS PEDAGÓGICOS, ÁREAS DE DERECHO Y PROCESO MISIONAL, SOBRE LAS DIFERENTES SITUACIONES QUE SE PRESENTAN CON LOS NIÑOS, NIÑAS, ADOLESCENTES Y JÓVENES (NNAJ).',
            'nombre' => 'COMITE MISIONAL (CM)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '6',
            ),
            6 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
            'descripcion' => 'SE CREA CRITERIO DE REGISTRAR ACCIONES QUE APLICAN PARA NNA QUE CUENTAN CON PROCESO ADMINISTRATIVO DE RESTABLECIMIENTO DE DERECHOS (PARD), EL EQUIPO PSICOSOCIAL DE LA UNIDAD PARTICIPA JUNTO AL EQUIPO DE LA DEFENSORÍA Y DEFENSOR DE FAMILIA DE ICBF.',
                'nombre' => 'COMITÉ TÉCNICO ICBF',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '7',
            ),
            7 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'SE CREA ESTE CRITERIO CON EL FIN DE REGISTRAR EL CONTACTO TELEFÓNICO QUE REALIZA EL PROFESIONAL DEL EQUIPO PSICOSOCIAL, CON EL DEFENSOR DE FAMILIA QUIEN ES REPRESENTANTE LEGAL DEL NNA QUIEN CUENTA CON PROCESO ADMINISTRATIVO DE RESTABLECIMIENTO DE DERECHOS.',
            'nombre' => 'CONTACTO TELEFONICO DEFENSOR DE FAMILIA (CTDF)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '8',
            ),
            8 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
            'descripcion' => 'SE CREA ESTE CRITERIO CON EL FIN DE REGISTRAR EL CONTACTO MEDIANTE CORREO ELECTRÓNICO QUE REALIZA EL PROFESIONAL DEL EQUIPO PSICOSOCIAL (PSICÓLOGO Y/O TRABAJO SOCIAL), CON EL DEFENSOR DE FAMILIA QUIEN ES REPRESENTANTE LEGAL DEL NNA QUIEN CUENTA CON PROCESO ADMINISTRATIVO DE RESTABLECIMIENTO DE DERECHOS.',
            'nombre' => 'CORREO ELECTRONICO. DEFENSOR DE FAMILIA (CEDF)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '9',
            ),
            9 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
            'descripcion' => 'SE CREA CRITERIO DE REGISTRO DE LA INFORMACIÓN EN LOS CONTEXTO PEDAGÓGICOS INTERNADO Y EXTERNADO DE LA SIGUIENTE MANERA: SE ESTABLECE PARA UPI CONTEXTO INTERNADO DE NNAJ, DONDE LOS PADRES, MADRES, REPRESENTANTES LEGALES Y/O REDES DE APOYO SE ACERCAN A LA UPI CON EL FIN DE REALIZAR UN ENCUENTRO FAMILIAR CUANDO NO SE EFECTÚAN LOS ENCUENTROS FAMILIARES PROGRAMADOS O EXISTA ALGÚN TIPO DE RESTRICCIÓN POR LA ENTIDAD ADMINISTRATIVA (DEFENSOR DE FAMILIA) O JUDICIAL (JUEZ) COMPETENTE.',
            'nombre' => 'ENCUENTRO FAMILIAR EN UPI (EFU)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '10',
            ),
            10 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'HACE REFERENCIA CUANDO EL PROFESIONAL DEL EQUIPO PSICOSOCIAL REALIZA REMISIÓN POR MEDIO DE CONTACTO DIRECTO CON ALGÚN FUNCIONARIO DE LA INSTITUCIÓN RECEPTORA, Y MEDIANTE DILIGENCIAMIENTO DEL FORMATO DIRECCIONAMIENTO Y REFERENCIACIÓN M-MTE-FT-011 SE PRESENTA EL CASO DEL NNAJ PARA EL SERVICIO INTERINSTITUCIONAL.',
            'nombre' => 'GESTION REDES INTER- REMISION (GIR)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '11',
            ),
            11 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'SE CREA ESTE CRITERIO, CON EL FIN DE REGISTRAR LAS ACCIONES REALIZADAS POR EL ÁREA SICOSOCIAL EN EL PROCESO DE INGRESO DE LOS NNA AL CONTEXTO PEDAGÓGICO INTERNADO EN UNIDADES DE PROTECCIÓN INTEGRAL DEL IDIPRON.',
            'nombre' => 'PROCESO DE INGRESO A IDIPRON (PIDI)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '12',
            ),
            12 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-23 19:27:58',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '2',
                'user_edita_id' => '861',
                'user_crea_id' => '2',
                'descripcion' => 'SE CREA CRITERIO DE CARGUE PARA EVIDENCIAR LA APLICACIÓN Y DILIGENCIAMIENTO DEL INSTRUMENTO DE APLICACIÓN VALORACIÓN SICOSOCIAL.',
            'nombre' => 'VALORACION SICOSOCIAL BASE PLANA (VPBL)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '13',
            ),
            13 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'ELABORACIÓN DE INFORME PSICOSOCIAL PARA EVIDENCIAR AVANCES Y DIFICULTADES DEL NNAJ DESDE CADA UNA DE LAS ÁREAS DE ATENCIÓN. SE DEBE REGISTRAR EN LA OBSERVACIÓN FECHA DE LA ELABORACIÓN Y RADICACIÓN, NOMBRE DE LA ENTIDAD Y MOTIVO POR EL CUAL SE DA LA REMISIÓN.',
            'nombre' => 'INFORME PSICOSOCIAL NNAJ (IPNJ)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '14',
            ),
            14 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'HACE REFERENCIA AL ACOMPAÑAMIENTO Y/O DESPLAZAMIENTO QUE REALIZA EL PROFESIONAL EN PSICOLOGÍA O TRABAJO SOCIAL CON EL NNAJ AL ÁREA DE DERECHOS DEL IDIPRON.',
                'nombre' => 'ACOMPAÑAMIENTO INTRA',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '15',
            ),
            15 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'SON TODAS LAS GESTIONES Y ARTICULACIONES QUE REALIZA EL EQUIPO PSICOSOCIAL CON EL ÁREA DE DERECHOS DEL IDIPRON.',
                'nombre' => 'GESTION INTRA',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '16',
            ),
            16 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'SE CREA ESTE CRITERIO DE CARGUE PARA PODER REGISTRAR EL EMPALME DE CASO QUE REALIZAN LOS PROFESIONALES PSICOSOCIALES CUANDO UN NNAJ CAMBIA DE CONTEXTO PEDAGÓGICO O UNIDAD DE PROTECCIÓN INTEGRAL. ES CON EL FIN DE REPORTAR LA ACCIÓN REALIZADA ENTRE LOS EQUIPO PSICOSOCIALES QUE REALIZAN LA ACCIÓN.',
            'nombre' => 'EMPALME DE CASO PSICOSOCIAL (ECPS)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '17',
            ),
            17 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'SE CREA ESTE CRITERIO CON EL OBJETIVO DE IDENTIFICAR LOS/LAS AJ QUE SON REMITIDOS AL SERVICIO QUE BRINDA EL COMPONENTE DE MITIGACIÓN, ESTE PARÁMETRO DE DEBE DILIGENCIAR UNA VEZ SE HAYA REALIZADO LA VINCULACIÓN DE LOS/LAS AJ AL COMPONENTE Y CUMPLA CON LOS REQUISITOS DENTRO DE LA ASIGNACIÓN DE CUPOS POR PARTE DEL COMPONENTE A CADA UPI.',
            'nombre' => 'REMISION A MITIGACION (RM)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '18',
            ),
            18 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
            'descripcion' => 'SE CREA CRITERIO CON EL OBJETIVO DE IDENTIFICAR EL NÚMERO DE ACOMPAÑAMIENTOS QUE REALIZA EL PROFESIONAL PSICOSOCIAL A TODO EL PROCESO (SESION) QUE SE LE BRINDA AL AJ POR PARTE DE MITIGACIÓN.',
            'nombre' => 'ACOMPAÑAMIENTO A MITIGACION (AM)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '19',
            ),
            19 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:18',
                'created_at' => '2021-04-27 12:01:18',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'descripcion' => 'SE CREA ESTE PARÁMETRO CON EL OBJETIVO DE IDENTIFICAR LA NECESIDAD DE REALIZAR UNA CONSULTA SOCIAL EN DOMICILIO POR PARTE DE LOS PROFESIONALES PSICOSOCIALES DE LAS UNIDADES DE EXTERNADO. APLICA PARA LOS/LAS JÓVENES QUE, SEGÚN LA ATENCIÓN O INTERVENCIÓN REALIZADA POR EL/LA PROFESIONAL LA REQUIERA TENIENDO EN CUENTA LAS SITUACIONES DE RIESGO.',
            'nombre' => 'IDENTIFICACIÓN CONSULTA SOCIAL EN DOMICILIO (ICSD)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '20',
            ),
            20 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-04 23:16:13',
                'created_at' => '2021-05-04 23:16:13',
                'sis_esta_id' => '1',
                'user_edita_id' => '861',
                'user_crea_id' => '861',
                'descripcion' => 'SE REGISTRA LA ATENCIÓN DE NIÑOS Y NIÑAS DE 6 A 8 AÑOS, CON EL CUAL SE INFORMA QUE LA ATENCIÓN BRINDADA SE BRINDA DE ACUERDO  A LA LEY 1098 DE INFANCIA Y ADOLESCENCIA PARA LA ATENCIÓN INMEDIATA PORQUE TIENEN VULNERADOS LOS DERECHOS DE LOS NIÑOS Y NIÑAS DE 6 A 8 AÑOS.',
            'nombre' => 'ATENCION A MENORES DE 6 A 8 AÑOS (AM68)',
                'estusuario_id' => '46',
                'area_id' => '8',
                'id' => '21',
            ),
            21 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-04 23:20:38',
                'created_at' => '2021-05-04 23:20:38',
                'sis_esta_id' => '1',
                'user_edita_id' => '861',
                'user_crea_id' => '861',
                'descripcion' => 'NO APLICA',
                'nombre' => 'SEGUIMIENTO',
                'estusuario_id' => '46',
                'area_id' => '8',
                'id' => '22',
            ),
            22 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-04 23:28:34',
                'created_at' => '2021-05-04 23:28:34',
                'sis_esta_id' => '1',
                'user_edita_id' => '861',
                'user_crea_id' => '861',
                'descripcion' => 'SE CREA CRITERIO DE REGISTRO DONDE LOS PROFESIONALES EN PSICOLOGÍA Y TRABAJO SOCIAL, REALIZA CONCEPTO PSICOSOCIAL PARA LA COMISIÓN Y EVALUACIÓN DEL NNAJ VINCULADO AL MODELO PEDAGÓGICO DEL INSTITUTO.',
            'nombre' => 'CONCEPTO COMISION EVALUACION  Y PROMOCION (TAEP)',
                'estusuario_id' => '46',
                'area_id' => '8',
                'id' => '23',
            ),
            23 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-04 23:30:52',
                'created_at' => '2021-05-04 23:30:52',
                'sis_esta_id' => '1',
                'user_edita_id' => '861',
                'user_crea_id' => '861',
                'descripcion' => 'SE CREA EL CRITERIO, CON EL FIN DE REGISTRAR LA REALIZACIÓN DE MODIFICACIÓN DE INFORMACIÓN Y/O ACTUALIZACIÓN DE DATOS BÁSICOS Y GENERALES DE LA FICHA DE INGRESO.',
            'nombre' => 'ACTUALIZACION  FICHA DE INGRESO (AFI)',
                'estusuario_id' => '46',
                'area_id' => '8',
                'id' => '24',
            ),
            24 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-04 23:33:46',
                'created_at' => '2021-05-04 23:33:46',
                'sis_esta_id' => '1',
                'user_edita_id' => '861',
                'user_crea_id' => '861',
                'descripcion' => 'SE REGISTRAN ACCIONES QUE CONLLEVEN A LA RESOLUCIÓN DE LOS CONFLICTOS QUE SE PRESENTEN DENTRO DE LAS DINAMICAS DE LAS UNIDADES.',
            'nombre' => 'INTERVENCIÓN Y SEGUIMIENTO PACTO CONVIVENCIA (IPC)',
                'estusuario_id' => '46',
                'area_id' => '8',
                'id' => '25',
            ),
            25 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-04 23:36:24',
                'created_at' => '2021-05-04 23:36:24',
                'sis_esta_id' => '1',
                'user_edita_id' => '861',
                'user_crea_id' => '861',
                'descripcion' => 'LAS TIC, TECNOLOGÍAS DE LA INFORMACIÓN Y LA COMUNICACIÓN, SON UNA HERRAMIENTA QUE CONECTA A EDUCADORES Y ESTUDIANTES PARA REALIZAR ACCIONES PEDAGÓGICAS A TRAVÉS DE TODOS LOS MEDIOS DE COMUNICACIÓN EN LÍNEA O VIRTUALES, EXCEPTO LAS LLAMADAS TELEFÓNICAS SEA VÍA CELULAR O TELÉFONO FIJO.',
            'nombre' => 'TECNOLOGIAS DE INFORMACION Y COMUNICACIÓN (TIC)',
                'estusuario_id' => '46',
                'area_id' => '8',
                'id' => '26',
            ),
            26 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-04 23:51:24',
                'created_at' => '2021-05-04 23:51:24',
                'sis_esta_id' => '1',
                'user_edita_id' => '861',
                'user_crea_id' => '861',
                'descripcion' => 'REGISTRO DE LA INFORMACIÓN DE POSTULACIÓN DE JÓVENES A CONVENIOS, EN ESTA ACCIÓN SE INCLUYE LA EJECUCIÓN DE COMITÉ MISIONAL DE UPI DONDE SE POSTULA A LOS JÓVENES A LA MODALIDAD DE ESTIMULO DE CORRESPONSABILIDAD, SE REMITEN EL LISTADO DE  JÓVENES  QUE CUMPLEN CON LOS REQUISITOS PARA INICIAR PROCESO  AL ÁREA DE CONVENIOS.',
            'nombre' => 'POSTULACION DE JOVENES A CONVENIO (PJC)',
                'estusuario_id' => '46',
                'area_id' => '6',
                'id' => '27',
            ),
        ));
        
        
    }
}