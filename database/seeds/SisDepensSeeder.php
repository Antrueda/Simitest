<?php

use App\Models\Sistema\SisDepen;
use Illuminate\Database\Seeder;


use App\Models\User;

class SisDepensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisDepen::create([
            'simianti_id' => 0,
            'nombre' =>
            'ESPACIOS EXTERNOS',
            'i_prm_cvital_id' => 1,
            'i_prm_tdependen_id' => 1,
        'i_prm_sexo_id' => 1,
         's_direccion' => 'Calle 15 no 13- 86',
         'sis_departam_id' => 1,
         'sis_municipio_id' => 1,
         'sis_upzbarri_id' => 1, 's_telefono' => '3410017', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
         ]); // 1
        SisDepen::create(['simianti_id' => 0,'nombre' => 'TERRITORIO 1', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 15 no 13- 86', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3410017', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 2
        SisDepen::create(['simianti_id' => 0,'nombre' => 'TERRITORIO 2', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 15 no 13- 86', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3410017', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 3
        SisDepen::create(['simianti_id' => 13, 'nombre' => 'UPI ARBORIZADORA ALTA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => '00003', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '003', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,]
    ); // 4
        SisDepen::create(['simianti_id' => 6, 'nombre' => 'UPI BELEN', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 1 No. 6D - 88', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '5556286 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 5
        SisDepen::create(['simianti_id' => 12, 'nombre' => 'UPI BOSA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 77G No. 63-35 sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942744', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 6
        SisDepen::create(['simianti_id' => 19, 'nombre' => 'UPI CARMEN DE APICALA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'El Cairo - Vereda los Medios, Finca San Pedro', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006978054', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 7
        SisDepen::create(['simianti_id' => 20, 'nombre' => 'UPI EDEN', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Km 95 vía Bogotá La Escobita', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942208', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 8
        SisDepen::create(['simianti_id' => 233, 'nombre' => 'UPI EMPRENDER', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => '00008', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '008', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 9
        SisDepen::create(['simianti_id' => 10,  'nombre' => 'UPI LA ARCADIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Km 2 Vereda El Hato, vía Funza', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006934602', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 10
        SisDepen::create(['simianti_id' => 245,  'nombre' => 'UPI LA CALERA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Finca Bellavista, Casa Roja, Vereda Salitre Sector la Chocolatera', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3102373054', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 11
        SisDepen::create(['simianti_id' => 1,  'nombre' => 'CONSERVATORIO JAVIER DE NICOLO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Diagonal 18 # 16 A – 13', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942768', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 12
        SisDepen::create(['simianti_id' => 2,  'nombre' => 'UPI LA RIOJA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 4 No. 14-14', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '2466919', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 13
        SisDepen::create(['simianti_id' => 8,  'nombre' => 'UPI LA VEGA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Vereda El Naranjal, Municipio de Villeta', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3100411', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 14
        SisDepen::create(['simianti_id' => 7,  'nombre' => 'UPI LA 27', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Av carrera 27 # 23 - 21 sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '2030126', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 15
        SisDepen::create(['simianti_id' => 3,  'nombre' => 'UPI LA 32', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Cra 32 No. 12-09/55', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006940327', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 16
        SisDepen::create(['simianti_id' => 5,  'nombre' => 'UPI LIBERIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 16 No 10 - 28', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3004117376', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 17
        SisDepen::create(['simianti_id' => 4,  'nombre' => 'UPI LUNA PARK', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 13 Sur No. 17 -52', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3619832', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 18
        SisDepen::create(['simianti_id' => 140,  'nombre' => 'UPI MOLINOS', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 5A Bis # 48N - 48 Sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006978534', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 19
        SisDepen::create(['simianti_id' => 212,  'nombre' => 'UPI NORMANDIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'AV Cr. 70 No. 51-45', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3013973413', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 20
        SisDepen::create(['simianti_id' => 21,  'nombre' => 'UPI OASIS I', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 10 A No. 45-09', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006971980', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 21
        SisDepen::create(['simianti_id' => 16,  'nombre' => 'UPI OASIS II', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 10 A No. 45-09', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006971980', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 22
        SisDepen::create(['simianti_id' => 14,  'nombre' => 'UPI PERDOMO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Avenida Carrera 70C No. 60B-05 Sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942744 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 23
        SisDepen::create(['simianti_id' => 27,  'nombre' => 'UPI PREFLORIDA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Potrero San Antonio, Costado Sur Parque La Florida', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3002037489', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 24
        SisDepen::create(['simianti_id' => 9,  'nombre' => 'UPI SAN FRANCISCO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Vereda el Peñon, Finca Villa Magdalena', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006962711', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 25
        SisDepen::create(['simianti_id' => 18,  'nombre' => 'UPI SANTA LUCIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Diagonal 44 Sur No. 19-21 y Carrera 20 No. 44-98 Sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '7676265 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 26
        SisDepen::create(['simianti_id' => 17,  'nombre' => 'UPI SERVITA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Avenida Carrera. 7 No. 164-94', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '6696024 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 27
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'i_prm_responsable_id' => 2316];

        SisDepen::create([
            'nombre' => 'CAMINANDO RELAJADO',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'CALLE 15 #13-87',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '3100411',
            's_correo' => 'IDIPRON@IDIPRON.GOV.CO',
            'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 28
        SisDepen::create([
            'simianti_id' => 11,
            'nombre' => 'UPI LA FLORIDA',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'PARQUE LA FLORIDA COSTADO',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '3100411',
            's_correo' => 'UELAFLORIDA@IDIPRON.GOV.CO',
            'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]);// 29
        SisDepen::create([
            'nombre' => 'A.C. CULTURA CIUDADANA',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 30
        SisDepen::create([
            'nombre' => 'CONVENIO 1849 DE 2020',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 31
        SisDepen::create([
            'nombre' => 'CONVENIO 2457/2020',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 32
        SisDepen::create([
            'nombre' => 'CONVENIO 305  DE 2020',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 33

        SisDepen::create([
            'nombre' => 'CONVENIO 447/2020 SDM',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 34

        SisDepen::create([
            'nombre' => 'CONVENIO 826 DE 2020',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 35

        SisDepen::create([
            'nombre' => 'CONVENIO COMEDORES',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 36

        SisDepen::create([
            'nombre' => 'EGRESO',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 37

        SisDepen::create([
            'nombre' => 'TERRITORIO',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'A',
            'sis_departam_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '0',
            's_correo' => 'f',
            'sis_esta_id' => 1, 'itiestan' => 0, 'itiegabe' => 0,
        ]);// 38

        $camposmagicos = ['user_crea_id' => 2, 'user_edita_id' => 2, 'sis_esta_id' => 1, 'i_prm_responsable_id' => 2316];


        $super = User::where('id', 1)->first();

        $super->sis_depens()->sync([
            2 => $camposmagicos,
            15 => $camposmagicos,
            23 => $camposmagicos,
        ]);

        $super = User::where('id', 2)->first();

        $super->sis_depens()->sync([
            2 => $camposmagicos,
            15 => $camposmagicos,
            23 => $camposmagicos,
        ]);

        $super = User::where('id', 3)->first();

        $super->sis_depens()->sync([
            2 => $camposmagicos,
            6 => $camposmagicos,
            12 => $camposmagicos,
            16 => $camposmagicos,
        ]);
        $super = User::where('id', 4)->first();

        $super->sis_depens()->sync([
            2 => $camposmagicos,
            6 => $camposmagicos,
            12 => $camposmagicos,
            16 => $camposmagicos,
        ]);
        $super = User::where('id', 7)->first();
        $super->sis_depens()->sync([
            6 => $camposmagicos,
            12 => $camposmagicos,
            16 => $camposmagicos,
        ]);

        $super = User::where('id', 8)->first();
        $super->sis_depens()->sync([
            6 => $camposmagicos,
            12 => $camposmagicos,
            16 => $camposmagicos,
        ]);

        $super = User::where('id', 9)->first();
        $super->sis_depens()->sync([
            2 => $camposmagicos,
            29 => $camposmagicos,
        ]);

        $super = User::where('id', 10)->first();
        $super->sis_depens()->sync([
            29 => $camposmagicos,
        ]);

        $super = User::where('id', 11)->first();
        $super->sis_depens()->sync([
            29 => $camposmagicos,
        ]);

        $super = User::where('id', 12)->first();
        $super->sis_depens()->sync([
            29 => $camposmagicos,
        ]);


        $super = User::where('id', 13)->first();
        $super->sis_depens()->sync([
            29 => $camposmagicos,
        ]);


        $super = User::where('id', 14)->first();
        $super->sis_depens()->sync([
            29 => $camposmagicos,
        ]);

        $super = User::where('id', 15)->first();
        $super->sis_depens()->sync([
            29 => $camposmagicos,
        ]);

        $super = User::where('id', 16)->first();
        $super->sis_depens()->sync([
            29 => $camposmagicos,
        ]);

        $super = User::where('id', 17)->first();
        $super->sis_depens()->sync([
            29 => $camposmagicos,
        ]);

        $super = User::where('id', 904)->first();

        $super->sis_depens()->sync([
            2 => $camposmagicos,
            15 => $camposmagicos,
            23 => $camposmagicos,
        ]);
    }
}
