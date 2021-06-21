<?php



use Illuminate\Database\Seeder;

class FiRedApoyoActualsTableMigSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fi_red_apoyo_actuals')->delete();
        
        \DB::table('fi_red_apoyo_actuals')->insert(array (
            0 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3124017166',
                's_servicio' => 'ECONOMICO Y EMOCIONAL',
                's_nombre_persona' => 'NIDIA GUERRERO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2021-05-19 12:53:24',
                'created_at' => '2021-05-19 12:53:24',
                'sis_esta_id' => '1',
                'user_edita_id' => '2067',
                'user_crea_id' => '2067',
                'sis_nnaj_id' => '1421',
                'id' => '46',
            ),
            1 => 
            array (
                's_direccion' => 'AVENIDA CARRERA 68 # 64C-75 BOGOTÁ',
                's_telefono' => '0',
                's_servicio' => 'ACOMPAÑAMIENTO POR PARTE DE DEFENSOR',
            's_nombre_persona' => 'INSTITUTO COLOMBIANO DE BIENESTAR FAMILIAR (ICBF)',
                'i_prm_tipo_red_id' => '548',
                'updated_at' => '2021-05-23 08:18:59',
                'created_at' => '2021-05-23 08:18:59',
                'sis_esta_id' => '1',
                'user_edita_id' => '2090',
                'user_crea_id' => '2090',
                'sis_nnaj_id' => '1430',
                'id' => '47',
            ),
            2 => 
            array (
                's_direccion' => 'KM 2 VEREDA EL HATO, VÍA FUNZA - COTA , CUNDINAMARCA',
                's_telefono' => '3012190748',
                's_servicio' => 'INTERNADO',
                's_nombre_persona' => 'INSTITUTO DISTRITAL PARA LA PROTECCIÓN DE LA NIÑEZ Y LA JUVENTUD',
                'i_prm_tipo_red_id' => '548',
                'updated_at' => '2021-05-23 08:25:39',
                'created_at' => '2021-05-23 08:25:39',
                'sis_esta_id' => '1',
                'user_edita_id' => '2090',
                'user_crea_id' => '2090',
                'sis_nnaj_id' => '1430',
                'id' => '48',
            ),
            3 => 
            array (
                's_direccion' => 'CALLE 22 H #106-37',
                's_telefono' => '3144704056',
                's_servicio' => 'VIVIENDA',
                's_nombre_persona' => 'YANIRA DAVILA HIGUERA',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-07 15:57:27',
                'created_at' => '2020-10-07 15:57:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '395',
                'id' => '1',
            ),
            4 => 
            array (
                's_direccion' => 'TINTAL',
                's_telefono' => '3508988388',
                's_servicio' => 'IGLESIA',
                's_nombre_persona' => 'URIEL NOVOA',
                'i_prm_tipo_red_id' => '1805',
                'updated_at' => '2020-10-07 15:58:46',
                'created_at' => '2020-10-07 15:57:27',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '395',
                'id' => '2',
            ),
            5 => 
            array (
                's_direccion' => 'CARRERA 30 CON AMERICAS',
                's_telefono' => '3212940573',
                's_servicio' => 'ESPIRITUAL',
                's_nombre_persona' => 'MISION CARISMATICA G12',
                'i_prm_tipo_red_id' => '547',
                'updated_at' => '2020-10-07 15:59:59',
                'created_at' => '2020-10-07 15:59:59',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '395',
                'id' => '3',
            ),
            6 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3022214522',
                's_servicio' => 'APOYO EMOCIONAL',
                's_nombre_persona' => 'ADRIANA MARIA DAZA',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-09 12:24:54',
                'created_at' => '2020-10-09 12:24:54',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '403',
                'id' => '4',
            ),
            7 => 
            array (
                's_direccion' => 'CARRERA 18 N BIS #79-12 SUR',
                's_telefono' => '3202744960',
                's_servicio' => 'VIVIENDA, ALLIMENTACION',
                's_nombre_persona' => 'YORBIS MARICELA GONZALES MURILLO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-13 15:57:13',
                'created_at' => '2020-10-13 15:57:13',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '436',
                'id' => '5',
            ),
            8 => 
            array (
                's_direccion' => 'CARRERA 47 #73B-72 SUR',
                's_telefono' => '3142149769',
                's_servicio' => 'ALIMENTACION Y VIVIENDA',
                's_nombre_persona' => 'INES ELVIRA PORRAS',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-13 21:54:20',
                'created_at' => '2020-10-13 21:54:20',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '437',
                'id' => '6',
            ),
            9 => 
            array (
                's_direccion' => 'CRRA 18 Q N. 81 18 SUR',
                's_telefono' => '3142120785',
                's_servicio' => 'MORAL',
                's_nombre_persona' => 'SANDRA RODRIGUEZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-14 11:34:37',
                'created_at' => '2020-10-14 11:34:37',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '447',
                'id' => '7',
            ),
            10 => 
            array (
                's_direccion' => 'CLL 81 N. 18D-44 SUR',
                's_telefono' => '3224583533',
                's_servicio' => 'COMIDA Y CASA',
                's_nombre_persona' => 'NUBIA YANET BUITRAGO MUÑOZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-14 12:32:17',
                'created_at' => '2020-10-14 12:32:17',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '451',
                'id' => '8',
            ),
            11 => 
            array (
                's_direccion' => NULL,
                's_telefono' => NULL,
                's_servicio' => 'VIVIEMDA',
                's_nombre_persona' => 'RUBIELA RONCANCIO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-14 13:27:53',
                'created_at' => '2020-10-14 13:27:53',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '455',
                'id' => '9',
            ),
            12 => 
            array (
                's_direccion' => 'CLL 82B SUR 18 M 20',
                's_telefono' => '7652089',
                's_servicio' => 'VIVIENDA',
                's_nombre_persona' => 'RUBIELA RONCANCIO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-14 13:28:24',
                'created_at' => '2020-10-14 13:28:24',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '455',
                'id' => '10',
            ),
            13 => 
            array (
                's_direccion' => 'CLL 77 N. 18 L 62 SUR',
                's_telefono' => '3124569153',
                's_servicio' => 'VIVIENDA',
                's_nombre_persona' => 'EMILSE VARGAS GONZALEZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-14 15:28:15',
                'created_at' => '2020-10-14 15:28:15',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '460',
                'id' => '11',
            ),
            14 => 
            array (
                's_direccion' => 'CLL 81 N. 18D-44 SUR',
                's_telefono' => '3219997716',
                's_servicio' => 'VIVIENDA',
                's_nombre_persona' => 'OLGA LUCIA PARRA LEON',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-14 16:48:22',
                'created_at' => '2020-10-14 16:48:22',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '463',
                'id' => '12',
            ),
            15 => 
            array (
                's_direccion' => 'CRA 28 P N. 81 SUR 21',
                's_telefono' => '3209969955',
                's_servicio' => 'ALIMENTARIO',
                's_nombre_persona' => 'MARIA A RINCÓN',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-15 11:22:13',
                'created_at' => '2020-10-15 11:22:13',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '465',
                'id' => '13',
            ),
            16 => 
            array (
                's_direccion' => 'LUCERO',
                's_telefono' => '3142323403',
                's_servicio' => 'ALIMENTARIO',
                's_nombre_persona' => 'EDUARDO HERNANDEZ BOHORQUEZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-16 12:41:19',
                'created_at' => '2020-10-16 12:41:19',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '507',
                'id' => '14',
            ),
            17 => 
            array (
                's_direccion' => 'GIRARDOT',
                's_telefono' => '3203318507',
                's_servicio' => 'ALIMENTARIO',
                's_nombre_persona' => 'LEIDY J ZAROZO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-16 16:11:20',
                'created_at' => '2020-10-16 16:11:20',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '531',
                'id' => '15',
            ),
            18 => 
            array (
                's_direccion' => 'CRA 18 N BIS N. 79-12 SUR',
                's_telefono' => '32027444960',
                's_servicio' => 'COMIDA Y CASA',
                's_nombre_persona' => 'YORBIS MARISELA GONZALEZ MURILLO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-16 16:54:21',
                'created_at' => '2020-10-16 16:54:21',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '538',
                'id' => '16',
            ),
            19 => 
            array (
                's_direccion' => 'CALLE 82B #18M-20',
                's_telefono' => '7658029',
                's_servicio' => 'VIVIENDA',
                's_nombre_persona' => 'RUBIELA RONCANCIO CRUZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-21 11:16:31',
                'created_at' => '2020-10-21 11:16:31',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '586',
                'id' => '17',
            ),
            20 => 
            array (
                's_direccion' => '0',
                's_telefono' => '3209173928',
                's_servicio' => 'ALIMENTACION, VIVIENDA',
                's_nombre_persona' => 'ANDRES RICO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-23 15:47:33',
                'created_at' => '2020-10-23 15:47:33',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '642',
                'id' => '18',
            ),
            21 => 
            array (
                's_direccion' => 'CARRERA 18 B BIS #81-11 SUR',
                's_telefono' => '3229020342',
                's_servicio' => 'ALIMENTACION',
                's_nombre_persona' => 'MARIA ISABEL VARGAS LEON',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-28 10:57:52',
                'created_at' => '2020-10-28 10:57:52',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '670',
                'id' => '19',
            ),
            22 => 
            array (
                's_direccion' => 'CALLE 81F #18G-22 SUR',
                's_telefono' => '3212920137',
                's_servicio' => 'ALIMENTACION',
                's_nombre_persona' => 'BLANCA CECILIA MORENO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-28 14:24:12',
                'created_at' => '2020-10-28 14:24:12',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '692',
                'id' => '20',
            ),
            23 => 
            array (
                's_direccion' => 'CRA 14 I N. 136-21',
                's_telefono' => '3134023309',
                's_servicio' => 'APOYO EMOCIONAL',
                's_nombre_persona' => 'PATIÑO OROZCO LUZ MARINA',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-28 15:21:34',
                'created_at' => '2020-10-28 15:21:34',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '697',
                'id' => '21',
            ),
            24 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3173901155',
                's_servicio' => 'APOYO EMOCIONAL',
                's_nombre_persona' => 'EMILIO CORNEJO NUBIA ESTER',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-28 15:53:12',
                'created_at' => '2020-10-28 15:53:12',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '705',
                'id' => '22',
            ),
            25 => 
            array (
                's_direccion' => 'CARRERA 7 ESTE #90A-78 SUR',
                's_telefono' => '0',
                's_servicio' => 'ALIMENTACION',
                's_nombre_persona' => 'PINILLA LUIS ALFREDO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-29 11:07:23',
                'created_at' => '2020-10-29 11:07:23',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '712',
                'id' => '23',
            ),
            26 => 
            array (
                's_direccion' => '0',
                's_telefono' => '3132971210',
                's_servicio' => 'ALIMENTACION',
                's_nombre_persona' => 'ZUÑIGA MARIA INES',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-29 12:37:07',
                'created_at' => '2020-10-29 12:37:07',
                'sis_esta_id' => '1',
                'user_edita_id' => '8',
                'user_crea_id' => '8',
                'sis_nnaj_id' => '722',
                'id' => '24',
            ),
            27 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3012476310',
                's_servicio' => 'NUTRE',
                's_nombre_persona' => 'ANDERSON CONDE SANCHEZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-29 14:11:32',
                'created_at' => '2020-10-29 14:11:32',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '724',
                'id' => '25',
            ),
            28 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3194708139',
                's_servicio' => 'ECONOMICO, EMOCIONAL',
                's_nombre_persona' => 'GLORIA SARATE',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-10-29 16:57:11',
                'created_at' => '2020-10-29 16:57:11',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '727',
                'id' => '26',
            ),
            29 => 
            array (
                's_direccion' => 'CRA 18B # 18 - 15 SUR',
                's_telefono' => '3204729765',
                's_servicio' => 'VIVIENDA, ALIMENTACIÓN',
                's_nombre_persona' => 'NORMA SUAREZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-11-13 18:03:08',
                'created_at' => '2020-11-13 18:03:08',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '830',
                'id' => '27',
            ),
            30 => 
            array (
                's_direccion' => 'CLL 80A SUR # 18C - 03',
                's_telefono' => '3207884491',
                's_servicio' => 'ALIMENTACIÓN Y VIVIENDA',
                's_nombre_persona' => 'LUZ MIREYA GARCIA NOVOA',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-11-18 17:15:10',
                'created_at' => '2020-11-18 17:15:10',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '866',
                'id' => '28',
            ),
            31 => 
            array (
                's_direccion' => 'CALLE 80SUR # 91 - 90',
                's_telefono' => '3113650836',
                's_servicio' => 'ALIMENTACIÓN - TECHO',
                's_nombre_persona' => 'FLOR ALICIA MOYA',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-11-27 21:13:03',
                'created_at' => '2020-11-27 21:13:03',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '890',
                'id' => '29',
            ),
            32 => 
            array (
                's_direccion' => 'CLL49B # 78B - 73',
                's_telefono' => '304487742',
                's_servicio' => 'TECHO Y ALIMENTACIÓN',
                's_nombre_persona' => 'ANA MILENA JIMENEZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-04 16:42:13',
                'created_at' => '2020-12-04 16:42:13',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '952',
                'id' => '30',
            ),
            33 => 
            array (
                's_direccion' => 'CRA 90B # 49A - 28 SUR',
                's_telefono' => '313418494',
                's_servicio' => 'ALIMENTACIÓN',
                's_nombre_persona' => 'CAMILA MARROQUIN',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-04 17:05:14',
                'created_at' => '2020-12-04 17:05:14',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '953',
                'id' => '31',
            ),
            34 => 
            array (
                's_direccion' => 'CRA 91 # 49 - 42',
                's_telefono' => '3114130970',
                's_servicio' => 'VIVIENDA, ALIMENTACIÓN',
                's_nombre_persona' => 'OLGA ALVAREZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-09 16:31:55',
                'created_at' => '2020-12-09 16:31:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '955',
                'id' => '32',
            ),
            35 => 
            array (
                's_direccion' => 'CRA 90A # 46SUR - 51CA 173',
                's_telefono' => '3227270610',
                's_servicio' => 'VIVIENDA, ALIMENTACIÓN',
                's_nombre_persona' => 'CLAUDIA TORRES',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-10 20:27:49',
                'created_at' => '2020-12-10 20:27:49',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '958',
                'id' => '33',
            ),
            36 => 
            array (
                's_direccion' => 'CRA 91 # 94A - 57 SUR',
                's_telefono' => '3202962162',
                's_servicio' => 'TECHO - ALIMENTACIÓN',
                's_nombre_persona' => 'FLOR MORENO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-14 15:20:39',
                'created_at' => '2020-12-14 15:20:39',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '976',
                'id' => '34',
            ),
            37 => 
            array (
                's_direccion' => 'CRA 91 # 94A - 57 SUR',
                's_telefono' => '3202962162',
                's_servicio' => 'TECHO - ALIMENTACIÓN',
                's_nombre_persona' => 'FLOR MORENO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-14 15:20:43',
                'created_at' => '2020-12-14 15:20:43',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '976',
                'id' => '35',
            ),
            38 => 
            array (
                's_direccion' => 'CLL 80 BIS SUR # 91 - 90',
                's_telefono' => '3124992224',
                's_servicio' => 'TECHO - ALIMENTACIÓN',
                's_nombre_persona' => 'MARIA JESUS TORRES',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-14 15:46:06',
                'created_at' => '2020-12-14 15:46:06',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '972',
                'id' => '36',
            ),
            39 => 
            array (
                's_direccion' => 'CRA 81B # 5D SUR 14',
                's_telefono' => '3213696411',
                's_servicio' => 'TECHO - ALIMENTACIÓN',
                's_nombre_persona' => 'NANCY ARIZA',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-14 16:14:22',
                'created_at' => '2020-12-14 16:14:22',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '978',
                'id' => '37',
            ),
            40 => 
            array (
                's_direccion' => 'CASA',
                's_telefono' => '2062982',
                's_servicio' => 'COMIDA',
                's_nombre_persona' => 'SANDRA MUÑOZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-14 17:03:51',
                'created_at' => '2020-12-14 17:03:51',
                'sis_esta_id' => '1',
                'user_edita_id' => '434',
                'user_crea_id' => '434',
                'sis_nnaj_id' => '956',
                'id' => '38',
            ),
            41 => 
            array (
                's_direccion' => 'CRA 98D # 56H - 27 SUR',
                's_telefono' => '3219939294',
                's_servicio' => 'TECHO - ALIMENTACIÓN',
                's_nombre_persona' => 'CLARA ONZALEZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-14 17:45:44',
                'created_at' => '2020-12-14 17:45:44',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '990',
                'id' => '39',
            ),
            42 => 
            array (
                's_direccion' => 'KR 91 # 49A SUR 42',
                's_telefono' => '3114130970',
                's_servicio' => 'TECHO - ALIMENTACIÓN',
                's_nombre_persona' => 'OLGA ELENA ALVAREZ',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-14 20:11:10',
                'created_at' => '2020-12-14 20:11:10',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '992',
                'id' => '40',
            ),
            43 => 
            array (
                's_direccion' => 'KR 90 # 79 SUR - 69',
                's_telefono' => '3224079908',
                's_servicio' => 'VIVIENDA, ALIMENTACIÓN',
                's_nombre_persona' => 'FRANCISCA NELLY CARDENAS',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2020-12-15 17:49:13',
                'created_at' => '2020-12-15 17:49:13',
                'sis_esta_id' => '1',
                'user_edita_id' => '1942',
                'user_crea_id' => '1942',
                'sis_nnaj_id' => '1006',
                'id' => '41',
            ),
            44 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3212648458',
                's_servicio' => 'ECONOMICO Y EMOCIONAL',
                's_nombre_persona' => 'FAMILIAR',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2021-05-12 13:33:40',
                'created_at' => '2021-05-12 13:33:40',
                'sis_esta_id' => '1',
                'user_edita_id' => '2067',
                'user_crea_id' => '2067',
                'sis_nnaj_id' => '1294',
                'id' => '43',
            ),
            45 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3138222376',
                's_servicio' => 'ECONOMICO Y EMOCIONAL',
                's_nombre_persona' => 'ALEIDY SALZAR',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2021-05-12 16:00:55',
                'created_at' => '2021-05-12 16:00:55',
                'sis_esta_id' => '1',
                'user_edita_id' => '2067',
                'user_crea_id' => '2067',
                'sis_nnaj_id' => '1304',
                'id' => '44',
            ),
            46 => 
            array (
                's_direccion' => 'TRANSVERSAL 13 G BIS ESTE Nº 57 - 28 SUR',
                's_telefono' => '3133445846',
                's_servicio' => 'INTEGRAL',
                's_nombre_persona' => 'ANA CECILIA VEGA',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2021-05-17 14:48:33',
                'created_at' => '2021-05-17 14:48:33',
                'sis_esta_id' => '1',
                'user_edita_id' => '2045',
                'user_crea_id' => '2045',
                'sis_nnaj_id' => '1397',
                'id' => '45',
            ),
            47 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3222023206',
                's_servicio' => 'AFECTO',
                's_nombre_persona' => 'JIOVANNY  CALLEJAS',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2021-05-31 11:53:05',
                'created_at' => '2021-05-31 11:53:05',
                'sis_esta_id' => '1',
                'user_edita_id' => '1559',
                'user_crea_id' => '1559',
                'sis_nnaj_id' => '116',
                'id' => '49',
            ),
            48 => 
            array (
                's_direccion' => 'CIUDAD BOLIVAR',
                's_telefono' => '3123526890',
                's_servicio' => 'AFECTO',
                's_nombre_persona' => 'SANDRA TAPIERO',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2021-06-01 18:00:30',
                'created_at' => '2021-06-01 18:00:30',
                'sis_esta_id' => '1',
                'user_edita_id' => '1559',
                'user_crea_id' => '1559',
                'sis_nnaj_id' => '1565',
                'id' => '50',
            ),
            49 => 
            array (
                's_direccion' => NULL,
                's_telefono' => '3114928282',
                's_servicio' => 'ECONOMICO Y EMOCIONAL',
                's_nombre_persona' => 'TERESA Y HECTOR',
                'i_prm_tipo_red_id' => '282',
                'updated_at' => '2021-05-05 11:49:17',
                'created_at' => '2021-05-05 11:49:17',
                'sis_esta_id' => '1',
                'user_edita_id' => '2067',
                'user_crea_id' => '2067',
                'sis_nnaj_id' => '1169',
                'id' => '42',
            ),
        ));
        
        
    }
}