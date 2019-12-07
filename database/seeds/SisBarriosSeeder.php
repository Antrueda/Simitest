<?php

use App\Models\sistema\SisBarrio;
use Illuminate\Database\Seeder;

class SisBarriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisBarrio::create(['id'=>1,'sis_upz_id' => 69, 's_barrio' => 'CIUDAD KENNEDY CENTRAL']);
        // SisBarrio::create(['sis_upz_id' => 111, 's_barrio' => '11 de Noviembre']);
        // SisBarrio::create(['sis_upz_id' => 117, 's_barrio' => '12 de Octubre']);
        // SisBarrio::create(['sis_upz_id' => 117, 's_barrio' => '12 de Octubre - Alcabaza']);
        // SisBarrio::create(['sis_upz_id' => 107, 's_barrio' => '5 de Noviembre']);
        // SisBarrio::create(['sis_upz_id' => 107, 's_barrio' => '8 de Diciembre']);
        // SisBarrio::create(['sis_upz_id' => 128, 's_barrio' => 'ABRAHAM LINCOLN']);
        // SisBarrio::create(['sis_upz_id' => 128, 's_barrio' => 'Abraham Lincoln']);
        // SisBarrio::create(['sis_upz_id' => 69, 's_barrio' => 'Abraham Lincon']);
        // SisBarrio::create(['sis_upz_id' => 111, 's_barrio' => 'Acacia III Parte Baja']);
        // SisBarrio::create(['sis_upz_id' => 123, 's_barrio' => 'Acacia IV']);
        // SisBarrio::create(['sis_upz_id' => 121, 's_barrio' => 'Acacias']);
        // SisBarrio::create(['sis_upz_id' => 111, 's_barrio' => 'Acacias Sur']);
        // SisBarrio::create(['sis_upz_id' => 68, 's_barrio' => 'ACACIAS USAQUEN']);
    }
}
