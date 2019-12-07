<?php

use App\Models\sistema\SisUpz;
use Illuminate\Database\Seeder;

class SisUpzsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisUpz::create(['id'=>69,'sis_localidad_id' => 13, 's_upz' => 'LOS LIBERTADORES', 's_codigo' => '51']);
        // SisUpz::create(['sis_localidad_id' => 13, 's_upz' => '20 DE JULIO']);
        // SisUpz::create(['sis_localidad_id' => 7, 's_upz' => 'AEROPUERTO EL DORADO']);
        // SisUpz::create(['sis_localidad_id' => 6, 's_upz' => 'ÁLAMOS']);
        // SisUpz::create(['sis_localidad_id' => 21, 's_upz' => 'ALFONSO LÓPEZ']);
        // SisUpz::create(['sis_localidad_id' => 8, 's_upz' => 'AMERICAS']);
        // SisUpz::create(['sis_localidad_id' => 3, 's_upz' => 'APOGEO']);
        // SisUpz::create(['sis_localidad_id' => 5, 's_upz' => 'ARBORIZADORA']);
        // SisUpz::create(['sis_localidad_id' => 8, 's_upz' => 'BAVARIA']);
        // SisUpz::create(['sis_localidad_id' => 6, 's_upz' => 'BOLIVIA']);
        // SisUpz::create(['sis_localidad_id' => 3, 's_upz' => 'BOSA CENTRAL']);
        // SisUpz::create(['sis_localidad_id' => 3, 's_upz' => 'BOSA OCCIDENTAL']);
        // SisUpz::create(['sis_localidad_id' => 6, 's_upz' => 'BOYACÁ REAL']);
        // SisUpz::create(['sis_localidad_id' => 16, 's_upz' => 'BRITALIA']);
        // SisUpz::create(['sis_localidad_id' => 8, 's_upz' => 'CALANDAIMA']);
        // SisUpz::create(['sis_localidad_id' => 7, 's_upz' => 'CAPELLANÍA']);
        // SisUpz::create(['sis_localidad_id' => 8, 's_upz' => 'CARVAJAL']);
        // SisUpz::create(['sis_localidad_id' => 16, 's_upz' => 'CASA BLANCA SUBA']);
        // SisUpz::create(['sis_localidad_id' => 8, 's_upz' => 'CASTILLA']);
    }
}
