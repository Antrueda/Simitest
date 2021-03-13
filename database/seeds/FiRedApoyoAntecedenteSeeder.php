<?php

use App\Models\fichaIngreso\FiRedApoyoAntecedente;
use Illuminate\Database\Seeder;

use App\Models\Sistema\SisNnaj;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FiRedApoyoAntecedenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * llena de cedulas y de otros datos aleatorios la tabla fi_datos_basicos
     * @return void
     */
    public function run()
    {
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 445, 'sis_entidad_id' => 3, 'i_tiempo' => 1, 'i_prm_tiempo_id' => 401, 'i_prm_anio_prestacion_id' => 2223, 's_servicio' => 'APOYO PSICOSOCIAL', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-14 10:50:37', 'updated_at' => '2020-10-14 10:50:37', ]);
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 469, 'sis_entidad_id' => 2, 'i_tiempo' => 3, 'i_prm_tiempo_id' => 400, 'i_prm_anio_prestacion_id' => 2223, 's_servicio' => 'BENEFICIARIO', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-15 11:01:39', 'updated_at' => '2020-10-15 11:01:39', ]);
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 510, 'sis_entidad_id' => 2, 'i_tiempo' => 4, 'i_prm_tiempo_id' => 401, 'i_prm_anio_prestacion_id' => 2222, 's_servicio' => 'BENEFICIARIO', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 12:00:54', 'updated_at' => '2020-10-16 12:00:54', ]);
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 524, 'sis_entidad_id' => 2, 'i_tiempo' => 10, 'i_prm_tiempo_id' => 400, 'i_prm_anio_prestacion_id' => 545, 's_servicio' => 'BENEFICIARIO', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 14:33:39', 'updated_at' => '2020-10-16 14:33:39', ]);
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 529, 'sis_entidad_id' => 2, 'i_tiempo' => 8, 'i_prm_tiempo_id' => 400, 'i_prm_anio_prestacion_id' => 2223, 's_servicio' => 'BENEFICIARIO', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-16 15:56:40', 'updated_at' => '2020-10-16 15:56:40', ]);
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 539, 'sis_entidad_id' => 2, 'i_tiempo' => 11, 'i_prm_tiempo_id' => 400, 'i_prm_anio_prestacion_id' => 2221, 's_servicio' => 'ESTUDIO - CONVENIO - ALIMENTACIÓN', 'user_crea_id' => 1942, 'user_edita_id' => 1942, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 09:53:17', 'updated_at' => '2020-10-20 09:53:17', ]);
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 556, 'sis_entidad_id' => 29, 'i_tiempo' => 1, 'i_prm_tiempo_id' => 401, 'i_prm_anio_prestacion_id' => 2226, 's_servicio' => 'APOYO MONETARIO', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 11:30:40', 'updated_at' => '2020-10-20 11:30:40', ]);
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 564, 'sis_entidad_id' => 29, 'i_tiempo' => 2, 'i_prm_tiempo_id' => 401, 'i_prm_anio_prestacion_id' => 2225, 's_servicio' => 'APOYO MONETARIO', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-20 14:25:24', 'updated_at' => '2020-10-20 14:25:24', ]);
        FiRedApoyoAntecedente::create([ 'sis_nnaj_id' => 637, 'sis_entidad_id' => 2, 'i_tiempo' => 4, 'i_prm_tiempo_id' => 400, 'i_prm_anio_prestacion_id' => 2225, 's_servicio' => 'BENEFICIARIA', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-23 15:09:13', 'updated_at' => '2020-10-23 15:09:13', ]);
        FiRedApoyoAntecedente::create([  'sis_nnaj_id' => 673, 'sis_entidad_id' => 2, 'i_tiempo' => 2, 'i_prm_tiempo_id' => 401, 'i_prm_anio_prestacion_id' => 2223, 's_servicio' => 'BENEFICIARIA', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-27 14:20:02', 'updated_at' => '2020-10-27 14:20:02', ]);
        FiRedApoyoAntecedente::create([  'sis_nnaj_id' => 712, 'sis_entidad_id' => 2, 'i_tiempo' => 3, 'i_prm_tiempo_id' => 401, 'i_prm_anio_prestacion_id' => 550, 's_servicio' => 'ESTUDIO', 'user_crea_id' => 8, 'user_edita_id' => 8, 'sis_esta_id' => 1, 'created_at' => '2020-10-29 11:05:00', 'updated_at' => '2020-10-29 11:05:00', ]);
        FiRedApoyoAntecedente::create([  'sis_nnaj_id' => 754, 'sis_entidad_id' => 29, 'i_tiempo' => 3, 'i_prm_tiempo_id' => 401, 'i_prm_anio_prestacion_id' => 543, 's_servicio' => 'MERCADOS', 'user_crea_id' => 434, 'user_edita_id' => 434, 'sis_esta_id' => 1, 'created_at' => '2020-10-30 16:02:13', 'updated_at' => '2020-10-30 16:02:13', ]);


    }
}
