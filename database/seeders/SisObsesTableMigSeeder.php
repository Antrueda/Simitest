<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SisObsesTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sis_obses')->delete();
        
        \DB::table('sis_obses')->insert(array (
            0 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'CREAR REGISTRO',
                'id' => '1',
            ),
            1 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'ACCIONES REALIZADAS EQUIPO PSICOSOCIAL OTRAS UPIS DIFERENTE A LA UPI DE ORIGEN',
                'id' => '2',
            ),
            2 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'CAMBIO DE UPI A LOS PROFESIONALES Y/O SE RESTAURA LA CLAVE',
                'id' => '3',
            ),
            3 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'ADICIÓN CONTRATO Y SE RESTAURA LA CLAVE',
                'id' => '4',
            ),
            4 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'CREACION USUARIO NUEVO,PERMISOS SEGUN CARGO PROFESIONAL Y SE RESTAURA CLAVE',
                'id' => '5',
            ),
            5 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'CREACION Y PERMISO PRACTICANTE-APOYOEQUIPO PSICOSOCIAL-FICHA DE INGRESO',
                'id' => '6',
            ),
            6 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'PERMISO A REGISTRAR ACCIONES DIFERENTES A SU CARGO-APROBADO POR LIDER Y/O RESPONSABLE DE UPI/AREA',
                'id' => '7',
            ),
            7 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'DAR PERMISO DE VARIAS UPIS-SOLICITUD RESPONSABLE UPI/ AREA/DEPENDENCIA',
                'id' => '8',
            ),
            8 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'PERMISO CARGUE DE INFORMACION SIMI POR PARTE DE SUBMETODOS',
                'id' => '9',
            ),
            9 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'RESTAURACION CLAVE',
                'id' => '10',
            ),
            10 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'SE DA PERMISO A OTRA UPI, DIFERENTE A LA DE ORIGEN PARA SUBIR REGISTRO DE ATENCIONES REALIZADAS Y/O JORNADA INGRESO',
                'id' => '11',
            ),
            11 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'SE DA PERMISO UNA SEMANA MAS TERMINADO EL CONTRATO PARA QUEDAR A PAZ Y SALVO-SIMI',
                'id' => '12',
            ),
            12 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'SE MODIFICA INFORMACIÓN AL USUARIO Y/O SE RESTAURA CLAVE',
                'id' => '13',
            ),
            13 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'VERIFICACION DE INFORMACION-FORMATO 015 GESTION DE USUARIOS',
                'id' => '14',
            ),
            14 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'Q.E.D.P.',
                'id' => '15',
            ),
            15 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'ENCARGO VACACIONES',
                'id' => '16',
            ),
            16 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'FINALIZACION VINCULACION CON EL IDIPRON',
                'id' => '17',
            ),
            17 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'TERMINACIÓN DE CONTRATO',
                'id' => '18',
            ),
            18 => 
            array (
                'deleted_at' => NULL,
                'updated_at' => '2021-04-27 12:01:19',
                'created_at' => '2021-04-27 12:01:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '1',
                'user_crea_id' => '1',
                's_observ' => 'SESIÓN DE CONTRATO',
                'id' => '19',
            ),
        ));
        
        
    }
}