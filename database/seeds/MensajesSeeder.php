<?php


use App\Models\Mensajes;
use Illuminate\Database\Seeder;

class MensajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Mensajes::create(['titulo'=>'ACUERDO CONFIDENCIALIDAD','descripcion'=>'LA INFORMACIÓN QUE SE GENERE FRENTE A LOS NNAJ, ES CONFIDENCIAL Y/O PRIVILEGIADA Y SOLO PUEDE SER UTILIZADA POR LA(S) PERSONA(S) A LAS CUAL(ES) ESTÁ DIRIGIDA. SEGÚN EL ARTÍCULO 7 DE LA LEY 1581 DE 2012 Y EL ARTÍCULO 2.2.2.25.2.9 DEL DECRETO 1074 DE 2015. SEGÚN EL MANUAL A-TIC-MA-002 NUMERAL 4.5. TRATAMIENTO DE DATOS SENSIBLES VIGENTE DESDE EL 16 DE MAYO DE 2017.','user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
        Mensajes::create(['titulo'=>'LEMA','descripcion'=>'LO QUE NO ESTA EN EL SISTEMA, NO EXISTE. NO PRESTAR LA CLAVE NI USUARIO A OTRAS PERSONAS. VER EN EL SIGID: POLÍTICA DE SEGURIDAD Y CONTROLES BÁSICOS Y ESPECÍFICOS PARA EL MANEJO DE LA INFORMACIÓN.','user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
        Mensajes::create(['titulo'=>'TIEMPO CARGUE SIMI','descripcion'=>'NO OLVIDAR: QUE CADA PROFESIONAL TIENE 30 DÍAS HABILES PARA CARGAR LA INFORMACIÓN, EXCEPTO EL REGISTRO DE ASISTENCIAS QUE DEBE SER A DIARIO.','user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
        Mensajes::create(['titulo'=>'CORREO SOPORTE SIMI','descripcion'=>'EL CORREO DE: SOPORTESIMI@IDIPRON.GOV.CO, ES PARA ATENDER CASOS REFERENTE A TEMAS DE: USUARIOS (CREACIÓN Y ACTUALIZACIÓN DE INFORMACIÓN), GENERACIÓN DE CONSECUTIVOS, REPORTES, SOLICITAR AGENDAMIENTO PARA CAPACITACIONES, INACTIVAR O ELIMINAR ACCIONES O PLANILLAS SE ASISTENCIA, ETC.','user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
        Mensajes::create(['titulo'=>'CORREO SOPORTE TECNICO NUEVO SISTEMA','descripcion'=>'EL CORREO DE: SOPORTETECNICO.NUEVOSIMI@IDIPRON.GOV.CO, TIENE COMO FIN DAR SOLUCION A  INQUIETUDES, PREGUNTAS Y ERRORES EN FORMULARIOS QUE SE TENGAN DEL NUEVO SIMI, POR PARTE DE LOS PROEFESIONALES QUE INICIARAN CON PRUEBAS Y CARGUE DE INFORMACIÓN REAL EN EL NUEVO APLICATIVO.','user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);

      
    }
}
