<?php


use Illuminate\Database\Seeder;

class CustomizedMensajesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mensajes')->delete();
        
        \DB::table('mensajes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titulo' => 'ACUERDO CONFIDENCIALIDAD',
            'descripcion' => 'LA INFORMACIÓN QUE SE GENERE FRENTE A LOS NNAJ, ES CONFIDENCIAL Y/O PRIVILEGIADA Y SOLO PUEDE SER UTILIZADA POR LA(S) PERSONA(S) A LAS CUAL(ES) ESTÁ DIRIGIDA. SEGÚN EL ARTÍCULO 7 DE LA LEY 1581 DE 2012 Y EL ARTÍCULO 2.2.2.25.2.9 DEL DECRETO 1074 DE 2015. SEGÚN EL MANUAL A-TIC-MA-002 NUMERAL 4.5. TRATAMIENTO DE DATOS SENSIBLES VIGENTE DESDE EL 16 DE MAYO DE 2017.',
                'user_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'estusuario_id' => NULL,
                'created_at' => '2021-05-28 10:40:55',
                'updated_at' => '2021-05-28 10:40:55',
            ),
            1 => 
            array (
                'id' => 2,
                'titulo' => 'LEMA',
                'descripcion' => 'LO QUE NO ESTA EN EL SISTEMA, NO EXISTE. NO PRESTAR LA CLAVE NI USUARIO A OTRAS PERSONAS. VER EN EL SIGID: POLÍTICA DE SEGURIDAD Y CONTROLES BÁSICOS Y ESPECÍFICOS PARA EL MANEJO DE LA INFORMACIÓN.',
                'user_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'estusuario_id' => NULL,
                'created_at' => '2021-05-28 10:40:55',
                'updated_at' => '2021-05-28 10:40:55',
            ),
            2 => 
            array (
                'id' => 3,
                'titulo' => 'TIEMPO CARGUE SIMI',
                'descripcion' => 'NO OLVIDAR: QUE CADA PROFESIONAL TIENE 30 DÍAS HABILES PARA CARGAR LA INFORMACIÓN, EXCEPTO EL REGISTRO DE ASISTENCIAS QUE DEBE SER A DIARIO.',
                'user_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'estusuario_id' => NULL,
                'created_at' => '2021-05-28 10:40:55',
                'updated_at' => '2021-05-28 10:40:55',
            ),
            3 => 
            array (
                'id' => 4,
                'titulo' => 'CORREO SOPORTE SIMI',
            'descripcion' => 'EL CORREO DE: SOPORTESIMI@IDIPRON.GOV.CO, ES PARA ATENDER CASOS REFERENTE A TEMAS DE: USUARIOS (CREACIÓN Y ACTUALIZACIÓN DE INFORMACIÓN), GENERACIÓN DE CONSECUTIVOS, REPORTES, SOLICITAR AGENDAMIENTO PARA CAPACITACIONES, INACTIVAR O ELIMINAR ACCIONES O PLANILLAS SE ASISTENCIA, ETC.',
                'user_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'estusuario_id' => NULL,
                'created_at' => '2021-05-28 10:40:55',
                'updated_at' => '2021-05-28 10:40:55',
            ),
            4 => 
            array (
                'id' => 5,
                'titulo' => 'CORREO SOPORTE TECNICO NUEVO SISTEMA',
                'descripcion' => 'EL CORREO DE: SOPORTETECNICO.NUEVOSIMI@IDIPRON.GOV.CO, TIENE COMO FIN DAR SOLUCION A  INQUIETUDES, PREGUNTAS Y ERRORES EN FORMULARIOS QUE SE TENGAN DEL NUEVO SIMI, POR PARTE DE LOS PROEFESIONALES QUE INICIARAN CON PRUEBAS Y CARGUE DE INFORMACIÓN REAL EN EL NUEVO APLICATIVO.',
                'user_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'estusuario_id' => NULL,
                'created_at' => '2021-05-28 10:40:55',
                'updated_at' => '2021-05-28 10:40:55',
            ),
            5 => 
            array (
                'id' => 6,
                'titulo' => 'aaaa',
                'descripcion' => 'asgasgasgasgasgasgasgasgas',
                'user_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'estusuario_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}