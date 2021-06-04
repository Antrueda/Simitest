<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class AgTemasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ag_temas')->delete();
        
        \DB::table('ag_temas')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-11 19:49:10',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '2',
                'estusuario_id' => '44',
                's_descripcion' => 'SE CREA EL PARÁMETRO CON EL OBJETIVO DE DELIMITAR LA INFORMACIÓN CORRESPONDIENTE A LAS ACTIVIDADES GRUPALES REALIZADAS FRENTE A LAS CARACTERISTICAS DE LOS AUTOESQUEMAS.',
                'area_id' => '6',
                's_tema' => 'TALLERES CON NNAJ /AUTOESQUEMAS',
                'id' => '1',
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
                's_descripcion' => 'SE CREA EL PARAMETRO CON EL OBJETIVO DE DELIMITAR LA INFORMACIÓN DE ACTIVIDADES GRUPALES CORRESPONDIENTES AL ABORDAJE PSICOSOCIAL EN HABILIDADES SOCIALES.',
                'area_id' => '6',
                's_tema' => 'HABILIDADES SOCIALES',
                'id' => '2',
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
                's_descripcion' => 'SE CREA EL PARAMETRO CON EL OBJETIVO DE ESTABLECER LINEAS CLARAS FRENTE AL ABORDAJE EN DERECHOS Y DEBERES Y LA DIFERENCIA DE UN ABORDAJE DESDE LO PSICOSOCIAL.',
                'area_id' => '6',
                's_tema' => 'DERECHOS, DEBERES Y CIUDADANIA',
                'id' => '3',
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
                's_descripcion' => 'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE A TEMAS DE DIVERSIDAD DE GÉNERO Y SEXUALIDAD.',
                'area_id' => '6',
                's_tema' => 'DIVERSIDAD SEXUAL Y GÉNERO',
                'id' => '4',
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
                's_descripcion' => 'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE A TEMAS DE SUSTANCIAS PSICOACTIVAS, PREVENCIÓN Y ATENCIÓN.',
                'area_id' => '6',
                's_tema' => 'PREVENCIÓN Y MANEJO DE CONSUMO DE SPA',
                'id' => '5',
            ),
            5 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '2',
                'user_edita_id' => '2',
                'user_crea_id' => '2',
                'estusuario_id' => NULL,
            's_descripcion' => 'HACE REFERENCIA A LAS ACCIONES QUE SE REALIZAN PARA QUE EL NNAJ GENERE HABILIDADES QUE LE PERMITAN UNA INCLUSION EN EL MERCADO LABORAL. SE CREA COMO TALLER CON TEMATICAS RELACIONADAS A: - PROCESOS DE SELECCIÓN (ELABORACIÓN HOJA DE VIDA, PREPARACIÓN DE ENTREVISTAS DE TRABAJO). - LIDERAZGO. - COMUNICACIÓN. - Y AQUELLOS QUE SEAN PERTINENTES PARA TAL FIN.',
                'area_id' => '6',
                's_tema' => 'PREPARACIÓN PARA LA VIDA LABORAL',
                'id' => '6',
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
                's_descripcion' => 'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE A LA PREPARACIÓN DE LOS/LAS JOVENES PARA EGRESOS SATISFACTORIOS.',
                'area_id' => '6',
                's_tema' => 'HABILIDADES PARA LA VIDA',
                'id' => '7',
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
                's_descripcion' => 'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE AL ABORDAJE CON REDES DE APOYO Y FAMILIA.',
                'area_id' => '6',
                's_tema' => 'FAMILIA Y/O REDES DE APOYO',
                'id' => '8',
            ),
            8 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-05-05 00:29:14',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '861',
                'user_crea_id' => '2',
                'estusuario_id' => '38',
                's_descripcion' => 'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE AL ABORDAJE EN SALUD MENTAL',
                'area_id' => '6',
                's_tema' => 'SALUD MENTAL',
                'id' => '9',
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
            's_descripcion' => 'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE AL ABORDAJE EN LA ESCNNA (PREVENCIÓN Y SENSIBILIZACIÓN).',
                'area_id' => '6',
                's_tema' => 'ESCNNA',
                'id' => '10',
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
            's_descripcion' => 'SE CREA EL PARAMETRO PARA DELIMITAR LAS ACTIVIDADES GRUPALES DESDE LO PSICOSOCIAL FRENTE AL ABORDAJE EN LA ESCNNA (PREVENCIÓN Y SENSIBILIZACIÓN).',
                'area_id' => '6',
                's_tema' => 'COMPETENCIAS TRANSVERSALES',
                'id' => '11',
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
                's_descripcion' => 'ESTE PARAMETRO SE ACTIVA PARA ABORDAJES DESDE DIFERENTES ESCENARIOS.',
                'area_id' => '6',
                's_tema' => 'VARIOS',
                'id' => '12',
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
                's_descripcion' => 'ACTIVIDADES QUE SE REALIZAN DE MANERA GRUPLA YA SEA CON LOS NNAJ O CON FAMILIAS.',
                'area_id' => '6',
                's_tema' => 'ACTIVIDADES DESDE SICOSOCIAL',
                'id' => '13',
            ),
        ));
        
        
    }
}