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
        SisDepen::create(['id' => 1, 'nombre' => 'ESPACIOS EXTERNOS', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 15 no 13- 86', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3410017', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0,]);
        SisDepen::create(['id' => 2, 'nombre' => 'TERRITORIO 1', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 15 no 13- 86', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3410017', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['id' => 3, 'nombre' => 'TERRITORIO 2', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 15 no 13- 86', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3410017', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>13,'id' => 4, 'nombre' => 'UPI ARBORIZADORA ALTA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => '00003', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '003', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>6,'id' => 5, 'nombre' => 'UPI BELEN', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 1 No. 6D - 88', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '5556286 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>12,'id' => 6, 'nombre' => 'UPI BOSA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 77G No. 63-35 sur', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942744', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>19,'id' => 7, 'nombre' => 'UPI CARMEN DE APICALA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'El Cairo - Vereda los Medios, Finca San Pedro', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006978054', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>20,'id' => 8, 'nombre' => 'UPI EDEN', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Km 95 vía Bogotá La Escobita', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942208', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>233,'id' => 9, 'nombre' => 'UPI EMPRENDER', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => '00008', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '008', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>10,'id' => 10, 'nombre' => 'UPI LA ARCADIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Km 2 Vereda El Hato, vía Funza', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006934602', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>245,'id' => 11, 'nombre' => 'UPI LA CALERA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Finca Bellavista, Casa Roja, Vereda Salitre Sector la Chocolatera', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3102373054', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>1,'id' => 12, 'nombre' => 'CONSERVATORIO JAVIER DE NICOLO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Diagonal 18 # 16 A – 13', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942768', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>2,'id' => 13, 'nombre' => 'UPI LA RIOJA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 4 No. 14-14', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '2466919', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>8,'id' => 14, 'nombre' => 'UPI LA VEGA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Vereda El Naranjal, Municipio de Villeta', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3100411', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>7,'id' => 15, 'nombre' => 'UPI LA 27', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Av carrera 27 # 23 - 21 sur', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '2030126', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>3,'id' => 16, 'nombre' => 'UPI LA 32', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Cra 32 No. 12-09/55', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006940327', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>5,'id' => 17, 'nombre' => 'UPI LIBERIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 16 No 10 - 28', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3004117376', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>4,'id' => 18, 'nombre' => 'UPI LUNA PARK', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 13 Sur No. 17 -52', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3619832', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>140,'id' => 19, 'nombre' => 'UPI MOLINOS', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Carrera 5A Bis # 48N - 48 Sur', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006978534', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>212,'id' => 20, 'nombre' => 'UPI NORMANDIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'AV Cr. 70 No. 51-45', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3013973413', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>21,'id' => 21, 'nombre' => 'UPI OASIS I', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 10 A No. 45-09', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006971980', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>16,'id' => 22, 'nombre' => 'UPI OASIS II', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Calle 10 A No. 45-09', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006971980', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>14,'id' => 23, 'nombre' => 'UPI PERDOMO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Avenida Carrera 70C No. 60B-05 Sur', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006942744 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>27,'id' => 24, 'nombre' => 'UPI PREFLORIDA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Potrero San Antonio, Costado Sur Parque La Florida', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3002037489', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>9,'id' => 25, 'nombre' => 'UPI SAN FRANCISCO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Vereda el Peñon, Finca Villa Magdalena', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '3006962711', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>18,'id' => 26, 'nombre' => 'UPI SANTA LUCIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Diagonal 44 Sur No. 19-21 y Carrera 20 No. 44-98 Sur', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '7676265 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create(['simianti_id'=>17,'id' => 27, 'nombre' => 'UPI SERVITA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1,  'i_prm_sexo_id' => 1, 's_direccion' => 'Avenida Carrera. 7 No. 164-94', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '6696024 ', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, ]);
        SisDepen::create([
            'id' => 28,
            'nombre' => 'MIGRACION BASES PLANAS',
            'i_prm_cvital_id' => 1,
            'i_prm_tdependen_id' => 2316,

            'i_prm_sexo_id' => 2316,
            's_direccion' => 'MIGRACION BASES PLANAS',
            'sis_departamento_id' => 1,
            'sis_municipio_id' => 1,
            'sis_upzbarri_id' => 1,
            's_telefono' => 'MIGRACION BASES PLANAS',
            's_correo' => 'MIGRACION BASES PLANAS',

            'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0,

        ]);
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'i_prm_responsable_id' => 2316];

        SisDepen::create([
            'id' => 29,
            'nombre' => 'CAMINANDO RELAJADO',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,

            'i_prm_sexo_id' => 2324,
            's_direccion' => 'CALLE 15 #13-87',
            'sis_departamento_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '3100411',
            's_correo' => 'IDIPRON@IDIPRON.GOV.CO',

            'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0,

        ]);


        SisDepen::create([
            'id' => 30,
            'simianti_id'=>11,
            'nombre' => 'UPI LA FLORIDA',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'PARQUE LA FLORIDA COSTADO',
            'sis_departamento_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '3100411',
            's_correo' => 'UELAFLORIDA@IDIPRON.GOV.CO',
            'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0,
        ]);
        SisDepen::create([
            'id' => 31,

            'nombre' => 'INFORMACION INCOMPLETA EN EL SIMI ANTIGUO',
            'i_prm_cvital_id' => 1679,
            'i_prm_tdependen_id' => 774,
            'i_prm_sexo_id' => 2324,
            's_direccion' => 'INFORMACION INCOMPLETA EN EL SIMI ANTIGUO',
            'sis_departamento_id' => 6,
            'sis_municipio_id' => 233,
            'sis_upzbarri_id' => 1510,
            's_telefono' => '',
            's_correo' => '',
            'sis_esta_id' => 1,'itiestan'=>0,'itiegabe'=>0,
        ]);
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
