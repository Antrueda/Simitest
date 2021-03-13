<?php

use App\Models\Acciones\Grupales\AgTema;
use Illuminate\Database\Seeder;

class AgTemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgTema::create(['s_tema'=>'TALLERES CON NNAJ /AUTOESQUEMAS','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARÁMETRO CON EL OBJETIVO DE DELIMITAR LA INFORMACIÓN CORRESPONDIENTE A LAS ACTIVIDADES GRUPALES REALIZADAS FRENTE A LAS CARACTERISTICAS DE LOS AUTOESQUEMAS.']);
        AgTema::create(['s_tema'=>'HABILIDADES SOCIALES','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO CON EL OBJETIVO DE DELIMITAR LA INFORMACIÓN DE ACTIVIDADES GRUPALES CORRESPONDIENTES AL ABORDAJE PSICOSOCIAL EN HABILIDADES SOCIALES.']);
        AgTema::create(['s_tema'=>'DERECHOS, DEBERES Y CIUDADANIA','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO CON EL OBJETIVO DE ESTABLECER LINEAS CLARAS FRENTE AL ABORDAJE EN DERECHOS Y DEBERES Y LA DIFERENCIA DE UN ABORDAJE DESDE LO PSICOSOCIAL.']);
        AgTema::create(['s_tema'=>'DIVERSIDAD SEXUAL Y GÉNERO','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE A TEMAS DE DIVERSIDAD DE GÉNERO Y SEXUALIDAD.']);
        AgTema::create(['s_tema'=>'PREVENCIÓN Y MANEJO DE CONSUMO DE SPA','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE A TEMAS DE SUSTANCIAS PSICOACTIVAS, PREVENCIÓN Y ATENCIÓN.']);
        AgTema::create(['s_tema'=>'PREPARACIÓN PARA LA VIDA LABORAL','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>2, 's_descripcion'=>'HACE REFERENCIA A LAS ACCIONES QUE SE REALIZAN PARA QUE EL NNAJ GENERE HABILIDADES QUE LE PERMITAN UNA INCLUSION EN EL MERCADO LABORAL. SE CREA COMO TALLER CON TEMATICAS RELACIONADAS A: - PROCESOS DE SELECCIÓN (ELABORACIÓN HOJA DE VIDA, PREPARACIÓN DE ENTREVISTAS DE TRABAJO). - LIDERAZGO. - COMUNICACIÓN. - Y AQUELLOS QUE SEAN PERTINENTES PARA TAL FIN.']);
        AgTema::create(['s_tema'=>'HABILIDADES PARA LA VIDA','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE A LA PREPARACIÓN DE LOS/LAS JOVENES PARA EGRESOS SATISFACTORIOS.']);
        AgTema::create(['s_tema'=>'FAMILIA Y/O REDES DE APOYO','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE AL ABORDAJE CON REDES DE APOYO Y FAMILIA.']);
        AgTema::create(['s_tema'=>'SALUD MENTAL','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE AL ABORDAJE EN SALUD MENTAL']);
        AgTema::create(['s_tema'=>'ESCNNA','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE AL ABORDAJE EN LA ESCNNA (PREVENCIÓN Y SENSIBILIZACIÓN).']);
        AgTema::create(['s_tema'=>'COMPETENCIAS TRANSVERSALES','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE AL ABORDAJE EN LA ESCNNA (PREVENCIÓN Y SENSIBILIZACIÓN).']);
        AgTema::create(['s_tema'=>'VARIOS','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'ESTE PARAMETRO SE ACTIVA PARA ABORDAJES DESDE DIFERENTES ESCENARIOS.']);
        AgTema::create(['s_tema'=>'ACTIVIDADES DESDE SICOSOCIAL','area_id'=>6,'user_crea_id'=>2,'user_edita_id'=>2,'sis_esta_id'=>1, 's_descripcion'=>'ACTIVIDADES QUE SE REALIZAN DE MANERA GRUPLA YA SEA CON LOS NNAJ O CON FAMILIAS.']);
    }
}
