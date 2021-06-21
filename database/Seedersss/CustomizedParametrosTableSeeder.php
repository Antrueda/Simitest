<?php



use Illuminate\Database\Seeder;

class CustomizedParametrosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parametros')->delete();
        
        \DB::table('parametros')->insert(array (
            0 => 
            array (
                'id' => 1,
            'nombre' => 'HIJO(S)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            1 => 
            array (
                'id' => 2,
            'nombre' => 'PADRE(S)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            2 => 
            array (
                'id' => 3,
            'nombre' => 'HERMANO(S) O CONYUGE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'DOCUMENTO DE IDENTIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'REGISTRO CIVÍL DE NACIMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'REGISTRO CIVIL DE DEFUNCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'CERTIFICACIÓN, CAUSA FALLECIMIENTOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'DOCUMENTO DEL PRESENTO BENEFICIARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'REGISTRO CIVIL DE NACIMIENTO HIJOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'PARTIDA DE MATRIMONIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'DECLARACIÓN EXTRA-JUICIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'SOLICITUD DE INDEMNIZACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            12 => 
            array (
                'id' => 13,
            'nombre' => 'DOCUMENTO DE IDENTIDAD DE MADRE O REPRESENTANTE LEGAL (DEL HIJO FALLECIDO)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            13 => 
            array (
                'id' => 14,
            'nombre' => 'DECLARACIÓN EXTRA JUICIO DEL PRETENSO BENEFICIARIO (DERECHO A RECLAMAR)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'CERTIFICACIÓN BANCARIA O SOLICITUD DE PAGO EN CHEQUE O EFECTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'R.C.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'NIP O NUIP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'T.I.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'C.C.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => 'HOMBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'MUJER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            21 => 
            array (
                'id' => 22,
                'nombre' => 'INTERSEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            22 => 
            array (
                'id' => 23,
                'nombre' => 'FEMENINO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            23 => 
            array (
                'id' => 24,
                'nombre' => 'MASCULINO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            24 => 
            array (
                'id' => 25,
                'nombre' => 'TRANS. MASCULINO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            25 => 
            array (
                'id' => 26,
                'nombre' => 'TRANS. FEMENINO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            26 => 
            array (
                'id' => 27,
                'nombre' => 'NS/NR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            27 => 
            array (
                'id' => 28,
                'nombre' => 'OTRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            28 => 
            array (
                'id' => 29,
                'nombre' => 'HETEROSEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            29 => 
            array (
                'id' => 30,
                'nombre' => 'BISEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            30 => 
            array (
                'id' => 31,
                'nombre' => 'HOMOSEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            31 => 
            array (
                'id' => 32,
                'nombre' => 'POR ANTECEDENTES ASOCIADO AL CONSUMO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            32 => 
            array (
                'id' => 33,
                'nombre' => '11',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            33 => 
            array (
                'id' => 34,
                'nombre' => '12',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            34 => 
            array (
                'id' => 35,
                'nombre' => '13',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            35 => 
            array (
                'id' => 36,
                'nombre' => '14',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            36 => 
            array (
                'id' => 37,
                'nombre' => '15',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            37 => 
            array (
                'id' => 38,
                'nombre' => '16',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            38 => 
            array (
                'id' => 39,
                'nombre' => '17',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            39 => 
            array (
                'id' => 40,
                'nombre' => '18',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            40 => 
            array (
                'id' => 41,
                'nombre' => '21',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            41 => 
            array (
                'id' => 42,
                'nombre' => '22',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            42 => 
            array (
                'id' => 43,
                'nombre' => '23',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            43 => 
            array (
                'id' => 44,
                'nombre' => '24',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            44 => 
            array (
                'id' => 45,
                'nombre' => '25',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            45 => 
            array (
                'id' => 46,
                'nombre' => '26',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            46 => 
            array (
                'id' => 47,
                'nombre' => '27',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            47 => 
            array (
                'id' => 48,
                'nombre' => '28',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            48 => 
            array (
                'id' => 49,
                'nombre' => '31',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            49 => 
            array (
                'id' => 50,
                'nombre' => '32',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            50 => 
            array (
                'id' => 51,
                'nombre' => '33',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            51 => 
            array (
                'id' => 52,
                'nombre' => '34',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            52 => 
            array (
                'id' => 53,
                'nombre' => '35',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            53 => 
            array (
                'id' => 54,
                'nombre' => '36',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            54 => 
            array (
                'id' => 55,
                'nombre' => '37',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            55 => 
            array (
                'id' => 56,
                'nombre' => '38',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            56 => 
            array (
                'id' => 57,
                'nombre' => '41',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            57 => 
            array (
                'id' => 58,
                'nombre' => '42',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            58 => 
            array (
                'id' => 59,
                'nombre' => '43',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            59 => 
            array (
                'id' => 60,
                'nombre' => '44',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            60 => 
            array (
                'id' => 61,
                'nombre' => '45',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            61 => 
            array (
                'id' => 62,
                'nombre' => '46',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            62 => 
            array (
                'id' => 63,
                'nombre' => '47',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            63 => 
            array (
                'id' => 64,
                'nombre' => '48',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            64 => 
            array (
                'id' => 65,
                'nombre' => '51',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            65 => 
            array (
                'id' => 66,
                'nombre' => '52',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            66 => 
            array (
                'id' => 67,
                'nombre' => '53',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            67 => 
            array (
                'id' => 68,
                'nombre' => '54',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            68 => 
            array (
                'id' => 69,
                'nombre' => '55',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            69 => 
            array (
                'id' => 70,
                'nombre' => '61',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            70 => 
            array (
                'id' => 71,
                'nombre' => '62',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            71 => 
            array (
                'id' => 72,
                'nombre' => '63',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            72 => 
            array (
                'id' => 73,
                'nombre' => '64',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            73 => 
            array (
                'id' => 74,
                'nombre' => '65',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            74 => 
            array (
                'id' => 75,
                'nombre' => '71',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            75 => 
            array (
                'id' => 76,
                'nombre' => '72',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            76 => 
            array (
                'id' => 77,
                'nombre' => '73',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            77 => 
            array (
                'id' => 78,
                'nombre' => '74',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            78 => 
            array (
                'id' => 79,
                'nombre' => '75',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            79 => 
            array (
                'id' => 80,
                'nombre' => '81',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            80 => 
            array (
                'id' => 81,
                'nombre' => '82',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            81 => 
            array (
                'id' => 82,
                'nombre' => '83',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            82 => 
            array (
                'id' => 83,
                'nombre' => '84',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            83 => 
            array (
                'id' => 84,
                'nombre' => '85',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            84 => 
            array (
                'id' => 85,
                'nombre' => 'D',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            85 => 
            array (
                'id' => 86,
                'nombre' => 'DIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            86 => 
            array (
                'id' => 87,
                'nombre' => 'DP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            87 => 
            array (
                'id' => 88,
                'nombre' => 'DVP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            88 => 
            array (
                'id' => 89,
                'nombre' => 'I',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            89 => 
            array (
                'id' => 90,
                'nombre' => 'ID',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            90 => 
            array (
                'id' => 91,
                'nombre' => 'IM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            91 => 
            array (
                'id' => 92,
                'nombre' => 'LIN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            92 => 
            array (
                'id' => 93,
                'nombre' => 'M',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            93 => 
            array (
                'id' => 94,
                'nombre' => 'MD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            94 => 
            array (
                'id' => 95,
                'nombre' => 'MDVP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            95 => 
            array (
                'id' => 96,
                'nombre' => 'MES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            96 => 
            array (
                'id' => 97,
                'nombre' => 'MO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            97 => 
            array (
                'id' => 98,
                'nombre' => 'MODP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            98 => 
            array (
                'id' => 99,
                'nombre' => 'MODV',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            99 => 
            array (
                'id' => 100,
                'nombre' => 'MODVP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            100 => 
            array (
                'id' => 101,
                'nombre' => 'MP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            101 => 
            array (
                'id' => 102,
                'nombre' => 'MV',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            102 => 
            array (
                'id' => 103,
                'nombre' => 'OCLUSAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            103 => 
            array (
                'id' => 104,
                'nombre' => 'OD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            104 => 
            array (
                'id' => 105,
                'nombre' => 'ODL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            105 => 
            array (
                'id' => 106,
                'nombre' => 'ODLV',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            106 => 
            array (
                'id' => 107,
                'nombre' => 'ODP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            107 => 
            array (
                'id' => 108,
                'nombre' => 'ODV',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            108 => 
            array (
                'id' => 109,
                'nombre' => 'ODVP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            109 => 
            array (
                'id' => 110,
                'nombre' => 'OL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            110 => 
            array (
                'id' => 111,
                'nombre' => 'OP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            111 => 
            array (
                'id' => 112,
                'nombre' => 'OPD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            112 => 
            array (
                'id' => 113,
                'nombre' => 'OVP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            113 => 
            array (
                'id' => 114,
                'nombre' => 'PAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            114 => 
            array (
                'id' => 115,
                'nombre' => 'ANTECEDENTES JUDICIALES PERSONALES Y FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            115 => 
            array (
                'id' => 116,
                'nombre' => 'TO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            116 => 
            array (
                'id' => 117,
                'nombre' => 'VES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            117 => 
            array (
                'id' => 118,
                'nombre' => '0V',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            118 => 
            array (
                'id' => 119,
                'nombre' => 'AUS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            119 => 
            array (
                'id' => 120,
                'nombre' => 'CAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            120 => 
            array (
                'id' => 121,
                'nombre' => 'CR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            121 => 
            array (
                'id' => 122,
                'nombre' => 'DC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            122 => 
            array (
                'id' => 123,
                'nombre' => 'EU',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            123 => 
            array (
                'id' => 124,
                'nombre' => 'EX',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            124 => 
            array (
                'id' => 125,
                'nombre' => 'EXI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            125 => 
            array (
                'id' => 126,
                'nombre' => 'FIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            126 => 
            array (
                'id' => 127,
                'nombre' => 'FR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            127 => 
            array (
                'id' => 128,
                'nombre' => 'NEND',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            128 => 
            array (
                'id' => 129,
                'nombre' => 'NP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            129 => 
            array (
                'id' => 130,
                'nombre' => 'OB',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            130 => 
            array (
                'id' => 131,
                'nombre' => 'OBA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            131 => 
            array (
                'id' => 132,
                'nombre' => 'OBC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            132 => 
            array (
                'id' => 133,
                'nombre' => 'OBR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            133 => 
            array (
                'id' => 134,
                'nombre' => 'PEX',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            134 => 
            array (
                'id' => 135,
                'nombre' => 'PUL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            135 => 
            array (
                'id' => 136,
                'nombre' => 'RET',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            136 => 
            array (
                'id' => 137,
                'nombre' => 'RRD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            137 => 
            array (
                'id' => 138,
                'nombre' => 'S',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            138 => 
            array (
                'id' => 139,
                'nombre' => 'DEBIDO A SU ORIENTACIÓN SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            139 => 
            array (
                'id' => 140,
                'nombre' => 'SU',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            140 => 
            array (
                'id' => 141,
                'nombre' => 'TEND',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            141 => 
            array (
                'id' => 142,
                'nombre' => 'C.E.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            142 => 
            array (
                'id' => 143,
                'nombre' => 'P.A.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            143 => 
            array (
                'id' => 144,
                'nombre' => 'T.E.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            144 => 
            array (
                'id' => 145,
                'nombre' => 'SIN IDENTIFICACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            145 => 
            array (
                'id' => 146,
                'nombre' => 'A',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            146 => 
            array (
                'id' => 147,
                'nombre' => 'B',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            147 => 
            array (
                'id' => 148,
                'nombre' => 'AB',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            148 => 
            array (
                'id' => 149,
                'nombre' => 'O',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            149 => 
            array (
                'id' => 150,
                'nombre' => '+',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            150 => 
            array (
                'id' => 151,
                'nombre' => '-',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            151 => 
            array (
                'id' => 152,
            'nombre' => 'CASADO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:37',
                'updated_at' => '2021-06-02 14:14:37',
            ),
            152 => 
            array (
                'id' => 153,
            'nombre' => 'SOLTERO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            153 => 
            array (
                'id' => 154,
                'nombre' => 'UNIÓN LIBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            154 => 
            array (
                'id' => 155,
            'nombre' => 'SEPARADO(A) / DIVORCIADO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            155 => 
            array (
                'id' => 156,
            'nombre' => 'VIUDO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            156 => 
            array (
                'id' => 157,
                'nombre' => 'INDÍGENA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            157 => 
            array (
                'id' => 158,
                'nombre' => 'ROM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            158 => 
            array (
                'id' => 159,
            'nombre' => 'MESTIZO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            159 => 
            array (
                'id' => 160,
            'nombre' => 'PALENQUERO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            160 => 
            array (
                'id' => 161,
            'nombre' => 'BLANCO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            161 => 
            array (
                'id' => 162,
                'nombre' => 'RAIZAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            162 => 
            array (
                'id' => 163,
            'nombre' => 'NEGRO(A) / MULATO(A) / AFRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            163 => 
            array (
                'id' => 164,
                'nombre' => 'NINGUNO DE LOS ANTERIORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            164 => 
            array (
                'id' => 165,
                'nombre' => 'CONTRIBUTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            165 => 
            array (
                'id' => 166,
                'nombre' => 'SUBSIDIADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            166 => 
            array (
                'id' => 167,
                'nombre' => 'RÉGIMEN ESPECIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            167 => 
            array (
                'id' => 168,
                'nombre' => 'NINGUNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            168 => 
            array (
                'id' => 169,
                'nombre' => 'ALIANSALUD EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            169 => 
            array (
                'id' => 170,
                'nombre' => 'AMBUQ SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            170 => 
            array (
                'id' => 171,
                'nombre' => 'ASMED SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            171 => 
            array (
                'id' => 172,
                'nombre' => 'CAFAM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            172 => 
            array (
                'id' => 173,
                'nombre' => 'CAJACOPI ATLANTICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            173 => 
            array (
                'id' => 174,
                'nombre' => 'CAPITAL SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            174 => 
            array (
                'id' => 175,
                'nombre' => 'CAPRECOM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            175 => 
            array (
                'id' => 176,
                'nombre' => 'CAPRESOCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            176 => 
            array (
                'id' => 177,
                'nombre' => 'CCF DE NARIÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            177 => 
            array (
                'id' => 178,
                'nombre' => 'CCF DE SUCRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            178 => 
            array (
                'id' => 179,
                'nombre' => 'CCF DEL CHOCO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            179 => 
            array (
                'id' => 180,
                'nombre' => 'COLMÉDICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            180 => 
            array (
                'id' => 181,
                'nombre' => 'COLSUBSIDIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            181 => 
            array (
                'id' => 182,
                'nombre' => 'COMFABOY',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            182 => 
            array (
                'id' => 183,
                'nombre' => 'COMFACOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            183 => 
            array (
                'id' => 184,
                'nombre' => 'COMFAGUAJIRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            184 => 
            array (
                'id' => 185,
                'nombre' => 'COMFAMILIAR CARTAGENA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            185 => 
            array (
                'id' => 186,
                'nombre' => 'COMFAMILIAR HUILA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            186 => 
            array (
                'id' => 187,
                'nombre' => 'COMFENALCO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            187 => 
            array (
                'id' => 188,
                'nombre' => 'COMPARTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            188 => 
            array (
                'id' => 189,
                'nombre' => 'COMPENSAR EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            189 => 
            array (
                'id' => 190,
                'nombre' => 'CONFACUNDI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            190 => 
            array (
                'id' => 191,
                'nombre' => 'CONVIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            191 => 
            array (
                'id' => 192,
                'nombre' => 'COOMEVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            192 => 
            array (
                'id' => 193,
                'nombre' => 'COOSALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            193 => 
            array (
                'id' => 194,
                'nombre' => 'CRUZ BLANCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            194 => 
            array (
                'id' => 195,
                'nombre' => 'ECOOPSOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            195 => 
            array (
                'id' => 196,
                'nombre' => 'ECOOPSOS DE SOACHA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            196 => 
            array (
                'id' => 197,
                'nombre' => 'EMDISALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            197 => 
            array (
                'id' => 198,
                'nombre' => 'EMSSANAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            198 => 
            array (
                'id' => 199,
                'nombre' => 'FAMISANAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            199 => 
            array (
                'id' => 200,
                'nombre' => 'FAMISANAR LTDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            200 => 
            array (
                'id' => 201,
            'nombre' => 'FUERZAS MILITARES (ESPECIAL)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            201 => 
            array (
                'id' => 202,
                'nombre' => 'GOLDEN GROUP S.A. EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            202 => 
            array (
                'id' => 203,
                'nombre' => 'HUMANA VIVIR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            203 => 
            array (
                'id' => 204,
                'nombre' => 'IDIPRON',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            204 => 
            array (
                'id' => 205,
                'nombre' => 'IND-A.I.C',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            205 => 
            array (
                'id' => 206,
                'nombre' => 'IND-ANAS WAYU',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            206 => 
            array (
                'id' => 207,
                'nombre' => 'IND-DUSAKAWI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            207 => 
            array (
                'id' => 208,
                'nombre' => 'IND-MALLAMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            208 => 
            array (
                'id' => 209,
                'nombre' => 'IND-MANEXKA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            209 => 
            array (
                'id' => 210,
                'nombre' => 'IND-PIJAOS SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            210 => 
            array (
                'id' => 211,
                'nombre' => 'MEDIMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            211 => 
            array (
                'id' => 212,
                'nombre' => 'MUTUAL SER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            212 => 
            array (
                'id' => 213,
                'nombre' => 'NUEVA EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            213 => 
            array (
                'id' => 214,
                'nombre' => 'RED SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            214 => 
            array (
                'id' => 215,
                'nombre' => 'SALUD COLPATRIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            215 => 
            array (
                'id' => 216,
                'nombre' => 'SALUD CONDOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            216 => 
            array (
                'id' => 217,
                'nombre' => 'SALUD TOTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            217 => 
            array (
                'id' => 218,
                'nombre' => 'SALUDVIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            218 => 
            array (
                'id' => 219,
                'nombre' => 'SANITAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            219 => 
            array (
                'id' => 220,
                'nombre' => 'SAVIA SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            220 => 
            array (
                'id' => 221,
                'nombre' => 'SOLSALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            221 => 
            array (
                'id' => 222,
                'nombre' => 'SOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            222 => 
            array (
                'id' => 223,
                'nombre' => 'SURA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            223 => 
            array (
                'id' => 224,
                'nombre' => 'UNICAJAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            224 => 
            array (
                'id' => 225,
                'nombre' => 'CAFESALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            225 => 
            array (
                'id' => 226,
                'nombre' => 'SALUD COOP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            226 => 
            array (
                'id' => 227,
                'nombre' => 'SI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            227 => 
            array (
                'id' => 228,
                'nombre' => 'NO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            228 => 
            array (
                'id' => 229,
            'nombre' => 'SENSORIAL (AUDITIVA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            229 => 
            array (
                'id' => 230,
            'nombre' => 'SENSORIAL (VISUAL)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            230 => 
            array (
                'id' => 231,
            'nombre' => 'FÍSICA/MOTORA (INCLUYE TALLA BAJA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            231 => 
            array (
                'id' => 232,
                'nombre' => 'COGNITIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            232 => 
            array (
                'id' => 233,
                'nombre' => 'MENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            233 => 
            array (
                'id' => 234,
                'nombre' => 'SALÓN COMUNAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            234 => 
            array (
                'id' => 235,
                'nombre' => 'N/A',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            235 => 
            array (
                'id' => 236,
                'nombre' => 'NO SABE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            236 => 
            array (
                'id' => 237,
                'nombre' => 'NO SE LE HA APLICADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            237 => 
            array (
                'id' => 238,
                'nombre' => 'CONDÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            238 => 
            array (
                'id' => 239,
                'nombre' => 'INYECTABLES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            239 => 
            array (
                'id' => 240,
                'nombre' => 'JADELLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            240 => 
            array (
                'id' => 241,
                'nombre' => 'DIU COBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            241 => 
            array (
                'id' => 242,
                'nombre' => 'DIU HORMONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            242 => 
            array (
                'id' => 243,
                'nombre' => 'PASTILLAS DE EMERGENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            243 => 
            array (
                'id' => 244,
                'nombre' => 'PÍLDORA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            244 => 
            array (
                'id' => 245,
                'nombre' => 'RITMO - NATURAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            245 => 
            array (
                'id' => 246,
                'nombre' => '1',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            246 => 
            array (
                'id' => 247,
                'nombre' => '2',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            247 => 
            array (
                'id' => 248,
                'nombre' => '3',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            248 => 
            array (
                'id' => 249,
                'nombre' => 'POR FALTA DE DINERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            249 => 
            array (
                'id' => 250,
                'nombre' => 'POR ENFERMEDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            250 => 
            array (
                'id' => 251,
                'nombre' => 'POR FALTA DE TIEMPO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            251 => 
            array (
                'id' => 252,
                'nombre' => 'POR DIETA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            252 => 
            array (
                'id' => 253,
                'nombre' => 'POR HÁBITOS ALIMENTICIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            253 => 
            array (
                'id' => 254,
                'nombre' => 'MISIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            254 => 
            array (
                'id' => 255,
                'nombre' => 'LA VENDIÓ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            255 => 
            array (
                'id' => 256,
                'nombre' => 'VULNERACIÓN SOCIAL Y ECONÓMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            256 => 
            array (
                'id' => 257,
                'nombre' => 'POR IDENTIDAD DE GÉNERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            257 => 
            array (
                'id' => 258,
                'nombre' => 'HABITABILIDAD EN LA CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            258 => 
            array (
                'id' => 259,
                'nombre' => 'NA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            259 => 
            array (
                'id' => 260,
                'nombre' => '1. RA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            260 => 
            array (
                'id' => 261,
                'nombre' => '2. DA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            261 => 
            array (
                'id' => 262,
                'nombre' => 'CASA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            262 => 
            array (
                'id' => 263,
                'nombre' => 'APARTAMENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            263 => 
            array (
                'id' => 264,
                'nombre' => 'FINCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            264 => 
            array (
                'id' => 265,
                'nombre' => 'RESIDENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            265 => 
            array (
                'id' => 266,
                'nombre' => 'PIEZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            266 => 
            array (
                'id' => 267,
                'nombre' => 'CUARTO DE INQUILINATO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            267 => 
            array (
                'id' => 268,
                'nombre' => 'JORNADA LABORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            268 => 
            array (
                'id' => 269,
                'nombre' => 'HOGAR REFUGIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            269 => 
            array (
                'id' => 270,
                'nombre' => 'CASA ABANDONADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            270 => 
            array (
                'id' => 271,
                'nombre' => 'CASA LOTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            271 => 
            array (
                'id' => 272,
                'nombre' => 'RANCHO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            272 => 
            array (
                'id' => 273,
                'nombre' => 'LOTE BALDÍO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            273 => 
            array (
                'id' => 274,
                'nombre' => 'CAMBUCHE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            274 => 
            array (
                'id' => 275,
                'nombre' => 'CAVIDAD NATURAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            275 => 
            array (
                'id' => 276,
                'nombre' => 'CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            276 => 
            array (
                'id' => 277,
                'nombre' => 'EN INCAPACIDAD PARA TRABAJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            277 => 
            array (
                'id' => 278,
                'nombre' => 'PROPIA TOTALMENTE PAGADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            278 => 
            array (
                'id' => 279,
                'nombre' => 'EN ARRIENDO O SUBARRIENDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            279 => 
            array (
                'id' => 280,
                'nombre' => 'PROPIA LA ESTÁN PAGANDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            280 => 
            array (
                'id' => 281,
                'nombre' => 'EN USUFRUCTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            281 => 
            array (
                'id' => 282,
                'nombre' => 'FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            282 => 
            array (
                'id' => 283,
                'nombre' => 'INVASIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            283 => 
            array (
                'id' => 284,
                'nombre' => 'SUSTENTO PROVIENE DE FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            284 => 
            array (
                'id' => 285,
                'nombre' => 'NUEVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            285 => 
            array (
                'id' => 286,
                'nombre' => 'ANTIGUA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            286 => 
            array (
                'id' => 287,
                'nombre' => 'URBANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            287 => 
            array (
                'id' => 288,
                'nombre' => 'RURAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            288 => 
            array (
                'id' => 289,
                'nombre' => 'SIN DIRECCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            289 => 
            array (
                'id' => 290,
                'nombre' => 'ESTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            290 => 
            array (
                'id' => 291,
                'nombre' => 'SUR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            291 => 
            array (
                'id' => 292,
                'nombre' => 'POR SU SEXO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            292 => 
            array (
                'id' => 293,
                'nombre' => 'POR SU ETNIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            293 => 
            array (
                'id' => 294,
                'nombre' => 'C',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            294 => 
            array (
                'id' => 295,
                'nombre' => 'POR ANTECEDENTES PENALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            295 => 
            array (
                'id' => 296,
                'nombre' => 'BIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            296 => 
            array (
                'id' => 297,
                'nombre' => 'CONDICIÓN SOCIOECONÓMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            297 => 
            array (
                'id' => 298,
                'nombre' => 'A.M.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            298 => 
            array (
                'id' => 299,
                'nombre' => 'P.M.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            299 => 
            array (
                'id' => 300,
                'nombre' => '4',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            300 => 
            array (
                'id' => 301,
                'nombre' => '5',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            301 => 
            array (
                'id' => 302,
                'nombre' => '6',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            302 => 
            array (
                'id' => 303,
                'nombre' => 'SIN ESTRATO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            303 => 
            array (
                'id' => 304,
                'nombre' => 'NS/NR 2',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            304 => 
            array (
                'id' => 305,
            'nombre' => 'CONTAMINACIÓN AMBIENTAL (AUDITIVA, VISUAL, ATMOSFÉRICA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            305 => 
            array (
                'id' => 306,
                'nombre' => 'RÍOS, CAÑOS Y/O POTREROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            306 => 
            array (
                'id' => 307,
                'nombre' => 'EXPENDIO Y/O USO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            307 => 
            array (
                'id' => 308,
                'nombre' => 'PLAZAS DE MERCADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            308 => 
            array (
                'id' => 309,
                'nombre' => 'ESPACIO DE PROSTITUCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            309 => 
            array (
                'id' => 310,
                'nombre' => 'RIESGOS NATURALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            310 => 
            array (
                'id' => 311,
                'nombre' => 'EN DETERIORO URBANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            311 => 
            array (
                'id' => 312,
                'nombre' => 'AFECTADO POR RIESGOS NATURALES O ANTRÓPICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            312 => 
            array (
                'id' => 313,
                'nombre' => 'ESPACIOS ESCNNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            313 => 
            array (
                'id' => 314,
                'nombre' => 'HABITABILIDAD EN CONDICIONES URBANÍSTICAS INFORMALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            314 => 
            array (
                'id' => 315,
                'nombre' => 'RESIDENTE TERRITORIOS QUE PRESENTA ALTA VULNERABILIDAD SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            315 => 
            array (
                'id' => 316,
                'nombre' => 'NINGUNO REPETIDO NO UTILIZAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            316 => 
            array (
                'id' => 317,
                'nombre' => 'MENOR DE EDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            317 => 
            array (
                'id' => 318,
                'nombre' => 'INMUNOLÓGICOS /VACUNACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            318 => 
            array (
                'id' => 319,
                'nombre' => 'INFECCIOSOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            319 => 
            array (
                'id' => 320,
                'nombre' => 'IN. TRANSMISIÓN SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            320 => 
            array (
                'id' => 321,
                'nombre' => 'CONTROL DE LA FECUNDIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            321 => 
            array (
                'id' => 322,
                'nombre' => 'ENF. DE LA INFANCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            322 => 
            array (
                'id' => 323,
                'nombre' => 'QUIRURGICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            323 => 
            array (
                'id' => 324,
                'nombre' => 'TRAUMÁTICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            324 => 
            array (
                'id' => 325,
                'nombre' => 'PATOLÓGICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            325 => 
            array (
                'id' => 326,
                'nombre' => 'HIPERTENSIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            326 => 
            array (
                'id' => 327,
                'nombre' => 'DIABETES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            327 => 
            array (
                'id' => 328,
                'nombre' => 'HOSPITALIZACIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            328 => 
            array (
                'id' => 329,
                'nombre' => 'HEMOTRANSFUSIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            329 => 
            array (
                'id' => 330,
                'nombre' => 'FIJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            330 => 
            array (
                'id' => 331,
                'nombre' => 'CELULAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            331 => 
            array (
                'id' => 332,
                'nombre' => 'SITUACIÓN DE VIDA EN CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            332 => 
            array (
                'id' => 333,
                'nombre' => 'CONDICIONES DE HABITABILIDAD PRECARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            333 => 
            array (
                'id' => 334,
                'nombre' => 'TRABAJO INFANTIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            334 => 
            array (
                'id' => 335,
                'nombre' => 'CONSUMO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            335 => 
            array (
                'id' => 336,
                'nombre' => 'COMISIÓN DE DELITOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            336 => 
            array (
                'id' => 337,
                'nombre' => 'ABUSO SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            337 => 
            array (
                'id' => 338,
                'nombre' => 'ESCNNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            338 => 
            array (
                'id' => 339,
                'nombre' => 'MALTRATO INFANTIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            339 => 
            array (
                'id' => 340,
                'nombre' => 'ABANDONO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            340 => 
            array (
                'id' => 341,
                'nombre' => 'INOBSERVANCIA, AMENAZA O VULNERACIÓN DERECHOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            341 => 
            array (
                'id' => 342,
                'nombre' => 'DESVINCULADOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            342 => 
            array (
                'id' => 343,
                'nombre' => 'VÍCTIMAS DEL CONFLICTO ARMADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            343 => 
            array (
                'id' => 344,
                'nombre' => 'VÍCTIMA DESPLAZAMIENTO FORZADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            344 => 
            array (
                'id' => 345,
                'nombre' => 'SRPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            345 => 
            array (
                'id' => 346,
                'nombre' => 'HURTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            346 => 
            array (
                'id' => 347,
                'nombre' => 'DELITOS SEXUALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            347 => 
            array (
                'id' => 348,
                'nombre' => 'LESIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            348 => 
            array (
                'id' => 349,
                'nombre' => 'PORTE, TRÁFICO Y USO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            349 => 
            array (
                'id' => 350,
                'nombre' => 'HOMICIDIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            350 => 
            array (
                'id' => 351,
                'nombre' => 'EXPLOTADOR SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            351 => 
            array (
                'id' => 352,
                'nombre' => 'TRATA DE PERSONAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            352 => 
            array (
                'id' => 353,
                'nombre' => 'SOLO ESTUDIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            353 => 
            array (
                'id' => 354,
                'nombre' => 'AMONESTACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            354 => 
            array (
                'id' => 355,
                'nombre' => 'REGLAS DE CONDUCTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            355 => 
            array (
                'id' => 356,
                'nombre' => 'SERVICIOS A LA COMUNIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            356 => 
            array (
                'id' => 357,
                'nombre' => 'INTERNACIÓN EN MEDIO SEMI-CERRADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            357 => 
            array (
                'id' => 358,
                'nombre' => 'PRIVACIÓN DE LIBERTAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            358 => 
            array (
                'id' => 359,
                'nombre' => 'LIBERTAD ASISTIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            359 => 
            array (
                'id' => 360,
                'nombre' => 'MARCHAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            360 => 
            array (
                'id' => 361,
                'nombre' => 'PAGANDO SANCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            361 => 
            array (
                'id' => 362,
                'nombre' => 'LIBERTAD CONDICIONA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            362 => 
            array (
                'id' => 363,
                'nombre' => 'CASA POR CáRCEL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            363 => 
            array (
                'id' => 364,
                'nombre' => 'PRóFUGO DE LA JUSTICIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            364 => 
            array (
                'id' => 365,
                'nombre' => 'MAÑANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            365 => 
            array (
                'id' => 366,
            'nombre' => 'FAMILIA NO PROTECTORA(AUSENCIA, NEGLIGENCIA E INOBSERVANCIA DEL (OS) PROGENITORES)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            366 => 
            array (
                'id' => 367,
                'nombre' => 'QUINCENAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            367 => 
            array (
                'id' => 368,
                'nombre' => 'POTENCIALIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            368 => 
            array (
                'id' => 369,
                'nombre' => 'META',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            369 => 
            array (
                'id' => 370,
                'nombre' => 'DIFICULTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            370 => 
            array (
                'id' => 371,
                'nombre' => 'CENTRO ZONAL ENGATIVÁ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            371 => 
            array (
                'id' => 372,
                'nombre' => 'CENTRO ZONAL FONTIBÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            372 => 
            array (
                'id' => 373,
                'nombre' => 'CENTRO ZONAL KENNEDY',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            373 => 
            array (
                'id' => 374,
                'nombre' => 'CENTRO ZONAL MÁRTIRES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            374 => 
            array (
                'id' => 375,
                'nombre' => 'CENTRO ESPECIALIZADO "CESPA" PUENTE ARANDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            375 => 
            array (
                'id' => 376,
                'nombre' => 'DESPLAZAMIENTO INTRA URBANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            376 => 
            array (
                'id' => 377,
                'nombre' => 'AMENAZAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            377 => 
            array (
                'id' => 378,
                'nombre' => 'CENTRO ZONAL RAFAEL URIBE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            378 => 
            array (
                'id' => 379,
                'nombre' => 'CENTRO ESPECIALIZADO REVIVIR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            379 => 
            array (
                'id' => 380,
                'nombre' => 'CENTRO ZONAL SAN CRISTOBAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            380 => 
            array (
                'id' => 381,
                'nombre' => 'HACINAMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            381 => 
            array (
                'id' => 382,
                'nombre' => 'MÁRMOL, PARQUÉS, MADERA PULIDA Y LACADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            382 => 
            array (
                'id' => 383,
                'nombre' => 'ALFOMBRA O TAPETE DE PARED A PARED',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            383 => 
            array (
                'id' => 384,
                'nombre' => 'BALDOSA, VINILO, TABLETA, LADRILLO, MADERA, MADERA BUERDA, TABLA, TABLÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            384 => 
            array (
                'id' => 385,
                'nombre' => 'CEMENTO, GRAVILLA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            385 => 
            array (
                'id' => 386,
                'nombre' => 'TIERRA, ARENA, MATERIAL ORGÁNICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            386 => 
            array (
                'id' => 387,
            'nombre' => 'MAMPOSTERÍA A LA VISTA (BLOQUE, LADRILLÓ)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            387 => 
            array (
                'id' => 388,
                'nombre' => 'MAMPOSTERÍA CON ACABADOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            388 => 
            array (
                'id' => 389,
                'nombre' => 'MADERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            389 => 
            array (
                'id' => 390,
                'nombre' => 'CENTRO ZONAL SANTAFE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            390 => 
            array (
                'id' => 391,
                'nombre' => 'CENTRO ZONAL SUBA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            391 => 
            array (
                'id' => 392,
                'nombre' => 'CENTRO ZONAL TUNJUELITO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            392 => 
            array (
                'id' => 393,
                'nombre' => 'CENTRO ZONAL USAQUÉN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            393 => 
            array (
                'id' => 394,
                'nombre' => 'CENTRO ZONAL USME',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            394 => 
            array (
                'id' => 395,
                'nombre' => 'CENTRO ZONAL CREER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            395 => 
            array (
                'id' => 396,
                'nombre' => 'CENTRO ZONAL BARRIOS UNIDOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            396 => 
            array (
                'id' => 397,
                'nombre' => 'TARDE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            397 => 
            array (
                'id' => 398,
                'nombre' => 'PARQUEADEROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            398 => 
            array (
                'id' => 399,
                'nombre' => 'SEMANAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            399 => 
            array (
                'id' => 400,
                'nombre' => 'MESES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            400 => 
            array (
                'id' => 401,
                'nombre' => 'AÑOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            401 => 
            array (
                'id' => 402,
            'nombre' => 'TABACO (CIGARRILLO)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            402 => 
            array (
                'id' => 403,
                'nombre' => 'BEBIDAS ALCOHÓLICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            403 => 
            array (
                'id' => 404,
                'nombre' => 'MARIHUANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            404 => 
            array (
                'id' => 405,
                'nombre' => 'COCAINA, CRACK Y/O PACO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            405 => 
            array (
                'id' => 406,
                'nombre' => 'DISOLVENTES COMBUSTBLES O PEGANTES INHALANTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            406 => 
            array (
                'id' => 407,
                'nombre' => 'NOCHE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            407 => 
            array (
                'id' => 408,
                'nombre' => 'LÁMINAS DE ZINC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            408 => 
            array (
                'id' => 409,
            'nombre' => 'MATERIAL NO CONVENCIONAL (POLISOMBRA, CARTÓN, PLÁSTICO, MATERIAL DE RECICLAJE)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            409 => 
            array (
                'id' => 410,
                'nombre' => 'HIGIENE Y ASEO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            410 => 
            array (
                'id' => 411,
                'nombre' => 'VENTILACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            411 => 
            array (
                'id' => 412,
                'nombre' => 'ILUMINACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            412 => 
            array (
                'id' => 413,
                'nombre' => 'ORDEN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            413 => 
            array (
                'id' => 414,
                'nombre' => 'APROPIADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            414 => 
            array (
                'id' => 415,
                'nombre' => 'MEDIANAMENTE APROPIADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            415 => 
            array (
                'id' => 416,
                'nombre' => 'INAPROPIADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            416 => 
            array (
                'id' => 417,
                'nombre' => 'ENERGÍA ELÉCTRICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            417 => 
            array (
                'id' => 418,
                'nombre' => 'GAS NATURAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            418 => 
            array (
                'id' => 419,
                'nombre' => 'ACUEDUCTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            419 => 
            array (
                'id' => 420,
                'nombre' => 'ALCANTARILLADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            420 => 
            array (
                'id' => 421,
                'nombre' => 'TELÉFONO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            421 => 
            array (
                'id' => 422,
                'nombre' => 'RECOLECCIÓN DE BASURAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            422 => 
            array (
                'id' => 423,
                'nombre' => 'LEGAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            423 => 
            array (
                'id' => 424,
                'nombre' => 'ILEGAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            424 => 
            array (
                'id' => 425,
                'nombre' => 'BAÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            425 => 
            array (
                'id' => 426,
                'nombre' => 'COMEDOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            426 => 
            array (
                'id' => 427,
                'nombre' => 'SALA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            427 => 
            array (
                'id' => 428,
                'nombre' => 'SALACOMEDOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            428 => 
            array (
                'id' => 429,
                'nombre' => 'UNA VEZ AL DIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            429 => 
            array (
                'id' => 430,
                'nombre' => 'NO LA HA USADO EN EL ULTIMO MES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            430 => 
            array (
                'id' => 431,
                'nombre' => 'UNA O DOS VECES EN LOS ULTIMOS 3 MESES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            431 => 
            array (
                'id' => 432,
                'nombre' => 'DOS A TRES VECES POR DIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            432 => 
            array (
                'id' => 433,
                'nombre' => 'MAS DE TRES VECES POR DIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            433 => 
            array (
                'id' => 434,
                'nombre' => 'MENOS DE UNA VEZ POR SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            434 => 
            array (
                'id' => 435,
                'nombre' => 'UNA VEZ POR SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:38',
                'updated_at' => '2021-06-02 14:14:38',
            ),
            435 => 
            array (
                'id' => 436,
                'nombre' => 'VARIAS VECES POR SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            436 => 
            array (
                'id' => 437,
                'nombre' => 'ESPACIOS CULTURALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            437 => 
            array (
                'id' => 438,
                'nombre' => 'MENSUALMENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            438 => 
            array (
                'id' => 439,
                'nombre' => 'SIN DATOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            439 => 
            array (
                'id' => 440,
                'nombre' => 'ORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            440 => 
            array (
                'id' => 441,
                'nombre' => 'FUMADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            441 => 
            array (
                'id' => 442,
                'nombre' => 'INHALADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            442 => 
            array (
                'id' => 443,
                'nombre' => 'INYECTADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            443 => 
            array (
                'id' => 444,
                'nombre' => 'DERMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            444 => 
            array (
                'id' => 445,
                'nombre' => 'SIN DATO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            445 => 
            array (
                'id' => 446,
                'nombre' => 'LABORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            446 => 
            array (
                'id' => 447,
                'nombre' => 'FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            447 => 
            array (
                'id' => 448,
                'nombre' => 'EMOCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            448 => 
            array (
                'id' => 449,
                'nombre' => 'SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            449 => 
            array (
                'id' => 450,
            'nombre' => 'DESVINCULADO(A) (MENOR 18)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            450 => 
            array (
                'id' => 451,
            'nombre' => 'DESMOVILIZADO(A) (MAYOR 18)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            451 => 
            array (
                'id' => 452,
            'nombre' => 'REINCORPORADO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            452 => 
            array (
                'id' => 453,
                'nombre' => 'VÍCTIMA DE VIOLENCIA ARMADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            453 => 
            array (
                'id' => 454,
            'nombre' => 'DESPLAZADO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            454 => 
            array (
                'id' => 455,
                'nombre' => 'CABEZA DE FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            455 => 
            array (
                'id' => 456,
                'nombre' => 'COCINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            456 => 
            array (
                'id' => 457,
                'nombre' => 'HABITACIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            457 => 
            array (
                'id' => 458,
                'nombre' => 'PATIO/ZONA DE ROPAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            458 => 
            array (
                'id' => 459,
                'nombre' => 'ABANDONO DEL HOGAR POR PARTE DEL PADRE O MADRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            459 => 
            array (
                'id' => 460,
                'nombre' => 'CONSUMO DE SPA POR PARTE DE ALGÊN MIEMBRO DE LA FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            460 => 
            array (
                'id' => 461,
                'nombre' => 'VIOLENCIA INTRA FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            461 => 
            array (
                'id' => 462,
                'nombre' => 'Y',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            462 => 
            array (
                'id' => 463,
                'nombre' => 'NO VINCULACIÓN AL SISTEMA EDUCATIVO FORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            463 => 
            array (
                'id' => 464,
                'nombre' => 'DESEMPLEO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            464 => 
            array (
                'id' => 465,
                'nombre' => 'VINCULACIÓN A ACTIVIDADES DELICTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            465 => 
            array (
                'id' => 466,
                'nombre' => 'PRESUNTA VÍCTIMA ESCNNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            466 => 
            array (
                'id' => 467,
                'nombre' => 'POR TURNOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            467 => 
            array (
                'id' => 468,
                'nombre' => 'EJERCICIO DE LA PROSTITUCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            468 => 
            array (
                'id' => 469,
                'nombre' => 'LUNES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            469 => 
            array (
                'id' => 470,
                'nombre' => 'PRIVACIÓN DE LIBERTAD DE ALGÊN MIEMBRO DE LA FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            470 => 
            array (
                'id' => 471,
                'nombre' => 'NUCLEAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            471 => 
            array (
                'id' => 472,
                'nombre' => 'HACINAMIENTO QUE GENERA POSIBILIDAD DE VIOLENCIA SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            472 => 
            array (
                'id' => 473,
                'nombre' => 'FORMAS DE COMUNICACIÓN A TRAVÉS DE LA VIOLENCIA Y CONDUCTAS SEXUALES NO ACORDES A SU EDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            473 => 
            array (
                'id' => 474,
                'nombre' => 'PORTE DE DINERO, ROPA Y/O ELEMENTOS COSTOSOS NO ACORDES AL NIVEL SOCIOECONOMICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            474 => 
            array (
                'id' => 475,
                'nombre' => 'NATURALIZACIÓN DE PRÁCTICAS SEXUALES INADECUADAS AL INTERIOR DE LA FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            475 => 
            array (
                'id' => 476,
                'nombre' => 'APATÍA EN EL CUIDADO DE LOS MENORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            476 => 
            array (
                'id' => 477,
                'nombre' => 'TERMINAL DE TRANSPORTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            477 => 
            array (
                'id' => 478,
                'nombre' => 'MARTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            478 => 
            array (
                'id' => 479,
                'nombre' => 'MIERCOLES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            479 => 
            array (
                'id' => 480,
                'nombre' => 'JUEVES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            480 => 
            array (
                'id' => 481,
                'nombre' => 'VIERNES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            481 => 
            array (
                'id' => 482,
                'nombre' => 'SABADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            482 => 
            array (
                'id' => 483,
                'nombre' => 'DOMINGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            483 => 
            array (
                'id' => 484,
                'nombre' => 'MONOPARENTAL MATERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            484 => 
            array (
                'id' => 485,
                'nombre' => '1 HORA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            485 => 
            array (
                'id' => 486,
                'nombre' => '2 HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            486 => 
            array (
                'id' => 487,
                'nombre' => '1 DÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            487 => 
            array (
                'id' => 488,
                'nombre' => 'DORMIR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            488 => 
            array (
                'id' => 489,
                'nombre' => 'LEER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            489 => 
            array (
                'id' => 490,
                'nombre' => '2 DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            490 => 
            array (
                'id' => 491,
                'nombre' => '3 DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            491 => 
            array (
                'id' => 492,
                'nombre' => '3 HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            492 => 
            array (
                'id' => 493,
                'nombre' => 'MONOPARENTAL PATERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            493 => 
            array (
                'id' => 494,
                'nombre' => 'CATÓLICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            494 => 
            array (
                'id' => 495,
                'nombre' => 'BAUTISMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            495 => 
            array (
                'id' => 496,
                'nombre' => 'HOMBRE NIÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            496 => 
            array (
                'id' => 497,
                'nombre' => 'ESTRATÉGICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            497 => 
            array (
                'id' => 498,
                'nombre' => 'APOYO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            498 => 
            array (
                'id' => 499,
                'nombre' => 'CERCANÍA A PARES NEGATIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            499 => 
            array (
                'id' => 500,
                'nombre' => 'ENTORNOS AMENAZANTES Y/O DELICTIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
        ));
        \DB::table('parametros')->insert(array (
            0 => 
            array (
                'id' => 501,
                'nombre' => 'CONVIVE CON FAMILIARES ASOCIADOS A LA DELINCUENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            1 => 
            array (
                'id' => 502,
                'nombre' => 'RÍO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            2 => 
            array (
                'id' => 503,
                'nombre' => 'CERROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            3 => 
            array (
                'id' => 504,
                'nombre' => 'CARRILERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            4 => 
            array (
                'id' => 505,
                'nombre' => 'HOMBRE ADULTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            5 => 
            array (
                'id' => 506,
                'nombre' => 'LOTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            6 => 
            array (
                'id' => 507,
                'nombre' => 'CTP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            7 => 
            array (
                'id' => 508,
                'nombre' => 'INQUILINATO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            8 => 
            array (
                'id' => 509,
                'nombre' => 'PAGA DIARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            9 => 
            array (
                'id' => 510,
                'nombre' => 'SEGUIMIENTO PLAN DE ATENCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            10 => 
            array (
                'id' => 511,
                'nombre' => 'CENTRO DE VÍDEO JUEGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            11 => 
            array (
                'id' => 512,
                'nombre' => 'AVANZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            12 => 
            array (
                'id' => 513,
                'nombre' => 'PLAZA DE MERCADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            13 => 
            array (
                'id' => 514,
                'nombre' => 'AVANZA PARCIALMENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            14 => 
            array (
                'id' => 515,
                'nombre' => 'SEMÁFORO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            15 => 
            array (
                'id' => 516,
                'nombre' => '4 DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            16 => 
            array (
                'id' => 517,
                'nombre' => '5 DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            17 => 
            array (
                'id' => 518,
                'nombre' => '8',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            18 => 
            array (
                'id' => 519,
                'nombre' => '10',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            19 => 
            array (
                'id' => 520,
                'nombre' => 'EXTENSA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            20 => 
            array (
                'id' => 521,
                'nombre' => 'AMISTADES / COLEGIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            21 => 
            array (
                'id' => 522,
                'nombre' => 'PAREJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            22 => 
            array (
                'id' => 523,
                'nombre' => 'COMUNITARIO / PARCHES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            23 => 
            array (
                'id' => 524,
                'nombre' => 'PSICOLÓGICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            24 => 
            array (
                'id' => 525,
                'nombre' => 'SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            25 => 
            array (
                'id' => 526,
                'nombre' => 'ECONÓMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            26 => 
            array (
                'id' => 527,
                'nombre' => 'DOMÉSTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            27 => 
            array (
                'id' => 528,
                'nombre' => 'FISICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            28 => 
            array (
                'id' => 529,
                'nombre' => '4 HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            29 => 
            array (
                'id' => 530,
                'nombre' => '5 HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            30 => 
            array (
                'id' => 531,
                'nombre' => '6 HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            31 => 
            array (
                'id' => 532,
                'nombre' => '7 HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            32 => 
            array (
                'id' => 533,
                'nombre' => '8 HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            33 => 
            array (
                'id' => 534,
                'nombre' => 'RECONSTITUÍDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            34 => 
            array (
                'id' => 535,
                'nombre' => 'COMIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            35 => 
            array (
                'id' => 536,
                'nombre' => 'OTRA COSA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            36 => 
            array (
                'id' => 537,
                'nombre' => 'OTRO BENEFICIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            37 => 
            array (
                'id' => 538,
                'nombre' => 'NUEVO BENEFICIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            38 => 
            array (
                'id' => 539,
                'nombre' => 'CENTRO COMERCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            39 => 
            array (
                'id' => 540,
                'nombre' => '10 HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            40 => 
            array (
                'id' => 541,
                'nombre' => '2004',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            41 => 
            array (
                'id' => 542,
                'nombre' => '2005',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            42 => 
            array (
                'id' => 543,
                'nombre' => '2006',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            43 => 
            array (
                'id' => 544,
                'nombre' => '2007',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            44 => 
            array (
                'id' => 545,
                'nombre' => '2008',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            45 => 
            array (
                'id' => 546,
                'nombre' => 'UNIPERSONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            46 => 
            array (
                'id' => 547,
                'nombre' => 'COMUNITARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            47 => 
            array (
                'id' => 548,
                'nombre' => 'INSTITUCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            48 => 
            array (
                'id' => 549,
                'nombre' => '2010',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            49 => 
            array (
                'id' => 550,
                'nombre' => '2012',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            50 => 
            array (
                'id' => 551,
                'nombre' => 'PARA BORRAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            51 => 
            array (
                'id' => 552,
                'nombre' => 'COMPARTIDO PARENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            52 => 
            array (
                'id' => 553,
                'nombre' => 'COMPARTIDO NO PARENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            53 => 
            array (
                'id' => 554,
                'nombre' => 'REUNIRSE CON FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            54 => 
            array (
                'id' => 555,
                'nombre' => 'BÊSQUEDA DE EMPLEO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            55 => 
            array (
                'id' => 556,
                'nombre' => 'PROBLEMAS DE ORDEN PÊBLICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            56 => 
            array (
                'id' => 557,
                'nombre' => 'ECONÓMICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            57 => 
            array (
                'id' => 558,
                'nombre' => 'SEGURIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            58 => 
            array (
                'id' => 559,
                'nombre' => 'NO AVANZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            59 => 
            array (
                'id' => 560,
                'nombre' => 'DESCOLARIZACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            60 => 
            array (
                'id' => 561,
                'nombre' => 'PERMANENCIA EN CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            61 => 
            array (
                'id' => 562,
                'nombre' => 'OC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            62 => 
            array (
                'id' => 563,
                'nombre' => 'RIESGO ESCNNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            63 => 
            array (
                'id' => 564,
                'nombre' => 'VIOLENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            64 => 
            array (
                'id' => 565,
                'nombre' => 'ACHAGUA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            65 => 
            array (
                'id' => 566,
                'nombre' => 'ABANDONO FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            66 => 
            array (
                'id' => 567,
                'nombre' => 'CONSUMO DE SUSTANCIAS PSICOACTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            67 => 
            array (
                'id' => 568,
                'nombre' => 'DESESCOLARIZACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            68 => 
            array (
                'id' => 569,
                'nombre' => 'DIFICULTADES EN PAUTA DE CRIANZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            69 => 
            array (
                'id' => 570,
                'nombre' => 'ENTIDADES PRIVADAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            70 => 
            array (
                'id' => 571,
                'nombre' => 'HABITABILIDAD EN CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            71 => 
            array (
                'id' => 572,
                'nombre' => 'CONDUCTAS DELICTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            72 => 
            array (
                'id' => 573,
                'nombre' => 'CONDUCTAS AGRESIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            73 => 
            array (
                'id' => 574,
                'nombre' => 'DIFICULTADES FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            74 => 
            array (
                'id' => 575,
                'nombre' => 'CONFLICTOS CON LA PAREJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            75 => 
            array (
                'id' => 576,
                'nombre' => 'DIFICULTADES ECONÓMICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            76 => 
            array (
                'id' => 577,
                'nombre' => 'AMENAZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            77 => 
            array (
                'id' => 578,
                'nombre' => 'DESPLAZAMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            78 => 
            array (
                'id' => 579,
                'nombre' => 'DESAPROVECHAMIENTO DEL TIEMPO LIBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            79 => 
            array (
                'id' => 580,
                'nombre' => 'PARES NEGATIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            80 => 
            array (
                'id' => 581,
                'nombre' => 'PRESUNTO ABUSO SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            81 => 
            array (
                'id' => 582,
                'nombre' => 'RIESGO CONTEXTO BARRIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            82 => 
            array (
                'id' => 583,
                'nombre' => 'DESMOTIVACIÓN ESCOLAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            83 => 
            array (
                'id' => 584,
                'nombre' => 'DE FORMA AUTORITARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            84 => 
            array (
                'id' => 585,
                'nombre' => 'DE MANERA PERMISIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            85 => 
            array (
                'id' => 586,
                'nombre' => 'HAY AUSENCIA DE AUTORIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            86 => 
            array (
                'id' => 587,
                'nombre' => 'POR LO GENERAL LA MAYORÍA LAS ACEPTAN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            87 => 
            array (
                'id' => 588,
                'nombre' => 'POR LO GENERAL LA MAYORÍA NO LAS CUMPLEN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            88 => 
            array (
                'id' => 589,
                'nombre' => 'DIALOGANDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            89 => 
            array (
                'id' => 590,
                'nombre' => 'MALTRATO FÍSICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            90 => 
            array (
                'id' => 591,
                'nombre' => 'MALTRATO VERBAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            91 => 
            array (
                'id' => 592,
                'nombre' => 'MALTRATO PSICOLÓGICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            92 => 
            array (
                'id' => 593,
                'nombre' => 'EVADE LA SITUACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            93 => 
            array (
                'id' => 594,
                'nombre' => 'IGLESIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            94 => 
            array (
                'id' => 595,
                'nombre' => 'ANDEN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            95 => 
            array (
                'id' => 596,
                'nombre' => 'INSTITUCIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            96 => 
            array (
                'id' => 597,
                'nombre' => 'POLICÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            97 => 
            array (
                'id' => 598,
                'nombre' => 'PUENTE VEHICULAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            98 => 
            array (
                'id' => 599,
            'nombre' => 'PSICÓLOGO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            99 => 
            array (
                'id' => 600,
                'nombre' => 'VECINO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            100 => 
            array (
                'id' => 601,
                'nombre' => 'AMIGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            101 => 
            array (
                'id' => 602,
                'nombre' => 'AGRESIÓN FÍSICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            102 => 
            array (
                'id' => 603,
                'nombre' => 'AGRESIÓN VERBAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            103 => 
            array (
                'id' => 604,
                'nombre' => 'NO PASA NADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            104 => 
            array (
                'id' => 605,
                'nombre' => 'PRIVACIÓN DE COSAS MATERIALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            105 => 
            array (
                'id' => 606,
                'nombre' => 'PRIVACIÓN DE SALIDAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            106 => 
            array (
                'id' => 607,
                'nombre' => 'FÁCILMENTE DEMUESTRAN LO QUE SIENTEN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            107 => 
            array (
                'id' => 608,
                'nombre' => 'SE LES DIFICULTA DEMOSTRAR SUS SENTIMIENTOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            108 => 
            array (
                'id' => 609,
                'nombre' => 'LO PASAN POR ALTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            109 => 
            array (
                'id' => 610,
                'nombre' => 'SE FELICITAN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            110 => 
            array (
                'id' => 611,
                'nombre' => 'SE MOTIVAN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            111 => 
            array (
                'id' => 612,
                'nombre' => 'DIARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            112 => 
            array (
                'id' => 613,
                'nombre' => 'MENSUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            113 => 
            array (
                'id' => 614,
                'nombre' => 'SEMANAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            114 => 
            array (
                'id' => 615,
                'nombre' => 'TIENDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            115 => 
            array (
                'id' => 616,
                'nombre' => 'PLAZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            116 => 
            array (
                'id' => 617,
                'nombre' => 'SUPERMERCADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            117 => 
            array (
                'id' => 618,
                'nombre' => 'DESAYUNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            118 => 
            array (
                'id' => 619,
                'nombre' => 'MERIENDA MAÑANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            119 => 
            array (
                'id' => 620,
                'nombre' => 'ALMUERZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            120 => 
            array (
                'id' => 621,
                'nombre' => 'MERIENDA TARDE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            121 => 
            array (
                'id' => 622,
                'nombre' => 'CENA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            122 => 
            array (
                'id' => 623,
                'nombre' => 'COLEGIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            123 => 
            array (
                'id' => 624,
                'nombre' => 'PUENTE PEATONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            124 => 
            array (
                'id' => 625,
                'nombre' => 'SECRETARÍA DE INTEGRACIÓN SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            125 => 
            array (
                'id' => 626,
                'nombre' => 'TRABAJO FORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            126 => 
            array (
                'id' => 627,
                'nombre' => 'TRABAJO INFORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            127 => 
            array (
                'id' => 628,
                'nombre' => 'OTRAS ACTIVIDADES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            128 => 
            array (
                'id' => 629,
                'nombre' => 'PARAUSAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            129 => 
            array (
                'id' => 630,
                'nombre' => 'COMERCIANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            130 => 
            array (
                'id' => 631,
                'nombre' => 'VENTA AMBULANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            131 => 
            array (
                'id' => 632,
                'nombre' => 'REBUSQUE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            132 => 
            array (
                'id' => 633,
                'nombre' => 'VENTA EN SEMÁFOROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            133 => 
            array (
                'id' => 634,
                'nombre' => 'RECICLAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            134 => 
            array (
                'id' => 635,
                'nombre' => 'OTRA ACTIVIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            135 => 
            array (
                'id' => 636,
                'nombre' => 'CONTRATO A DESTAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            136 => 
            array (
                'id' => 637,
            'nombre' => 'PROSTITUCIÓN (MAYOR DE 18)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            137 => 
            array (
                'id' => 638,
            'nombre' => 'UTILIZACIÓN PARA EXPLOTACIÓN SEXUAL-ESCNNA (MENOR DE 18)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            138 => 
            array (
                'id' => 639,
                'nombre' => 'MENDICIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            139 => 
            array (
                'id' => 640,
                'nombre' => 'HURTAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            140 => 
            array (
                'id' => 641,
                'nombre' => 'VENTA DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            141 => 
            array (
                'id' => 642,
                'nombre' => 'CONTRATO A TÉRMINO INDEFINIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            142 => 
            array (
                'id' => 643,
                'nombre' => 'CONTRATO A TÉRMINO FIJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            143 => 
            array (
                'id' => 644,
                'nombre' => 'CONTRATO PRESTACIÓN DE SERVICIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            144 => 
            array (
                'id' => 645,
                'nombre' => 'CONTRATO VERBAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            145 => 
            array (
                'id' => 646,
                'nombre' => 'NO TIENE CONTRATO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            146 => 
            array (
                'id' => 647,
                'nombre' => 'TRABAJADOR INDEPENDIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            147 => 
            array (
                'id' => 648,
                'nombre' => 'AMORUA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            148 => 
            array (
                'id' => 649,
                'nombre' => 'YARURO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            149 => 
            array (
                'id' => 650,
            'nombre' => 'CIUDADANO(A) HABITANTE DE CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            150 => 
            array (
                'id' => 651,
                'nombre' => 'EN RIESGO DE HABITABILIDAD EN CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            151 => 
            array (
                'id' => 652,
                'nombre' => 'ANDOKE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            152 => 
            array (
                'id' => 653,
                'nombre' => 'ARHUACO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            153 => 
            array (
                'id' => 654,
                'nombre' => 'ARZARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            154 => 
            array (
                'id' => 655,
            'nombre' => 'AUSENCIA DEL/LOS REPRESENTANTE(S) LEGAL(ES)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            155 => 
            array (
                'id' => 656,
                'nombre' => 'UTILIZACIÓN EN PROSTITUCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            156 => 
            array (
                'id' => 657,
                'nombre' => 'UTILIZACIÓN EN PORNOGRAFÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            157 => 
            array (
                'id' => 658,
                'nombre' => 'ACTIVIDADES VINCULADAS AL TURISMO SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            158 => 
            array (
                'id' => 659,
                'nombre' => 'TRATA CON FINES SEXUALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            159 => 
            array (
                'id' => 660,
                'nombre' => 'MATROMONIOS O UNIONES SERVILES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            160 => 
            array (
                'id' => 661,
                'nombre' => 'EXPLOTACIÓN SEXUAL POR GRUPOS ARMADOS ORGANIZADOS AL MARGEN DE LA LEY',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            161 => 
            array (
                'id' => 662,
                'nombre' => 'INFLUENCIA DE PARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            162 => 
            array (
                'id' => 663,
                'nombre' => 'VIOLENCIA INTRAFAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            163 => 
            array (
                'id' => 664,
                'nombre' => 'VIOLENCIA FÍSICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            164 => 
            array (
                'id' => 665,
                'nombre' => 'VIOLENCIA PSICOLÓGICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            165 => 
            array (
                'id' => 666,
                'nombre' => 'EMPLEADO EMPRESA PRIVADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            166 => 
            array (
                'id' => 667,
                'nombre' => 'CONSUMO DE ALCOHOL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            167 => 
            array (
                'id' => 668,
                'nombre' => 'HUMEDAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            168 => 
            array (
                'id' => 669,
                'nombre' => 'AUSENCIA DE LAZOS AFECTIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            169 => 
            array (
                'id' => 670,
                'nombre' => 'RELACIONES FAMILIARES CONFLICTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            170 => 
            array (
                'id' => 671,
                'nombre' => 'SIEMPRE HA HABITADO LA CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            171 => 
            array (
                'id' => 672,
                'nombre' => 'ENFERMEDAD FÍSICA O MENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            172 => 
            array (
                'id' => 673,
                'nombre' => 'FALTA DE OPORTUNIDADES LABORALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            173 => 
            array (
                'id' => 674,
                'nombre' => 'FALTA DE OPORTUNIDADES DE FORMACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            174 => 
            array (
                'id' => 675,
                'nombre' => 'BÊSQUEDA DE MEDIOS DE SUBSISTENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            175 => 
            array (
                'id' => 676,
                'nombre' => 'EXPLOTACIÓN LABORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            176 => 
            array (
                'id' => 677,
                'nombre' => 'EXPLOTACIÓN SEXUAL Y COMERCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            177 => 
            array (
                'id' => 678,
                'nombre' => 'DECISIÓN VOLUNTARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            178 => 
            array (
                'id' => 679,
                'nombre' => 'BÊSQUEDA DE AUTONOMÍA E INDEPENDENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            179 => 
            array (
                'id' => 680,
                'nombre' => 'DESCUIDO POR PARTE DE PERSONAS PROGENITORAS/CUIDADORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            180 => 
            array (
                'id' => 681,
                'nombre' => 'FAMILIA HABITANTE DE CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            181 => 
            array (
                'id' => 682,
                'nombre' => 'ÁRBOL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            182 => 
            array (
                'id' => 683,
                'nombre' => 'INFLUENCIA SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            183 => 
            array (
                'id' => 684,
                'nombre' => 'ME PRODUCE SATISFACCIóN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            184 => 
            array (
                'id' => 685,
                'nombre' => 'CONSUMO EXPLORATORIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            185 => 
            array (
                'id' => 686,
            'nombre' => 'MITIGAR (REDUCIR)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            186 => 
            array (
                'id' => 687,
                'nombre' => 'MANTENERLO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            187 => 
            array (
                'id' => 688,
                'nombre' => 'DEJARLO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            188 => 
            array (
                'id' => 689,
                'nombre' => 'NINGUNA DE LAS ANTERIORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            189 => 
            array (
                'id' => 690,
                'nombre' => 'PUBLICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            190 => 
            array (
                'id' => 691,
                'nombre' => 'PRIVADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            191 => 
            array (
                'id' => 692,
                'nombre' => 'BARA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            192 => 
            array (
                'id' => 693,
                'nombre' => 'BARASANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            193 => 
            array (
                'id' => 694,
                'nombre' => 'BARI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            194 => 
            array (
                'id' => 695,
                'nombre' => 'BETOYE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            195 => 
            array (
                'id' => 696,
                'nombre' => '29',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            196 => 
            array (
                'id' => 697,
                'nombre' => '30',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            197 => 
            array (
                'id' => 698,
                'nombre' => '39',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            198 => 
            array (
                'id' => 699,
                'nombre' => '40',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            199 => 
            array (
                'id' => 700,
                'nombre' => 'XS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            200 => 
            array (
                'id' => 701,
                'nombre' => 'L',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            201 => 
            array (
                'id' => 702,
                'nombre' => 'XL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            202 => 
            array (
                'id' => 703,
                'nombre' => 'XXL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            203 => 
            array (
                'id' => 704,
                'nombre' => 'ESTACIÓN DE TRASMILENIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            204 => 
            array (
                'id' => 705,
                'nombre' => 'MUJER ADULTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            205 => 
            array (
                'id' => 706,
                'nombre' => 'CALLES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            206 => 
            array (
                'id' => 707,
                'nombre' => 'MUJER NIÑA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            207 => 
            array (
                'id' => 708,
                'nombre' => 'CAÑOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            208 => 
            array (
                'id' => 709,
                'nombre' => 'CAMBUCHES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            209 => 
            array (
                'id' => 710,
            'nombre' => 'EMPLEADO(A) DEL GOBIERNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            210 => 
            array (
                'id' => 711,
                'nombre' => 'BUSCA EMPLEO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            211 => 
            array (
                'id' => 712,
                'nombre' => '01:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            212 => 
            array (
                'id' => 713,
                'nombre' => '02:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            213 => 
            array (
                'id' => 714,
                'nombre' => '03:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            214 => 
            array (
                'id' => 715,
                'nombre' => '04:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            215 => 
            array (
                'id' => 716,
                'nombre' => '05:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            216 => 
            array (
                'id' => 717,
                'nombre' => '06:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            217 => 
            array (
                'id' => 718,
                'nombre' => '07:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            218 => 
            array (
                'id' => 719,
                'nombre' => '08:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            219 => 
            array (
                'id' => 720,
                'nombre' => '09:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            220 => 
            array (
                'id' => 721,
                'nombre' => '10:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            221 => 
            array (
                'id' => 722,
                'nombre' => '11:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            222 => 
            array (
                'id' => 723,
                'nombre' => '12:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            223 => 
            array (
                'id' => 724,
                'nombre' => '13:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            224 => 
            array (
                'id' => 725,
                'nombre' => '14:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            225 => 
            array (
                'id' => 726,
                'nombre' => '15:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            226 => 
            array (
                'id' => 727,
                'nombre' => '16:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            227 => 
            array (
                'id' => 728,
                'nombre' => '17:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            228 => 
            array (
                'id' => 729,
                'nombre' => '18:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            229 => 
            array (
                'id' => 730,
                'nombre' => '19:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:39',
                'updated_at' => '2021-06-02 14:14:39',
            ),
            230 => 
            array (
                'id' => 731,
                'nombre' => '20:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            231 => 
            array (
                'id' => 732,
                'nombre' => '21:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            232 => 
            array (
                'id' => 733,
                'nombre' => '22:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            233 => 
            array (
                'id' => 734,
                'nombre' => '23:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            234 => 
            array (
                'id' => 735,
                'nombre' => '24:00 HRS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            235 => 
            array (
                'id' => 736,
                'nombre' => 'AVENIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            236 => 
            array (
                'id' => 737,
                'nombre' => 'CARRERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            237 => 
            array (
                'id' => 738,
            'nombre' => 'VENDEDOR(A) INFORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            238 => 
            array (
                'id' => 739,
                'nombre' => 'AVENIDA CL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            239 => 
            array (
                'id' => 740,
                'nombre' => 'TRANSVERSAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            240 => 
            array (
                'id' => 741,
                'nombre' => 'AVENIDA CR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            241 => 
            array (
                'id' => 742,
                'nombre' => 'DIAGONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            242 => 
            array (
                'id' => 743,
                'nombre' => 'E',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            243 => 
            array (
                'id' => 744,
                'nombre' => 'F',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            244 => 
            array (
                'id' => 745,
                'nombre' => 'G',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            245 => 
            array (
                'id' => 746,
                'nombre' => 'H',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            246 => 
            array (
                'id' => 747,
                'nombre' => 'J',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            247 => 
            array (
                'id' => 748,
                'nombre' => 'K',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            248 => 
            array (
                'id' => 749,
                'nombre' => 'N',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            249 => 
            array (
                'id' => 750,
                'nombre' => 'Ñ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            250 => 
            array (
                'id' => 751,
                'nombre' => 'P',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            251 => 
            array (
                'id' => 752,
                'nombre' => 'Q',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            252 => 
            array (
                'id' => 753,
                'nombre' => 'R',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            253 => 
            array (
                'id' => 754,
                'nombre' => 'T',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            254 => 
            array (
                'id' => 755,
                'nombre' => 'U',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            255 => 
            array (
                'id' => 756,
                'nombre' => 'V',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            256 => 
            array (
                'id' => 757,
                'nombre' => 'W',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            257 => 
            array (
                'id' => 758,
                'nombre' => 'X',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            258 => 
            array (
                'id' => 759,
                'nombre' => 'Z',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            259 => 
            array (
                'id' => 760,
                'nombre' => 'BASUCO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            260 => 
            array (
                'id' => 761,
                'nombre' => 'ESTUDIO ACADÉMICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            261 => 
            array (
                'id' => 762,
                'nombre' => 'FORMACIÓN TÉCNICA PARA EL TRABAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            262 => 
            array (
                'id' => 763,
                'nombre' => 'TALLER VOCACIONAL/EMPRENDIMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            263 => 
            array (
                'id' => 764,
                'nombre' => 'ASESORÍA LEGAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            264 => 
            array (
                'id' => 765,
                'nombre' => 'APOYO PSICOSOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            265 => 
            array (
                'id' => 766,
                'nombre' => 'REALIZAR UN PROCESO DE RECUPERACIÓN FRENTE AL CONSUMO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            266 => 
            array (
                'id' => 767,
                'nombre' => 'PROYECCIÓN DE UN NEGOCIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            267 => 
            array (
                'id' => 768,
                'nombre' => 'FORTALECER DIMENSIÓN ESPIRITUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            268 => 
            array (
                'id' => 769,
                'nombre' => 'SERVICIO DE DIGNIFICACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            269 => 
            array (
                'id' => 770,
                'nombre' => 'PADRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            270 => 
            array (
                'id' => 771,
                'nombre' => 'MADRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            271 => 
            array (
                'id' => 772,
                'nombre' => 'REPRESENTANTE LEGAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            272 => 
            array (
                'id' => 773,
                'nombre' => 'INTERNADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            273 => 
            array (
                'id' => 774,
                'nombre' => 'EXTERNADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            274 => 
            array (
                'id' => 775,
                'nombre' => 'TERRITORIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            275 => 
            array (
                'id' => 776,
                'nombre' => 'HERMANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            276 => 
            array (
                'id' => 777,
                'nombre' => 'HERMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            277 => 
            array (
                'id' => 778,
                'nombre' => 'PRIMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            278 => 
            array (
                'id' => 779,
                'nombre' => 'PRIMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            279 => 
            array (
                'id' => 780,
                'nombre' => 'PADRASTRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            280 => 
            array (
                'id' => 781,
                'nombre' => 'MADRASTRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            281 => 
            array (
                'id' => 782,
                'nombre' => 'HERMANASTRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            282 => 
            array (
                'id' => 783,
                'nombre' => 'HERMANASTRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            283 => 
            array (
                'id' => 784,
                'nombre' => 'CÓNYUGE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            284 => 
            array (
                'id' => 785,
                'nombre' => 'HIJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            285 => 
            array (
                'id' => 786,
                'nombre' => 'HIJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            286 => 
            array (
                'id' => 787,
                'nombre' => 'SOBRINO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            287 => 
            array (
                'id' => 788,
                'nombre' => 'SOBRINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            288 => 
            array (
                'id' => 789,
                'nombre' => 'CUÑADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            289 => 
            array (
                'id' => 790,
                'nombre' => 'CUÑADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            290 => 
            array (
                'id' => 791,
                'nombre' => 'PADRINO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            291 => 
            array (
                'id' => 792,
                'nombre' => 'MADRINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            292 => 
            array (
                'id' => 793,
                'nombre' => 'TIO PATERNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            293 => 
            array (
                'id' => 794,
                'nombre' => 'TIO MATERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            294 => 
            array (
                'id' => 795,
                'nombre' => 'ABUELO PATERNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            295 => 
            array (
                'id' => 796,
                'nombre' => 'ABUELO MATERNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            296 => 
            array (
                'id' => 797,
                'nombre' => 'ABUELASTRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            297 => 
            array (
                'id' => 798,
                'nombre' => 'SUEGRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            298 => 
            array (
                'id' => 799,
                'nombre' => 'SUEGRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            299 => 
            array (
                'id' => 800,
                'nombre' => 'DEFENSOR DE FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            300 => 
            array (
                'id' => 801,
                'nombre' => 'NOVIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            301 => 
            array (
                'id' => 802,
                'nombre' => 'NOVIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            302 => 
            array (
                'id' => 803,
                'nombre' => 'AMIGO/A',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            303 => 
            array (
                'id' => 804,
                'nombre' => 'ACTIVIDADES DELICTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            304 => 
            array (
                'id' => 805,
            'nombre' => 'YO (NNAJ)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            305 => 
            array (
                'id' => 806,
                'nombre' => 'INCAPACIDAD PARA TRABAJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            306 => 
            array (
                'id' => 807,
                'nombre' => 'OTRO, CUÁL?',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            307 => 
            array (
                'id' => 808,
                'nombre' => 'ACOMPAÑANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            308 => 
            array (
                'id' => 809,
                'nombre' => 'COMPAÑERO/A',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            309 => 
            array (
                'id' => 810,
                'nombre' => 'NO FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            310 => 
            array (
                'id' => 811,
                'nombre' => 'SERVICIO DOMÉSTICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            311 => 
            array (
                'id' => 812,
                'nombre' => 'HOGAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            312 => 
            array (
                'id' => 813,
                'nombre' => 'POR CONDICIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            313 => 
            array (
                'id' => 814,
                'nombre' => 'POR OPCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            314 => 
            array (
                'id' => 815,
                'nombre' => 'POR PROTECCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            315 => 
            array (
                'id' => 816,
                'nombre' => 'CUENTA PROPIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            316 => 
            array (
                'id' => 817,
                'nombre' => 'VOZ A VOZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            317 => 
            array (
                'id' => 818,
                'nombre' => 'PUBLICIDAD EN UPI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            318 => 
            array (
                'id' => 819,
                'nombre' => 'PROMOCION EXTERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            319 => 
            array (
                'id' => 820,
                'nombre' => 'CORRECCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            320 => 
            array (
                'id' => 821,
                'nombre' => 'PROTECCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            321 => 
            array (
                'id' => 822,
                'nombre' => '6.3 ¿EN CUÁLES CONTEXTOS SE LE DIFICULTAD INTERACTUAR CON OTRAS PERSONAS?',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            322 => 
            array (
                'id' => 823,
                'nombre' => 'JORNADA MAÑANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            323 => 
            array (
                'id' => 824,
                'nombre' => 'JORNADA TARDE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            324 => 
            array (
                'id' => 825,
                'nombre' => 'JORNADA NOCTURNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            325 => 
            array (
                'id' => 826,
                'nombre' => 'JC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            326 => 
            array (
                'id' => 827,
                'nombre' => 'FS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            327 => 
            array (
                'id' => 828,
                'nombre' => 'VIRTUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            328 => 
            array (
                'id' => 829,
                'nombre' => 'NO FUE A LA ESCUELA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            329 => 
            array (
                'id' => 830,
                'nombre' => 'INICIAL/PREESCOLAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            330 => 
            array (
                'id' => 831,
                'nombre' => 'PRIMARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            331 => 
            array (
                'id' => 832,
                'nombre' => 'BÁSICA SECUNDARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            332 => 
            array (
                'id' => 833,
                'nombre' => 'BACHILLERATO ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            333 => 
            array (
                'id' => 834,
                'nombre' => 'TÉCNICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            334 => 
            array (
                'id' => 835,
                'nombre' => 'TECNÓLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            335 => 
            array (
                'id' => 836,
                'nombre' => 'PROFESIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            336 => 
            array (
                'id' => 837,
                'nombre' => 'POSTGRADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            337 => 
            array (
                'id' => 838,
                'nombre' => 'MAESTRÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            338 => 
            array (
                'id' => 839,
                'nombre' => 'ST',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            339 => 
            array (
                'id' => 840,
                'nombre' => '7',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            340 => 
            array (
                'id' => 841,
                'nombre' => '9',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            341 => 
            array (
                'id' => 842,
                'nombre' => '6.4 ¿CUÁL ES LA DIFICULTAD PARA LOGRAR LA INTERACCIÓN?',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            342 => 
            array (
                'id' => 843,
                'nombre' => 'DOCUMENTO IDENTIDAD NNAJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            343 => 
            array (
                'id' => 844,
                'nombre' => 'CÉDULA CIUDADANIA, FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            344 => 
            array (
                'id' => 845,
                'nombre' => 'RECIBO PÊBLICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            345 => 
            array (
                'id' => 846,
                'nombre' => 'CERTIFICADOS ACADÉMICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            346 => 
            array (
                'id' => 847,
                'nombre' => 'LIBRETA MILITAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            347 => 
            array (
                'id' => 848,
                'nombre' => 'REGISTRO CIVIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            348 => 
            array (
                'id' => 849,
                'nombre' => 'RUV REGISTRO ÊNICO DE VICTIMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            349 => 
            array (
                'id' => 850,
                'nombre' => 'AFILIACIÓN A SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            350 => 
            array (
                'id' => 851,
                'nombre' => 'DISCAPACIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            351 => 
            array (
                'id' => 852,
                'nombre' => '9.3 ¿CÓMO REACCIONA ANTE EVENTOS O SITUACIONES QUE LE GENEREN UN CAMBIO EMOCIONAL SIGNIFICATIVO?',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            352 => 
            array (
                'id' => 853,
                'nombre' => 'NINGUNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            353 => 
            array (
                'id' => 854,
                'nombre' => '2.1 ¿TIENE LUGAR DE RESIDENCIA DÓNDE DORMIR? RESPUESTA: NO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            354 => 
            array (
                'id' => 855,
                'nombre' => 'OTRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            355 => 
            array (
                'id' => 856,
                'nombre' => '2.2 TIPO DE RESIDENCIA O LUGAR DONDE DUERME RESPUESTA: OPCION 7 EN ADELANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            356 => 
            array (
                'id' => 857,
                'nombre' => 'NIÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            357 => 
            array (
                'id' => 858,
                'nombre' => 'NIÑA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            358 => 
            array (
                'id' => 859,
                'nombre' => 'ADOLESCENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            359 => 
            array (
                'id' => 860,
                'nombre' => 'JOVEN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            360 => 
            array (
                'id' => 861,
                'nombre' => 'ORDINARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            361 => 
            array (
                'id' => 862,
                'nombre' => '8.1 ANTECEDENTES INSTITUCIONALES RESPUESTA: NO REGISTRA RED DE APOYO EN LA VIGENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            362 => 
            array (
                'id' => 863,
            'nombre' => 'EMPLEADO(A) DOMÉSTICO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            363 => 
            array (
                'id' => 864,
                'nombre' => 'SORDOCEGUERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            364 => 
            array (
                'id' => 865,
                'nombre' => 'DIFICULTAD DE AUTOESTIMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            365 => 
            array (
                'id' => 866,
                'nombre' => 'DUELO NO ELABORADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            366 => 
            array (
                'id' => 867,
                'nombre' => 'DEPENDENCIA AFECTIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            367 => 
            array (
                'id' => 868,
                'nombre' => 'BAJA TOLERANCIA A LA FRUSTRACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            368 => 
            array (
                'id' => 869,
                'nombre' => 'ANSIEDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            369 => 
            array (
                'id' => 870,
                'nombre' => 'DEPRESIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            370 => 
            array (
                'id' => 871,
                'nombre' => 'DIFICULTADES EN EXPRESIÓN DE EMOCIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            371 => 
            array (
                'id' => 872,
                'nombre' => 'DISCRIMINACIÓN POR GÉNERO, IDENTIDAD DE GÉNERO U ORIENTACIÓN SEXUAL.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            372 => 
            array (
                'id' => 873,
                'nombre' => 'PRESUNTA EXPLOTACION SEXUAL COMERCIAL DE NIÑOS, NIÑAS Y ADOLESCENTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            373 => 
            array (
                'id' => 874,
                'nombre' => 'INICIACIÓN SEXUAL A TEMPRANA EDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            374 => 
            array (
                'id' => 875,
                'nombre' => 'AGRESIVIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            375 => 
            array (
                'id' => 876,
                'nombre' => 'RELACIONES DE PODER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            376 => 
            array (
                'id' => 877,
                'nombre' => 'DIFICULTAD EN ASUMIR NORMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            377 => 
            array (
                'id' => 878,
                'nombre' => 'CONDUCTAS DE CONSUMO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            378 => 
            array (
                'id' => 879,
                'nombre' => 'DESMOTIVACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            379 => 
            array (
                'id' => 880,
                'nombre' => 'CONVIVENCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            380 => 
            array (
                'id' => 881,
                'nombre' => 'REPITENCIA ESCOLAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            381 => 
            array (
                'id' => 882,
                'nombre' => 'CONSUMO DE SPA POR INFLUENCIA DEL CONTEXTO ACADÉMICO O PARES NEGATIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            382 => 
            array (
                'id' => 883,
                'nombre' => 'DEFICIT EN HABILIDADES SOCIALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            383 => 
            array (
                'id' => 884,
                'nombre' => 'AUSENCIA DE REDES SOCIALES DE APOYO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            384 => 
            array (
                'id' => 885,
                'nombre' => 'DIFICULTADES EN EL CONTEXTO SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            385 => 
            array (
                'id' => 886,
                'nombre' => 'INFLUENCIA NEGATIVA DE PARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            386 => 
            array (
                'id' => 887,
                'nombre' => 'CONSUMO DE SPA POR INFLUENCIA DEL CONTEXTO CULTURAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            387 => 
            array (
                'id' => 888,
                'nombre' => 'CONSUMO DE SPA POR CONTEXTO BARRIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            388 => 
            array (
                'id' => 889,
                'nombre' => 'PAUTAS DE CRIANZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            389 => 
            array (
                'id' => 890,
                'nombre' => 'DIFICULTADES EN LAS RELACIONES FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            390 => 
            array (
                'id' => 891,
                'nombre' => 'PRESUNTA NEGLIGENCIA DE LOS PROGENITORES Y/O CUIDADORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            391 => 
            array (
                'id' => 892,
                'nombre' => 'EJERCICIO O ANTECEDENTES DE PROSTITUCIÓN DE UN FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            392 => 
            array (
                'id' => 893,
                'nombre' => 'CONSUMO POR ANTECEDENTES FAMILIARES EN USO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            393 => 
            array (
                'id' => 894,
                'nombre' => 'ANTECEDENTES FAMILIARES O INDIVIDUALES DE PRIVACIÓN DE LA LIBERTAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            394 => 
            array (
                'id' => 895,
                'nombre' => 'ANTECEDENTE DE HABITABILIDAD EN CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            395 => 
            array (
                'id' => 896,
                'nombre' => 'PROCESOS REITERATIVOS DE INSTITUCIONALIZACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            396 => 
            array (
                'id' => 897,
                'nombre' => 'CONSUMO DE SPA POR CONDICIONES ECONÓMICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            397 => 
            array (
                'id' => 898,
                'nombre' => 'CONSUMO DE SPA POR PRESUNTO EXPENDIO EN LUGAR DE VIVIENDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            398 => 
            array (
                'id' => 899,
                'nombre' => 'ANTECEDENTES FAMILIARES ASOCIADOS A CONDUCTAS DELICTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            399 => 
            array (
                'id' => 900,
                'nombre' => 'CONSUMO DE SPA POR DINÁMICA FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            400 => 
            array (
                'id' => 901,
                'nombre' => 'NO DIFICULTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            401 => 
            array (
                'id' => 902,
            'nombre' => '8.2 REDES DE APOYO ACTUALES (ASOCIADAS A LA FAMILIA DEL NNAJ) RESPUESTA: NO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            402 => 
            array (
                'id' => 903,
                'nombre' => '12.1 ¿PRESENTA ALGUNA RED DE APOYO? RESPUESTA: NO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            403 => 
            array (
                'id' => 904,
                'nombre' => 'DISCUSIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            404 => 
            array (
                'id' => 905,
                'nombre' => 'ARMONIOSA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            405 => 
            array (
                'id' => 906,
            'nombre' => 'CAVIF (FISCALIA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            406 => 
            array (
                'id' => 907,
                'nombre' => 'PROTECTOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            407 => 
            array (
                'id' => 908,
                'nombre' => 'RIESGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            408 => 
            array (
                'id' => 909,
                'nombre' => 'FELIZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            409 => 
            array (
                'id' => 910,
            'nombre' => 'ENOJADO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            410 => 
            array (
                'id' => 911,
                'nombre' => 'TRISTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            411 => 
            array (
                'id' => 912,
                'nombre' => 'PREOCUPADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            412 => 
            array (
                'id' => 913,
                'nombre' => 'EDUCATIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            413 => 
            array (
                'id' => 914,
                'nombre' => 'ESPACIO PÊBLICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            414 => 
            array (
                'id' => 915,
                'nombre' => 'PASIVIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            415 => 
            array (
                'id' => 916,
                'nombre' => 'ASERTIVIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            416 => 
            array (
                'id' => 917,
                'nombre' => 'RABIA-IRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            417 => 
            array (
                'id' => 918,
                'nombre' => 'ASCO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            418 => 
            array (
                'id' => 919,
                'nombre' => 'ANGUSTIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            419 => 
            array (
                'id' => 920,
                'nombre' => 'MIEDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            420 => 
            array (
                'id' => 921,
                'nombre' => 'TEMOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            421 => 
            array (
                'id' => 922,
                'nombre' => 'SORPRESA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            422 => 
            array (
                'id' => 923,
                'nombre' => 'DESÁNIMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            423 => 
            array (
                'id' => 924,
                'nombre' => 'VERGÌENZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            424 => 
            array (
                'id' => 925,
                'nombre' => 'CELOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            425 => 
            array (
                'id' => 926,
                'nombre' => 'FELICIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            426 => 
            array (
                'id' => 927,
                'nombre' => 'ENTUSIASMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            427 => 
            array (
                'id' => 928,
                'nombre' => 'ADMIRACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            428 => 
            array (
                'id' => 929,
                'nombre' => 'TRISTEZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            429 => 
            array (
                'id' => 930,
                'nombre' => 'TRANQUILIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            430 => 
            array (
                'id' => 931,
                'nombre' => 'NO REFIERE EMOCIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            431 => 
            array (
                'id' => 932,
                'nombre' => 'VIOLENCIA BASADA EN GÉNERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            432 => 
            array (
                'id' => 933,
                'nombre' => 'VIOLENCIA BASADA EN IDENTIDAD DE GÉNERO ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            433 => 
            array (
                'id' => 934,
                'nombre' => 'VIOLENCIA BASADA EN ORIENTACIÓN SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            434 => 
            array (
                'id' => 935,
                'nombre' => 'DIFICULTADES DE PAREJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            435 => 
            array (
                'id' => 936,
                'nombre' => 'VICTIMA DEL CONFLICTO ARMADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            436 => 
            array (
                'id' => 937,
                'nombre' => 'CRISIS ECONÓMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            437 => 
            array (
                'id' => 938,
                'nombre' => 'BAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            438 => 
            array (
                'id' => 939,
                'nombre' => 'MEDIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            439 => 
            array (
                'id' => 940,
                'nombre' => 'ALTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            440 => 
            array (
                'id' => 941,
                'nombre' => 'GOLPEARSE LA CABEZA REPETITIVAMENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            441 => 
            array (
                'id' => 942,
                'nombre' => 'MORDERSE LABIOS, LENGUA, MEJILLAS Y MANOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            442 => 
            array (
                'id' => 943,
                'nombre' => 'RASGUÑARSE LA PIEL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            443 => 
            array (
                'id' => 944,
                'nombre' => 'ABOFETEARSE LA CARA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            444 => 
            array (
                'id' => 945,
                'nombre' => 'HALARSE EL CABELLO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            445 => 
            array (
                'id' => 946,
                'nombre' => 'CORTARSE LA PIEL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            446 => 
            array (
                'id' => 947,
                'nombre' => 'ELEVACIÓN DE LA FRECUENCIA CARDÍACA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            447 => 
            array (
                'id' => 948,
                'nombre' => 'ELEVACIÓN DE FRECUENCIA RESPIRATORIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            448 => 
            array (
                'id' => 949,
                'nombre' => 'TEMBLORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            449 => 
            array (
                'id' => 950,
                'nombre' => 'VACÍO EN EL ESTÓMAGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            450 => 
            array (
                'id' => 951,
                'nombre' => 'SUDORACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            451 => 
            array (
                'id' => 952,
                'nombre' => 'TEMEROSO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            452 => 
            array (
                'id' => 953,
                'nombre' => 'ESTIGMATIZACIÓN POR SU ORIENTACIÓN SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            453 => 
            array (
                'id' => 954,
                'nombre' => 'ABANDONO O NEGLIGENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            454 => 
            array (
                'id' => 955,
                'nombre' => 'ESTIGMATIZACIÓN POR SU IDENTIDAD DE GÉNERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            455 => 
            array (
                'id' => 956,
                'nombre' => 'VIOLENCIA SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            456 => 
            array (
                'id' => 957,
                'nombre' => 'VIOLENCIA ECONÓMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            457 => 
            array (
                'id' => 958,
            'nombre' => 'HE SIDO AGRESOR(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            458 => 
            array (
                'id' => 959,
                'nombre' => 'INDUCE AL TRABAJO INFANTIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            459 => 
            array (
                'id' => 960,
                'nombre' => 'NO BRINDA CUIDADO Y PROTECCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            460 => 
            array (
                'id' => 961,
            'nombre' => 'ESCASA INTERACCIÓN (DISTANTE)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            461 => 
            array (
                'id' => 962,
                'nombre' => 'CARENCIA AFECTIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            462 => 
            array (
                'id' => 963,
                'nombre' => 'DISTANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            463 => 
            array (
                'id' => 964,
                'nombre' => 'CONFLICTIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            464 => 
            array (
                'id' => 965,
                'nombre' => 'EN LA COMUNICACIÓN ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            465 => 
            array (
                'id' => 966,
                'nombre' => 'EN SOLUCIÓN DE PROBLEMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            466 => 
            array (
                'id' => 967,
                'nombre' => 'INFIDELIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            467 => 
            array (
                'id' => 968,
                'nombre' => 'POR INVOLUCRAMIENTO FAMILIA EXTENSA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            468 => 
            array (
                'id' => 969,
                'nombre' => 'ECONÓMICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            469 => 
            array (
                'id' => 970,
                'nombre' => 'AISLAMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            470 => 
            array (
                'id' => 971,
                'nombre' => 'LE ES INDIFERENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            471 => 
            array (
                'id' => 972,
                'nombre' => 'AFRONTA LA DIFICULTAD ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            472 => 
            array (
                'id' => 973,
                'nombre' => 'AMENAZA A SU INTEGRIDAD FÍSICA ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            473 => 
            array (
                'id' => 974,
                'nombre' => 'FALTA DE OPORTUNIDAD DE FORMACIÓN PARA EL TRABAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            474 => 
            array (
                'id' => 975,
                'nombre' => 'INFLUENCIA DE PARES NEGATIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            475 => 
            array (
                'id' => 976,
                'nombre' => 'VÍCTIMA ESCNNA.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            476 => 
            array (
                'id' => 977,
                'nombre' => 'ESPECTRO AUTISTA.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            477 => 
            array (
                'id' => 978,
                'nombre' => 'VIOLENCIAS BASADAS EN GÉNERO/IDENTIDAD DE GÉNERO U ORIENTACIÓN SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            478 => 
            array (
                'id' => 979,
                'nombre' => 'TRASTORNOS DEL ESTADO DEL ÁNIMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            479 => 
            array (
                'id' => 980,
                'nombre' => 'UNA SOLA VEZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            480 => 
            array (
                'id' => 981,
                'nombre' => 'ESQUIZOFRENIA Y OTROS TRASTORNOS PSICÓTICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            481 => 
            array (
                'id' => 982,
                'nombre' => 'A LA SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            482 => 
            array (
                'id' => 983,
                'nombre' => 'CADA QUINCE DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            483 => 
            array (
                'id' => 984,
                'nombre' => 'AL MES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            484 => 
            array (
                'id' => 985,
                'nombre' => 'AL AÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            485 => 
            array (
                'id' => 986,
                'nombre' => 'INGRESO DE UN NUEVO MIEMBRO A LA FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            486 => 
            array (
                'id' => 987,
                'nombre' => 'CUANDO EL ADULTO RESPONSABLE SE AUSENTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            487 => 
            array (
                'id' => 988,
                'nombre' => 'INFLUENCIA DE AMIGOS O EL PARCHE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            488 => 
            array (
                'id' => 989,
                'nombre' => 'FALTA DE TIEMPO Y ESPACIO PARA COMPARTIR CON LA FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            489 => 
            array (
                'id' => 990,
                'nombre' => 'FALTA DE OPORTUNIDADES ACADÉMICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            490 => 
            array (
                'id' => 991,
                'nombre' => 'RIESGO EN EL CONTEXTO BARRIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            491 => 
            array (
                'id' => 992,
                'nombre' => 'ACOSO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            492 => 
            array (
                'id' => 993,
                'nombre' => 'FALTA DE HABILIDADES SOCIALES.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            493 => 
            array (
                'id' => 994,
                'nombre' => 'SITUACIÓN ECONÓMICA PRECARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            494 => 
            array (
                'id' => 995,
                'nombre' => 'BAJA CORRESPONSABILIDAD FAMILIAR.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            495 => 
            array (
                'id' => 996,
                'nombre' => 'MATEMÁTICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            496 => 
            array (
                'id' => 997,
                'nombre' => 'ESPAÑOL Y LITERATURA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            497 => 
            array (
                'id' => 998,
                'nombre' => 'CIENCIAS SOCIALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            498 => 
            array (
                'id' => 999,
                'nombre' => 'CIENCIAS NATURALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            499 => 
            array (
                'id' => 1000,
                'nombre' => 'INGLÉS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
        ));
        \DB::table('parametros')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'nombre' => 'DEPORTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            1 => 
            array (
                'id' => 1002,
                'nombre' => 'ARTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            2 => 
            array (
                'id' => 1003,
                'nombre' => 'SISTEMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            3 => 
            array (
                'id' => 1004,
            'nombre' => 'CAPIV (FISCALIA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            4 => 
            array (
                'id' => 1005,
                'nombre' => 'URI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            5 => 
            array (
                'id' => 1006,
                'nombre' => 'COMISARIA DE FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            6 => 
            array (
                'id' => 1007,
                'nombre' => 'ACADÉMICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            7 => 
            array (
                'id' => 1008,
                'nombre' => 'TIMIDEZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            8 => 
            array (
                'id' => 1009,
                'nombre' => 'CONDUCTAS INHIBIDAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            9 => 
            array (
                'id' => 1010,
                'nombre' => 'NO HAY INTERACCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            10 => 
            array (
                'id' => 1011,
                'nombre' => 'FALTA DE COMUNICACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            11 => 
            array (
                'id' => 1012,
                'nombre' => '9.16 ¿ALGUNA VEZ HA TENIDO PENSAMIENTOS RELACIONADOS CON QUITARSE LA VIDA? ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            12 => 
            array (
                'id' => 1013,
                'nombre' => 'EN UNA ÊNICA OCASIÓN ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            13 => 
            array (
                'id' => 1014,
                'nombre' => 'MÊLTIPLES OCASIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            14 => 
            array (
                'id' => 1015,
                'nombre' => 'SIN CONTACTO FÍSICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            15 => 
            array (
                'id' => 1016,
                'nombre' => 'CON CONTACTO FÍSICO VIOLENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            16 => 
            array (
                'id' => 1017,
                'nombre' => 'CON CONTACTO FÍSICO NO VIOLENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            17 => 
            array (
                'id' => 1018,
                'nombre' => 'EN CURSO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            18 => 
            array (
                'id' => 1019,
                'nombre' => 'FINALIZADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            19 => 
            array (
                'id' => 1020,
                'nombre' => 'INTERRUMPIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            20 => 
            array (
                'id' => 1021,
                'nombre' => 'NUNCA HA ESTADO ESCOLARIZADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            21 => 
            array (
                'id' => 1022,
                'nombre' => 'DESERCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            22 => 
            array (
                'id' => 1023,
                'nombre' => 'SUPERIOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            23 => 
            array (
                'id' => 1024,
                'nombre' => 'BÁSICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            24 => 
            array (
                'id' => 1025,
                'nombre' => 'ADECUADA EXPRESIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:40',
                'updated_at' => '2021-06-02 14:14:40',
            ),
            25 => 
            array (
                'id' => 1026,
                'nombre' => 'DIFICULTAD EXPRESIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            26 => 
            array (
                'id' => 1027,
                'nombre' => 'FACTORES ECONÓMICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            27 => 
            array (
                'id' => 1028,
                'nombre' => 'ACOSO ESCOLAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            28 => 
            array (
                'id' => 1029,
                'nombre' => 'TEMAS FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            29 => 
            array (
                'id' => 1030,
                'nombre' => 'POR TRABAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            30 => 
            array (
                'id' => 1031,
                'nombre' => 'EXPULSADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            31 => 
            array (
                'id' => 1032,
                'nombre' => 'NO LE GUSTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            32 => 
            array (
                'id' => 1033,
                'nombre' => 'REPITENCIA O EXTRA EDAD ESCOLAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            33 => 
            array (
                'id' => 1034,
                'nombre' => 'TRASTORNOS RELACIONADOS CON TRAUMAS Y FACTORES DE ESTRÉS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            34 => 
            array (
                'id' => 1035,
                'nombre' => 'TRASTORNO OBSESIVO COMPULSIVO Y RELACIONADOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            35 => 
            array (
                'id' => 1036,
                'nombre' => 'PROBLEMAS CON LA PAREJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            36 => 
            array (
                'id' => 1037,
                'nombre' => 'TRASTORNOS RELACIONADOS CON SUSTANCIAS Y/O ADICTIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            37 => 
            array (
                'id' => 1038,
                'nombre' => 'PATRONES CULTURALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            38 => 
            array (
                'id' => 1039,
                'nombre' => 'FORTALEZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            39 => 
            array (
                'id' => 1040,
                'nombre' => 'DIFICULTAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            40 => 
            array (
                'id' => 1041,
                'nombre' => 'TIPO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            41 => 
            array (
                'id' => 1042,
                'nombre' => 'IDENTIFICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            42 => 
            array (
                'id' => 1043,
                'nombre' => 'NO ENTIENDE LA TAREA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            43 => 
            array (
                'id' => 1044,
                'nombre' => 'NO COPIA EN CLASE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            44 => 
            array (
                'id' => 1045,
                'nombre' => 'NO TIENE ELEMENTOS ESCOLARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            45 => 
            array (
                'id' => 1046,
                'nombre' => 'BAJA MOTIVACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            46 => 
            array (
                'id' => 1047,
                'nombre' => 'ATENCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            47 => 
            array (
                'id' => 1048,
                'nombre' => 'MEMORIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            48 => 
            array (
                'id' => 1049,
            'nombre' => 'ORIENTACIÓN (PERSONA, TIEMPO Y/O ESPACIO)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            49 => 
            array (
                'id' => 1050,
                'nombre' => 'COORDINACIÓN MOTORA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            50 => 
            array (
                'id' => 1051,
                'nombre' => 'LENGUAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            51 => 
            array (
                'id' => 1052,
                'nombre' => 'SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            52 => 
            array (
                'id' => 1053,
                'nombre' => 'SOCIOLEGAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            53 => 
            array (
                'id' => 1054,
                'nombre' => 'EDUCACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            54 => 
            array (
                'id' => 1055,
                'nombre' => 'EMPRENDIMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            55 => 
            array (
                'id' => 1056,
                'nombre' => 'ESPIRITUALIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            56 => 
            array (
                'id' => 1057,
                'nombre' => 'AL DIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            57 => 
            array (
                'id' => 1058,
                'nombre' => 'COMPORTAMENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            58 => 
            array (
                'id' => 1059,
                'nombre' => 'ACADEMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            59 => 
            array (
                'id' => 1060,
                'nombre' => 'INTERVENCIÓN PSICOLÓGICA A NNAJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            60 => 
            array (
                'id' => 1061,
                'nombre' => 'INTERVENCIÓN PSICOLÓGICA FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            61 => 
            array (
                'id' => 1062,
                'nombre' => 'INTERVENCIÓN TRABAJO SOCIAL FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            62 => 
            array (
                'id' => 1063,
                'nombre' => 'INTERVENCIÓN TRABAJO SOCIAL A NNAJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            63 => 
            array (
                'id' => 1064,
                'nombre' => 'INTERVENCIÓN PSICOSOCIAL FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            64 => 
            array (
                'id' => 1065,
                'nombre' => 'INTERVENCIÓN PSICOSOCIAL NNAJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            65 => 
            array (
                'id' => 1066,
                'nombre' => 'INTERVENCIÓN PSIC ESPECIALIZADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            66 => 
            array (
                'id' => 1067,
                'nombre' => 'PLAN DE ATENCIÓN INDIVIDUAL Y FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            67 => 
            array (
                'id' => 1068,
                'nombre' => 'DELGADEZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            68 => 
            array (
                'id' => 1069,
                'nombre' => 'ADECUADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            69 => 
            array (
                'id' => 1070,
                'nombre' => 'SOBREPESO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            70 => 
            array (
                'id' => 1071,
                'nombre' => 'OBESIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            71 => 
            array (
                'id' => 1072,
                'nombre' => 'RIESGO DELGADEZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            72 => 
            array (
                'id' => 1073,
                'nombre' => 'BAJO PESO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            73 => 
            array (
                'id' => 1074,
                'nombre' => 'ADECUADO PARA EDAD GESTACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            74 => 
            array (
                'id' => 1075,
                'nombre' => 'SOBREPESO PARA EDAD GESTACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            75 => 
            array (
                'id' => 1076,
                'nombre' => 'BAJO PESO PARA EDAD GESTACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            76 => 
            array (
                'id' => 1077,
                'nombre' => 'TALLA BAJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            77 => 
            array (
                'id' => 1078,
                'nombre' => 'TALLA ADECUADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            78 => 
            array (
                'id' => 1079,
                'nombre' => 'RIESGO TALLA BAJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            79 => 
            array (
                'id' => 1080,
                'nombre' => 'HIPOGLICEMIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            80 => 
            array (
                'id' => 1081,
                'nombre' => 'ENF. SISTEMA DIGESTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            81 => 
            array (
                'id' => 1082,
                'nombre' => 'DISLIPEMIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            82 => 
            array (
                'id' => 1083,
                'nombre' => 'LEVE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            83 => 
            array (
                'id' => 1084,
                'nombre' => 'MODERADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            84 => 
            array (
                'id' => 1085,
                'nombre' => 'SEVERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            85 => 
            array (
                'id' => 1086,
                'nombre' => 'BUENO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            86 => 
            array (
                'id' => 1087,
                'nombre' => 'REGULAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            87 => 
            array (
                'id' => 1088,
                'nombre' => 'MALO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            88 => 
            array (
                'id' => 1089,
                'nombre' => 'ACTIVIDAD FÍSICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            89 => 
            array (
                'id' => 1090,
                'nombre' => 'CONSUMO DE FRUTAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            90 => 
            array (
                'id' => 1091,
                'nombre' => 'CONSUMO DE VERDURAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            91 => 
            array (
                'id' => 1092,
                'nombre' => 'ALIMENTOS ENERGÉTICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            92 => 
            array (
                'id' => 1093,
                'nombre' => 'CONSUMO DE FRITOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            93 => 
            array (
                'id' => 1094,
                'nombre' => 'CONSUMO DE HARINAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            94 => 
            array (
                'id' => 1095,
                'nombre' => 'CONSUMO DE AZUCARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            95 => 
            array (
                'id' => 1096,
                'nombre' => 'SEGUIMIENTO DE CONSUMO DE ALIMENTOS EN LA UNIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            96 => 
            array (
                'id' => 1097,
                'nombre' => 'COMPLEMENTO NUTRICIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            97 => 
            array (
                'id' => 1098,
                'nombre' => 'SUPLEMENTO VITAMÍNICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            98 => 
            array (
                'id' => 1099,
                'nombre' => 'REMISIÓN A MEDICINA GENERAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            99 => 
            array (
                'id' => 1100,
                'nombre' => 'NO REALIZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            100 => 
            array (
                'id' => 1101,
                'nombre' => 'CEREALES, TUBÉRCULOS Y PLÁTANOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            101 => 
            array (
                'id' => 1102,
                'nombre' => 'VERDURAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            102 => 
            array (
                'id' => 1103,
                'nombre' => 'FRUTAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            103 => 
            array (
                'id' => 1104,
                'nombre' => 'CARNES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            104 => 
            array (
                'id' => 1105,
                'nombre' => 'HUEVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            105 => 
            array (
                'id' => 1106,
                'nombre' => 'LEGUMINOSAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            106 => 
            array (
                'id' => 1107,
                'nombre' => 'LÁCTEOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            107 => 
            array (
                'id' => 1108,
                'nombre' => 'GRASAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            108 => 
            array (
                'id' => 1109,
                'nombre' => 'AZÊCARES Y DULCES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            109 => 
            array (
                'id' => 1110,
                'nombre' => 'TODOS LOS DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            110 => 
            array (
                'id' => 1111,
                'nombre' => '4-5 VECES SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            111 => 
            array (
                'id' => 1112,
                'nombre' => '2-3 VECES SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            112 => 
            array (
                'id' => 1113,
                'nombre' => '1 VEZ SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            113 => 
            array (
                'id' => 1114,
                'nombre' => 'NUNCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            114 => 
            array (
                'id' => 1115,
                'nombre' => 'NORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            115 => 
            array (
                'id' => 1116,
                'nombre' => 'ALTERADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            116 => 
            array (
                'id' => 1117,
                'nombre' => 'LOGRO COMPLETADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            117 => 
            array (
                'id' => 1118,
                'nombre' => 'PRESENTA DIFICULTAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            118 => 
            array (
                'id' => 1119,
                'nombre' => 'LOGRO NO COMPLETADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            119 => 
            array (
                'id' => 1120,
                'nombre' => 'H61.2 CERUMEN IMPACTADO.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            120 => 
            array (
                'id' => 1121,
                'nombre' => 'H60 OTITIS EXTERNA.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            121 => 
            array (
                'id' => 1122,
                'nombre' => 'H72 PERFORACIóN DEL TíMPANO.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            122 => 
            array (
                'id' => 1123,
            'nombre' => 'H91 OTRAS HIPOACUSIAS (PéRDIDAS AUDITIVAS).',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            123 => 
            array (
                'id' => 1124,
                'nombre' => 'F80.0 TRASTORNO ESPECíFICO DE LA PRONUNCIACIóN DISLALIA.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            124 => 
            array (
                'id' => 1125,
                'nombre' => 'F80.8 OTROS TRASTORNOS DEL DESARROLLO DEL HABLA Y DEL LENGUAJE: CECEO.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            125 => 
            array (
                'id' => 1126,
                'nombre' => 'R06.5 RESPIRACIóN CON LA BOCA.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            126 => 
            array (
                'id' => 1127,
                'nombre' => 'R49.2 HIPERNASALIDAD E HIPONASALIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            127 => 
            array (
                'id' => 1128,
                'nombre' => 'R49.0 DISFONíA. RONQUERA.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            128 => 
            array (
                'id' => 1129,
                'nombre' => 'F80.9 TRASTORNO DEL DESARROLLO DEL HABLA Y DEL LENGUAJE NO ESPECIFICADO: SAI.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            129 => 
            array (
                'id' => 1130,
                'nombre' => 'F81.0 TRASTORNO ESPECIFICO DE LA LECTURA: DISLEXIA DEL DESARROLLO.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            130 => 
            array (
                'id' => 1131,
                'nombre' => 'F81.3 TRASTORNO MIXTO DE LAS HABILIDADES ESCOLARES.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            131 => 
            array (
                'id' => 1132,
                'nombre' => 'F81.8 OTROS TRASTORNOS DEL DESARROLLO DE LAS HABILIDADES ESCOLARES.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            132 => 
            array (
                'id' => 1133,
                'nombre' => 'F80.2 TRASTORNO DE LA RECEPCIóN DEL LENGUAJE: AFASIA DEL DESARROLLO.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            133 => 
            array (
                'id' => 1134,
                'nombre' => 'Q17 OTRAS MALFORMACIONES CONGéNITAS DEL OíDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            134 => 
            array (
                'id' => 1135,
                'nombre' => 'SE EVIDENCIA CIRUGíA DE QUEILORRAFIA Y/O PALATORRAFIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            135 => 
            array (
                'id' => 1136,
                'nombre' => 'OTRO NO INCLUIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            136 => 
            array (
                'id' => 1137,
                'nombre' => 'MEDICINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            137 => 
            array (
                'id' => 1138,
                'nombre' => 'OTORRINOLARINGOLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            138 => 
            array (
                'id' => 1139,
                'nombre' => 'VALORACIÓN POR AUDIOLOGÍA; AUDIOMETRÍA, LOGOAUDIOMETRÍA E IMPEDANCIOMETRÍA.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            139 => 
            array (
                'id' => 1140,
                'nombre' => 'REFORZAMIENTO POR PSICOPEDAGOGIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            140 => 
            array (
                'id' => 1141,
                'nombre' => 'ACOMPAÑAMIENTO POR PSICOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            141 => 
            array (
                'id' => 1142,
                'nombre' => 'INTERCONSULTA POR PSICOLOGÍA Y/O NEUROPSICOLOGIA PARADETERMINAR C.I.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            142 => 
            array (
                'id' => 1143,
                'nombre' => 'TERAPIA OCUPACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            143 => 
            array (
                'id' => 1144,
                'nombre' => 'AUDICIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            144 => 
            array (
                'id' => 1145,
                'nombre' => 'HABLA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            145 => 
            array (
                'id' => 1146,
                'nombre' => 'LENGUAJE, APRENDIZAJE Y FUNCIONES COGNITIVAS SUPERIORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            146 => 
            array (
                'id' => 1147,
                'nombre' => 'CUMPLE CON LAS METAS PROPUESTAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            147 => 
            array (
                'id' => 1148,
                'nombre' => 'SE OBSERVA EVOLUCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            148 => 
            array (
                'id' => 1149,
                'nombre' => 'NO SE OBSERVA EVOLUCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            149 => 
            array (
                'id' => 1150,
                'nombre' => 'OTOSCOPIA BILATERAL NORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            150 => 
            array (
                'id' => 1151,
                'nombre' => 'H90 HIPOACUSIA CONDUCTIVA Y NEUROSENSORIAL ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            151 => 
            array (
                'id' => 1152,
                'nombre' => 'H92 OTALGIA Y SECRECIóN DEL OíDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            152 => 
            array (
                'id' => 1153,
                'nombre' => 'VALORACIÓN MEDICINA GENERAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            153 => 
            array (
                'id' => 1154,
                'nombre' => 'VALORACIÓN EQUINOTERAPIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            154 => 
            array (
                'id' => 1155,
                'nombre' => 'PRIMERA VEZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            155 => 
            array (
                'id' => 1156,
                'nombre' => 'CONTROL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            156 => 
            array (
                'id' => 1157,
                'nombre' => 'APTO EQUINOTERAPIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            157 => 
            array (
                'id' => 1158,
                'nombre' => 'NO APTO EQUINOTERAPIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            158 => 
            array (
                'id' => 1159,
                'nombre' => 'PRESUNTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            159 => 
            array (
                'id' => 1160,
                'nombre' => 'CONFIRMADO NUEVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            160 => 
            array (
                'id' => 1161,
                'nombre' => 'CONFIRMADO REPETIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            161 => 
            array (
                'id' => 1162,
                'nombre' => 'AUTOCUIDADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            162 => 
            array (
                'id' => 1163,
            'nombre' => 'REMISIÓN INSTITUCIONAL (INTERNA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            163 => 
            array (
                'id' => 1164,
                'nombre' => 'REMISIÓN CONSULTA EXTERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            164 => 
            array (
                'id' => 1165,
                'nombre' => 'REMISIÓN URGENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            165 => 
            array (
                'id' => 1166,
                'nombre' => 'T16 CUERPO EXTRAÑO EN OÍDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            166 => 
            array (
                'id' => 1167,
                'nombre' => 'ENTREGA DE DOCUMENTO A NNAJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            167 => 
            array (
                'id' => 1168,
                'nombre' => 'DEVOLUCIÓN POR ERROR DE PREPARACIÓN NNAJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            168 => 
            array (
                'id' => 1169,
                'nombre' => 'ENTREGA DE DOCUMENTO A TERCEROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            169 => 
            array (
                'id' => 1170,
                'nombre' => 'DEVOLUCIÓN DE TERCERO POR ERROR PREPARACIÓN ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            170 => 
            array (
                'id' => 1171,
                'nombre' => 'VALORACION NUTRICIONAL INICIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            171 => 
            array (
                'id' => 1172,
                'nombre' => 'SEGUIMIENTO NUTRICIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            172 => 
            array (
                'id' => 1173,
                'nombre' => 'VALORACIÓN INICIAL DE FONOADIOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            173 => 
            array (
                'id' => 1174,
                'nombre' => 'SEGUIMIENTO DE FONOAUDIOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            174 => 
            array (
                'id' => 1175,
                'nombre' => 'VALORACIÓN DE TAMIZAJE AUDITIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            175 => 
            array (
                'id' => 1176,
                'nombre' => 'DEPORTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            176 => 
            array (
                'id' => 1177,
                'nombre' => 'TRANSITO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            177 => 
            array (
                'id' => 1178,
                'nombre' => 'RECREATIVO CULTURAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            178 => 
            array (
                'id' => 1179,
                'nombre' => 'CAÍDA DESDE LA PROPIA ALTURA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            179 => 
            array (
                'id' => 1180,
                'nombre' => 'CAÍDA DESDE DIFERENTE ALTURA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            180 => 
            array (
                'id' => 1181,
            'nombre' => 'ALTERACIÓN DEL ESTADO DE CONCIENCIA (SPA) MEDICACIÓN, ESTADOS DE SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            181 => 
            array (
                'id' => 1182,
                'nombre' => 'PISADAS, CHOQUES O GOLPES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            182 => 
            array (
                'id' => 1183,
                'nombre' => 'SOBREESFUERZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            183 => 
            array (
                'id' => 1184,
                'nombre' => 'EXPOSICIÓN O CONTACTO CON TEMPERATURA EXTREMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            184 => 
            array (
                'id' => 1185,
                'nombre' => 'EXPOSICIÓN O CONTACTO CON SUSTANCIAS NOCIVAS, RADIACIONES, SALPICADURAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            185 => 
            array (
                'id' => 1186,
                'nombre' => 'AULA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            186 => 
            array (
                'id' => 1187,
                'nombre' => 'ÁREAS RECREATIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            187 => 
            array (
                'id' => 1188,
                'nombre' => 'CORREDORES O PASILLOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            188 => 
            array (
                'id' => 1189,
                'nombre' => 'TALLERES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            189 => 
            array (
                'id' => 1190,
                'nombre' => 'ESCALERAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            190 => 
            array (
                'id' => 1191,
                'nombre' => 'DORMITORIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            191 => 
            array (
                'id' => 1192,
                'nombre' => 'PISCINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            192 => 
            array (
                'id' => 1193,
                'nombre' => 'MAQUINAS O EQUIPOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            193 => 
            array (
                'id' => 1194,
                'nombre' => 'MEDIOS DE TRANSPORTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            194 => 
            array (
                'id' => 1195,
                'nombre' => 'ELEMENTOS DEPORTIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            195 => 
            array (
                'id' => 1196,
            'nombre' => 'HERRAMIENTAS (IMPLEMENTOS UTENSILIOS)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            196 => 
            array (
                'id' => 1197,
                'nombre' => 'MATERIAL O SUSTANCIAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            197 => 
            array (
                'id' => 1198,
                'nombre' => 'ELEMENTOS CONTUNDENTES CORTO PUNZANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            198 => 
            array (
                'id' => 1199,
                'nombre' => 'CABEZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            199 => 
            array (
                'id' => 1200,
                'nombre' => 'OJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            200 => 
            array (
                'id' => 1201,
                'nombre' => 'CUELLO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            201 => 
            array (
                'id' => 1202,
            'nombre' => 'TRONCO (INCLUYE ESPALDA, COLUMNA VERTEBRAL, MÉDULA ESPINAL Y PELVIS)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            202 => 
            array (
                'id' => 1203,
                'nombre' => 'TÓRAX',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            203 => 
            array (
                'id' => 1204,
                'nombre' => 'ABDOMEN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            204 => 
            array (
                'id' => 1205,
                'nombre' => 'MIEMBRO SUPERIOR/ MIEMBRO INFERIOR/MANOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            205 => 
            array (
                'id' => 1206,
                'nombre' => 'PIES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            206 => 
            array (
                'id' => 1207,
                'nombre' => 'MÊLTIPLES LESIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            207 => 
            array (
                'id' => 1208,
                'nombre' => 'RASQUIÑA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            208 => 
            array (
                'id' => 1209,
                'nombre' => 'SE OBSERVAN A SIMPLE VISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            209 => 
            array (
                'id' => 1210,
                'nombre' => 'LARGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            210 => 
            array (
                'id' => 1211,
                'nombre' => 'CORTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            211 => 
            array (
                'id' => 1212,
                'nombre' => 'MUY CORTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            212 => 
            array (
                'id' => 1213,
                'nombre' => 'CALVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            213 => 
            array (
                'id' => 1214,
                'nombre' => 'RASTAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            214 => 
            array (
                'id' => 1215,
                'nombre' => 'HACE 1 SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            215 => 
            array (
                'id' => 1216,
                'nombre' => 'HACE 15 DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            216 => 
            array (
                'id' => 1217,
                'nombre' => 'HACE UN MES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            217 => 
            array (
                'id' => 1218,
                'nombre' => 'HACE UN AÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            218 => 
            array (
                'id' => 1219,
                'nombre' => 'SHAMPOO ANTI PIOJOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            219 => 
            array (
                'id' => 1220,
                'nombre' => 'VENENO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            220 => 
            array (
                'id' => 1221,
                'nombre' => 'GASOLINA- ACPM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            221 => 
            array (
                'id' => 1222,
                'nombre' => 'SHAMPOO TRADICIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            222 => 
            array (
                'id' => 1223,
                'nombre' => 'JABÓN PARA PERROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            223 => 
            array (
                'id' => 1224,
                'nombre' => 'LARVA, NINFA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            224 => 
            array (
                'id' => 1225,
                'nombre' => 'PIOJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            225 => 
            array (
                'id' => 1226,
                'nombre' => 'ESCARA O DERMATITIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            226 => 
            array (
                'id' => 1227,
                'nombre' => 'ADENOPATÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            227 => 
            array (
                'id' => 1228,
                'nombre' => 'DERMATITIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            228 => 
            array (
                'id' => 1229,
                'nombre' => 'ERUPCIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            229 => 
            array (
                'id' => 1230,
                'nombre' => 'PÁPULAS O MACULAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            230 => 
            array (
                'id' => 1231,
                'nombre' => 'GRUESA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            231 => 
            array (
                'id' => 1232,
                'nombre' => 'PIGMENTADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            232 => 
            array (
                'id' => 1233,
                'nombre' => 'ACCESO ADMINISTRADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            233 => 
            array (
                'id' => 1234,
                'nombre' => 'CALMADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            234 => 
            array (
                'id' => 1235,
                'nombre' => 'EGRESO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            235 => 
            array (
                'id' => 1236,
                'nombre' => 'EN OBSERVACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            236 => 
            array (
                'id' => 1237,
                'nombre' => 'ESTABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            237 => 
            array (
                'id' => 1238,
                'nombre' => 'MEJORÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            238 => 
            array (
                'id' => 1239,
                'nombre' => 'SECUELA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            239 => 
            array (
                'id' => 1240,
            'nombre' => 'ACUPUNTURA (AC)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            240 => 
            array (
                'id' => 1241,
            'nombre' => 'AURICULOTERAPIA (AT)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            241 => 
            array (
                'id' => 1242,
            'nombre' => 'ELECTROACUPUNTURA (EA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            242 => 
            array (
                'id' => 1243,
                'nombre' => 'ELECTROESTIMULACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            243 => 
            array (
                'id' => 1244,
            'nombre' => 'TERAPIA CRANEOSACRA (TC)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            244 => 
            array (
                'id' => 1245,
                'nombre' => 'SICOTERAPIA NO CONVENCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            245 => 
            array (
                'id' => 1246,
                'nombre' => 'AC / AT / EA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            246 => 
            array (
                'id' => 1247,
                'nombre' => 'AC / AT / EA / TC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            247 => 
            array (
                'id' => 1248,
                'nombre' => 'AC / AT / TC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            248 => 
            array (
                'id' => 1249,
                'nombre' => 'AC / EA / TC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            249 => 
            array (
                'id' => 1250,
                'nombre' => 'AC / TC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            250 => 
            array (
                'id' => 1251,
                'nombre' => 'AT / TC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            251 => 
            array (
                'id' => 1252,
                'nombre' => 'AT / EA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            252 => 
            array (
                'id' => 1253,
                'nombre' => 'AT / EA / TC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            253 => 
            array (
                'id' => 1254,
                'nombre' => 'EA / TC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            254 => 
            array (
                'id' => 1255,
                'nombre' => 'EXTRACCIÓN INDICADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            255 => 
            array (
                'id' => 1256,
                'nombre' => 'ENDODONCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            256 => 
            array (
                'id' => 1257,
                'nombre' => 'PROTESIS PARCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            257 => 
            array (
                'id' => 1258,
                'nombre' => 'PROTESIS TOTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            258 => 
            array (
                'id' => 1259,
                'nombre' => 'CORONA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            259 => 
            array (
                'id' => 1260,
                'nombre' => 'SELLANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            260 => 
            array (
                'id' => 1261,
                'nombre' => 'OBTURACIÓN EN CEMENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            261 => 
            array (
                'id' => 1262,
                'nombre' => 'OBTURACIÓN EN RESINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            262 => 
            array (
                'id' => 1263,
                'nombre' => 'PULPECTOMIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            263 => 
            array (
                'id' => 1264,
                'nombre' => 'EXODONCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            264 => 
            array (
                'id' => 1265,
                'nombre' => 'DRENAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            265 => 
            array (
                'id' => 1266,
                'nombre' => 'RECONSTRUCCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            266 => 
            array (
                'id' => 1267,
                'nombre' => 'PROFILAXIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            267 => 
            array (
                'id' => 1268,
                'nombre' => 'DETARTRAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            268 => 
            array (
                'id' => 1269,
                'nombre' => 'INFORMACIÓN CREADA DESDE COMPOSICION FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            269 => 
            array (
                'id' => 1270,
                'nombre' => 'D - DEPENDIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            270 => 
            array (
                'id' => 1271,
                'nombre' => 'SD - SEMIDEPENDIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            271 => 
            array (
                'id' => 1272,
                'nombre' => 'I - INDEPENDIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            272 => 
            array (
                'id' => 1273,
                'nombre' => 'F - FUNCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            273 => 
            array (
                'id' => 1274,
                'nombre' => 'BF - BAJA FUNCIONALIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            274 => 
            array (
                'id' => 1275,
                'nombre' => 'SF - SEMI FUNCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            275 => 
            array (
                'id' => 1276,
                'nombre' => 'BF - NO FUNCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            276 => 
            array (
                'id' => 1277,
                'nombre' => 'INADECUADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            277 => 
            array (
                'id' => 1278,
                'nombre' => 'P - PRESENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            278 => 
            array (
                'id' => 1279,
                'nombre' => 'A - AUSENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            279 => 
            array (
                'id' => 1280,
                'nombre' => 'REFUERZO HABITOS DE AUTOCUIDADO ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            280 => 
            array (
                'id' => 1281,
                'nombre' => 'MANEJO NIVELES DE COMUNICACIÓN ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            281 => 
            array (
                'id' => 1282,
                'nombre' => 'FORTALECER HABILIDADES MOTORAS FINAS ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            282 => 
            array (
                'id' => 1283,
                'nombre' => 'FORTALECER HABILIDADES MOTORAS GRUESAS ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            283 => 
            array (
                'id' => 1284,
                'nombre' => 'FOMENTAR REPERTORIOS BASICOS EN EL APRENDIZAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            284 => 
            array (
                'id' => 1285,
                'nombre' => 'MANEJO DE HABILIDADES SENSOPERCEPTUALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            285 => 
            array (
                'id' => 1286,
                'nombre' => 'MANEJO DE AREA NEUROSENSORIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            286 => 
            array (
                'id' => 1287,
                'nombre' => 'DESARROLLO DE HERRAMIENTAS A NIVEL DE HABITOS Y HABILIDADES SOCIO OCUPACIONALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            287 => 
            array (
                'id' => 1288,
                'nombre' => 'AREA VOCACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            288 => 
            array (
                'id' => 1289,
                'nombre' => 'FONOAUDIOLOGIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            289 => 
            array (
                'id' => 1290,
                'nombre' => 'FISIOTERAPIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            290 => 
            array (
                'id' => 1291,
                'nombre' => 'PSICOPEDAGOGIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            291 => 
            array (
                'id' => 1292,
                'nombre' => 'OPTOMETRIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            292 => 
            array (
                'id' => 1293,
                'nombre' => 'REFUERZO ESCOLAR EN AULA ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            293 => 
            array (
                'id' => 1294,
                'nombre' => 'PSIQUIATRIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            294 => 
            array (
                'id' => 1295,
                'nombre' => 'NEUROLOGIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            295 => 
            array (
                'id' => 1296,
                'nombre' => 'EUTONÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            296 => 
            array (
                'id' => 1297,
                'nombre' => 'HIPOTONÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            297 => 
            array (
                'id' => 1298,
                'nombre' => 'HIPERTONÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            298 => 
            array (
                'id' => 1299,
                'nombre' => 'FUNCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            299 => 
            array (
                'id' => 1300,
                'nombre' => 'SEMI FUNCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            300 => 
            array (
                'id' => 1301,
                'nombre' => 'BAJA FUNCIONALIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            301 => 
            array (
                'id' => 1302,
                'nombre' => 'AUTO-CUIDADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            302 => 
            array (
                'id' => 1303,
                'nombre' => 'ÁREA PRE-VOCACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            303 => 
            array (
                'id' => 1304,
                'nombre' => 'HABILIDADES DE EJECUCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            304 => 
            array (
                'id' => 1305,
                'nombre' => 'SENSO-PERCEPCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            305 => 
            array (
                'id' => 1306,
                'nombre' => 'MOVIMIENTOS OCULARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            306 => 
            array (
                'id' => 1307,
                'nombre' => 'HÁBITOS Y COMPETENCIAS SOCIO OCUPACIONALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            307 => 
            array (
                'id' => 1308,
                'nombre' => 'SALUD OCUPACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            308 => 
            array (
                'id' => 1309,
                'nombre' => 'COMUNICACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            309 => 
            array (
                'id' => 1310,
                'nombre' => 'DIÁLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            310 => 
            array (
                'id' => 1311,
                'nombre' => 'REPERTORIOS BÁSICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            311 => 
            array (
                'id' => 1312,
                'nombre' => 'ÁREA NEURO-SENSORIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            312 => 
            array (
                'id' => 1313,
                'nombre' => 'ORIENTACIÓN PRE VOCACIONAL Y VOCACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            313 => 
            array (
                'id' => 1314,
                'nombre' => 'RELACIONES INTERPERSONALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            314 => 
            array (
                'id' => 1315,
                'nombre' => 'PROYECCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            315 => 
            array (
                'id' => 1316,
                'nombre' => 'LOGRO HABILIDADES PROPUESTAS FRENTE A LA TEMÁTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            316 => 
            array (
                'id' => 1317,
                'nombre' => 'NO LOGRA HABILIDADES PROPUESTAS FRENTE A LA TEMÁTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            317 => 
            array (
                'id' => 1318,
                'nombre' => 'SE CONTINUARA PROCESO TERAPÉUTICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            318 => 
            array (
                'id' => 1319,
                'nombre' => 'REVALORACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:41',
                'updated_at' => '2021-06-02 14:14:41',
            ),
            319 => 
            array (
                'id' => 1320,
                'nombre' => 'ACUDIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            320 => 
            array (
                'id' => 1321,
                'nombre' => 'HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            321 => 
            array (
                'id' => 1322,
                'nombre' => '20',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            322 => 
            array (
                'id' => 1323,
                'nombre' => 'DENUNCIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            323 => 
            array (
                'id' => 1324,
                'nombre' => '60',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            324 => 
            array (
                'id' => 1325,
                'nombre' => '80',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            325 => 
            array (
                'id' => 1326,
                'nombre' => '100',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            326 => 
            array (
                'id' => 1327,
                'nombre' => 'ACOMPAÑAMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            327 => 
            array (
                'id' => 1328,
                'nombre' => 'ATENCIÓN PRESTADA DENTRO DE LA UPI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            328 => 
            array (
                'id' => 1329,
                'nombre' => 'CAMBIO DE EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            329 => 
            array (
                'id' => 1330,
                'nombre' => 'GESTANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            330 => 
            array (
                'id' => 1331,
                'nombre' => 'LACTANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            331 => 
            array (
                'id' => 1332,
                'nombre' => 'PROCEDIMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            332 => 
            array (
                'id' => 1333,
                'nombre' => 'PROMOCIÓN Y PREVENCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            333 => 
            array (
                'id' => 1334,
                'nombre' => 'REPORTE DE ACCIDENTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            334 => 
            array (
                'id' => 1335,
                'nombre' => 'SEGUIMIENTO TELEFÓNICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            335 => 
            array (
                'id' => 1336,
                'nombre' => 'TRÁMITES DE AFILIACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            336 => 
            array (
                'id' => 1337,
                'nombre' => 'TRÁMITES EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            337 => 
            array (
                'id' => 1338,
                'nombre' => 'EMPEO INFORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            338 => 
            array (
                'id' => 1339,
                'nombre' => 'APOYOS DIAGNÓSTICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            339 => 
            array (
                'id' => 1340,
                'nombre' => 'CONSULTA DE URGENCIAS MEDICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            340 => 
            array (
                'id' => 1341,
                'nombre' => 'CONSULTA DE URGENCIAS ODONTOLOGICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            341 => 
            array (
                'id' => 1342,
            'nombre' => 'CONSULTA MÉDICO GENERAL (EN SU EPS)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            342 => 
            array (
                'id' => 1343,
                'nombre' => 'CONSULTA ODONTOLÓGICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            343 => 
            array (
                'id' => 1344,
                'nombre' => 'ESPECIALIDAD MÉDICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            344 => 
            array (
                'id' => 1345,
                'nombre' => 'HOSPITALIZACION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            345 => 
            array (
                'id' => 1346,
                'nombre' => 'INCAPACIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            346 => 
            array (
                'id' => 1347,
                'nombre' => 'JEFE DE ENFERMERIA/EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            347 => 
            array (
                'id' => 1348,
                'nombre' => 'PSICOLOGIA/EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            348 => 
            array (
                'id' => 1349,
                'nombre' => 'QUIMICO FARMACEUTICO/EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            349 => 
            array (
                'id' => 1350,
                'nombre' => 'TRABAJO SOCIAL/EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            350 => 
            array (
                'id' => 1351,
                'nombre' => 'ESTUDIOS ESPECIALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            351 => 
            array (
                'id' => 1352,
                'nombre' => 'LABORATORIOS CLÍNICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            352 => 
            array (
                'id' => 1353,
                'nombre' => 'RADIOGRAFÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            353 => 
            array (
                'id' => 1354,
                'nombre' => 'AUDIOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            354 => 
            array (
                'id' => 1355,
                'nombre' => 'CARDIOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            355 => 
            array (
                'id' => 1356,
                'nombre' => 'CIRUGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            356 => 
            array (
                'id' => 1357,
                'nombre' => 'DERMATOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            357 => 
            array (
                'id' => 1358,
                'nombre' => 'ENDOCRINOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            358 => 
            array (
                'id' => 1359,
                'nombre' => 'FONOAUDIOLOGÍA / TERAPIA DEL LENGUAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            359 => 
            array (
                'id' => 1360,
                'nombre' => 'GASTROENTEROLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            360 => 
            array (
                'id' => 1361,
                'nombre' => 'GINECOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            361 => 
            array (
                'id' => 1362,
                'nombre' => 'HEMATOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            362 => 
            array (
                'id' => 1363,
                'nombre' => 'INFECTOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            363 => 
            array (
                'id' => 1364,
                'nombre' => 'MEDICINA ALTERNATIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            364 => 
            array (
                'id' => 1365,
                'nombre' => 'MEDICINA GENERAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            365 => 
            array (
                'id' => 1366,
                'nombre' => 'MEDICINA INTERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            366 => 
            array (
                'id' => 1367,
                'nombre' => 'OFTALMOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            367 => 
            array (
                'id' => 1368,
                'nombre' => 'REPORTAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            368 => 
            array (
                'id' => 1369,
                'nombre' => 'ORTOPEDIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            369 => 
            array (
                'id' => 1370,
                'nombre' => 'OTORRINOLARINGOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            370 => 
            array (
                'id' => 1371,
                'nombre' => 'PEDIATRÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            371 => 
            array (
                'id' => 1372,
                'nombre' => 'CAE / NE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            372 => 
            array (
                'id' => 1373,
                'nombre' => 'TERAPIAS ALTERNATIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            373 => 
            array (
                'id' => 1374,
                'nombre' => 'TOXICOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            374 => 
            array (
                'id' => 1375,
                'nombre' => 'UROLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            375 => 
            array (
                'id' => 1376,
                'nombre' => 'BENEFICIARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            376 => 
            array (
                'id' => 1377,
                'nombre' => 'COTIZANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            377 => 
            array (
                'id' => 1378,
                'nombre' => 'ADMINISTRACIÓN DE MEDICAMENTOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            378 => 
            array (
                'id' => 1379,
                'nombre' => 'APLICACIÓN DE CREMAS O UNGÌENTOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            379 => 
            array (
                'id' => 1380,
                'nombre' => 'CURACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            380 => 
            array (
                'id' => 1381,
                'nombre' => 'PEDICULOSIS INDIVIDUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            381 => 
            array (
                'id' => 1382,
                'nombre' => 'BRIGADAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            382 => 
            array (
                'id' => 1383,
                'nombre' => 'CHARLA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            383 => 
            array (
                'id' => 1384,
                'nombre' => 'DESPARACITACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            384 => 
            array (
                'id' => 1385,
                'nombre' => 'HIGIENE ORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            385 => 
            array (
                'id' => 1386,
                'nombre' => 'PLANIFICACION FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            386 => 
            array (
                'id' => 1387,
                'nombre' => 'TAMIZAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            387 => 
            array (
                'id' => 1388,
                'nombre' => 'VACUNACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            388 => 
            array (
                'id' => 1389,
                'nombre' => 'PEDICULOSIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            389 => 
            array (
                'id' => 1390,
                'nombre' => 'PELUQUERÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            390 => 
            array (
                'id' => 1391,
                'nombre' => 'AUTOCIUDADO - AUTOESTIMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            391 => 
            array (
                'id' => 1392,
                'nombre' => 'ESTILOS DE VIDA SALUDABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            392 => 
            array (
                'id' => 1393,
                'nombre' => 'GUÍA ALIMENTARIA PARA GESTANTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            393 => 
            array (
                'id' => 1394,
                'nombre' => 'HÁBITOS HIGIÉNICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            394 => 
            array (
                'id' => 1395,
                'nombre' => 'INFORMAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            395 => 
            array (
                'id' => 1396,
                'nombre' => 'PREVENCIÓN Y DISMINUCIÓN EN CONSUMO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            396 => 
            array (
                'id' => 1397,
                'nombre' => 'SALUD SEXUAL Y REPRODUCTIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            397 => 
            array (
                'id' => 1398,
                'nombre' => 'DERMATOLÓGICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            398 => 
            array (
                'id' => 1399,
                'nombre' => 'NUTRICIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            399 => 
            array (
                'id' => 1400,
                'nombre' => 'ASPECTO FÍSICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            400 => 
            array (
                'id' => 1401,
            'nombre' => 'DIFTERIA-TOSFERINA-TETANOS (DPT) 1-REFUERZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            401 => 
            array (
                'id' => 1402,
            'nombre' => 'DIFTERIA-TOSFERINA-TETANOS (DPT) 2-REFUERZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            402 => 
            array (
                'id' => 1403,
                'nombre' => 'FIEBRE AMARILLA PRIMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            403 => 
            array (
                'id' => 1404,
                'nombre' => 'HEPATITIS A',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            404 => 
            array (
                'id' => 1405,
                'nombre' => 'HEPATITIS B',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            405 => 
            array (
                'id' => 1406,
                'nombre' => 'INFLUENZA ANUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            406 => 
            array (
                'id' => 1407,
                'nombre' => 'INFLUENZA PRIMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            407 => 
            array (
                'id' => 1408,
                'nombre' => 'INFLUENZA SEGUNDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            408 => 
            array (
                'id' => 1409,
                'nombre' => 'NEUMOCOCO PRIMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            409 => 
            array (
                'id' => 1410,
                'nombre' => 'NEUMOCOCO SEGUNDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            410 => 
            array (
                'id' => 1411,
                'nombre' => 'NEUMOCOCO REFUERZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            411 => 
            array (
                'id' => 1412,
                'nombre' => 'PENTAVALENTE PRIMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            412 => 
            array (
                'id' => 1413,
                'nombre' => 'PENTAVALENTE SEGUNDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            413 => 
            array (
                'id' => 1414,
                'nombre' => 'PENTAVALENTE TERCERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            414 => 
            array (
                'id' => 1415,
            'nombre' => 'POLIO (ORAL-IM) 1-REFUERZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            415 => 
            array (
                'id' => 1416,
            'nombre' => 'POLIO (ORAL-IM) 2-REFUERZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            416 => 
            array (
                'id' => 1417,
            'nombre' => 'POLIO (ORAL-IM) PRIMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            417 => 
            array (
                'id' => 1418,
            'nombre' => 'POLIO (ORAL-IM) SEGUNDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            418 => 
            array (
                'id' => 1419,
            'nombre' => 'POLIO (ORAL-IM) TERCERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            419 => 
            array (
                'id' => 1420,
                'nombre' => 'ROTAVIRUS PRIMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            420 => 
            array (
                'id' => 1421,
                'nombre' => 'ROTAVIRUS SEGUNDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            421 => 
            array (
                'id' => 1422,
            'nombre' => 'SARAMPION RUBEOLA PAPERAS (SRP) PRIMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            422 => 
            array (
                'id' => 1423,
            'nombre' => 'SARAMPION RUBEOLA PAPERAS (SRP) REFUERZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            423 => 
            array (
                'id' => 1424,
                'nombre' => 'TOXOIDE TETANICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            424 => 
            array (
                'id' => 1425,
                'nombre' => 'TOXOIDE TETANICO PRIMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            425 => 
            array (
                'id' => 1426,
                'nombre' => 'TOXOIDE TETANICO SEGUNDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            426 => 
            array (
                'id' => 1427,
                'nombre' => 'TOXOIDE TETANICO TERCERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            427 => 
            array (
                'id' => 1428,
                'nombre' => 'TOXOIDE TETANICO CUARTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            428 => 
            array (
                'id' => 1429,
                'nombre' => 'TOXOIDE TETANICO QUINTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            429 => 
            array (
                'id' => 1430,
                'nombre' => 'TUBERCULOSIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            430 => 
            array (
                'id' => 1431,
                'nombre' => 'VPH 1 DOSIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            431 => 
            array (
                'id' => 1432,
                'nombre' => 'VPH 2 DOSIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            432 => 
            array (
                'id' => 1433,
                'nombre' => 'VPH 3 DOSIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            433 => 
            array (
                'id' => 1434,
                'nombre' => 'TRAMITES DE SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            434 => 
            array (
                'id' => 1435,
                'nombre' => 'TRAMITES DE DOCUMENTACIÓN ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            435 => 
            array (
                'id' => 1436,
            'nombre' => 'TRÁMITES O DILIGENCIAS JUDICIALES (ASESORÍAS, ACOMPAÑAMIENTOS)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            436 => 
            array (
                'id' => 1437,
                'nombre' => 'SITUACIÓN FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            437 => 
            array (
                'id' => 1438,
                'nombre' => 'SITUACIÓN LABORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            438 => 
            array (
                'id' => 1439,
                'nombre' => 'LIVIANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            439 => 
            array (
                'id' => 1440,
                'nombre' => 'MEDIANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            440 => 
            array (
                'id' => 1441,
                'nombre' => 'PESADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            441 => 
            array (
                'id' => 1442,
                'nombre' => 'OVALADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            442 => 
            array (
                'id' => 1443,
                'nombre' => 'REDONDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            443 => 
            array (
                'id' => 1444,
                'nombre' => 'CUADRADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            444 => 
            array (
                'id' => 1445,
                'nombre' => 'DIAMANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            445 => 
            array (
                'id' => 1446,
                'nombre' => 'LARGA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            446 => 
            array (
                'id' => 1447,
                'nombre' => 'BLANCO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            447 => 
            array (
                'id' => 1448,
                'nombre' => 'MORENO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            448 => 
            array (
                'id' => 1449,
                'nombre' => 'NEGRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            449 => 
            array (
                'id' => 1450,
                'nombre' => 'TRIGUEÑA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            450 => 
            array (
                'id' => 1451,
                'nombre' => 'MESTIZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            451 => 
            array (
                'id' => 1452,
                'nombre' => 'CASTAÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            452 => 
            array (
                'id' => 1453,
                'nombre' => 'NEGRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            453 => 
            array (
                'id' => 1454,
                'nombre' => 'ROJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            454 => 
            array (
                'id' => 1455,
                'nombre' => 'RUBIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            455 => 
            array (
                'id' => 1456,
                'nombre' => 'CRESPO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            456 => 
            array (
                'id' => 1457,
                'nombre' => 'LISO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            457 => 
            array (
                'id' => 1458,
                'nombre' => 'RIZADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            458 => 
            array (
                'id' => 1459,
                'nombre' => 'SIN CABELLO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            459 => 
            array (
                'id' => 1460,
                'nombre' => 'AZUL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            460 => 
            array (
                'id' => 1461,
                'nombre' => 'ÁMBAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            461 => 
            array (
                'id' => 1462,
                'nombre' => 'GRIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            462 => 
            array (
                'id' => 1463,
                'nombre' => 'MARRÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            463 => 
            array (
                'id' => 1464,
                'nombre' => 'VERDE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            464 => 
            array (
                'id' => 1465,
                'nombre' => 'AGUILEÑA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            465 => 
            array (
                'id' => 1466,
                'nombre' => 'CHATA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            466 => 
            array (
                'id' => 1467,
                'nombre' => 'CURVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            467 => 
            array (
                'id' => 1468,
                'nombre' => 'RECTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            468 => 
            array (
                'id' => 1469,
                'nombre' => 'PEQUEÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            469 => 
            array (
                'id' => 1470,
                'nombre' => 'MEDIANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            470 => 
            array (
                'id' => 1471,
                'nombre' => 'GRANDE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            471 => 
            array (
                'id' => 1472,
                'nombre' => 'ACCESO USUARIO CON PERMISOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            472 => 
            array (
                'id' => 1473,
                'nombre' => 'FAMILIAS Y/O REDES DE APOYO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            473 => 
            array (
                'id' => 1474,
                'nombre' => 'SIN REALIZAR TRÁMITE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            474 => 
            array (
                'id' => 1475,
                'nombre' => 'PERDIDA/HURTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            475 => 
            array (
                'id' => 1476,
                'nombre' => 'EMPEÑADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            476 => 
            array (
                'id' => 1477,
                'nombre' => 'DESCONOCE SI HA TENIDO DOCUMENTO DE IDENTIFIACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            477 => 
            array (
                'id' => 1478,
                'nombre' => 'CASTIGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            478 => 
            array (
                'id' => 1479,
                'nombre' => 'MADRE ADOPTIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            479 => 
            array (
                'id' => 1480,
                'nombre' => 'PADRE ADOPTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            480 => 
            array (
                'id' => 1481,
                'nombre' => 'INTERNADO NNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            481 => 
            array (
                'id' => 1482,
                'nombre' => 'INTERNADO ESCNNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            482 => 
            array (
                'id' => 1483,
                'nombre' => 'INTERNADO CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            483 => 
            array (
                'id' => 1484,
                'nombre' => 'EXTERNADO AJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            484 => 
            array (
                'id' => 1485,
                'nombre' => 'EXTERNADO ESCNNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            485 => 
            array (
                'id' => 1486,
                'nombre' => 'EXTERNADO CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            486 => 
            array (
                'id' => 1487,
                'nombre' => 'ESTÍMULO DE CORRESPONSABILIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            487 => 
            array (
                'id' => 1488,
            'nombre' => 'CPS (CONTRATO POR PRESTACION DE SERVICIOS)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            488 => 
            array (
                'id' => 1489,
                'nombre' => 'CAE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            489 => 
            array (
                'id' => 1490,
                'nombre' => 'PARQUE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            490 => 
            array (
                'id' => 1491,
                'nombre' => 'VIDEOJUEGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            491 => 
            array (
                'id' => 1492,
                'nombre' => 'INSTITUCIONES EDUCATIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            492 => 
            array (
                'id' => 1493,
                'nombre' => 'ENTIDADES PÊBLICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            493 => 
            array (
                'id' => 1494,
                'nombre' => 'MUERTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            494 => 
            array (
                'id' => 1495,
                'nombre' => 'INTERNET',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            495 => 
            array (
                'id' => 1496,
                'nombre' => 'ESQUINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            496 => 
            array (
                'id' => 1497,
                'nombre' => 'TANQUE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            497 => 
            array (
                'id' => 1498,
                'nombre' => 'LAGUNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            498 => 
            array (
                'id' => 1499,
                'nombre' => 'SEPARADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            499 => 
            array (
                'id' => 1500,
                'nombre' => 'CALLEJON',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
        ));
        \DB::table('parametros')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'nombre' => 'POTRERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            1 => 
            array (
                'id' => 1502,
                'nombre' => 'CICLORUTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            2 => 
            array (
                'id' => 1503,
                'nombre' => 'ZONA COMERCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            3 => 
            array (
                'id' => 1504,
                'nombre' => 'CANAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            4 => 
            array (
                'id' => 1505,
                'nombre' => 'FLOTANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            5 => 
            array (
                'id' => 1506,
                'nombre' => 'ESPACIOS DEPORTIVOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            6 => 
            array (
                'id' => 1507,
                'nombre' => 'CAÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            7 => 
            array (
                'id' => 1508,
                'nombre' => 'PUENTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            8 => 
            array (
                'id' => 1509,
                'nombre' => 'DIAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            9 => 
            array (
                'id' => 1510,
                'nombre' => 'PRIVADO DE LA LIBERTAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            10 => 
            array (
                'id' => 1511,
                'nombre' => 'EMPLEARSE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            11 => 
            array (
                'id' => 1512,
                'nombre' => 'MULTIPLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            12 => 
            array (
                'id' => 1513,
                'nombre' => 'MORMON',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            13 => 
            array (
                'id' => 1514,
                'nombre' => 'CRISTIANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            14 => 
            array (
                'id' => 1515,
                'nombre' => 'TESTIGO DE JEHOVÁ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            15 => 
            array (
                'id' => 1516,
                'nombre' => 'CENTRO ZONAL BOSA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            16 => 
            array (
                'id' => 1517,
                'nombre' => 'CENTRO ZONAL CIUDAD BOLIVAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            17 => 
            array (
                'id' => 1518,
                'nombre' => 'REGIONAL ANTIOQUIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            18 => 
            array (
                'id' => 1519,
                'nombre' => 'REGIONAL BOYACA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            19 => 
            array (
                'id' => 1520,
                'nombre' => 'REGIONAL CALDAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            20 => 
            array (
                'id' => 1521,
                'nombre' => 'REGIONAL CAUCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            21 => 
            array (
                'id' => 1522,
                'nombre' => 'REGIONAL CUNDINAMARCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            22 => 
            array (
                'id' => 1523,
                'nombre' => 'REGIONAL QUINDÍO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            23 => 
            array (
                'id' => 1524,
                'nombre' => 'REGIONAL RISARALDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            24 => 
            array (
                'id' => 1525,
                'nombre' => 'REGIONAL SANTANDER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            25 => 
            array (
                'id' => 1526,
                'nombre' => 'REGIONAL TOLIMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            26 => 
            array (
                'id' => 1527,
                'nombre' => 'SANCION PAGADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            27 => 
            array (
                'id' => 1528,
                'nombre' => 'INTEGRANTE DE ORGANIZACIÓN O COLECTIVO SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            28 => 
            array (
                'id' => 1529,
                'nombre' => 'COMUNIDAD GENERACIÓN DE INGRESOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            29 => 
            array (
                'id' => 1530,
                'nombre' => 'ALTO RIESGO DE ABANDONO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            30 => 
            array (
                'id' => 1531,
                'nombre' => 'ACTIVISTA INDEPENDIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            31 => 
            array (
                'id' => 1532,
                'nombre' => 'ARTISTA INDEPENDIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            32 => 
            array (
                'id' => 1533,
                'nombre' => 'MEDIDA JUDICIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            33 => 
            array (
                'id' => 1534,
                'nombre' => 'ABOGADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            34 => 
            array (
                'id' => 1535,
            'nombre' => 'ADMINISTRADOR(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            35 => 
            array (
                'id' => 1536,
                'nombre' => 'AGRICULTOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            36 => 
            array (
                'id' => 1537,
                'nombre' => 'AMA DE CASA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            37 => 
            array (
                'id' => 1538,
                'nombre' => 'AUXILIAR DE COCINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            38 => 
            array (
                'id' => 1539,
                'nombre' => 'AUXILIAR DE RESTAURANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            39 => 
            array (
                'id' => 1540,
                'nombre' => 'AYUDANTE DE CONSTRUCCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            40 => 
            array (
                'id' => 1541,
                'nombre' => 'BENEFICIARIO IDIPRON',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            41 => 
            array (
                'id' => 1542,
                'nombre' => 'CONDUCTOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            42 => 
            array (
                'id' => 1543,
                'nombre' => 'CONSTRUCTOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            43 => 
            array (
                'id' => 1544,
                'nombre' => 'DEAMBULAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            44 => 
            array (
                'id' => 1545,
                'nombre' => 'DESEMPLEADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            45 => 
            array (
                'id' => 1546,
                'nombre' => 'DISCAPACITADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            46 => 
            array (
                'id' => 1547,
                'nombre' => 'ELECTRICISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            47 => 
            array (
                'id' => 1548,
                'nombre' => 'EMPLEADO POR DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            48 => 
            array (
                'id' => 1549,
                'nombre' => 'EMPLEADO FORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            49 => 
            array (
                'id' => 1550,
                'nombre' => 'EMPLEO INFORMAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            50 => 
            array (
                'id' => 1551,
                'nombre' => 'ESTILISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            51 => 
            array (
                'id' => 1552,
            'nombre' => 'ESTUDIA (JARDÍN INFANTIL)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            52 => 
            array (
                'id' => 1553,
                'nombre' => 'ESTUDIANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            53 => 
            array (
                'id' => 1554,
                'nombre' => 'ESTUDIANTE COLEGIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            54 => 
            array (
                'id' => 1555,
                'nombre' => 'ESTUDIANTE UNIVERSITARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            55 => 
            array (
                'id' => 1556,
                'nombre' => 'FALLECIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            56 => 
            array (
                'id' => 1557,
                'nombre' => 'GENERACIÓN DE INGRESOS IDIPRON',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            57 => 
            array (
                'id' => 1558,
                'nombre' => 'GUARDA DE SEGURIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            58 => 
            array (
                'id' => 1559,
                'nombre' => 'HABITANTE DE CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            59 => 
            array (
                'id' => 1560,
            'nombre' => 'IMPULSADOR(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            60 => 
            array (
                'id' => 1561,
                'nombre' => 'INDEPENDIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            61 => 
            array (
                'id' => 1562,
                'nombre' => 'JEFE DE COCINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            62 => 
            array (
                'id' => 1563,
                'nombre' => 'LAVADOR DE CARROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            63 => 
            array (
                'id' => 1564,
                'nombre' => 'MAESTRO DE CONSTRUCCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            64 => 
            array (
                'id' => 1565,
            'nombre' => 'MECÁNICO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            65 => 
            array (
                'id' => 1566,
                'nombre' => 'MENSAJERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            66 => 
            array (
                'id' => 1567,
            'nombre' => 'MESERO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            67 => 
            array (
                'id' => 1568,
            'nombre' => 'MEDICO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            68 => 
            array (
                'id' => 1569,
                'nombre' => 'RECICLADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            69 => 
            array (
                'id' => 1570,
                'nombre' => 'RECLUSO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            70 => 
            array (
                'id' => 1571,
                'nombre' => 'SECRETARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            71 => 
            array (
                'id' => 1572,
                'nombre' => 'SOLDADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            72 => 
            array (
                'id' => 1573,
                'nombre' => 'SUPERVISOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            73 => 
            array (
                'id' => 1574,
                'nombre' => 'TAXISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            74 => 
            array (
                'id' => 1575,
                'nombre' => 'TORNERO SOLDADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            75 => 
            array (
                'id' => 1576,
                'nombre' => 'TRABAJADOR SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            76 => 
            array (
                'id' => 1577,
                'nombre' => 'VENDEDOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            77 => 
            array (
                'id' => 1578,
                'nombre' => 'VENDEDOR AMBULANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            78 => 
            array (
                'id' => 1579,
                'nombre' => 'LUNES-VIERNES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            79 => 
            array (
                'id' => 1580,
                'nombre' => 'LUNES-DOMINGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            80 => 
            array (
                'id' => 1581,
                'nombre' => 'MIRAR TV',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            81 => 
            array (
                'id' => 1582,
                'nombre' => 'TEATRO O CINE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            82 => 
            array (
                'id' => 1583,
                'nombre' => 'RAPER/HIP HOP',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            83 => 
            array (
                'id' => 1584,
                'nombre' => 'PRÁCTICA DE BRAKE DANCE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            84 => 
            array (
                'id' => 1585,
            'nombre' => 'SKATEBOARD(TABLA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            85 => 
            array (
                'id' => 1586,
                'nombre' => 'CONSUMO SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            86 => 
            array (
                'id' => 1587,
                'nombre' => 'JUGAR BILLAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            87 => 
            array (
                'id' => 1588,
                'nombre' => 'JUEGOS DE AZAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            88 => 
            array (
                'id' => 1589,
                'nombre' => 'ACTIVIDADES EN PARQUE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            89 => 
            array (
                'id' => 1590,
                'nombre' => 'MAQUINAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            90 => 
            array (
                'id' => 1591,
                'nombre' => 'PRÁCTICA DEPORTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            91 => 
            array (
                'id' => 1592,
                'nombre' => 'CAMINAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            92 => 
            array (
                'id' => 1593,
                'nombre' => 'LABORES DOMÉSTICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            93 => 
            array (
                'id' => 1594,
                'nombre' => 'COMISARIO DE FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            94 => 
            array (
                'id' => 1595,
                'nombre' => 'LESIONES PERSONALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            95 => 
            array (
                'id' => 1596,
                'nombre' => 'EXTORSIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            96 => 
            array (
                'id' => 1597,
                'nombre' => 'TENTATIVA DE HOMICIDIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            97 => 
            array (
                'id' => 1598,
                'nombre' => 'ESTAFA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            98 => 
            array (
                'id' => 1599,
                'nombre' => 'FALSEDAD EN DOCUMENTO PÊBLICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            99 => 
            array (
                'id' => 1600,
                'nombre' => 'ANSILAN,FLUTIN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            100 => 
            array (
                'id' => 1601,
                'nombre' => 'ATIVAN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            101 => 
            array (
                'id' => 1602,
                'nombre' => 'BUSPAR,NODEPREX,TUTRAN,NORMATON',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            102 => 
            array (
                'id' => 1603,
                'nombre' => 'CODEINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            103 => 
            array (
                'id' => 1604,
                'nombre' => 'CUAIT-D',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            104 => 
            array (
                'id' => 1605,
                'nombre' => 'ESCOPOLAMINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            105 => 
            array (
                'id' => 1606,
                'nombre' => 'EXTASIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            106 => 
            array (
                'id' => 1607,
                'nombre' => 'FENOBARBITAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            107 => 
            array (
                'id' => 1608,
                'nombre' => 'HALOPIDOL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            108 => 
            array (
                'id' => 1609,
                'nombre' => 'HEROINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            109 => 
            array (
                'id' => 1610,
                'nombre' => 'LEPONEX',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            110 => 
            array (
                'id' => 1611,
                'nombre' => 'LEXOTAN,ANSIOSEI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            111 => 
            array (
                'id' => 1612,
                'nombre' => 'MELERIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            112 => 
            array (
                'id' => 1613,
                'nombre' => 'MEZCLAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            113 => 
            array (
                'id' => 1614,
                'nombre' => 'MORFINA, SALES Y PREPARADOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            114 => 
            array (
                'id' => 1615,
                'nombre' => 'MOTIVAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:42',
                'updated_at' => '2021-06-02 14:14:42',
            ),
            115 => 
            array (
                'id' => 1616,
                'nombre' => 'OPIO Y SUS DERIVADOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            116 => 
            array (
                'id' => 1617,
                'nombre' => 'POLVO DE ANGEL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            117 => 
            array (
                'id' => 1618,
                'nombre' => 'ROHYPNOL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            118 => 
            array (
                'id' => 1619,
                'nombre' => 'SINOGÁN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            119 => 
            array (
                'id' => 1620,
                'nombre' => 'TOTRANIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            120 => 
            array (
                'id' => 1621,
                'nombre' => 'VALIUM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            121 => 
            array (
                'id' => 1622,
                'nombre' => 'NO CONSUME',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            122 => 
            array (
                'id' => 1623,
                'nombre' => 'COMUNIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            123 => 
            array (
                'id' => 1624,
                'nombre' => 'CONFIRMACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            124 => 
            array (
                'id' => 1625,
                'nombre' => 'VESTUARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            125 => 
            array (
                'id' => 1626,
                'nombre' => 'VIVIENDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            126 => 
            array (
                'id' => 1627,
                'nombre' => 'ALIMENTACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            127 => 
            array (
                'id' => 1628,
                'nombre' => 'MATRIMONIO1',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            128 => 
            array (
                'id' => 1629,
                'nombre' => 'ASOCIACIÓN INDIGENA DEL CAUCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            129 => 
            array (
                'id' => 1630,
                'nombre' => 'COMFAORIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            130 => 
            array (
                'id' => 1631,
                'nombre' => 'VINCULADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            131 => 
            array (
                'id' => 1632,
                'nombre' => 'CONDUCTA HIPERSEXUALIZADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            132 => 
            array (
                'id' => 1633,
                'nombre' => 'CONDUCTA DELICTIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            133 => 
            array (
                'id' => 1634,
                'nombre' => 'FÍSICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            134 => 
            array (
                'id' => 1635,
                'nombre' => 'DIGITAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            135 => 
            array (
                'id' => 1636,
                'nombre' => 'ACTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            136 => 
            array (
                'id' => 1637,
                'nombre' => 'INACTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            137 => 
            array (
                'id' => 1638,
                'nombre' => 'EN PROCESO DE ACTIVACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            138 => 
            array (
                'id' => 1639,
                'nombre' => 'FAMILIA EXTENSA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            139 => 
            array (
                'id' => 1640,
                'nombre' => 'BOTAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            140 => 
            array (
                'id' => 1641,
                'nombre' => 'TENIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            141 => 
            array (
                'id' => 1642,
                'nombre' => 'ZAPATOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            142 => 
            array (
                'id' => 1643,
                'nombre' => 'ZAPATILLAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            143 => 
            array (
                'id' => 1644,
                'nombre' => 'BUZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            144 => 
            array (
                'id' => 1645,
                'nombre' => 'CAMISA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            145 => 
            array (
                'id' => 1646,
                'nombre' => 'CAMISETA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            146 => 
            array (
                'id' => 1647,
                'nombre' => 'CHAQUETA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            147 => 
            array (
                'id' => 1648,
                'nombre' => 'CHALECO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            148 => 
            array (
                'id' => 1649,
                'nombre' => 'PANTALÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            149 => 
            array (
                'id' => 1650,
                'nombre' => 'SUDADERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            150 => 
            array (
                'id' => 1651,
                'nombre' => 'FALDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            151 => 
            array (
                'id' => 1652,
                'nombre' => 'VESTIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            152 => 
            array (
                'id' => 1653,
                'nombre' => 'TELA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            153 => 
            array (
                'id' => 1654,
                'nombre' => 'CUERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            154 => 
            array (
                'id' => 1655,
                'nombre' => 'SINTÉTICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            155 => 
            array (
                'id' => 1656,
                'nombre' => '123',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            156 => 
            array (
                'id' => 1657,
                'nombre' => '141',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            157 => 
            array (
                'id' => 1658,
            'nombre' => 'FORTALECER VÍNCULOS FAMILIARES (ENCUENTRO FAMILIAR)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            158 => 
            array (
                'id' => 1659,
                'nombre' => 'PARTICIPAR EN CELEBRACIONES/FESTIVIDADES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            159 => 
            array (
                'id' => 1660,
                'nombre' => 'PERIODO VACACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            160 => 
            array (
                'id' => 1661,
                'nombre' => 'ASISTIR A CITA MÉDICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            161 => 
            array (
                'id' => 1662,
                'nombre' => 'RECIBIR PROCEDIMIENTO MÉDICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            162 => 
            array (
                'id' => 1663,
                'nombre' => 'CONDICIONES FÍSICAS ÓPTIMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            163 => 
            array (
                'id' => 1664,
            'nombre' => 'ORIENTADO EN SUS TRES ESFERAS(PERSONA, TIEMPO, LUGAR)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            164 => 
            array (
                'id' => 1665,
                'nombre' => 'ENFERMEDAD GENERAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            165 => 
            array (
                'id' => 1666,
                'nombre' => 'BROTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            166 => 
            array (
                'id' => 1667,
                'nombre' => 'LACERACIONES Y HEMATOMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            167 => 
            array (
                'id' => 1668,
                'nombre' => 'DISTRITO JOVEN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            168 => 
            array (
                'id' => 1669,
                'nombre' => 'CONTEXTO PEDAGÓGICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            169 => 
            array (
                'id' => 1670,
                'nombre' => 'SICOSOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            170 => 
            array (
                'id' => 1671,
                'nombre' => 'DEFUNCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            171 => 
            array (
                'id' => 1672,
                'nombre' => 'CARRERA ADMINISTRATIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            172 => 
            array (
                'id' => 1673,
                'nombre' => 'CONTRATISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            173 => 
            array (
                'id' => 1674,
                'nombre' => 'PLANTA TEMPORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            174 => 
            array (
                'id' => 1675,
                'nombre' => 'LIBRE NOMBRAMIENTO Y REMOCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            175 => 
            array (
                'id' => 1676,
                'nombre' => '8 - 12 AÑOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            176 => 
            array (
                'id' => 1677,
                'nombre' => '13 - 17 AÑOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            177 => 
            array (
                'id' => 1678,
                'nombre' => '18 - 26 AÑOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            178 => 
            array (
                'id' => 1679,
                'nombre' => '8 A 28 AÑOS - 11 MESES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            179 => 
            array (
                'id' => 1680,
                'nombre' => 'CENTÍMETROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            180 => 
            array (
                'id' => 1681,
                'nombre' => 'METROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            181 => 
            array (
                'id' => 1682,
                'nombre' => 'PULGADAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            182 => 
            array (
                'id' => 1683,
                'nombre' => 'LITROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            183 => 
            array (
                'id' => 1684,
                'nombre' => 'MILIMETROS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            184 => 
            array (
                'id' => 1685,
                'nombre' => 'KILOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            185 => 
            array (
                'id' => 1686,
                'nombre' => 'GRAMOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            186 => 
            array (
                'id' => 1687,
                'nombre' => 'LIBRAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            187 => 
            array (
                'id' => 1688,
                'nombre' => 'RETROCESO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            188 => 
            array (
                'id' => 1689,
                'nombre' => 'INICIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            189 => 
            array (
                'id' => 1690,
                'nombre' => 'SEGUIMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            190 => 
            array (
                'id' => 1691,
                'nombre' => 'ACTUALMENTE ESTUDIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            191 => 
            array (
                'id' => 1692,
                'nombre' => 'ACTUALMENTE NO ESTUDIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            192 => 
            array (
                'id' => 1693,
                'nombre' => 'ABANDONÓ ESTUDIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            193 => 
            array (
                'id' => 1694,
                'nombre' => 'CONTRATO POR DÍAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            194 => 
            array (
                'id' => 1695,
                'nombre' => 'JUBILADO/PENSIONADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            195 => 
            array (
                'id' => 1696,
                'nombre' => 'ILEGALIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            196 => 
            array (
                'id' => 1697,
            'nombre' => 'RESIDENCIAL (INTERNADO)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            197 => 
            array (
                'id' => 1698,
            'nombre' => 'AMBULATORIO (EXTERNADO)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            198 => 
            array (
                'id' => 1699,
                'nombre' => 'MIXTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            199 => 
            array (
                'id' => 1700,
                'nombre' => 'VOLUNTARIAMENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            200 => 
            array (
                'id' => 1701,
                'nombre' => 'LO LLEVARON FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            201 => 
            array (
                'id' => 1702,
                'nombre' => 'LO LLEVARON AMIGOS O VOLUNTARIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            202 => 
            array (
                'id' => 1703,
                'nombre' => 'INDICACIÓN LEGAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            203 => 
            array (
                'id' => 1704,
                'nombre' => 'INDICACIÓN MÉDICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            204 => 
            array (
                'id' => 1705,
                'nombre' => 'INDICACIÓN LABORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            205 => 
            array (
                'id' => 1706,
                'nombre' => 'INDICACIÓN ACADÉMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            206 => 
            array (
                'id' => 1707,
                'nombre' => 'VIVIENDA U HOGAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            207 => 
            array (
                'id' => 1708,
                'nombre' => 'ESTABLECIMIENTO EDUCATIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            208 => 
            array (
                'id' => 1709,
                'nombre' => 'BARES, TABERNAS, DISCOTECAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            209 => 
            array (
                'id' => 1710,
                'nombre' => 'VÍA PÊBLICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            210 => 
            array (
                'id' => 1711,
                'nombre' => 'EN CASA DE AMIGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            211 => 
            array (
                'id' => 1712,
                'nombre' => 'BARBITÊRICOS Y BENZODIACEPINAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            212 => 
            array (
                'id' => 1713,
                'nombre' => 'ANFETAMINAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            213 => 
            array (
                'id' => 1714,
                'nombre' => 'LSD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            214 => 
            array (
                'id' => 1715,
                'nombre' => 'NUEVAS SUSTANCIAS SINTÉTICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            215 => 
            array (
                'id' => 1716,
                'nombre' => 'DE 1 - 5',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            216 => 
            array (
                'id' => 1717,
                'nombre' => 'DE 6 - 10',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            217 => 
            array (
                'id' => 1718,
                'nombre' => 'DE 11 - 15',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            218 => 
            array (
                'id' => 1719,
                'nombre' => 'DE 16 - 20',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            219 => 
            array (
                'id' => 1720,
                'nombre' => 'DE 21 - 30',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            220 => 
            array (
                'id' => 1721,
                'nombre' => 'MÁS DE 30',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            221 => 
            array (
                'id' => 1722,
                'nombre' => 'LA COMPRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            222 => 
            array (
                'id' => 1723,
                'nombre' => 'SE LA REGALAN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            223 => 
            array (
                'id' => 1724,
                'nombre' => 'LA INTERCAMBIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            224 => 
            array (
                'id' => 1725,
                'nombre' => 'GOTAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            225 => 
            array (
                'id' => 1726,
                'nombre' => 'SOLO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            226 => 
            array (
                'id' => 1727,
                'nombre' => 'ACOMPAÑADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            227 => 
            array (
                'id' => 1728,
                'nombre' => 'SIEMPRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            228 => 
            array (
                'id' => 1729,
                'nombre' => 'A VECES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            229 => 
            array (
                'id' => 1730,
                'nombre' => 'INSOMNIO CONCILIACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            230 => 
            array (
                'id' => 1731,
                'nombre' => 'DESPERTAR TEMPRANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            231 => 
            array (
                'id' => 1732,
                'nombre' => 'DESPERTARES MÊLTIPLES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            232 => 
            array (
                'id' => 1733,
                'nombre' => 'PESADILLAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            233 => 
            array (
                'id' => 1734,
                'nombre' => 'AUMENTADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            234 => 
            array (
                'id' => 1735,
                'nombre' => 'DISMINUIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            235 => 
            array (
                'id' => 1736,
                'nombre' => 'DISMINUIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            236 => 
            array (
                'id' => 1737,
                'nombre' => 'EN LA NOCHE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            237 => 
            array (
                'id' => 1738,
                'nombre' => 'IRRITABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            238 => 
            array (
                'id' => 1739,
                'nombre' => 'ABURRIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            239 => 
            array (
                'id' => 1740,
                'nombre' => 'DEPRIMIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            240 => 
            array (
                'id' => 1741,
                'nombre' => 'ESTRESADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            241 => 
            array (
                'id' => 1742,
                'nombre' => 'DESESPERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            242 => 
            array (
                'id' => 1743,
                'nombre' => 'AGRESIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            243 => 
            array (
                'id' => 1744,
                'nombre' => 'REMISIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            244 => 
            array (
                'id' => 1745,
                'nombre' => 'IMPRESIÓN DIAGNÓSTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            245 => 
            array (
                'id' => 1746,
                'nombre' => 'POBLACIÓN HABITANTE DE LA CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            246 => 
            array (
                'id' => 1747,
                'nombre' => 'POBLACIÓN ICBF',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            247 => 
            array (
                'id' => 1748,
                'nombre' => 'COMUNIDAD INDÍGENA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            248 => 
            array (
                'id' => 1749,
                'nombre' => 'POBLACIÓN DESPLAZADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            249 => 
            array (
                'id' => 1750,
                'nombre' => 'PUEBLO RROM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            250 => 
            array (
                'id' => 1751,
                'nombre' => 'MENORES DESVINCULADOS DEL CONFLICTO ARMADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            251 => 
            array (
                'id' => 1752,
                'nombre' => 'POBLACIÓN DESMOVILIZADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            252 => 
            array (
                'id' => 1753,
                'nombre' => 'POBLACIÓN PRIVADA DE LA LIBERTAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            253 => 
            array (
                'id' => 1754,
                'nombre' => 'POBLACIÓN MIGRANTE DE LA REPÊBLICA BOLIVARIANA DE VENEZUELA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            254 => 
            array (
                'id' => 1755,
                'nombre' => 'INSTRUMENTO PROVISIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            255 => 
            array (
                'id' => 1756,
                'nombre' => 'SISBEN DISTRITAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            256 => 
            array (
                'id' => 1757,
                'nombre' => 'SISBEN DEPARTAMENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            257 => 
            array (
                'id' => 1758,
                'nombre' => 'OCUPACIÓN DEL TIEMPO LIBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            258 => 
            array (
                'id' => 1759,
                'nombre' => 'DEMOCRÁTICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            259 => 
            array (
                'id' => 1760,
                'nombre' => 'TODO EN MAYUSCULAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            260 => 
            array (
                'id' => 1761,
                'nombre' => 'TODO EN MINUSCULAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            261 => 
            array (
                'id' => 1762,
                'nombre' => 'MAYUSCULA PRIMER LETRA DE CADA PALABRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            262 => 
            array (
                'id' => 1763,
                'nombre' => 'BIBLIOTECA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            263 => 
            array (
                'id' => 1764,
                'nombre' => 'RECURSOS UPI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            264 => 
            array (
                'id' => 1765,
                'nombre' => 'INSUMO TALLERES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            265 => 
            array (
                'id' => 1766,
                'nombre' => 'TECNOLOGICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            266 => 
            array (
                'id' => 1767,
                'nombre' => 'PEDAGOGICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            267 => 
            array (
                'id' => 1768,
                'nombre' => 'ALIMENTICIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            268 => 
            array (
                'id' => 1769,
                'nombre' => 'PLIEGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            269 => 
            array (
                'id' => 1770,
                'nombre' => 'ES RESPONSABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            270 => 
            array (
                'id' => 1771,
                'nombre' => 'NO ES RESPONSABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            271 => 
            array (
                'id' => 1772,
                'nombre' => 'HIGIENE Y ASEO , VENTILACIÓN, ILUMINACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            272 => 
            array (
                'id' => 1773,
                'nombre' => 'NO HIGIENE, NI VENTILACIÓN, NI ILUMINACIÓN.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            273 => 
            array (
                'id' => 1774,
            'nombre' => 'INCAPACITADO(A) PARA TRABAJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            274 => 
            array (
                'id' => 1775,
                'nombre' => 'OCASIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            275 => 
            array (
                'id' => 1776,
                'nombre' => 'OFICIOS VARIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            276 => 
            array (
                'id' => 1777,
                'nombre' => 'LA MADRE RECIBE INGRESO EN OFICIOS VARIOS VENTA Y TRABAJO SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            277 => 
            array (
                'id' => 1778,
                'nombre' => 'APOYO INTEGRAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            278 => 
            array (
                'id' => 1779,
                'nombre' => 'APOYO ALIMENTARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            279 => 
            array (
                'id' => 1780,
                'nombre' => 'APOYO EMOCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            280 => 
            array (
                'id' => 1781,
                'nombre' => 'IMPOTENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            281 => 
            array (
                'id' => 1782,
                'nombre' => 'APOYO FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            282 => 
            array (
                'id' => 1783,
                'nombre' => 'ALEGRIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            283 => 
            array (
                'id' => 1784,
                'nombre' => 'CULPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            284 => 
            array (
                'id' => 1785,
                'nombre' => 'DESESPERACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            285 => 
            array (
                'id' => 1786,
                'nombre' => 'DESILUSIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            286 => 
            array (
                'id' => 1787,
                'nombre' => 'PROBLEMAS DE SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            287 => 
            array (
                'id' => 1788,
                'nombre' => 'REMISIÓN ICBF',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            288 => 
            array (
                'id' => 1789,
                'nombre' => 'CONFLICTO ARMADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            289 => 
            array (
                'id' => 1790,
                'nombre' => 'MIGRACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            290 => 
            array (
                'id' => 1791,
                'nombre' => 'ECONÓMICO-EMOCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            291 => 
            array (
                'id' => 1792,
                'nombre' => 'ECONÓMICOS-ALIMENTICIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            292 => 
            array (
                'id' => 1793,
                'nombre' => 'AYUDA HUMANITARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            293 => 
            array (
                'id' => 1794,
                'nombre' => 'LABIO LEPORINO DEL HIJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            294 => 
            array (
                'id' => 1795,
                'nombre' => 'DESCONOCE EL MOTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            295 => 
            array (
                'id' => 1796,
                'nombre' => 'DESCONOCE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            296 => 
            array (
                'id' => 1797,
                'nombre' => 'PROGENITORA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            297 => 
            array (
                'id' => 1798,
                'nombre' => 'NO VIVEN CON MENORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            298 => 
            array (
                'id' => 1799,
                'nombre' => 'JORNADAS ACADÉMICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            299 => 
            array (
                'id' => 1800,
                'nombre' => 'PROSTITUCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            300 => 
            array (
                'id' => 1801,
                'nombre' => 'EXPAREJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            301 => 
            array (
                'id' => 1802,
                'nombre' => 'SALUD MENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            302 => 
            array (
                'id' => 1803,
                'nombre' => 'PRESENTAR CONDICIÓN DE DISCAPACIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            303 => 
            array (
                'id' => 1804,
                'nombre' => 'ESTRIGMATIZACIÓN POR SU IDENTIDAD SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            304 => 
            array (
                'id' => 1805,
                'nombre' => 'AMIGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            305 => 
            array (
                'id' => 1806,
                'nombre' => 'AFECTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            306 => 
            array (
                'id' => 1807,
                'nombre' => 'AFECTIVO - ECONÓMICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            307 => 
            array (
                'id' => 1808,
                'nombre' => 'ALOJAMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            308 => 
            array (
                'id' => 1809,
                'nombre' => 'APOYO ECONÓMICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            309 => 
            array (
                'id' => 1810,
                'nombre' => 'VIVIENDA ALIMENTACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            310 => 
            array (
                'id' => 1811,
                'nombre' => 'APOYO ECONÓMICO Y EMOCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            311 => 
            array (
                'id' => 1812,
                'nombre' => 'APOYO ECONÓMICO / EMOCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            312 => 
            array (
                'id' => 1813,
                'nombre' => 'APOYO EMOCIONAL - CUIDA HIJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            313 => 
            array (
                'id' => 1814,
                'nombre' => 'AFECTIVO Y VIVIENDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            314 => 
            array (
                'id' => 1815,
                'nombre' => 'BONO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            315 => 
            array (
                'id' => 1816,
                'nombre' => 'BONO AFROCOLOMBIANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            316 => 
            array (
                'id' => 1817,
                'nombre' => 'CARIÑO Y PROTECCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            317 => 
            array (
                'id' => 1818,
                'nombre' => 'REHABILITACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            318 => 
            array (
                'id' => 1819,
                'nombre' => 'CUIDADO HIJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            319 => 
            array (
                'id' => 1820,
                'nombre' => 'EMOCIONALMENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            320 => 
            array (
                'id' => 1821,
                'nombre' => 'INTEGRAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            321 => 
            array (
                'id' => 1822,
                'nombre' => 'MANTENIMIENTO ECONÓMICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            322 => 
            array (
                'id' => 1823,
                'nombre' => 'SERVICIOS ACADEMICOS, ESPIRITUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            323 => 
            array (
                'id' => 1824,
                'nombre' => 'COMEDOR COMUNITARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            324 => 
            array (
                'id' => 1825,
                'nombre' => 'CAJICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            325 => 
            array (
                'id' => 1826,
                'nombre' => 'PSICOLOGICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            326 => 
            array (
                'id' => 1827,
                'nombre' => 'ATENCIÓN INTEGRAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            327 => 
            array (
                'id' => 1828,
                'nombre' => 'ESTUDIO ACADEMICO- TECNICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            328 => 
            array (
                'id' => 1829,
                'nombre' => 'HURTO MEDIDA DE PROTECCION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            329 => 
            array (
                'id' => 1830,
            'nombre' => 'INTERNADO (HIJOS)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            330 => 
            array (
                'id' => 1831,
                'nombre' => 'MODELO PEDAGOGICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            331 => 
            array (
                'id' => 1832,
                'nombre' => 'INTERNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            332 => 
            array (
                'id' => 1833,
                'nombre' => 'BONO ALIMENTARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            333 => 
            array (
                'id' => 1834,
                'nombre' => 'INTERNAMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            334 => 
            array (
                'id' => 1835,
                'nombre' => 'PSIQUIATRICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            335 => 
            array (
                'id' => 1836,
                'nombre' => 'INTERNO/HURTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            336 => 
            array (
                'id' => 1837,
                'nombre' => 'MERCADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            337 => 
            array (
                'id' => 1838,
                'nombre' => 'PROCESO DE REHABILITACION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            338 => 
            array (
                'id' => 1839,
                'nombre' => 'REHABILITACION DESINTOXICACION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            339 => 
            array (
                'id' => 1840,
                'nombre' => 'RESTABLECIMIENTO DE DERECHOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            340 => 
            array (
                'id' => 1841,
                'nombre' => 'ORIENTACIÓN- ATENCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            341 => 
            array (
                'id' => 1842,
                'nombre' => 'TERAPEUTICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            342 => 
            array (
                'id' => 1843,
                'nombre' => 'PARD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            343 => 
            array (
                'id' => 1844,
                'nombre' => 'ALIMENTACIÓN, EDUCACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            344 => 
            array (
                'id' => 1845,
                'nombre' => 'ORIENTACION FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            345 => 
            array (
                'id' => 1846,
                'nombre' => 'CUSTODIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            346 => 
            array (
                'id' => 1847,
                'nombre' => 'SEGUIMIENTO CONSUMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            347 => 
            array (
                'id' => 1848,
                'nombre' => 'NO REPORTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            348 => 
            array (
                'id' => 1849,
                'nombre' => 'HOGAR DE PASO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            349 => 
            array (
                'id' => 1850,
                'nombre' => 'INTERMEDIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            350 => 
            array (
                'id' => 1851,
                'nombre' => 'ASEO Y CONSTRUCCION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            351 => 
            array (
                'id' => 1852,
                'nombre' => 'QUIMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            352 => 
            array (
                'id' => 1853,
                'nombre' => 'CALCULO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            353 => 
            array (
                'id' => 1854,
                'nombre' => 'FILOSOFIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            354 => 
            array (
                'id' => 1855,
                'nombre' => 'RELIGIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            355 => 
            array (
                'id' => 1856,
                'nombre' => 'FISICA Y QUIMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            356 => 
            array (
                'id' => 1857,
                'nombre' => 'AMOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            357 => 
            array (
                'id' => 1858,
                'nombre' => 'COMPAÑERISMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            358 => 
            array (
                'id' => 1859,
                'nombre' => 'ENOJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            359 => 
            array (
                'id' => 1860,
                'nombre' => 'MAL GENIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            360 => 
            array (
                'id' => 1861,
                'nombre' => 'MIEDO-TEMOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            361 => 
            array (
                'id' => 1862,
                'nombre' => 'CIERRE DE PROCESO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            362 => 
            array (
                'id' => 1863,
                'nombre' => 'CULMINACIÓN PROCESO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            363 => 
            array (
                'id' => 1864,
                'nombre' => 'ABANDONO DE PROCESO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            364 => 
            array (
                'id' => 1865,
                'nombre' => 'OPORTUNIDAD LABORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            365 => 
            array (
                'id' => 1866,
                'nombre' => 'EVASION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            366 => 
            array (
                'id' => 1867,
                'nombre' => 'ACTUALMENTE ACTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            367 => 
            array (
                'id' => 1868,
                'nombre' => 'REINTEGRO FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            368 => 
            array (
                'id' => 1869,
                'nombre' => 'ESTUDIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            369 => 
            array (
                'id' => 1870,
                'nombre' => 'REINTEGRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            370 => 
            array (
                'id' => 1871,
                'nombre' => 'CUSTODIA OTORGADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            371 => 
            array (
                'id' => 1872,
                'nombre' => 'TRASLADO DE DOMICILIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            372 => 
            array (
                'id' => 1873,
                'nombre' => 'PROCESO PENAL DE ADOLESCENTE PARD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            373 => 
            array (
                'id' => 1874,
                'nombre' => 'CIERRE DEL COMEDOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            374 => 
            array (
                'id' => 1875,
                'nombre' => 'POR INTERNADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            375 => 
            array (
                'id' => 1876,
                'nombre' => 'CIERRE DE PROCESO / MEDIDA DE ADOPTABILIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            376 => 
            array (
                'id' => 1877,
                'nombre' => 'SEGUIMIENTO / NEGLIGENCIA PARENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            377 => 
            array (
                'id' => 1878,
                'nombre' => 'PROCESO ABIERTO / DETENCIÓN DOMICILIARIA VIGENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            378 => 
            array (
                'id' => 1879,
                'nombre' => 'CIERRE DEL PROCESO /PATERNIDAD CORRESPONSABILIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            379 => 
            array (
                'id' => 1880,
            'nombre' => 'SOLICITUD DE RETIRO (PROGENITORES)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            380 => 
            array (
                'id' => 1881,
                'nombre' => 'RETIRO POR TERMINACION DE PROCESO.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            381 => 
            array (
                'id' => 1882,
                'nombre' => 'POR IDENTIFICACION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            382 => 
            array (
                'id' => 1883,
                'nombre' => 'ASIGNACIÓN DE CUSTODIA-PARD CERRADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            383 => 
            array (
                'id' => 1884,
                'nombre' => 'ACTUALMENTE POR HIJO MENOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            384 => 
            array (
                'id' => 1885,
                'nombre' => 'TIPO DE FRECUENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            385 => 
            array (
                'id' => 1886,
                'nombre' => 'SUBSIDIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            386 => 
            array (
                'id' => 1887,
                'nombre' => 'BONO ADULTO MAYOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            387 => 
            array (
                'id' => 1888,
                'nombre' => 'BONO AYUDA HUMANITARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            388 => 
            array (
                'id' => 1889,
                'nombre' => 'APOYO INCONDICIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            389 => 
            array (
                'id' => 1890,
                'nombre' => 'DESEO DE SUPERACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            390 => 
            array (
                'id' => 1891,
                'nombre' => 'ESTRUCTURACION DE PLAN DE VIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            391 => 
            array (
                'id' => 1892,
                'nombre' => 'FORMACION TECNOLOGICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            392 => 
            array (
                'id' => 1893,
                'nombre' => 'PROYECTO DE VIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            393 => 
            array (
                'id' => 1894,
                'nombre' => 'ESTRUCTURACION DE SU PROYECTO DE VIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            394 => 
            array (
                'id' => 1895,
                'nombre' => 'PARTICIPACIÓN EN ACTIVIDADES DE LÍDERES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            395 => 
            array (
                'id' => 1896,
                'nombre' => 'PROYECTO DE VIDA ESTRUCTURADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            396 => 
            array (
                'id' => 1897,
                'nombre' => 'PARTICIPACIÓN EN ACTIVIDAD ACADÉMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            397 => 
            array (
                'id' => 1898,
                'nombre' => 'PROYECTO DE VIDA ESTRUCTURADOAPOYO A NIVEL FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            398 => 
            array (
                'id' => 1899,
                'nombre' => 'VINCULACIÓN A IDIPRON',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            399 => 
            array (
                'id' => 1900,
                'nombre' => 'TERMINO EL BACHILLERATO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            400 => 
            array (
                'id' => 1901,
                'nombre' => 'NO CONSUMO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            401 => 
            array (
                'id' => 1902,
                'nombre' => 'NO CONSUMO PROBLEMÁTICO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            402 => 
            array (
                'id' => 1903,
                'nombre' => 'VINCULACIÓN INSTITUCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            403 => 
            array (
                'id' => 1904,
                'nombre' => 'AFILIACION AL SISTEMA DE SEGURIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            404 => 
            array (
                'id' => 1905,
                'nombre' => 'AFILIADA AL SISTEMA DISTRITAL DE SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            405 => 
            array (
                'id' => 1906,
                'nombre' => 'CUENTA CON DOCUMENTO DE IDENTIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            406 => 
            array (
                'id' => 1907,
                'nombre' => 'CUENTA CON DOCUMENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            407 => 
            array (
                'id' => 1908,
                'nombre' => 'HABILIDADES SOCIALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            408 => 
            array (
                'id' => 1909,
                'nombre' => 'FORMACIÓN TÉCNICA SENA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:43',
                'updated_at' => '2021-06-02 14:14:43',
            ),
            409 => 
            array (
                'id' => 1910,
                'nombre' => 'FÊTURO NACIMIENTO DE SU HIJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            410 => 
            array (
                'id' => 1911,
                'nombre' => 'HABILIDADES DEL JOVEN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            411 => 
            array (
                'id' => 1912,
                'nombre' => 'PROCESO FORMATIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            412 => 
            array (
                'id' => 1913,
                'nombre' => 'PROCESO FORMATIVO SENA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            413 => 
            array (
                'id' => 1914,
                'nombre' => 'RED INSTITUCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            414 => 
            array (
                'id' => 1915,
                'nombre' => 'VINCULADO AL SISTEMA DE SALUD - CONFACUNDI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            415 => 
            array (
                'id' => 1916,
                'nombre' => 'RELACIONES CERCANAS A NIVEL FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            416 => 
            array (
                'id' => 1917,
                'nombre' => 'LA INSISTENCIA Y CONSTANCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            417 => 
            array (
                'id' => 1918,
                'nombre' => 'RESILIENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            418 => 
            array (
                'id' => 1919,
                'nombre' => 'UNIDAD DE SISTEMA DE SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            419 => 
            array (
                'id' => 1920,
                'nombre' => 'GANAR DE CAMBIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            420 => 
            array (
                'id' => 1921,
                'nombre' => 'RED DE APOYO FAMILIAR TIA MATERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            421 => 
            array (
                'id' => 1922,
                'nombre' => 'APOYO INSTITUCIONAL- IDIPRON OASIS II',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            422 => 
            array (
                'id' => 1923,
                'nombre' => 'SITUACION ECONOMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            423 => 
            array (
                'id' => 1924,
                'nombre' => 'DIFICULTADES DE APRENDIZAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            424 => 
            array (
                'id' => 1925,
                'nombre' => 'ANTECEDENTES DE CONDUCTA SUICIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            425 => 
            array (
                'id' => 1926,
                'nombre' => 'RIESGO DE VINCULACIÓN A ACTIVIDADES DELICTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            426 => 
            array (
                'id' => 1927,
                'nombre' => 'RIESGO DE CONDUCTA SUICIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            427 => 
            array (
                'id' => 1928,
                'nombre' => 'VIVIR EN LA CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            428 => 
            array (
                'id' => 1929,
                'nombre' => 'AMISTAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            429 => 
            array (
                'id' => 1930,
                'nombre' => 'AUMENTAR EL CONSUMO DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            430 => 
            array (
                'id' => 1931,
                'nombre' => 'DIFICULTADES EMOCIONALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            431 => 
            array (
                'id' => 1932,
                'nombre' => 'CORRER RIESGO FISICO Y MENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            432 => 
            array (
                'id' => 1933,
                'nombre' => 'ESCASAS REDES DE APOYO FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            433 => 
            array (
                'id' => 1934,
                'nombre' => 'CONTEXTO DE RIESGO DELICTIVO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            434 => 
            array (
                'id' => 1935,
                'nombre' => 'INCLUSIÓN A CONTEXTOS INFAVORABLES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            435 => 
            array (
                'id' => 1936,
                'nombre' => 'CONSUMO OCASIONAL DE SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            436 => 
            array (
                'id' => 1937,
                'nombre' => 'INCURSION EN CONTEXTOS DESFABORABLES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            437 => 
            array (
                'id' => 1938,
                'nombre' => 'ALTAMENTE INFLUENCIABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            438 => 
            array (
                'id' => 1939,
                'nombre' => 'INCLUSIÓN EN CONTEXTOS DE USO SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            439 => 
            array (
                'id' => 1940,
                'nombre' => 'VOLVER A SER CHC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            440 => 
            array (
                'id' => 1941,
                'nombre' => 'NO AFILIACION A EPS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            441 => 
            array (
                'id' => 1942,
                'nombre' => 'DESERCION ESCOLAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            442 => 
            array (
                'id' => 1943,
                'nombre' => 'CONDUCTAS AUTOLESIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            443 => 
            array (
                'id' => 1944,
                'nombre' => 'PROYECTO DE VIDA SIN ESTRUCTURACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            444 => 
            array (
                'id' => 1945,
                'nombre' => 'TIEMPO LIBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            445 => 
            array (
                'id' => 1946,
                'nombre' => 'CONTEXTO SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            446 => 
            array (
                'id' => 1947,
                'nombre' => 'CONTEXTO FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            447 => 
            array (
                'id' => 1948,
                'nombre' => 'INCONVENIENTES FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            448 => 
            array (
                'id' => 1949,
                'nombre' => 'FALTA DE OPORTUNIDADES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            449 => 
            array (
                'id' => 1950,
                'nombre' => 'ANTECEDENTES DE CONSUMO Y CONDUCTAS DELICTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            450 => 
            array (
                'id' => 1951,
                'nombre' => 'ANTECEDENTE DE CONSUMO DE SPA Y HABITABILIDAD EN CALLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            451 => 
            array (
                'id' => 1952,
                'nombre' => 'SITUACIÓN DE VIOLENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            452 => 
            array (
                'id' => 1953,
                'nombre' => 'PRESUNTA APNEA DEL SUEÑO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            453 => 
            array (
                'id' => 1954,
                'nombre' => 'CONTEXTO SOCIAL- INFLUENCIA DE PARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            454 => 
            array (
                'id' => 1955,
                'nombre' => 'PERMISIVIDAD RELACIONADA CON CONSUMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            455 => 
            array (
                'id' => 1956,
                'nombre' => 'DX POR SALUD MENTAL "ESQUIZOFRENIA"',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            456 => 
            array (
                'id' => 1957,
                'nombre' => 'NO PRESENTA RED VINCULAR DE APOYO EN BOGOTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            457 => 
            array (
                'id' => 1958,
                'nombre' => 'ACOMULACION DE ESTRÉS/ PROBLEMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            458 => 
            array (
                'id' => 1959,
                'nombre' => 'PERDER LAS GANAS DE LUCHAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            459 => 
            array (
                'id' => 1960,
                'nombre' => 'ESTADO DE ANIMO BAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            460 => 
            array (
                'id' => 1961,
                'nombre' => 'ESTADO ANIMO BAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            461 => 
            array (
                'id' => 1962,
                'nombre' => 'MAL IMPULSO/ NO CONTROLARME',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            462 => 
            array (
                'id' => 1963,
                'nombre' => 'ACUMULACION DE ESTRÉS/ PROBLEMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            463 => 
            array (
                'id' => 1964,
                'nombre' => 'PERDIDA DE UN SER QUERIDO -RECAIDA EN CONSUMO SPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            464 => 
            array (
                'id' => 1965,
                'nombre' => 'ASUME ROL PROTECTOR HACIA FAMILIA EXTENSA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            465 => 
            array (
                'id' => 1966,
                'nombre' => 'CONSUMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            466 => 
            array (
                'id' => 1967,
                'nombre' => 'ACONSEJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            467 => 
            array (
                'id' => 1968,
                'nombre' => 'ACROBACIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            468 => 
            array (
                'id' => 1969,
                'nombre' => 'AGIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            469 => 
            array (
                'id' => 1970,
                'nombre' => 'APRENDIZAJE RAPIDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            470 => 
            array (
                'id' => 1971,
                'nombre' => 'ARREGLAR COMPUTADORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            471 => 
            array (
                'id' => 1972,
                'nombre' => 'ARTISTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            472 => 
            array (
                'id' => 1973,
                'nombre' => 'ARTÍSTICO - MANUALIDADES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            473 => 
            array (
                'id' => 1974,
                'nombre' => 'ATLETISMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            474 => 
            array (
                'id' => 1975,
                'nombre' => 'AYUDAR ALOS DEMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            475 => 
            array (
                'id' => 1976,
                'nombre' => 'BAILAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            476 => 
            array (
                'id' => 1977,
                'nombre' => 'BELLEZA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            477 => 
            array (
                'id' => 1978,
            'nombre' => 'BELLEZA (ARREGLO DE UÑAS)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            478 => 
            array (
                'id' => 1979,
                'nombre' => 'BUENA ACTITUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            479 => 
            array (
                'id' => 1980,
                'nombre' => 'CANTAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            480 => 
            array (
                'id' => 1981,
                'nombre' => 'CERAMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            481 => 
            array (
                'id' => 1982,
                'nombre' => 'CICLISM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            482 => 
            array (
                'id' => 1983,
                'nombre' => 'CICLISMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            483 => 
            array (
                'id' => 1984,
                'nombre' => 'COMPARTIR CON AMIGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            484 => 
            array (
                'id' => 1985,
                'nombre' => 'COMPONER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            485 => 
            array (
                'id' => 1986,
                'nombre' => 'COMPROMISO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            486 => 
            array (
                'id' => 1987,
                'nombre' => 'CONFECCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            487 => 
            array (
                'id' => 1988,
                'nombre' => 'CONOCIMIENTO TICS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            488 => 
            array (
                'id' => 1989,
                'nombre' => 'COSER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            489 => 
            array (
                'id' => 1990,
                'nombre' => 'CULINARIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            490 => 
            array (
                'id' => 1991,
                'nombre' => 'DEDICACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            491 => 
            array (
                'id' => 1992,
                'nombre' => 'DESTREZA PARA DIBUJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            492 => 
            array (
                'id' => 1993,
                'nombre' => 'DESTREZA PARA EL BAILE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            493 => 
            array (
                'id' => 1994,
                'nombre' => 'DIBUJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            494 => 
            array (
                'id' => 1995,
                'nombre' => 'DILIGENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            495 => 
            array (
                'id' => 1996,
                'nombre' => 'DISPOSICIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            496 => 
            array (
                'id' => 1997,
                'nombre' => 'EBANISTERIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            497 => 
            array (
                'id' => 1998,
                'nombre' => 'ELECTRICIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            498 => 
            array (
                'id' => 1999,
                'nombre' => 'ESCRIBIR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            499 => 
            array (
                'id' => 2000,
                'nombre' => 'ESCRIBIR POEMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
        ));
        \DB::table('parametros')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'nombre' => 'ESCUCHAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            1 => 
            array (
                'id' => 2002,
                'nombre' => 'ESTUDI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            2 => 
            array (
                'id' => 2003,
                'nombre' => 'ESTUDIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            3 => 
            array (
                'id' => 2004,
            'nombre' => 'HABILIDADES ARTÍSTICAS (DANZAS)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            4 => 
            array (
                'id' => 2005,
            'nombre' => 'HABILIDADES ARTISTICAS (CANTO) Y COMPONER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            5 => 
            array (
                'id' => 2006,
                'nombre' => 'HABILIDADES ARTISTICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            6 => 
            array (
                'id' => 2007,
                'nombre' => 'FUTBOL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            7 => 
            array (
                'id' => 2008,
                'nombre' => 'HABILIDADES COMUNICATIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            8 => 
            array (
                'id' => 2009,
                'nombre' => 'HABILIDADES DEPORTIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            9 => 
            array (
                'id' => 2010,
                'nombre' => 'MANUALIDADES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            10 => 
            array (
                'id' => 2011,
                'nombre' => 'VENTAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            11 => 
            array (
                'id' => 2012,
                'nombre' => 'TRABAJO EN EQUIPO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            12 => 
            array (
                'id' => 2013,
                'nombre' => 'HABILIDADES OPERATIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            13 => 
            array (
                'id' => 2014,
                'nombre' => 'HACER ASEO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            14 => 
            array (
                'id' => 2015,
                'nombre' => 'HACER DEPORTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            15 => 
            array (
                'id' => 2016,
                'nombre' => 'INTELIGENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            16 => 
            array (
                'id' => 2017,
                'nombre' => 'INTERES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            17 => 
            array (
                'id' => 2018,
                'nombre' => 'JUEGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            18 => 
            array (
                'id' => 2019,
                'nombre' => 'LABORES DEL HOGAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            19 => 
            array (
                'id' => 2020,
                'nombre' => 'LIDERAZGOTOMAR ESTRATEGIAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            20 => 
            array (
                'id' => 2021,
                'nombre' => 'MANEJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            21 => 
            array (
                'id' => 2022,
                'nombre' => 'MECÁNICA AUTOMOTRIZ Y DIESEL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            22 => 
            array (
                'id' => 2023,
                'nombre' => 'MODELAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            23 => 
            array (
                'id' => 2024,
                'nombre' => 'MOTIVACIÓN ACADÉMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            24 => 
            array (
                'id' => 2025,
                'nombre' => 'MÊSICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            25 => 
            array (
                'id' => 2026,
            'nombre' => 'MUSICA (COMPOSITORA Y CANTANTE)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            26 => 
            array (
                'id' => 2027,
            'nombre' => 'MUSICA (SAXOFON, GUITARRA, VOZ)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            27 => 
            array (
                'id' => 2028,
                'nombre' => 'NO SOY PROBLEMÁTICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            28 => 
            array (
                'id' => 2029,
                'nombre' => 'ORGANIZACIÓN DE EVENTOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            29 => 
            array (
                'id' => 2030,
                'nombre' => 'PACIENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            30 => 
            array (
                'id' => 2031,
                'nombre' => '12345678',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            31 => 
            array (
                'id' => 2032,
                'nombre' => 'PEINAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            32 => 
            array (
                'id' => 2033,
                'nombre' => 'PINTAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            33 => 
            array (
                'id' => 2034,
                'nombre' => 'PROPOSITO DE HACER LAS COSAS MEJOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            34 => 
            array (
                'id' => 2035,
                'nombre' => 'REALIZAR ALGUN DEPORTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            35 => 
            array (
                'id' => 2036,
                'nombre' => 'RELACIONARSE CON LAS PERSONAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            36 => 
            array (
                'id' => 2037,
                'nombre' => 'RELACIONARSE CON NIÑOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            37 => 
            array (
                'id' => 2038,
                'nombre' => 'RESPONSABILIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            38 => 
            array (
                'id' => 2039,
                'nombre' => 'SOCIALIZACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            39 => 
            array (
                'id' => 2040,
                'nombre' => 'SOCIALIZAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            40 => 
            array (
                'id' => 2041,
                'nombre' => 'SUPERACIÓN - RESILIENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            41 => 
            array (
                'id' => 2042,
                'nombre' => 'TEJER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            42 => 
            array (
                'id' => 2043,
                'nombre' => 'TRABAJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            43 => 
            array (
                'id' => 2044,
                'nombre' => 'TRABAJO AGRICULTURA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            44 => 
            array (
                'id' => 2045,
                'nombre' => 'TRABAJADORA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            45 => 
            array (
                'id' => 2046,
                'nombre' => 'PENDIENTE DE MIS COSAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            46 => 
            array (
                'id' => 2047,
                'nombre' => 'PANADERIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            47 => 
            array (
                'id' => 2048,
                'nombre' => 'TIENE CONOCIMIENTO EN ARREGLO Y MANTENIMIENTO DE CELULARES Y COMPUTADORES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            48 => 
            array (
                'id' => 2049,
                'nombre' => 'TIENE CONOCIMIENTO EN CARPINTERIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            49 => 
            array (
                'id' => 2050,
                'nombre' => 'TIENE CONOCIMIENTO EN INFORMATICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            50 => 
            array (
                'id' => 2051,
                'nombre' => 'TRABAJO EN DRY WALL- PVC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            51 => 
            array (
                'id' => 2052,
                'nombre' => 'ACCEDER A FORMACION EN EL SENA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            52 => 
            array (
                'id' => 2053,
                'nombre' => 'ACCEDER TRABAJO ESTABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            53 => 
            array (
                'id' => 2054,
                'nombre' => 'ADQUIRIR UNA CASA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            54 => 
            array (
                'id' => 2055,
                'nombre' => 'AHORRA Y VIAJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            55 => 
            array (
                'id' => 2056,
                'nombre' => 'APORTAR AL BIENESTAR DE LA COMUNIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            56 => 
            array (
                'id' => 2057,
                'nombre' => 'APOYAR A SU FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            57 => 
            array (
                'id' => 2058,
            'nombre' => 'APRENDER IDIOMAS (INGLES Y FRANCES)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            58 => 
            array (
                'id' => 2059,
                'nombre' => 'AUMENTAR SUS COMPETENCIAS ACADEMICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            59 => 
            array (
                'id' => 2060,
                'nombre' => 'AUTOSUPERARSE "SER UNICO"',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            60 => 
            array (
                'id' => 2061,
                'nombre' => 'AVANZAR EN PROCESO DE INGLES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            61 => 
            array (
                'id' => 2062,
                'nombre' => 'AYUDAR A LOS JOVENES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            62 => 
            array (
                'id' => 2063,
                'nombre' => 'AYUDAR A MI FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            63 => 
            array (
                'id' => 2064,
                'nombre' => 'BRINDAR UN BUEN FUTURO A SU HIJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            64 => 
            array (
                'id' => 2065,
                'nombre' => 'CERTIFICARSE EN BUCEO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            65 => 
            array (
                'id' => 2066,
                'nombre' => 'COMPARTIR CON MI FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            66 => 
            array (
                'id' => 2067,
                'nombre' => 'COMPRAR APARTAMENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            67 => 
            array (
                'id' => 2068,
                'nombre' => 'COMPRAR MOTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            68 => 
            array (
                'id' => 2069,
                'nombre' => 'COMPRAR ROPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            69 => 
            array (
                'id' => 2070,
                'nombre' => 'COMPRAR SUS COSAS Y UNA CASA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            70 => 
            array (
                'id' => 2071,
                'nombre' => 'COMPRAR TRACTOMULA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            71 => 
            array (
                'id' => 2072,
                'nombre' => 'CONSEGUIR TRABAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            72 => 
            array (
                'id' => 2073,
                'nombre' => 'TENER UN TRABAJO PARA AYUDARLE A MIS HIJOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            73 => 
            array (
                'id' => 2074,
                'nombre' => 'ESTABILIDAD LABORAL Y ECONÓMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            74 => 
            array (
                'id' => 2075,
                'nombre' => 'UBICARSE LABORALMENTE EN LO QUE ESTUDIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            75 => 
            array (
                'id' => 2076,
                'nombre' => 'NEGOCIO PROPIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            76 => 
            array (
                'id' => 2077,
                'nombre' => 'PROYECCION NEGOCIO INDEPENDIENTE EN TECNOLOGIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            77 => 
            array (
                'id' => 2078,
            'nombre' => 'TENER SU PROPIO NEGOCIO (CAFÉ INTERNET)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            78 => 
            array (
                'id' => 2079,
                'nombre' => 'ESTABILIDAD ECONÓMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            79 => 
            array (
                'id' => 2080,
                'nombre' => 'ESTUDIAR ADMINISTRACIÓN DE EMPRESAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            80 => 
            array (
                'id' => 2081,
            'nombre' => 'ESTUDIAR ARTES ESCENICAS (ESPAÑA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            81 => 
            array (
                'id' => 2082,
                'nombre' => 'ESTUDIAR CRIMINALÍSTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            82 => 
            array (
                'id' => 2083,
                'nombre' => 'ESTUDIAR ENTRENAMIENTO DEPORTIVO.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            83 => 
            array (
                'id' => 2084,
                'nombre' => 'ESTUDIAR GASTRONOMIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            84 => 
            array (
                'id' => 2085,
                'nombre' => 'ESTUDIAR- LEER Y ESCRIBIR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            85 => 
            array (
                'id' => 2086,
                'nombre' => 'ESTUDIAR MECANICA AUTOMOTRIZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            86 => 
            array (
                'id' => 2087,
                'nombre' => 'ESTUDIAR MEDICINA O PEDAGOGIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            87 => 
            array (
                'id' => 2088,
                'nombre' => 'ESTUDIAR PEDAGOGIA INFANTIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            88 => 
            array (
                'id' => 2089,
                'nombre' => 'ESTUDIAR PSICOLOGIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            89 => 
            array (
                'id' => 2090,
                'nombre' => 'ESTUDIAR SEGURIDAD PRIVADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            90 => 
            array (
                'id' => 2091,
                'nombre' => 'ESTUDIAR SERVICIO AL CLIENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            91 => 
            array (
                'id' => 2092,
                'nombre' => 'ESTUDIAR TÉCNICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            92 => 
            array (
                'id' => 2093,
                'nombre' => 'ESTUDIAR UN TECNICO EN EL SENA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            93 => 
            array (
                'id' => 2094,
                'nombre' => 'TERMINAR DE ESTUDIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            94 => 
            array (
                'id' => 2095,
                'nombre' => 'TERMINAR TECNOLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            95 => 
            array (
                'id' => 2096,
                'nombre' => 'INDEPENDIZARSE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            96 => 
            array (
                'id' => 2097,
                'nombre' => 'INDEPENDENCIA ECONÓMICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            97 => 
            array (
                'id' => 2098,
                'nombre' => 'TENER MAYOR INDEPENDENCIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            98 => 
            array (
                'id' => 2099,
                'nombre' => 'CREAR EMPRESA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            99 => 
            array (
                'id' => 2100,
                'nombre' => 'SER CANTANTE Y EMPRESARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            100 => 
            array (
                'id' => 2101,
                'nombre' => 'DEJAR LAS DROGAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            101 => 
            array (
                'id' => 2102,
                'nombre' => 'EDUCACIÓN PROFESIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            102 => 
            array (
                'id' => 2103,
                'nombre' => 'ESTABILIDAD ECONOMICA PARA APOYAR A SU HIJO Y PROGENITORA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            103 => 
            array (
                'id' => 2104,
                'nombre' => 'ESTAR ORGULLOSO DE MI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            104 => 
            array (
                'id' => 2105,
                'nombre' => 'FORMAR UNA FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            105 => 
            array (
                'id' => 2106,
                'nombre' => 'INGRESAR A EDUCACION SUPERIOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            106 => 
            array (
                'id' => 2107,
                'nombre' => 'IR AL MUNDIAL DE ATLETISMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            107 => 
            array (
                'id' => 2108,
                'nombre' => 'LLEGAR A LA RIOJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            108 => 
            array (
                'id' => 2109,
                'nombre' => 'MEJORAR CONTINUAMENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            109 => 
            array (
                'id' => 2110,
                'nombre' => 'MEJORAR EN LA MUSICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            110 => 
            array (
                'id' => 2111,
                'nombre' => 'MONTAR EL HELICOPTERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            111 => 
            array (
                'id' => 2112,
                'nombre' => 'NO VOLVER A SER CHC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            112 => 
            array (
                'id' => 2113,
                'nombre' => 'PREPARARME PARA UN CONVENIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            113 => 
            array (
                'id' => 2114,
            'nombre' => 'REALIZAR ESTUDIO TECNICO (RELACIONADO CON MUSICA)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            114 => 
            array (
                'id' => 2115,
                'nombre' => 'RECUPERAR LA CUSTODIA DE SUS HIJOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            115 => 
            array (
                'id' => 2116,
                'nombre' => 'REGRESAR A VENEZUELA CON MI FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            116 => 
            array (
                'id' => 2117,
                'nombre' => 'REHABILITARSE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            117 => 
            array (
                'id' => 2118,
                'nombre' => 'RELACIONES FAMILIARES CERCANAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            118 => 
            array (
                'id' => 2119,
                'nombre' => 'SALIR DE TODO ESTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            119 => 
            array (
                'id' => 2120,
                'nombre' => 'SER ACTOR DE TEATRO Y TELEVISIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            120 => 
            array (
                'id' => 2121,
                'nombre' => 'SER CANTANTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            121 => 
            array (
                'id' => 2122,
                'nombre' => 'SER DOCENTE DE GUITARRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            122 => 
            array (
                'id' => 2123,
                'nombre' => 'SER INGENIERO DE SISTEMAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            123 => 
            array (
                'id' => 2124,
                'nombre' => 'SER PROFESIONAL EN ARTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            124 => 
            array (
                'id' => 2125,
            'nombre' => 'SER PROFESIONAL EN MUSICA (COMPOSICIÓN Y PRODUCCIÓN)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            125 => 
            array (
                'id' => 2126,
                'nombre' => 'SER PROFESIONAL Y VIVIR FUERA DEL PAIS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            126 => 
            array (
                'id' => 2127,
                'nombre' => 'SUBIR PUNTAJE DEL ICFES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            127 => 
            array (
                'id' => 2128,
                'nombre' => 'SUPERAR LA RECAIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            128 => 
            array (
                'id' => 2129,
                'nombre' => 'TENER CARRO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            129 => 
            array (
                'id' => 2130,
                'nombre' => 'TENER FAMILIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            130 => 
            array (
                'id' => 2131,
                'nombre' => 'TENER SU PROPIO SALON DE BELLEZA.',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            131 => 
            array (
                'id' => 2132,
                'nombre' => 'TENER TALLER DE MECANICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            132 => 
            array (
                'id' => 2133,
                'nombre' => 'TERMINAR MI PROCESO EN OASIS II',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            133 => 
            array (
                'id' => 2134,
                'nombre' => 'TRABAJANDO EN CONVENIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            134 => 
            array (
                'id' => 2135,
                'nombre' => 'VIAJAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            135 => 
            array (
                'id' => 2136,
                'nombre' => 'VIAJAR A CANADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            136 => 
            array (
                'id' => 2137,
                'nombre' => 'DIFICULTADES LABORALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            137 => 
            array (
                'id' => 2138,
                'nombre' => 'MI HIJOS PIENSO TODOS LOS DIAS EN ELLOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            138 => 
            array (
                'id' => 2139,
                'nombre' => 'SOY ALEGRE- SACO EL LADO BUENO DE LAS COSAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            139 => 
            array (
                'id' => 2140,
                'nombre' => 'NO QUIERO VERME EN LA CALLE OTRA VEZ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            140 => 
            array (
                'id' => 2141,
                'nombre' => 'ANTECEDENTE DE PRESUNTO AS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            141 => 
            array (
                'id' => 2142,
                'nombre' => 'EL BARRIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            142 => 
            array (
                'id' => 2143,
                'nombre' => 'INFORMACIÓN FALTANTE EN LA MIGRACIóN DE BASE PLANA VALORACIóN SICOSOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            143 => 
            array (
                'id' => 2144,
                'nombre' => 'PRIMA/ ABUELO/HERMANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            144 => 
            array (
                'id' => 2145,
                'nombre' => 'NO HAY RELACION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            145 => 
            array (
                'id' => 2146,
                'nombre' => 'SOMO UNIDOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            146 => 
            array (
                'id' => 2147,
                'nombre' => 'SUFRO CON ESAS SITUACIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            147 => 
            array (
                'id' => 2148,
                'nombre' => 'MANTIENEN UNA BUENA COMUNICACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            148 => 
            array (
                'id' => 2149,
                'nombre' => 'NO TIENE PAREJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            149 => 
            array (
                'id' => 2150,
                'nombre' => 'FAMILIA RECONSTITUIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            150 => 
            array (
                'id' => 2151,
                'nombre' => 'FAMILIA // AMIGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            151 => 
            array (
                'id' => 2152,
                'nombre' => 'FAMILIAR // AMISTADES // INSTITUCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            152 => 
            array (
                'id' => 2153,
                'nombre' => 'FAMILIAR // PAREJA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            153 => 
            array (
                'id' => 2154,
                'nombre' => 'FAMILIAR// INSTITUCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            154 => 
            array (
                'id' => 2155,
                'nombre' => 'FALTA DE INTERÉS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            155 => 
            array (
                'id' => 2156,
                'nombre' => 'PORQUE HAY CHISMES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            156 => 
            array (
                'id' => 2157,
                'nombre' => 'ACARREOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            157 => 
            array (
                'id' => 2158,
                'nombre' => 'ACTIVIDADES ARTISTICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            158 => 
            array (
                'id' => 2159,
                'nombre' => 'ATENCIÓN EN CAFÉ INTERNET',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            159 => 
            array (
                'id' => 2160,
                'nombre' => 'AYUDANTE DE ZAPATERIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            160 => 
            array (
                'id' => 2161,
                'nombre' => 'CANTA EN LOS BUSES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            161 => 
            array (
                'id' => 2162,
                'nombre' => 'CASAS DE HOGAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            162 => 
            array (
                'id' => 2163,
                'nombre' => 'CONSTRUCCIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            163 => 
            array (
                'id' => 2164,
                'nombre' => 'CONSTRUCCIÓN DE OBRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            164 => 
            array (
                'id' => 2165,
                'nombre' => 'CONVENIO IDIGER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            165 => 
            array (
                'id' => 2166,
                'nombre' => 'CONVENIO SAN CRISTOBAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            166 => 
            array (
                'id' => 2167,
                'nombre' => 'ESTAMPADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            167 => 
            array (
                'id' => 2168,
            'nombre' => 'EXPLOTACIÓN SEXUAL COMERCIAL ESCNNA(MENOR DE 18)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            168 => 
            array (
                'id' => 2169,
                'nombre' => 'LIGA DEPORTIVA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            169 => 
            array (
                'id' => 2170,
                'nombre' => 'LO DEJAN CONDUCIR UN BICITAXI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            170 => 
            array (
                'id' => 2171,
                'nombre' => 'LOGISTICA CON EMPRESA AIC',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            171 => 
            array (
                'id' => 2172,
                'nombre' => 'MANICURISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            172 => 
            array (
                'id' => 2173,
                'nombre' => 'MESERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            173 => 
            array (
                'id' => 2174,
                'nombre' => 'NGOCIO DE CONFECCION Y ESTAMPADOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            174 => 
            array (
                'id' => 2175,
                'nombre' => 'OPERARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            175 => 
            array (
                'id' => 2176,
                'nombre' => 'PINTAR CASAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            176 => 
            array (
                'id' => 2177,
                'nombre' => 'SERVICIO DOMESTICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            177 => 
            array (
                'id' => 2178,
                'nombre' => 'SERVICIOS GENERALES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            178 => 
            array (
                'id' => 2179,
                'nombre' => 'VENDEDOR DE DULCES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            179 => 
            array (
                'id' => 2180,
                'nombre' => 'VENDEDORA DE NEGOCIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            180 => 
            array (
                'id' => 2181,
                'nombre' => 'VENTA AMBULANTE RECICLAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            181 => 
            array (
                'id' => 2182,
                'nombre' => 'VENTA DE ARTICULOS POR INTERNET',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            182 => 
            array (
                'id' => 2183,
                'nombre' => 'VENTA DE COMIDA RAPIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            183 => 
            array (
                'id' => 2184,
                'nombre' => 'VENTAS EN EL TRANSPORTE PÊBLICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            184 => 
            array (
                'id' => 2185,
                'nombre' => 'VENTA Y ELABORACIÓN DE ESCULTURAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            185 => 
            array (
                'id' => 2186,
                'nombre' => 'MATERIA 1',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            186 => 
            array (
                'id' => 2187,
                'nombre' => 'NO ENTIENDE LA TAREA NO TIENE ELEMENTOS ESCOLARES BAJA MOTIVACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            187 => 
            array (
                'id' => 2188,
                'nombre' => 'BIPOLARIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            188 => 
            array (
                'id' => 2189,
                'nombre' => 'BULLING',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            189 => 
            array (
                'id' => 2190,
                'nombre' => 'EN EL COLEGIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            190 => 
            array (
                'id' => 2191,
                'nombre' => 'NO REFIERE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            191 => 
            array (
                'id' => 2192,
                'nombre' => 'PROBLEMAS FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            192 => 
            array (
                'id' => 2193,
                'nombre' => 'RELACIONES FAMILIARES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            193 => 
            array (
                'id' => 2194,
                'nombre' => 'BAJO RENDIMIENTO ACADEMICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            194 => 
            array (
                'id' => 2195,
                'nombre' => 'COMPORTAMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            195 => 
            array (
                'id' => 2196,
                'nombre' => 'COMPORTAMIENTO ESCOLAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            196 => 
            array (
                'id' => 2197,
                'nombre' => 'DISCUSIONES CON PROGENITORA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            197 => 
            array (
                'id' => 2198,
                'nombre' => 'DUELO FALLECIMIENTO DE SUS PADRES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:44',
                'updated_at' => '2021-06-02 14:14:44',
            ),
            198 => 
            array (
                'id' => 2199,
                'nombre' => 'EMBARAZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            199 => 
            array (
                'id' => 2200,
                'nombre' => 'ENFERMEDAD PRIMARIA APNEA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            200 => 
            array (
                'id' => 2201,
                'nombre' => 'ENFERMEDAD VIH',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            201 => 
            array (
                'id' => 2202,
                'nombre' => 'ETS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            202 => 
            array (
                'id' => 2203,
                'nombre' => 'INDISCIPLINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            203 => 
            array (
                'id' => 2204,
            'nombre' => 'MUERTE DE BEBE( GESTACIÓN)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            204 => 
            array (
                'id' => 2205,
                'nombre' => 'NO RECUERDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            205 => 
            array (
                'id' => 2206,
                'nombre' => 'RENDIMIENTO ACADEMICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            206 => 
            array (
                'id' => 2207,
                'nombre' => 'SEGUIMIENTO INSTITUCIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            207 => 
            array (
                'id' => 2208,
                'nombre' => 'PSICOLOGA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            208 => 
            array (
                'id' => 2209,
                'nombre' => 'SEPARACIÓN PADRES, INTENTO SUICIDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            209 => 
            array (
                'id' => 2210,
                'nombre' => 'COMPORTAMENTA. EXPRESION DE EMOCIONES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            210 => 
            array (
                'id' => 2211,
                'nombre' => 'POR VALORACION PARA INGRESO AL EJERCITO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            211 => 
            array (
                'id' => 2212,
            'nombre' => 'PROCESO TERAPEUTICO POR VIOLENCIA SEXUAL (CON MENOR DE CATORCE AÑOS).',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            212 => 
            array (
                'id' => 2213,
                'nombre' => 'POR HORAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            213 => 
            array (
                'id' => 2214,
                'nombre' => 'TARDE, NOCHE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            214 => 
            array (
                'id' => 2215,
                'nombre' => 'MAÑANAS Y TARDES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            215 => 
            array (
                'id' => 2216,
                'nombre' => 'MANTENIMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            216 => 
            array (
                'id' => 2217,
                'nombre' => 'DESTAJO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            217 => 
            array (
                'id' => 2218,
                'nombre' => '2009',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            218 => 
            array (
                'id' => 2219,
                'nombre' => '2011',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            219 => 
            array (
                'id' => 2220,
                'nombre' => '2013',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            220 => 
            array (
                'id' => 2221,
                'nombre' => '2014',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            221 => 
            array (
                'id' => 2222,
                'nombre' => '2015',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            222 => 
            array (
                'id' => 2223,
                'nombre' => '2016',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            223 => 
            array (
                'id' => 2224,
                'nombre' => '2017',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            224 => 
            array (
                'id' => 2225,
                'nombre' => '2018',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            225 => 
            array (
                'id' => 2226,
                'nombre' => '2019',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            226 => 
            array (
                'id' => 2227,
                'nombre' => '2020',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            227 => 
            array (
                'id' => 2228,
                'nombre' => '19',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            228 => 
            array (
                'id' => 2229,
                'nombre' => '150',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            229 => 
            array (
                'id' => 2230,
                'nombre' => '250',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            230 => 
            array (
                'id' => 2231,
                'nombre' => '300',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            231 => 
            array (
                'id' => 2232,
                'nombre' => '500',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            232 => 
            array (
                'id' => 2233,
                'nombre' => '600',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            233 => 
            array (
                'id' => 2234,
                'nombre' => '20000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            234 => 
            array (
                'id' => 2235,
                'nombre' => '40000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            235 => 
            array (
                'id' => 2236,
                'nombre' => '50000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            236 => 
            array (
                'id' => 2237,
                'nombre' => '100000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            237 => 
            array (
                'id' => 2238,
                'nombre' => '120000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            238 => 
            array (
                'id' => 2239,
                'nombre' => '150000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            239 => 
            array (
                'id' => 2240,
                'nombre' => '190000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            240 => 
            array (
                'id' => 2241,
                'nombre' => '192000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            241 => 
            array (
                'id' => 2242,
                'nombre' => '200000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            242 => 
            array (
                'id' => 2243,
                'nombre' => '240000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            243 => 
            array (
                'id' => 2244,
                'nombre' => '250000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            244 => 
            array (
                'id' => 2245,
                'nombre' => '300000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            245 => 
            array (
                'id' => 2246,
                'nombre' => '320000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            246 => 
            array (
                'id' => 2247,
                'nombre' => '350000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            247 => 
            array (
                'id' => 2248,
                'nombre' => '400000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            248 => 
            array (
                'id' => 2249,
                'nombre' => '450000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            249 => 
            array (
                'id' => 2250,
                'nombre' => '500000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            250 => 
            array (
                'id' => 2251,
                'nombre' => '600000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            251 => 
            array (
                'id' => 2252,
                'nombre' => '650000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            252 => 
            array (
                'id' => 2253,
                'nombre' => '680000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            253 => 
            array (
                'id' => 2254,
                'nombre' => '720000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            254 => 
            array (
                'id' => 2255,
                'nombre' => '740000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            255 => 
            array (
                'id' => 2256,
                'nombre' => '800000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            256 => 
            array (
                'id' => 2257,
                'nombre' => '820000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            257 => 
            array (
                'id' => 2258,
                'nombre' => '900000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            258 => 
            array (
                'id' => 2259,
                'nombre' => '1200000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            259 => 
            array (
                'id' => 2260,
                'nombre' => '0',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            260 => 
            array (
                'id' => 2261,
                'nombre' => 'REFIRE ATENCIÓN POR PSICOLOGÍA POR LA MUERTE DE LA MAMÁ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            261 => 
            array (
                'id' => 2262,
                'nombre' => 'RESPUESTA CONTRADICTORIA EN RELACIóN A LA PREGUNTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            262 => 
            array (
                'id' => 2263,
                'nombre' => 'CONSUMO RESPONSABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            263 => 
            array (
                'id' => 2264,
                'nombre' => 'LO LLEVA A REALIZAR CONDUCTAS INADECUADAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            264 => 
            array (
                'id' => 2265,
                'nombre' => 'NORMANDIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            265 => 
            array (
                'id' => 2266,
                'nombre' => 'SISVECOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            266 => 
            array (
                'id' => 2267,
                'nombre' => 'ENERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            267 => 
            array (
                'id' => 2268,
                'nombre' => 'FEBRERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            268 => 
            array (
                'id' => 2269,
                'nombre' => 'MARZO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            269 => 
            array (
                'id' => 2270,
                'nombre' => 'ABRIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            270 => 
            array (
                'id' => 2271,
                'nombre' => 'MAYO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            271 => 
            array (
                'id' => 2272,
                'nombre' => 'JUNIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            272 => 
            array (
                'id' => 2273,
                'nombre' => 'JULIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            273 => 
            array (
                'id' => 2274,
                'nombre' => 'AGOSTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            274 => 
            array (
                'id' => 2275,
                'nombre' => 'SEPTIEMBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            275 => 
            array (
                'id' => 2276,
                'nombre' => 'OCTUBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            276 => 
            array (
                'id' => 2277,
                'nombre' => 'NOVIEMBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            277 => 
            array (
                'id' => 2278,
                'nombre' => 'DICIEMBRE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            278 => 
            array (
                'id' => 2279,
                'nombre' => '1997',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            279 => 
            array (
                'id' => 2280,
                'nombre' => '1963',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            280 => 
            array (
                'id' => 2281,
                'nombre' => '1973',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            281 => 
            array (
                'id' => 2282,
                'nombre' => '1969',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            282 => 
            array (
                'id' => 2283,
                'nombre' => '1993',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            283 => 
            array (
                'id' => 2284,
                'nombre' => '1984',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            284 => 
            array (
                'id' => 2285,
                'nombre' => '1961',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            285 => 
            array (
                'id' => 2286,
                'nombre' => '1982',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            286 => 
            array (
                'id' => 2287,
                'nombre' => '1971',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            287 => 
            array (
                'id' => 2288,
                'nombre' => '1979',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            288 => 
            array (
                'id' => 2289,
                'nombre' => '1959',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            289 => 
            array (
                'id' => 2290,
                'nombre' => '1985',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            290 => 
            array (
                'id' => 2291,
                'nombre' => '1975',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            291 => 
            array (
                'id' => 2292,
                'nombre' => '1989',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            292 => 
            array (
                'id' => 2293,
                'nombre' => '1981',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            293 => 
            array (
                'id' => 2294,
                'nombre' => '1956',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            294 => 
            array (
                'id' => 2295,
                'nombre' => '1974',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            295 => 
            array (
                'id' => 2296,
                'nombre' => '1980',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            296 => 
            array (
                'id' => 2297,
                'nombre' => '1987',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            297 => 
            array (
                'id' => 2298,
                'nombre' => '1983',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            298 => 
            array (
                'id' => 2299,
                'nombre' => '1992',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            299 => 
            array (
                'id' => 2300,
                'nombre' => '1978',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            300 => 
            array (
                'id' => 2301,
                'nombre' => '1970',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            301 => 
            array (
                'id' => 2302,
                'nombre' => '1966',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            302 => 
            array (
                'id' => 2303,
                'nombre' => '1977',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            303 => 
            array (
                'id' => 2304,
                'nombre' => '1986',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            304 => 
            array (
                'id' => 2305,
                'nombre' => '1988',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            305 => 
            array (
                'id' => 2306,
                'nombre' => '1991',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            306 => 
            array (
                'id' => 2307,
                'nombre' => '1990',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            307 => 
            array (
                'id' => 2308,
                'nombre' => '1962',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            308 => 
            array (
                'id' => 2309,
                'nombre' => '1967',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            309 => 
            array (
                'id' => 2310,
                'nombre' => '1976',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            310 => 
            array (
                'id' => 2311,
                'nombre' => '1994',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            311 => 
            array (
                'id' => 2312,
                'nombre' => '1968',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            312 => 
            array (
                'id' => 2313,
                'nombre' => '1951',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            313 => 
            array (
                'id' => 2314,
                'nombre' => '1996',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            314 => 
            array (
                'id' => 2315,
                'nombre' => 'CREACION POR EL SISTEMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            315 => 
            array (
                'id' => 2316,
                'nombre' => 'MIGRACION BASES PLANAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            316 => 
            array (
                'id' => 2317,
                'nombre' => 'TALLER VOCACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            317 => 
            array (
                'id' => 2318,
                'nombre' => 'IMPOTENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            318 => 
            array (
                'id' => 2319,
                'nombre' => 'CONTROL DE ESFINTERES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            319 => 
            array (
                'id' => 2320,
                'nombre' => 'SUCESOS RELACIONADOS CON MUERTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            320 => 
            array (
                'id' => 2321,
                'nombre' => 'NADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            321 => 
            array (
                'id' => 2322,
                'nombre' => 'TIO/A POLITICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            322 => 
            array (
                'id' => 2323,
                'nombre' => 'CAMINANDO RELAJADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            323 => 
            array (
                'id' => 2324,
                'nombre' => 'FEMENINO/MASCULINO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            324 => 
            array (
                'id' => 2325,
                'nombre' => 'USUARIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            325 => 
            array (
                'id' => 2326,
                'nombre' => 'CARGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            326 => 
            array (
                'id' => 2327,
                'nombre' => 'DEPENDENCIAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            327 => 
            array (
                'id' => 2328,
                'nombre' => 'AREAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            328 => 
            array (
                'id' => 2329,
                'nombre' => 'LA COMUNIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            329 => 
            array (
                'id' => 2330,
                'nombre' => 'LA COMISION DE UN DELITO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            330 => 
            array (
                'id' => 2331,
                'nombre' => 'LESIONES POR RIÑAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            331 => 
            array (
                'id' => 2332,
                'nombre' => 'ATAQUE SICARIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            332 => 
            array (
                'id' => 2333,
                'nombre' => 'ENFRENTAMIENTO CON LAS AUTORIDADES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            333 => 
            array (
                'id' => 2334,
                'nombre' => 'ARMA BLANCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            334 => 
            array (
                'id' => 2335,
                'nombre' => 'ARMA DE FUEGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            335 => 
            array (
                'id' => 2336,
                'nombre' => 'ARMAS DEL ESTADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            336 => 
            array (
                'id' => 2337,
                'nombre' => 'PRESENTA ACTIVIDAD EN CONFLICTO CON LA LEY',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            337 => 
            array (
                'id' => 2338,
                'nombre' => 'GRUPO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            338 => 
            array (
                'id' => 2339,
                'nombre' => 'PANDILLA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            339 => 
            array (
                'id' => 2340,
                'nombre' => 'PARCHE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            340 => 
            array (
                'id' => 2341,
                'nombre' => 'BANDA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            341 => 
            array (
                'id' => 2342,
                'nombre' => 'DUO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            342 => 
            array (
                'id' => 2343,
                'nombre' => 'TRIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            343 => 
            array (
                'id' => 2344,
                'nombre' => 'GÉNERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            344 => 
            array (
                'id' => 2345,
                'nombre' => 'IDENTIDAD GÉNERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            345 => 
            array (
                'id' => 2346,
                'nombre' => 'ORIENTACIÓN SEXUAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            346 => 
            array (
                'id' => 2347,
                'nombre' => 'GOLPES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            347 => 
            array (
                'id' => 2348,
                'nombre' => 'INTIMIDACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            348 => 
            array (
                'id' => 2349,
                'nombre' => 'LESIÓN CON ARMA DE FUEGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            349 => 
            array (
                'id' => 2350,
                'nombre' => 'LESIÓN CON ARMA BLANCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            350 => 
            array (
                'id' => 2351,
                'nombre' => 'ROL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            351 => 
            array (
                'id' => 2352,
                'nombre' => 'FINES DE SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            352 => 
            array (
                'id' => 2353,
                'nombre' => 'JORNADA COMPLETA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            353 => 
            array (
                'id' => 2354,
                'nombre' => 'GRAFFITI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            354 => 
            array (
                'id' => 2355,
                'nombre' => 'BORA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            355 => 
            array (
                'id' => 2356,
                'nombre' => 'KAWIYARI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            356 => 
            array (
                'id' => 2357,
                'nombre' => 'YURI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            357 => 
            array (
                'id' => 2358,
                'nombre' => 'CARAPANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            358 => 
            array (
                'id' => 2359,
                'nombre' => 'KARIJONA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            359 => 
            array (
                'id' => 2360,
                'nombre' => 'CHIMILA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            360 => 
            array (
                'id' => 2361,
                'nombre' => 'CHIRICOA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            361 => 
            array (
                'id' => 2362,
                'nombre' => 'COCAMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            362 => 
            array (
                'id' => 2363,
                'nombre' => 'COCONUCO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            363 => 
            array (
                'id' => 2364,
                'nombre' => 'COREGUAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            364 => 
            array (
                'id' => 2365,
                'nombre' => 'COYAIMA NATAGAIMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            365 => 
            array (
                'id' => 2366,
                'nombre' => 'AWA KUAIKER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            366 => 
            array (
                'id' => 2367,
                'nombre' => 'KUBEO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            367 => 
            array (
                'id' => 2368,
                'nombre' => 'KUIBA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            368 => 
            array (
                'id' => 2369,
                'nombre' => 'TULE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            369 => 
            array (
                'id' => 2370,
                'nombre' => 'KURRIPAKO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            370 => 
            array (
                'id' => 2371,
                'nombre' => 'DESANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            371 => 
            array (
                'id' => 2372,
                'nombre' => 'DUJOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            372 => 
            array (
                'id' => 2373,
                'nombre' => 'EMBERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            373 => 
            array (
                'id' => 2374,
                'nombre' => 'EMBERA KATIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            374 => 
            array (
                'id' => 2375,
                'nombre' => 'EMBERA CHAMI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            375 => 
            array (
                'id' => 2376,
                'nombre' => 'EPERARA SIAPIDARA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            376 => 
            array (
                'id' => 2377,
                'nombre' => 'GUAMBIANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            377 => 
            array (
                'id' => 2378,
                'nombre' => 'GUANACA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            378 => 
            array (
                'id' => 2379,
                'nombre' => 'WANANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            379 => 
            array (
                'id' => 2380,
                'nombre' => 'GUAYABERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            380 => 
            array (
                'id' => 2381,
                'nombre' => 'CAñAMOMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            381 => 
            array (
                'id' => 2382,
                'nombre' => 'INGA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            382 => 
            array (
                'id' => 2383,
                'nombre' => 'KAMÃ«NTSA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            383 => 
            array (
                'id' => 2384,
                'nombre' => 'KOFAN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            384 => 
            array (
                'id' => 2385,
                'nombre' => 'KOGUI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            385 => 
            array (
                'id' => 2386,
                'nombre' => 'LETUAMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            386 => 
            array (
                'id' => 2387,
                'nombre' => 'MAKAGUAJE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            387 => 
            array (
                'id' => 2388,
                'nombre' => 'HITNU',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            388 => 
            array (
                'id' => 2389,
                'nombre' => 'MAKUNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            389 => 
            array (
                'id' => 2390,
                'nombre' => 'NUKAK',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            390 => 
            array (
                'id' => 2391,
                'nombre' => 'MASIGUARE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            391 => 
            array (
                'id' => 2392,
                'nombre' => 'MATAPI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            392 => 
            array (
                'id' => 2393,
                'nombre' => 'MIRAñA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            393 => 
            array (
                'id' => 2394,
                'nombre' => 'MUISCA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            394 => 
            array (
                'id' => 2395,
                'nombre' => 'NONUYA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            395 => 
            array (
                'id' => 2396,
                'nombre' => 'OCAINA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            396 => 
            array (
                'id' => 2397,
                'nombre' => 'NASA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            397 => 
            array (
                'id' => 2398,
                'nombre' => 'TZASE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            398 => 
            array (
                'id' => 2399,
                'nombre' => 'PIAROA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            399 => 
            array (
                'id' => 2400,
                'nombre' => 'PIRATAPUYO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            400 => 
            array (
                'id' => 2401,
                'nombre' => 'PISAMIRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            401 => 
            array (
                'id' => 2402,
                'nombre' => 'PUINAVE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            402 => 
            array (
                'id' => 2403,
                'nombre' => 'PASTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            403 => 
            array (
                'id' => 2404,
                'nombre' => 'KILLACINGA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            404 => 
            array (
                'id' => 2405,
                'nombre' => 'SALIBA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            405 => 
            array (
                'id' => 2406,
                'nombre' => 'SIKUANI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            406 => 
            array (
                'id' => 2407,
                'nombre' => 'SIONA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            407 => 
            array (
                'id' => 2408,
                'nombre' => 'SIRIANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            408 => 
            array (
                'id' => 2409,
                'nombre' => 'TAIWANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            409 => 
            array (
                'id' => 2410,
                'nombre' => 'TANIMUKA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            410 => 
            array (
                'id' => 2411,
                'nombre' => 'TARIANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            411 => 
            array (
                'id' => 2412,
                'nombre' => 'TATUYO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            412 => 
            array (
                'id' => 2413,
                'nombre' => 'TOTORO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            413 => 
            array (
                'id' => 2414,
                'nombre' => 'TIKUNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            414 => 
            array (
                'id' => 2415,
                'nombre' => 'TSIRIPU',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            415 => 
            array (
                'id' => 2416,
                'nombre' => 'TUCANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            416 => 
            array (
                'id' => 2417,
                'nombre' => 'UWA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            417 => 
            array (
                'id' => 2418,
                'nombre' => 'TUYUKA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            418 => 
            array (
                'id' => 2419,
                'nombre' => 'WAUNAN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            419 => 
            array (
                'id' => 2420,
                'nombre' => 'WAYUU',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            420 => 
            array (
                'id' => 2421,
                'nombre' => 'UITOTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            421 => 
            array (
                'id' => 2422,
                'nombre' => 'YAGUA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            422 => 
            array (
                'id' => 2423,
                'nombre' => 'YANACONA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            423 => 
            array (
                'id' => 2424,
                'nombre' => 'YAUNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            424 => 
            array (
                'id' => 2425,
                'nombre' => 'YUKUNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            425 => 
            array (
                'id' => 2426,
                'nombre' => 'YUKO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            426 => 
            array (
                'id' => 2427,
                'nombre' => 'YURUTI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            427 => 
            array (
                'id' => 2428,
            'nombre' => 'SINú (ZENú)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            428 => 
            array (
                'id' => 2429,
                'nombre' => 'GUANE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            429 => 
            array (
                'id' => 2430,
                'nombre' => 'MOKANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            430 => 
            array (
                'id' => 2431,
                'nombre' => 'OTAVALEñO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            431 => 
            array (
                'id' => 2432,
                'nombre' => 'KICHWA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            432 => 
            array (
                'id' => 2433,
                'nombre' => 'KANKUAMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            433 => 
            array (
                'id' => 2434,
                'nombre' => 'TAIRONA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            434 => 
            array (
                'id' => 2435,
                'nombre' => 'CHITARERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            435 => 
            array (
                'id' => 2436,
                'nombre' => 'QUIMBAYA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            436 => 
            array (
                'id' => 2437,
                'nombre' => 'CALIMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            437 => 
            array (
                'id' => 2438,
                'nombre' => 'PANCHES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            438 => 
            array (
                'id' => 2439,
                'nombre' => 'INDíGENAS ECUADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            439 => 
            array (
                'id' => 2440,
                'nombre' => 'INDíGENAS PERú',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            440 => 
            array (
                'id' => 2441,
                'nombre' => 'INDíGENAS VENEZUELA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            441 => 
            array (
                'id' => 2442,
                'nombre' => 'INDíGENAS MEXICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            442 => 
            array (
                'id' => 2443,
                'nombre' => 'INDíGENAS BRASIL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            443 => 
            array (
                'id' => 2444,
                'nombre' => 'INDíGENAS PANAMá',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            444 => 
            array (
                'id' => 2445,
                'nombre' => 'INDíGENAS BOLIVIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            445 => 
            array (
                'id' => 2446,
                'nombre' => 'INDíGENA SIN INFORMACIóN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            446 => 
            array (
                'id' => 2447,
                'nombre' => 'WAUPIJIWI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            447 => 
            array (
                'id' => 2448,
                'nombre' => 'YAMALERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            448 => 
            array (
                'id' => 2449,
                'nombre' => '1995',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            449 => 
            array (
                'id' => 2450,
                'nombre' => '1998',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            450 => 
            array (
                'id' => 2451,
                'nombre' => '1999',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            451 => 
            array (
                'id' => 2452,
                'nombre' => '2000',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            452 => 
            array (
                'id' => 2453,
                'nombre' => '2001',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            453 => 
            array (
                'id' => 2454,
                'nombre' => '2002',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            454 => 
            array (
                'id' => 2455,
                'nombre' => '2003',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            455 => 
            array (
                'id' => 2456,
                'nombre' => 'MISAK',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            456 => 
            array (
                'id' => 2457,
            'nombre' => 'FAMILIA Y (YO)NNAJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            457 => 
            array (
                'id' => 2458,
                'nombre' => 'MIGRACIONN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            458 => 
            array (
                'id' => 2459,
                'nombre' => 'TUSI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            459 => 
            array (
                'id' => 2460,
                'nombre' => 'REUTILIZAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            460 => 
            array (
                'id' => 2461,
                'nombre' => 'MARIHUANA CRIPI O CRIPA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            461 => 
            array (
                'id' => 2462,
                'nombre' => 'POPPER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            462 => 
            array (
                'id' => 2463,
            'nombre' => 'LCD (DIETALIMIDA DEL ÁCIDO LISÉRGICO)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            463 => 
            array (
                'id' => 2464,
                'nombre' => 'CLONAZEPAM',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            464 => 
            array (
                'id' => 2465,
            'nombre' => 'DIC , LADYS O LEYDIS (CLORURO DE METILENO O DICHLOROMETANO)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            465 => 
            array (
                'id' => 2466,
                'nombre' => 'CONFLICTO ARMADO INTERNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            466 => 
            array (
                'id' => 2467,
                'nombre' => 'CON MIEDO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            467 => 
            array (
                'id' => 2468,
                'nombre' => 'FOTO NNAJ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            468 => 
            array (
                'id' => 2469,
                'nombre' => 'A_CORRESPONSABILIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            469 => 
            array (
                'id' => 2470,
                'nombre' => 'PRACTICANTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            470 => 
            array (
                'id' => 2471,
                'nombre' => 'PROVISIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            471 => 
            array (
                'id' => 2472,
                'nombre' => 'VOLUNTARIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            472 => 
            array (
                'id' => 2473,
                'nombre' => 'VIOLENCIA DE GÉNERO ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            473 => 
            array (
                'id' => 2474,
                'nombre' => 'SUSPENSIÓN CONDICIONAL DE LA PENA ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            474 => 
            array (
                'id' => 2475,
                'nombre' => 'PRISIÓN DOMICILIARIA ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            475 => 
            array (
                'id' => 2476,
                'nombre' => 'HIJASTRO ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            476 => 
            array (
                'id' => 2477,
                'nombre' => 'HIJASTRA ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            477 => 
            array (
                'id' => 2478,
                'nombre' => 'LIGADURA TROMPAS ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            478 => 
            array (
                'id' => 2479,
                'nombre' => 'VASECTOMIA ',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            479 => 
            array (
                'id' => 2480,
                'nombre' => 'FABRICACIÓN, TRÁFICO O PORTE DE ARMA DE FUEGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            480 => 
            array (
                'id' => 2481,
            'nombre' => 'PORTE Y SUMINISTRO DE ESCOPOLAMINA(SUSTANCIAS SIMILARES)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            481 => 
            array (
                'id' => 2482,
                'nombre' => 'TIPO DE SEGUIMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            482 => 
            array (
                'id' => 2483,
                'nombre' => 'SUB TIPO DE SEGUIMIENTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            483 => 
            array (
                'id' => 2484,
                'nombre' => 'ADECUADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            484 => 
            array (
                'id' => 2485,
                'nombre' => 'INADECUADA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            485 => 
            array (
                'id' => 2486,
                'nombre' => 'TOMASERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            486 => 
            array (
                'id' => 2487,
                'nombre' => 'CORREO ELECTRÓNICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            487 => 
            array (
                'id' => 2488,
                'nombre' => 'MEDIO ESCRITO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            488 => 
            array (
                'id' => 2489,
                'nombre' => 'TELEFÓNICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            489 => 
            array (
                'id' => 2490,
                'nombre' => 'PRESENCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            490 => 
            array (
                'id' => 2491,
                'nombre' => 'TRAMITES ACADÉMICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:45',
                'updated_at' => '2021-06-02 14:14:45',
            ),
            491 => 
            array (
                'id' => 2492,
                'nombre' => 'TRAMITES LIBRETA MILITAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            492 => 
            array (
                'id' => 2493,
                'nombre' => 'LICENCIA DE MATERNIDAD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            493 => 
            array (
                'id' => 2494,
                'nombre' => 'TARJETA DE EXTRANJERIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            494 => 
            array (
                'id' => 2495,
                'nombre' => 'CAE/CERTIFICADO DE VIGENCIA CEDULA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            495 => 
            array (
                'id' => 2496,
                'nombre' => 'PASAPORTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            496 => 
            array (
                'id' => 2497,
                'nombre' => 'CAE/NE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            497 => 
            array (
                'id' => 2498,
                'nombre' => 'PANTALLA INICIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            498 => 
            array (
                'id' => 2499,
                'nombre' => 'TALLER',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            499 => 
            array (
                'id' => 2500,
                'nombre' => 'SERVICIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
        ));
        \DB::table('parametros')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'nombre' => 'ESTADO DE USUARIOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            1 => 
            array (
                'id' => 2502,
                'nombre' => 'EL PARAMETRO NO EXISTE EN EL ACTUAL DESARROLLO O NO HA SIDO ASIGNADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            2 => 
            array (
                'id' => 2503,
                'nombre' => 'PARAMETRO NO ASIGNADO EN EL ANTIGUO SIMI',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            3 => 
            array (
                'id' => 2504,
                'nombre' => 'TEMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            4 => 
            array (
                'id' => 2505,
                'nombre' => 'SUBTEMA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            5 => 
            array (
                'id' => 2506,
                'nombre' => 'ASISTENCIA TALLERES CON PADRES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            6 => 
            array (
                'id' => 2507,
                'nombre' => 'LISTADO DE ASISTENCIA NNAJ-PROFESIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            7 => 
            array (
                'id' => 2508,
                'nombre' => 'REGISTRO ASISTENCIA A-GDH-FT-010',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            8 => 
            array (
                'id' => 2509,
                'nombre' => 'ESPACIO/LUGAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            9 => 
            array (
                'id' => 2510,
                'nombre' => '2021',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            10 => 
            array (
                'id' => 2511,
                'nombre' => 'TIA PATERNO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            11 => 
            array (
                'id' => 2512,
                'nombre' => 'TIA MATERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            12 => 
            array (
                'id' => 2513,
                'nombre' => 'ABUELA PATERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            13 => 
            array (
                'id' => 2514,
                'nombre' => 'ABUELA MATERNA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            14 => 
            array (
                'id' => 2515,
                'nombre' => 'ABUELASTRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            15 => 
            array (
                'id' => 2516,
                'nombre' => 'AMIGA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            16 => 
            array (
                'id' => 2517,
                'nombre' => 'ABUELO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            17 => 
            array (
                'id' => 2518,
                'nombre' => 'ABUELA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            18 => 
            array (
                'id' => 2519,
                'nombre' => 'CUIDADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            19 => 
            array (
                'id' => 2520,
                'nombre' => 'CONYUGUE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            20 => 
            array (
                'id' => 2521,
                'nombre' => 'TIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            21 => 
            array (
                'id' => 2522,
                'nombre' => 'TIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            22 => 
            array (
                'id' => 2523,
                'nombre' => 'PUBLICISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            23 => 
            array (
                'id' => 2524,
                'nombre' => 'QUINESIÓLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            24 => 
            array (
                'id' => 2525,
                'nombre' => 'VITRALISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            25 => 
            array (
                'id' => 2526,
            'nombre' => 'MECANICO(A) DENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            26 => 
            array (
                'id' => 2527,
                'nombre' => 'ZAPATERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            27 => 
            array (
                'id' => 2528,
                'nombre' => 'RADIOCOMUNICACION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            28 => 
            array (
                'id' => 2529,
                'nombre' => 'SECRETARIA AUXILIAR CONTABLE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            29 => 
            array (
                'id' => 2530,
                'nombre' => 'SUPERVISOR EN LOGÍSTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            30 => 
            array (
                'id' => 2531,
            'nombre' => 'TÉCNICO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            31 => 
            array (
                'id' => 2532,
            'nombre' => 'TECNÓLOGO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            32 => 
            array (
                'id' => 2533,
                'nombre' => 'TERAPEUTA OCUPACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            33 => 
            array (
                'id' => 2534,
                'nombre' => 'TERAPEUTA RESPIRATORIO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            34 => 
            array (
                'id' => 2535,
            'nombre' => 'TOPÓGRAFO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            35 => 
            array (
                'id' => 2536,
                'nombre' => 'TORNERO INDUSTRIAL Y SOLDADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            36 => 
            array (
                'id' => 2537,
                'nombre' => 'TRABAJADOR SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            37 => 
            array (
                'id' => 2538,
                'nombre' => 'TRADUCTOR E INTÉRPRETE OFICIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            38 => 
            array (
                'id' => 2539,
                'nombre' => 'ZOOTECNISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            39 => 
            array (
                'id' => 2540,
                'nombre' => 'ENFEREMERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            40 => 
            array (
                'id' => 2541,
                'nombre' => 'GUARDERIA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            41 => 
            array (
                'id' => 2542,
                'nombre' => 'INSTITUCIONALIZADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            42 => 
            array (
                'id' => 2543,
                'nombre' => 'ORNAMENTADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            43 => 
            array (
                'id' => 2544,
                'nombre' => 'ZORRERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            44 => 
            array (
                'id' => 2545,
                'nombre' => 'DESESCOLARIZADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            45 => 
            array (
                'id' => 2546,
                'nombre' => 'ENSAMBLADOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            46 => 
            array (
                'id' => 2547,
                'nombre' => 'PINTOR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            47 => 
            array (
                'id' => 2548,
                'nombre' => 'SERVICIO MILITAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            48 => 
            array (
                'id' => 2549,
                'nombre' => 'RETACAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            49 => 
            array (
                'id' => 2550,
                'nombre' => 'ANALISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            50 => 
            array (
                'id' => 2551,
                'nombre' => 'ANTROPOLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            51 => 
            array (
                'id' => 2552,
                'nombre' => 'ARCHIVISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            52 => 
            array (
                'id' => 2553,
                'nombre' => 'ARQUITECTO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            53 => 
            array (
                'id' => 2554,
                'nombre' => 'AUXILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            54 => 
            array (
                'id' => 2555,
                'nombre' => 'BACTERIOLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            55 => 
            array (
                'id' => 2556,
                'nombre' => 'BIBLIOTECOLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            56 => 
            array (
                'id' => 2557,
                'nombre' => 'CIRUJANO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            57 => 
            array (
                'id' => 2558,
                'nombre' => 'CITOHISTOTECNOLOGOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            58 => 
            array (
                'id' => 2559,
            'nombre' => 'COMUNICADOR(A) SOCIAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            59 => 
            array (
                'id' => 2560,
            'nombre' => 'CONTADOR(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            60 => 
            array (
                'id' => 2561,
                'nombre' => 'PROFESIONAL EN DESARROLLO FAMILIAR',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            61 => 
            array (
                'id' => 2562,
                'nombre' => 'DIBUJANTE ARQUITECTONICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            62 => 
            array (
                'id' => 2563,
                'nombre' => 'DIBUJANTE TECNICO MECANICOS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            63 => 
            array (
                'id' => 2564,
            'nombre' => 'DISEÑADOR(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            64 => 
            array (
                'id' => 2565,
            'nombre' => 'DOCTOR(A) EN EDUCACION',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            65 => 
            array (
                'id' => 2566,
                'nombre' => 'ECONOMISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            66 => 
            array (
                'id' => 2567,
            'nombre' => 'EDAFOLOGO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            67 => 
            array (
                'id' => 2568,
            'nombre' => 'ERGONOMISTA Y DISENADOR(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            68 => 
            array (
                'id' => 2569,
                'nombre' => 'FARMACEUTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            69 => 
            array (
                'id' => 2570,
                'nombre' => 'FILÓSOFO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            70 => 
            array (
                'id' => 2571,
                'nombre' => 'FISIOTERAPEUTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            71 => 
            array (
                'id' => 2572,
                'nombre' => 'FONOAUDIÓLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            72 => 
            array (
                'id' => 2573,
                'nombre' => 'GEÓMORFOLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            73 => 
            array (
                'id' => 2574,
                'nombre' => 'GERENTE',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            74 => 
            array (
                'id' => 2575,
                'nombre' => 'GUIA TURÍSTICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            75 => 
            array (
                'id' => 2576,
                'nombre' => 'HIGIENISTA ORAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            76 => 
            array (
                'id' => 2577,
                'nombre' => 'PROFESIONAL EN HOTELERIA Y TURISMO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            77 => 
            array (
                'id' => 2578,
            'nombre' => 'INGENIERO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            78 => 
            array (
                'id' => 2579,
            'nombre' => 'KINESIOLOGO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            79 => 
            array (
                'id' => 2580,
                'nombre' => 'LABORATORISTA DENTAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            80 => 
            array (
                'id' => 2581,
            'nombre' => 'LICENCIADO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            81 => 
            array (
                'id' => 2582,
            'nombre' => 'LOCUTOR(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            82 => 
            array (
                'id' => 2583,
            'nombre' => 'MAESTRO(A) EN ARTES PLASTICAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            83 => 
            array (
                'id' => 2584,
            'nombre' => 'MERCADOLOGO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            84 => 
            array (
                'id' => 2585,
                'nombre' => 'MÊSICO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            85 => 
            array (
                'id' => 2586,
                'nombre' => 'NUTRICIONISTA DIETISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            86 => 
            array (
                'id' => 2587,
            'nombre' => 'ODONTÓLOGO(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            87 => 
            array (
                'id' => 2588,
            'nombre' => 'OPERADOR(A) DE MAQUINAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            88 => 
            array (
                'id' => 2589,
                'nombre' => 'PERIODISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            89 => 
            array (
                'id' => 2590,
                'nombre' => 'PRESBITERO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            90 => 
            array (
                'id' => 2591,
                'nombre' => 'PROFESIONAL EN ADMINISTRACIÓN Y FINANZAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            91 => 
            array (
                'id' => 2592,
                'nombre' => 'PROFESIONAL EN COMERCIO INTERNACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            92 => 
            array (
                'id' => 2593,
                'nombre' => 'PROFESIONAL EN ESTADÍSTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            93 => 
            array (
                'id' => 2594,
                'nombre' => 'PROFESIONAL EN GUIANZA TURISTICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            94 => 
            array (
                'id' => 2595,
                'nombre' => 'PROFESIONAL EN MERCADEO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            95 => 
            array (
                'id' => 2596,
                'nombre' => 'PROFESIONAL EN SALUD OCUPACIONAL',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            96 => 
            array (
                'id' => 2597,
                'nombre' => 'PROFESIONAL NORMALISTA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            97 => 
            array (
                'id' => 2598,
            'nombre' => 'PROMOTOR(A) DE SALUD',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            98 => 
            array (
                'id' => 2599,
            'nombre' => 'PSICOORIENTADOR(A)',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            99 => 
            array (
                'id' => 2600,
                'nombre' => 'PSIQUIATRA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            100 => 
            array (
                'id' => 2601,
            'nombre' => 'ESCULTOR(A) EN MADERA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            101 => 
            array (
                'id' => 2602,
                'nombre' => 'GEÓLOGO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            102 => 
            array (
                'id' => 2603,
                'nombre' => 'EMPLEADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            103 => 
            array (
                'id' => 2604,
                'nombre' => 'AC1: 1º A 3º',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            104 => 
            array (
                'id' => 2605,
                'nombre' => 'AC2: 4º Y 5º',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            105 => 
            array (
                'id' => 2606,
                'nombre' => 'CALLES ALTERNATIVAS',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            106 => 
            array (
                'id' => 2607,
                'nombre' => 'LUNES Y MARTES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            107 => 
            array (
                'id' => 2608,
                'nombre' => 'MIÉRCOLES Y JUEVES',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            108 => 
            array (
                'id' => 2609,
                'nombre' => 'VIERNES Y SÁBADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            109 => 
            array (
                'id' => 2610,
                'nombre' => 'UNO O VARIOS DÍAS DE LA SEMANA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            110 => 
            array (
                'id' => 2611,
                'nombre' => 'TODOS LOS DÍAS DE LUNES A SÁBADO',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            111 => 
            array (
                'id' => 2612,
                'nombre' => 'BIOLOGÍA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            112 => 
            array (
                'id' => 2613,
                'nombre' => 'ED. FÍSICA',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
            113 => 
            array (
                'id' => 2614,
                'nombre' => 'ACELERACIÓN',
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'sis_esta_id' => 1,
                'created_at' => '2021-06-02 14:14:46',
                'updated_at' => '2021-06-02 14:14:46',
            ),
        ));
        
        
    }
}