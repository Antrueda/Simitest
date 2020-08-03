<?php

use App\Models\sistema\SisDepen;
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
        SisDepen::create(['id' => 1, 'nombre' => 'ESPACIOS EXTERNOS', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => null, 'i_prm_sexo_id' => 1, 's_direccion' => '00001', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '001', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'ESPACIOS EXTERNOS']);
        SisDepen::create(['id' => 2, 'nombre' => 'TERRITORIO 1', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00001', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '001', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 3, 'nombre' => 'TERRITORIO 2', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00002', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '002', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 4, 'nombre' => 'UPI ARBORIZADORA ALTA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00003', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '003', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 5, 'nombre' => 'UPI BELEN', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00004', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '004', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 6, 'nombre' => 'UPI BOSA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00005', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '005', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 7, 'nombre' => 'UPI CARMEN DE APICALA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00006', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '006', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 8, 'nombre' => 'UPI EDEN', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00007', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '007', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 9, 'nombre' => 'UPI EMPRENDER', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00008', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '008', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 10, 'nombre' => 'UPI LA ARCADIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00009', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '009', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 11, 'nombre' => 'UPI LA CALERA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00010', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '010', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 12, 'nombre' => 'UPI LA FAVORITA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00011', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '011', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 13, 'nombre' => 'UPI LA RIOJA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00012', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '012', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 14, 'nombre' => 'UPI LA VEGA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00013', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '013', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 15, 'nombre' => 'UPI LA 27', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00014', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '014', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 16, 'nombre' => 'UPI LA 32', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00015', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '015', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 17, 'nombre' => 'UPI LIBERIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00016', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '016', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 18, 'nombre' => 'UPI LUNA PARK', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00017', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '017', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 19, 'nombre' => 'UPI MOLINOS', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00018', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '018', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 20, 'nombre' => 'UPI NORMANDIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00019', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '019', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 21, 'nombre' => 'UPI OASIS I', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00020', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '020', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 22, 'nombre' => 'UPI OASIS II', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00021', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '021', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 23, 'nombre' => 'UPI PERDOMO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00022', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '022', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 24, 'nombre' => 'UPI PREFLORIDA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00023', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '023', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 25, 'nombre' => 'UPI SAN FRANCISCO', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00024', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '024', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 26, 'nombre' => 'UPI SANTA LUCIA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00025', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '025', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create(['id' => 27, 'nombre' => 'UPI SERVITA', 'i_prm_cvital_id' => 1, 'i_prm_tdependen_id' => 1, 'sis_depen_id' => 1, 'i_prm_sexo_id' => 1, 's_direccion' => '00026', 'sis_departamento_id' => 1, 'sis_municipio_id' => 1, 'sis_upzbarri_id' => 1, 's_telefono' => '026', 's_correo' => 'DDDD',  'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0, 's_observacion' => 'Observación']);
        SisDepen::create([
            'id' => 28,
            'nombre' => 'MIGRACION BASES PLANAS',
            'i_prm_cvital_id' => 1,
            'i_prm_tdependen_id' => 2316,
            'sis_depen_id' => 1,
            'i_prm_sexo_id' => 2316,
            's_direccion' => 'MIGRACION BASES PLANAS',
            'sis_departamento_id' => 1,
            'sis_municipio_id' => 1,
            'sis_upzbarri_id' => 1,
            's_telefono' => 'MIGRACION BASES PLANAS',
            's_correo' => 'MIGRACION BASES PLANAS',

            'sis_esta_id' => 1,'itiestan'=>10,'itiegabe'=>0,
            's_observacion' => 'MIGRACION BASES PLANAS'
        ]);
        $camposmagicos = ['user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'i_prm_responsable_id' => 2316];
        $super = User::where('id', 1)->first();

        $super->sis_depens()->sync([
            2 => $camposmagicos,
            15 => $camposmagicos,
            23 => $camposmagicos,
        ]);
    }
}
