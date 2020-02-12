<?php

use App\Models\Acciones\Grupales\AgTaller;
use Illuminate\Database\Seeder;

class AgTallersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgTaller::create(['s_taller'=>'ASERTIVIDAD',
        's_descripcion'=>'SE CREA CRITERIO DE REGISTRO DEL TALLER EDUCATIVO REFERENTE A LA SERTIVIDAD, DONDE SE PROMUEVE LA  
        ASERTIVADAD  A TRAVES DE LA COMUNICACIÓN INTERPERSONAL DE SENTIMIENTOS, OPINIONES Y PENSAMIENTOS, ENTRE EL NNAJ Y LAS 
        OTRAS PERSONAS, MEDIANTE COMUNICACIÓN VERBAL, NO VERBAL Y PARAVERBAL, DE FORMA CLARA Y OPORTUNA.',
        'ag_tema_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
        AgTaller::create(['s_taller'=>'AUTOCONTROL',
        's_descripcion'=>'SE CREAR CRITERIO DE CARGUE PARA PODER EVIDENCIAR LA EJECUCIÓN DE TALLER EDUCATIVO CON LOS NNAJ, FRENTE AL 
        AUTOCONTROL EMOCIONAL CON EL FIN PROMOVER HABILIDADES DE REGULACIÓN DE SENTIMIENTO O EMOCIONES, BRINDANDO HERRAMIENTAS PARA 
        EL AFRONTAMIENTO ASERTIVO DE DIFERENTES SITUACIONES DE SU COTIDIANIDAD, FACILITANDO UN MAYOR GRADO DE CONTROL EMOCIONAL.',
        'ag_tema_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
        AgTaller::create(['s_taller'=>'ECONOMÍA',
        's_descripcion'=>'SE CREAR ESTE CRITERIO DE CARGUE PARA PODER EVIDENCIAR LAS FAMILIAS ( PADRES, MADRES Y/O REPRESENTANTES 
        LEGALES DE LOS NNAJ) QUE PARTICIPARAN EN  ESPACIOS FORMATIVOS QUE ORIENTEN Y PROMUEVAN LA ECONOMICA DEL CUIDADO EN CASA.',
        'ag_tema_id'=>2,'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
        AgTaller::create(['s_taller'=>'CENTROS DE INTERES',
        's_descripcion'=>'NOMBRE TALLER:TEMAS PROPIOS DE LA CONVIVENCIA DE VIVIENDA',
        'ag_tema_id'=>3,'user_crea_id'=>1,'user_edita_id'=>1,'sis_esta_id'=>1]);
    }
}
