<?php

use App\Models\sistema\SisInstitucionEdu;
use Illuminate\Database\Seeder;

class SisInstitucionEdusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisInstitucionEdu::create([
            'id' => 1,
            's_nombre' => 'NO APLICA COLEGIO',
            's_telefono' => '4815340 / 2315307',
            's_email' => 'colegio@colegio.com',
            'sis_municipio_id' => 1,
            'sis_departamento_id' => 11,
            'user_crea_id' => 1,
            'created_at' => '2019-10-09 06:41:26',
            'user_edita_id' => 1,
            'activo' => 1,
            'updated_at' => '2019-10-09 06:41:26',
            'i_prm_sector_id' => 1,
            'i_usr_rector_id' => 1,
            'i_usr_secretario_id' => 1,
            'i_usr_coord_academico_id' => 1,
        ]);
    }
}
