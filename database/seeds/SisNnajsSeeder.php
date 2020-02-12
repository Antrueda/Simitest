<?php

use Illuminate\Database\Seeder;

use App\Models\sistema\SisNnaj;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SisNnajsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        for ($i = 1; $i <= 5; $i++) {
            SisNnaj::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
            DB::table('fi_datos_basicos')->insert(array(
                's_primer_nombre' => $faker->firstName,
                's_segundo_nombre' => $faker->firstName,
                's_primer_apellido' => $faker->lastName,
                's_segundo_apellido' => $faker->lastName,
                'prm_sexo_id' => $faker->randomElement(['23', '24']),
                'prm_poblacion_id' => $faker->randomElement(['650', '651']),
                's_apodo' => $faker->firstName,
                's_documento' => $i + 1000000001,
                'prm_documento_id' => $faker->randomElement(['16', '17', '18', '19']),
                'd_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'i_prm_ayuda_id' => 1,
                'sis_municipio_id' => '2',
                'prm_gsanguino_id' => $faker->randomElement(['146', '147', '148', '149']),
                'prm_factor_rh_id' => $faker->randomElement(['150', '151']),
                'sis_nnaj_id' => $i,
                'fi_nucleo_familiar_id' => '1',
                'sis_esta_id' => '1',
                'user_crea_id' => '1',
                'user_edita_id' => '1',
                'prm_estado_civil_id' => 1,
                'prm_situacion_militar_id' => 1,
                'prm_clase_libreta_id' => 1,
                's_nombre_identitario' => $faker->firstName,
                'prm_identidad_genero_id' => 1,
                'prm_orientacion_sexual_id' => 1,
                'prm_etnia_id' => 1,
                'prm_vestimenta_id' => 1,
                's_nombre_focalizacion' => 'NA',
                's_lugar_focalizacion' => 'NA',
                'prm_poblacion_etnia_id' => 1,
                'sis_barrio_id' => 1,
                'prm_doc_fisico_id' => 1,
                'i_prm_linea_base_id'=>227,
                'sis_municipioexp_id' => 1,
                'sis_pai_id' => 1,
                'sis_departamento_id' => 1,
                'sis_paiexp_id' => 1,
                'sis_departamentoexp_id' => 1,


                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }

        SisNnaj::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
            DB::table('fi_datos_basicos')->insert(array(
                's_primer_nombre' => 'IGNACIO',
                's_segundo_nombre' => 'DAVID',
                's_primer_apellido' => 'VALERO',
                's_segundo_apellido' => 'RANGEL',
                'prm_sexo_id' => 20,
                'prm_poblacion_id' => 650,
                's_apodo' => 'ALEJANDRO',
                's_documento' => '1000000007',
                'prm_documento_id' => 19,
                'd_nacimiento' => '1997-01-09',
                'i_prm_ayuda_id' => 1,
                'sis_municipio_id' => 16,
                'prm_gsanguino_id' => 149,
                'prm_factor_rh_id' => 151,
                'sis_nnaj_id' => 6,
                'fi_nucleo_familiar_id' => 1,
                'sis_esta_id' => 1,
                'user_crea_id' => 1,
                'user_edita_id' => 1,
                'prm_estado_civil_id' => 154,
                'prm_situacion_militar_id' => 228,
                'prm_clase_libreta_id' => 1,
                's_nombre_identitario' => 'CRISTIAN',
                'prm_identidad_genero_id' => 24,
                'prm_orientacion_sexual_id' => 29,
                'prm_etnia_id' => 159,
                'prm_vestimenta_id' => 1069,
                's_nombre_focalizacion' => 'NA',
                's_lugar_focalizacion' => 'NA',
                'prm_poblacion_etnia_id' => 1,
                'sis_barrio_id' => 1,
                'prm_doc_fisico_id' => 228,
                'i_prm_linea_base_id'=>227,
                'sis_municipioexp_id' => 1,
                'sis_pai_id' => 2,
                'sis_departamento_id' => 6,
                'sis_paiexp_id' => 2,
                'sis_departamentoexp_id' => 8,


                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
    }
}
