<?php



use Illuminate\Database\Seeder;

class AgSubtemasTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ag_subtemas')->delete();
        
        \DB::table('ag_subtemas')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-11 19:54:48',
                'created_at' => '2021-05-11 19:54:48',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => '26',
                's_descripcion' => '1234',
                's_subtema' => 'TEST',
                'ag_taller_id' => '3',
                'id' => '16',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'NO APLICA',
                's_subtema' => 'NO APLICA',
                'ag_taller_id' => NULL,
                'id' => '1',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'SE CREA CRITERIO DE CARGUE DE ACTIVIDAD EDUCATIVA EN EL CUAL SE BUSCA GENERAR UN ESPACIO DE SENSIBILIZACIÓN FRENTE AL SENTIDO DE SUPERAR LAS BARRERAS QUE IMPIDEN A LAS PERSONAS PERTENECIENTES A LA COMUNIDAD LGBTI EL PLENO DISFRUTE DE SUS DERECHOS, CONTRIBUIR A LA CONSTRUCCIÓN DE ESPACIOS SEGUROS, DIGNOS Y LIBRES DE VIOLENCIA, REQUIERE DE EJERCICIOS DE REFLEXIÓN POR PARTE DE LA SOCIEDAD EN SU CONJUNTO SOBRE LAS DINÁMICAS QUE PROPICIAN LA VULNERACIÓN DE LOS MISMOS, ASÍ COMO DEL CONOCIMIENTO DE LOS MECANISMOS PARA SU PROTECCIÓN. AL IGUAL QUE DAR A CONOCER A LOS NNAJ LOS PRINCIPALES AVANCES EN MATERIA JURÍDICA SOBRE LOS DERECHOS DE LAS PERSONAS LGBTI A NIVEL INTERNACIONAL, ASÍ COMO LOS DESAFÍOS QUE PERSISTEN PARA SU RECONOCIMIENTO, RESPETO, PROTECCIÓN Y GARANTÍA.',
                's_subtema' => 'SEXUAL',
                'ag_taller_id' => '20',
                'id' => '2',
            ),
            3 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'SE CREA CRITERIO DE CARGUE DE ACTIVIDAD EDUCATIVA EN EL CUAL SE BUSCA GENERAR UN ESPACIO DE SENSIBILIZACIÓN FRENTE AL SENTIDO DE SUPERAR LAS BARRERAS QUE IMPIDEN A LAS PERSONAS PERTENECIENTES A LA COMUNIDAD LGBTI EL PLENO DISFRUTE DE SUS DERECHOS, CONTRIBUIR A LA CONSTRUCCIÓN DE ESPACIOS SEGUROS, DIGNOS Y LIBRES DE VIOLENCIA, REQUIERE DE EJERCICIOS DE REFLEXIÓN POR PARTE DE LA SOCIEDAD EN SU CONJUNTO SOBRE LAS DINÁMICAS QUE PROPICIAN LA VULNERACIÓN DE LOS MISMOS.',
                's_subtema' => 'DE GENERO',
                'ag_taller_id' => '20',
                'id' => '3',
            ),
            4 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
            's_descripcion' => 'SE CREA ESTE CRITERIO DE CARGUE PARA PODER EVIDENCIAR LAS FAMILIAS ( PADRES, MADRES Y/O REPRESENTANTES LEGALES DE LOS NNAJ) QUE PARTICIPARAN EN ESPACIOS FORMATIVOS QUE ORIENTEN Y PROMUEVAN LA ECONOMIA DEL CUIDADO EN CASA.',
                's_subtema' => 'DEL CUIDADO',
                'ag_taller_id' => '38',
                'id' => '4',
            ),
            5 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
            's_descripcion' => 'SE CREA ESTE CRITERIO DE CARGUE DE ACTIVIDAD EDUCATIVA, FRENTE A ECONOMIA FAMILIAR (GASTOS FAMILIARES), SE PROMUEVE UN BALANCE ECONOMICO Y PROYECCIÓN DEL AHORRO.',
                's_subtema' => 'PERSONAL Y FAMILIAR',
                'ag_taller_id' => '38',
                'id' => '5',
            ),
            6 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
            's_descripcion' => 'SE CREA ESTE CRITERIO DE CARGUE DE ACTIVIDAD EDUCATIVA, CON NNAJ EN EL CUAL SE PROMUEVEN ACCIONES PREVENTIVAS QUE PERMITAN DETECTAR, RECONOCER, ATENDER Y ELIMINAR EL (BULLYING) ACOSO ESCOLAR CON EL FIN DE EVITAR LA VIOLENCIA COMO FORMA DE INTERACCIÓN CON OTROS.',
                's_subtema' => 'BULLYING',
                'ag_taller_id' => '53',
                'id' => '6',
            ),
            7 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'SE CREA ESTE CRITERIO DE CARGUE CON EL FIN DE REGISTRAR ACTIVIDAD EDUCATIVA EN PREVENCIÓN DE VIOLENCIAS FÍSICA, PSICOLÓGICA, PATRIMONIAL, ECONÓMICA Y SEXUAL, HACIENDO ENFASIS EN LAS IMPLICACIONES DE FRAGMENTACIÓN DE LAZOS CULTURALES Y FAMILIARES.',
                's_subtema' => 'VIOLENCIAS',
                'ag_taller_id' => '53',
                'id' => '7',
            ),
            8 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'SE CREA ESTE CRITERIO DE CARGUE PARA PODER EVIDENCIAR LOS NNAJ QUE PARTICIPARAN EN ESPACIOS FORMATIVOS QUE ORIENTEN Y PROMUEVAN LA PREVENCION DE CUALQUIER TIPO DE VIOLENCIA SEXUAL Y EN LAS REDES SOCIALES.',
                's_subtema' => 'VIOLENCIA SEXUAL Y VIOLENCIA EN REDES SOCIALES',
                'ag_taller_id' => '63',
                'id' => '8',
            ),
            9 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'SE CREA CRITERIO DE CARGUE DE ACTIVIDAD EDUCATIVA, DONDE SE SOCIALICEN FACTORES DE RIESGO QUE PUEDEN ESTAR ASOCIADOS O DESENCADENEN ESTE TIPO DE PROBLEMÁTICA CON EL FIN QUE SE DESARROLLEN ESTRATEGIAS PARA QUE LAS NNAJ CONOZCAN Y SE SENSIBLICEN FRENTE A ESTE DELITO CON EL OBJETIVO DE DESVIRTUAR LA IDEA ASOCIADA A QUE ESTA ES UN TRABAJO O FUENTE DE INGRESO.',
                's_subtema' => 'EXPLOTACIÓN SEXUAL',
                'ag_taller_id' => '63',
                'id' => '9',
            ),
            10 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'SENSIBILIZACIÓN FRENTE A LA ESCNNA, SUS COMPONENTES Y CRITERIOS PARA PREVENIR LA EXPLOTACIÓN SEXUAL.',
                's_subtema' => 'ESCNNA',
                'ag_taller_id' => NULL,
                'id' => '10',
            ),
            11 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'HACE REFERENCIA A LAS ACCIONES QUE SE REALIZAN PARA PREVER QUE SE PRESENTEN SITUACIONES DE ABUSO SEXUAL Y EN CASO DE PRESENTARSE QUE LAS FAMILIAS TENGAN LAS HERRAMIENTAS PARA RECONOCER Y AFRONTAR LA SITUACIÓN.',
                's_subtema' => 'MANEJO DEL ABUSO SEXUAL',
                'ag_taller_id' => '63',
                'id' => '11',
            ),
            12 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'ESTE PARAMETRO SE CREA PARA LAS ACTIVIDADES DIRIGIDAS A LOS NNAJ RELACIONADAS CON EL CUMPLIMIENTO DEL PLAN DE ACCIÓN DEL ÁREA SICOSOCIAL.',
                's_subtema' => 'NNAJ Y/O FAMILIAS / PLAN DE ACCIÓN',
                'ag_taller_id' => '72',
                'id' => '12',
            ),
            13 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'ESTE PARAMETRO SE CREA PARA LAS ACTIVIDADES DIRIGIDAS A LOS NNAJ RELACIONADAS CON EL FESTIVAL DE LA FAMILIA EL CUAL HACE PARTE DEL ÁREA SICOSOCIAL.',
                's_subtema' => 'FAMILIAS /CELEBRACIÓN DÍA DE LA FAMILIA',
                'ag_taller_id' => '72',
                'id' => '13',
            ),
            14 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'ESTE PARAMETRO SE CREA CON EL OBJETIVO DE CLASIFICAR LAS ACTIVIDADES GRUPALES REALIZADAS POR LOS EQUIPOS PSICOSOCIALES A LOS NNAJ Y QUE SE ENCUENTRAN ENMARCADAS EN GRUPOS FOCALES O TALLERES PSICOEDUCATIVOS.',
                's_subtema' => 'NNAJ',
                'ag_taller_id' => '73',
                'id' => '14',
            ),
            15 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
                's_descripcion' => 'ESTE PARAMETRO SE CREA CON EL OBJETIVO DE CLASIFICAR LAS ACTIVIDADES GRUPALES REALIZADAS POR LOS EQUIPOS PSICOSOCIALES A LAS FAMILIAS Y/O REDES DE APOYO, LAS CUALES SE ENCUENTRAN ENMARCADAS EN GRUPOS FOCALES O TALLERES PSICOEDUCATIVOS',
                's_subtema' => 'FAMILIAS',
                'ag_taller_id' => '73',
                'id' => '15',
            ),
            16 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-13 17:16:17',
                'created_at' => '2021-05-13 17:16:17',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                'estusuario_id' => '26',
                's_descripcion' => 'TEST',
                's_subtema' => 'TEST2',
                'ag_taller_id' => '5',
                'id' => '17',
            ),
        ));
        
        
    }
}