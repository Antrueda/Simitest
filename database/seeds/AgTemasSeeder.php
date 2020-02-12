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
       AgTema::create(['s_tema'=>'TALLERES CON NNAJ','area_id'=>6,'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,
       's_descripcion'=>'SE CREA CRITERIO DE REGISTRO DEL TALLER EDUCATIVO REFERENTE A LA SERTIVIDAD, DONDE SE
        PROMUEVE LA  ASERTIVADAD  A TRAVES DE LA COMUNICACIÓN INTERPERSONAL DE SENTIMIENTOS, OPINIONES Y 
        PENSAMIENTOS, ENTRE EL NNAJ Y LAS OTRAS PERSONAS, MEDIANTE COMUNICACIÓN VERBAL, NO VERBAL Y PARAVERBAL, 
        DE FORMA CLARA Y OPORTUNA.']);
       AgTema::create(['s_tema'=>'TALLERES CON FAMILIAS','area_id'=>7,'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,
       's_descripcion'=>'SE CREA CRITERIO DE CARGUE DE ACTIVIDAD EDUCATIVA, CON EL FIN DE GENERAR UN ESPACIO DE ENCUENTRO CON EL 
       OBJETIVO DE RECORDAR Y RESALTAR A TODOS LOS MIEMBROS DE LA COMUNIDAD DEL IDIPRON, LA IMPORTANCIA QUE TIENE LA FAMILIA COMO 
       PILAR DE LA EDUCACIÓN DE LOS NNAJ, Y CÓMO EL TRABAJO EN EQUIPO ENTRE LOS HOGARES Y LA INSTITUCIÓN, ES DE VITAL IMPORTANCIA 
       PARA LOGRAR DARLES UNA EDUCACIÓN INTEGRAL, SÓLIDA Y A LA VEZ LLENA DE ALEGRÍA Y ARMONÍA A LOS CIUDADANOS DEL FUTURO.']);
       AgTema::create(['s_tema'=>'CENTROS DE INTERES','area_id'=>8,'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,
       's_descripcion'=>'NOMBRE TALLER Y TEMAS PROPIOS DE LA CONVIVENCIA DE VIVIENDA.']);
    //    AgTema::create(['s_tema'=>'','area_id'=>8,'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'s_descripcion'=>'']);
    //    AgTema::create(['s_tema'=>'','area_id'=>'','user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1,'s_descripcion'=>'']);


       






    }
}
