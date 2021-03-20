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
        SisDepen::create([
            'simianti_id' => 223, 'nombre' => 'TERRITORIO 1', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 15 no 13- 86', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3410017', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 2
        SisDepen::create([
            'simianti_id' => 225, 'nombre' => 'TERRITORIO 2', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 15 no 13- 86', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3410017', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 3
        SisDepen::create(
            ['simianti_id' => 13, 'nombre' => 'UPI ARBORIZADORA ALTA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => '00003', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '003', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,]
        ); // 4
        SisDepen::create([
            'simianti_id' => 6, 'nombre' => 'UPI BELEN', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 1 No. 6D - 88', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '5556286 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 5
        SisDepen::create([
            'simianti_id' => 12, 'nombre' => 'UPI BOSA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 77G No. 63-35 sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942744', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 6
        SisDepen::create([
            'simianti_id' => 19, 'nombre' => 'UPI CARMEN DE APICALA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'El Cairo - Vereda los Medios, Finca San Pedro', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006978054', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 7
        SisDepen::create([
            'simianti_id' => 20, 'nombre' => 'UPI EDEN', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Km 95 vía Bogotá La Escobita', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942208', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 8
        SisDepen::create([
            'simianti_id' => 233, 'nombre' => 'UPI EMPRENDER', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => '00008', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '008', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 9
        SisDepen::create([
            'simianti_id' => 10,  'nombre' => 'UPI LA ARCADIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Km 2 Vereda El Hato, vía Funza', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006934602', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 10
        SisDepen::create([
            'simianti_id' => 245,  'nombre' => 'UPI LA CALERA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Finca Bellavista, Casa Roja, Vereda Salitre Sector la Chocolatera', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3102373054', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 11
        SisDepen::create([
            'simianti_id' => 257,  'nombre' => 'CONSERVATORIO JAVIER DE NICOLO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Diagonal 18 # 16 A – 13', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942768', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 12
        SisDepen::create([
            'simianti_id' => 2,  'nombre' => 'UPI LA RIOJA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 4 No. 14-14', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '2466919', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 13
        SisDepen::create([
            'simianti_id' => 8,  'nombre' => 'UPI LA VEGA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Vereda El Naranjal, Municipio de Villeta', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3100411', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 14
        SisDepen::create([
            'simianti_id' => 7,  'nombre' => 'UPI LA 27', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Av carrera 27 # 23 - 21 sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '2030126', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 15
        SisDepen::create([
            'simianti_id' => 30,  'nombre' => 'UPI LA 32', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Cra 32 No. 12-09/55', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006940327', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 16
        SisDepen::create([
            'simianti_id' => 5,  'nombre' => 'UPI LIBERIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 16 No 10 - 28', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3004117376', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 17
        SisDepen::create([
            'simianti_id' => 4,  'nombre' => 'UPI LUNA PARK', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 13 Sur No. 17 -52', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3619832', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 18
        SisDepen::create([
            'simianti_id' => 140,  'nombre' => 'UPI MOLINOS', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 5A Bis # 48N - 48 Sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006978534', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 19
        SisDepen::create([
            'simianti_id' => 212,  'nombre' => 'UPI NORMANDIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'AV Cr. 70 No. 51-45', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3013973413', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 20
        SisDepen::create([
            'simianti_id' => 21,  'nombre' => 'UPI OASIS I', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 10 A No. 45-09', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006971980', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 21
        SisDepen::create([
            'simianti_id' => 16,  'nombre' => 'UPI OASIS II', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 10 A No. 45-09', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006971980', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 22
        SisDepen::create([
            'simianti_id' => 14,  'nombre' => 'UPI PERDOMO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Avenida Carrera 70C No. 60B-05 Sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942744 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 23
        SisDepen::create([
            'simianti_id' => 27,  'nombre' => 'UPI PREFLORIDA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Potrero San Antonio, Costado Sur Parque La Florida', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3002037489', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 24
        SisDepen::create([
            'simianti_id' => 9,  'nombre' => 'UPI SAN FRANCISCO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Vereda el Peñon, Finca Villa Magdalena', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006962711', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 25
        SisDepen::create([
            'simianti_id' => 18,  'nombre' => 'UPI SANTA LUCIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Diagonal 44 Sur No. 19-21 y Carrera 20 No. 44-98 Sur', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '7676265 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 26
        SisDepen::create([
            'simianti_id' => 17,  'nombre' => 'UPI SERVITA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Avenida Carrera. 7 No. 164-94', 'sis_departam_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '6696024 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1, 'itiestan' => 10, 'itiegabe' => 0,
        ]); // 27
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
        ]); // 28
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
        ]); // 29
        SisDepen::create([
            'simianti_id' => 220,
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
        ]); // 30
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
        ]); // 31
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
        ]); // 32
        SisDepen::create([
            'nombre' => 'CONVENIO 305 DE 2020',
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
        ]); // 33

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
        ]); // 34

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
        ]); // 35

        SisDepen::create([
            'simianti_id' => 227,
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
        ]); // 36

        SisDepen::create([
            'simianti_id' => 45,
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
        ]); // 37

        SisDepen::create([
            'simianti_id' => 62,
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
        ]); // 38
        SisDepen::create([ 'simianti_id' => '1', 'nombre' => 'UPI LA FAVORITA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'DIAGONAL 18 NO. 16 A 31', 's_telefono' => 2841595 - 3143577574, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774, 'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0,'s_correo' => 'ddd@idipron.gov.co' ]);
        SisDepen::create(['simianti_id' => '75', 'nombre' => 'EXPERIENCIA SAN CRISTOBAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 27A N 63B-07', 's_telefono' => 3471496, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '73', 'nombre' => '947/13 SDA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '74', 'nombre' => 'EXPERIENCIA SAN LUIS (CONVENIO 715/2013)', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 27A N 63B-07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '86', 'nombre' => 'PRODUCCION LOGISTICA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '87', 'nombre' => 'MISION BOGOTA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '88', 'nombre' => '100/14 SDP', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '89', 'nombre' => '195/14 FOPAE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '106', 'nombre' => 'CONVENIO RENACER MARTIRES', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 19A N 22B-14', 's_telefono' => 3409498, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '107', 'nombre' => '208/2014 IDPC', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2213531, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '118', 'nombre' => 'PAS-SDIS-CIUDAD BOLÌVAR', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '120', 'nombre' => 'PUNTO DE ATENCIÒN SOCIAL-PAS-SDIS-SERVITA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '122', 'nombre' => 'PUNTO DE ATENCIÒN SOCIAL-PAS-SDIS-USME', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '125', 'nombre' => 'CASA JUVENTUD BARRIOS UNIDOS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '128', 'nombre' => '221/2015 IDT', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '129', 'nombre' => 'MBH GRUPO 3', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '132', 'nombre' => 'MBH GRUPO 5', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '133', 'nombre' => 'MBH GRUPO 6', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '138', 'nombre' => 'INCAP CHAPINERO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV CARACAS NO 63-66 /CHAPINERO', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '142', 'nombre' => 'MBH GRUPO 11 (GESTANTES)', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CR 27 63 B 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '144', 'nombre' => 'PANADERIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '145', 'nombre' => 'PRODUCCIÓN Y GESTIÓN CULTURAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '148', 'nombre' => '1154/15 SDA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '149', 'nombre' => 'CONVENIO INTERADMINISTRATIVO 219/15', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '150', 'nombre' => 'MARROQUINERA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '153', 'nombre' => 'GASTRONOMIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '155', 'nombre' => 'EBANISTERIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '160', 'nombre' => 'CERAMICA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '162', 'nombre' => 'POLITECNICO COLOMBO ANDINO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CALLE 56 # 14 - 67 ', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '165', 'nombre' => '1095/2015 SDM', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '166', 'nombre' => 'SENA RESTREPO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '167', 'nombre' => 'SENA CAZUCA- CEN. TECNO. DEL TRAN.', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 4 NO 53-54 CENTRO INDUSTRIAL CAZUCA', 's_telefono' => 5461600, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '213', 'nombre' => 'A.C. DALE RITMO A BOGOTÁ', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '171', 'nombre' => 'SENA CLL 15 DISEÑO DE INTEGRACION MULTIMEDIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '172', 'nombre' => 'SENA CALLE 52-CENT. DE GESTI. MERCA, LOGIS Y TECN.', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CALLE 52 NO. 13 - 65 ', 's_telefono' => 5941301, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '174', 'nombre' => 'MBH GRUPO 12', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '175', 'nombre' => 'MBH GRUPO 13', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '177', 'nombre' => 'MBH GRUPO 15', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '179', 'nombre' => 'MBH GRUPO 17', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '180', 'nombre' => 'MBH GRUPO 18', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '182', 'nombre' => 'MBH GRUPO 20', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '190', 'nombre' => 'FUNDACION DEL PEQUEÑO TRABAJADOR', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 86 G NO. 40-60 SUR /PATIO BONITO ', 's_telefono' => 0000, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '191', 'nombre' => 'CENTRO DE GESTIÓN ADMINISTRATIVA CLL 13', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '192', 'nombre' => 'INGABO CHAPINERO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AVENIDA CARACAS Nª 65-27/CHAPINERO', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '193', 'nombre' => 'ISPA POTOSI', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 46B NO. 73B-65 SUR', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '194', 'nombre' => 'ISPA JERUSALEN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CALLE 73C SUR NO. 46B-10', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '196', 'nombre' => 'PRACTICA DE APROPÍACION TERRITORIAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '202', 'nombre' => 'ANDAP SENA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '205', 'nombre' => 'DISTRITO JOVEN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '208', 'nombre' => 'SENA CONSULTEC - CENTRO DE ELECTR.. Y COMUNICA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV. PRIMERO DE MAYO NO. 13 - 60', 's_telefono' => 3666694, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '217', 'nombre' => 'A.C.EMBELLECIMIENTO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '219', 'nombre' => 'A.C.GESTIÓN AMBIENTAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '230', 'nombre' => '1236/2016 SDM', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '231', 'nombre' => 'PRUEBASIMI', 'i_prm_sexo_id' => 2324, 's_direccion' => 'PRUEBA', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '229', 'nombre' => '1163/2016 SDA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '232', 'nombre' => '124/2017 SCRD', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 310411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '85', 'nombre' => 'FED. IDIPRON (C.A.-1624/2013)', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3500524, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '92', 'nombre' => 'PROCESO SOCIAL RED DE ORGANIZACIONES POR LA PAZ', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '94', 'nombre' => 'PROCESO SOCIAL GOLPE DE BARRIO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '114', 'nombre' => 'PROMOTOR DE PAZ', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CR 27A # 63 B 07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '116', 'nombre' => 'SEMILLEROS DE INVESTIGACIÓN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '119', 'nombre' => 'PAS-SDIS-SAN CRISTÒBAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '123', 'nombre' => 'PUNTO DE ATENCIÒN SOCIAL- PAS- SDIS- BOSA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '134', 'nombre' => 'MBH GRUPO 7', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '135', 'nombre' => 'MBH GRUPO 8', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '147', 'nombre' => 'PROMOTOR GESTIÓN COMUNITARIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '154', 'nombre' => 'ELECTRICIDAD', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '158', 'nombre' => 'METALISTERIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '163', 'nombre' => 'FORMACION EXTERNA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '169', 'nombre' => 'SENA KENEDDY ONASIS-CENT. DE FORMACION AC FIS Y CU', 'i_prm_sexo_id' => 2324, 's_direccion' => ' CALLE 45 SUR 78P -18 ONASSIS', 's_telefono' => 5461600, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '176', 'nombre' => 'MBH GRUPO 14', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '181', 'nombre' => 'MBH GRUPO 19', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '186', 'nombre' => 'COLSUBSIDIO SAN CAMILO HORTUA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '195', 'nombre' => 'ISPA LIBERTADOR', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 24B NO. 29A-02 SUR ', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '197', 'nombre' => 'CONVENIO DADEP - 011', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '198', 'nombre' => '078/16 SCRD', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '201', 'nombre' => 'CONCORDIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 17Nº16-73/RESTREPO', 's_telefono' => 0000, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '203', 'nombre' => 'APOYO CONVENIO 149/2016 TRANS.', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358079, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '204', 'nombre' => 'ANDAP', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AVENIDA CARACAS Nº 76-33', 's_telefono' => 00000, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '255', 'nombre' => 'CONVENIO 274/2019 CONVENIO SISBEN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '256', 'nombre' => 'CONVENIO 577/2019 TRANSMILENIO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV CIUDAD DE QUITO NO 63 F-35', 's_telefono' => 3154276, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '258', 'nombre' => 'CONVENIO 329/2019 IDIGER-IDIPRON', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV CIUDAD DE QUITO NO 63 F-35', 's_telefono' => 3154276, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '259', 'nombre' => 'CONVENIO 175/2019 SCRD', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV. CIUDAD DE QUITO NO. 63 F- 35', 's_telefono' => 3152297558, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '260', 'nombre' => 'CONVENIO 397 DADEP- 2019', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AK 30 #63F - 35 DISTRITO JOVEN ', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '261', 'nombre' => 'CONVENIO SAN CRISTÓBAL FDL 1295/2019', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV. CIUDAD DE QUITO NO. 63 F- 35', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '96', 'nombre' => 'PROCESO SOCIAL EL MUTE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '97', 'nombre' => 'PROCESO SOCIAL ENTREREDES', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '98', 'nombre' => 'PROCESO SOCIAL LIBREMENTE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '99', 'nombre' => 'PROCESO SOCIAL ESQUIZOFRENIA CREW', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '103', 'nombre' => 'PROCESO SOCIAL LA REDADA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '104', 'nombre' => 'PROCESO SOCIAL CAOOS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '110', 'nombre' => 'SERENDIPIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CLL 15 # 13-86', 's_telefono' => 3423157, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '111', 'nombre' => '233/SDE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '115', 'nombre' => 'PROMOTOR LOGÍSTICA Y PRODUCCIÓN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '117', 'nombre' => 'PAS-SDIS-RAFAEL URIBE URIBE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '131', 'nombre' => 'MBH GRUPO 4', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '137', 'nombre' => 'INCAP CENTRO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 5 N ° 20-08 / CENTRO', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '143', 'nombre' => 'BICICLETAS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '151', 'nombre' => 'BELLEZA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '152', 'nombre' => 'CONFECCION', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '157', 'nombre' => 'SCRREM', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '159', 'nombre' => 'VITRALES', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '161', 'nombre' => 'INGABO RESTREPO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 17 Nº 16-45 SUR/RESTREPO ', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '178', 'nombre' => 'MBH GRUPO 16', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '189', 'nombre' => 'POLITECNICO DE OCCIDENTE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CALLE 16 J # 97-35 / FONTIBON', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '200', 'nombre' => 'CONVENIO 149/2016 TRANSMILENIO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '207', 'nombre' => 'SAN CAMILO HORTUA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AVENIDA CALLE 1 NO 9 - 50 / HORTUA ', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '70', 'nombre' => '446/13', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '170', 'nombre' => 'SENA KENNEDY ONASIS-CENT. DE FORMA FIS Y CULT.', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CALLE 45 SUR 78P -18 ONASSIS', 's_telefono' => 5461600, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '0', 'nombre' => 'REGISTRO_PARA_rEGISTROS_HUERFANOS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '216', 'nombre' => 'A.C.INVESTIGACIÓN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '218', 'nombre' => 'A.C.SERVICIO SOCIAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '222', 'nombre' => '334/DADEP', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '224', 'nombre' => 'TERRITORIO 3', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '228', 'nombre' => 'CONVENIO SISBEN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '93', 'nombre' => 'PROCESO SOCIAL NO LE SAQUE LA PIEDRA A LA MONTAÑA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '108', 'nombre' => '3379/14 JOVENES EN PAZ', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 7795453, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '101', 'nombre' => 'PROCESO SOCIAL SUR DEL CIELO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '102', 'nombre' => 'PROCESO SOCIAL EGIPTO BARRIO CON ILUSIONES', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '105', 'nombre' => '1277/MOVILIDAD', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2213531, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '113', 'nombre' => 'PROMOTOR DEL RIESGO Y EL CAMBIO CLIMÁTICO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '121', 'nombre' => 'PUNTO DE ATENCIÒN SOCIAL-PAS-SDIS-LOURDES', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '124', 'nombre' => 'PUNTO DE ATENCIÓN CASA JUVENTUD BARRIOS UNIDOS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '126', 'nombre' => 'FORMACIÓN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '127', 'nombre' => 'MBH GRUPO 1', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '130', 'nombre' => 'MBH GRUPO 2', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '136', 'nombre' => 'MBH GRUPO 9', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '139', 'nombre' => 'FUMDIR', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 90 NO.149-73/SUBA', 's_telefono' => 00000, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '141', 'nombre' => 'MBH GRUPO 10', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '183', 'nombre' => 'COLSUBSIDIO ANDAP', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '168', 'nombre' => 'SENA CENIGRAF - CENTRO PARA LA INDUSTRIA DE LA COM', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CALLE 15 Nª 31 - 42 CENIGRAF', 's_telefono' => 5461500, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '173', 'nombre' => '1146 SDM /2015', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '184', 'nombre' => 'COLSUBSIDIO CONCORDIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '185', 'nombre' => 'ISPA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '187', 'nombre' => 'SAN CAMILO JUAN REY', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '188', 'nombre' => 'INESCO SEDE TEUSAQUILLO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '199', 'nombre' => 'TECNICA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '211', 'nombre' => 'CALLE 15/NNA META 3', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '221', 'nombre' => 'A.C.TERRITORIO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '95', 'nombre' => 'PROCESO SOCIAL RED ORGANIZACIONES USME', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '109', 'nombre' => 'RENACER RAFAEL URIBE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '112', 'nombre' => 'PROMOTOR DE PATRIMONIO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27 A # 63-B-07', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '206', 'nombre' => 'INESCO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 17 NO 33-22 TEUSAQUILLO', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '209', 'nombre' => 'CICLO PARQUEADEROS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 24 #61D-42', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '210', 'nombre' => 'GESTION LOGISTICA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '214', 'nombre' => 'A.C.GESTIÓN LOGÍSTICA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '215', 'nombre' => 'A.C.APOYO ADMINISTRATIVO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '226', 'nombre' => 'CONVENIO ERU 014', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '23', 'nombre' => 'CANDELARIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'HJNHJHGJ', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '26', 'nombre' => 'COMPONENTE SOCIO LEGAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'DIAGONAL 18 NO. 16 A 31', 's_telefono' => 2841595 - 3143577574, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '15', 'nombre' => 'PERDOMO KFW', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV. CRA. 70C NO. 60B-05', 's_telefono' => 7795453 - 3143336736, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '22', 'nombre' => 'EDIFICIO AVENIDA CARACAS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'Av. Caracas 15-42/46', 's_telefono' => 2823000 - 3143580113, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '25', 'nombre' => 'CORINTO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'FGFDGFD', 's_telefono' => 5245464, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '24', 'nombre' => 'MAZUREN', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CODITO', 's_telefono' => 45435621, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '28', 'nombre' => 'BUSQUEDA ACTIVA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '39', 'nombre' => 'PROYECTO MUJERES PARA LA VIDA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 202, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '51', 'nombre' => '1111/12 SEC.MOVILIDAD', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '56', 'nombre' => 'P_PRODUCTIVA_SEDE_ADM,INISTRATIVA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '59', 'nombre' => 'P_PRODUCTIVA_PERDOMO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '61', 'nombre' => '1425/10 SEC.MOVILIDAD', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '40', 'nombre' => 'BUSQUEDA AFECTIVA CALLE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 14 13-33', 's_telefono' => 3410017, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '44', 'nombre' => 'PAZUR', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '234', 'nombre' => '303/17 DADEP', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 310411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '235', 'nombre' => 'CONVENIO 509/17 TRANSMILENIO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '236', 'nombre' => 'CONVENIO 201/17 FLD SUBA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3154276, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '237', 'nombre' => 'CONVENIO 239/17 ERU', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV. CIUDAD DE QUITO NO. 63 F- 35', 's_telefono' => 3154276, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '238', 'nombre' => 'SISTEMA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'n/a', 's_telefono' => 0, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '239', 'nombre' => 'SENA CENTRO FINANCIERO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '240', 'nombre' => 'CONVENIO 345/17 IDIGER', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV. CIUDAD DE QUITO NO. 63 F- 35', 's_telefono' => 3154276, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '241', 'nombre' => 'CONVENIO JARDÍN BOTÁNICO 012/2017', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '242', 'nombre' => '1295/2017 SAN CRISTÓBAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CR 30 # 63F-37', 's_telefono' => 3154276, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '243', 'nombre' => 'FORMACION TECNICA EXTERNA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 000, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '244', 'nombre' => 'CONVENIO 01/2018 AGUAS DE BOGOTÁ', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '80', 'nombre' => 'EXPERIENCIA CANDELARIA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '156', 'nombre' => 'MANTENIMIENTO DE MOTOS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '146', 'nombre' => 'PROMOTOR DE LOGÍSTICA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '247', 'nombre' => 'CONVENIO 0486/18 TRANSMILENIO S.A', 'i_prm_sexo_id' => 2324, 's_direccion' => 'PROYECTOS', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '248', 'nombre' => 'CONVENIO 206/2018 SCRD', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV. CIUDAD DE QUITO # 63 F - 35', 's_telefono' => 2358096, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '249', 'nombre' => 'CONVENIO 1680/2018 SDM', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '250', 'nombre' => 'CONVENIO 346/2018 DADEP', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '251', 'nombre' => 'CONVENIO 031 /2018 FDL SAN CRISTOBAL - SDA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'AV. CIUDAD DE QUITO NO. 63 F- 35', 's_telefono' => 3154276, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '252', 'nombre' => 'SIN UPI', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '253', 'nombre' => 'CAE/JDF', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CALLE 58D SUR #51-35', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '254', 'nombre' => 'CONVENIO ERU -007- 2019', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CAA', 's_telefono' => 3103310024, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '46', 'nombre' => 'GENERACION DE INGRESOS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '48', 'nombre' => '108/13 UAERMV', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '49', 'nombre' => 'EXPERIENCIA BOSA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '52', 'nombre' => '676/12 FOPAE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '53', 'nombre' => 'P_PRODUCTIVA_FLORIDA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '57', 'nombre' => 'P_PRODUCTIVA_ECONOMATO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '58', 'nombre' => 'P_PRODCUTIVA_T_SOCIAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '60', 'nombre' => '081/12 PLANEACION', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '32', 'nombre' => 'FLORIDA INGRESO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CLL 64 I 76 - 16', 's_telefono' => 2763297, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '41', 'nombre' => 'ACANDI', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ACANDI-CHOCO', 's_telefono' => 0, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '50', 'nombre' => '022/13 PLANAECION', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '54', 'nombre' => 'P_PRODUCTIVA_FAVORITA_MUSICOS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '55', 'nombre' => 'P_PRODUCTIVA_FAVORITA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '36', 'nombre' => 'INGRESO', 'i_prm_sexo_id' => 2324, 's_direccion' => '0000000000000', 's_telefono' => 00000000, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '47', 'nombre' => '001/2012 S.D.A-FDLU', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '31', 'nombre' => 'BUSQUEDA AFECTIVA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '33', 'nombre' => 'PREFLORIDA-INGRESO', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 303, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '35', 'nombre' => 'BAÑOS PUBLICOS', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 2228647, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '37', 'nombre' => 'SOCIO-LEGAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CLL 15 # 13-86', 's_telefono' => 3412697, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '38', 'nombre' => 'INTERVENCION FAMILIAR', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CLL 15 # 13-86', 's_telefono' => 3412697, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '42', 'nombre' => 'ARMEMOS PARCHE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CRA 27A NO. 63B - 07', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '43', 'nombre' => 'EXPERIENCIA SUBA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '76', 'nombre' => 'EXPERIENCIA USME (CONVENIO FUNSANVILLE 1741/2013)', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '78', 'nombre' => 'JUSTICIA JUVENIL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '79', 'nombre' => 'EXPERIENCIA USAQUEN-MEMORARTE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '81', 'nombre' => 'ESCNNA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3155115, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '83', 'nombre' => 'GESTION DOCUMENTAL', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '84', 'nombre' => '966/2013 EAB', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '66', 'nombre' => 'EXPERIENCIA SANTA FE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'IDIPRON', 's_telefono' => 3471496, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '67', 'nombre' => '1295/13 SDA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '68', 'nombre' => '236/13 IDPC', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '71', 'nombre' => '965/13 SDA', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '72', 'nombre' => '1659/13 SDM', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '77', 'nombre' => 'EXPERIENCIA RAFAEL URIBE (MOVIMIENTO HIP-HOP)', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3100411, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '82', 'nombre' => '143/13 IDPC', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '63', 'nombre' => 'EXPERIENCIA USME', 'i_prm_sexo_id' => 2324, 's_direccion' => 'CARRERA 27A N 63 B-07', 's_telefono' => 3471496, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '64', 'nombre' => 'EXPERIENCIA CIUDAD BOLIVAR', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3471496, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '65', 'nombre' => 'EXPERIENCIA KENNEDY', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 3471496, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);
        SisDepen::create(['simianti_id' => '69', 'nombre' => '446/13 FOPAE', 'i_prm_sexo_id' => 2324, 's_direccion' => 'ddd', 's_telefono' => 00, 'i_prm_cvital_id' => 1679, 'i_prm_tdependen_id' => 774,  'user_edita_id' => 1, 'user_crea_id' => 1, 'sis_esta_id' => 1, 'sis_departam_id' => 6, 'sis_municipio_id' => 233, 'sis_upzbarri_id' => 1510, 'itiestan' => 0, 'itiegabe' => 0, 's_correo' => 'ddd@idipron.gov.co']);


        $camposmagicos = ['user_crea_id' => 2, 'user_edita_id' => 2, 'sis_esta_id' => 1, 'i_prm_responsable_id' => 2316];


        $super = User::where('id', 1)->first();

        $super->sis_depens()->sync([
            2 => $camposmagicos,
            15 => $camposmagicos,
            23 => $camposmagicos,
            28 => $camposmagicos,
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
/*
        
             
                13,6,12,19,20,233,10,245,1,2,8,7,3,5,4,140,212,21,16,14,27,9,18,17,45
    


  



