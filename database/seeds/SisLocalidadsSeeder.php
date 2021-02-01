<?php

use App\Models\Sistema\SisLocalidad;
use Illuminate\Database\Seeder;

class SisLocalidadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisLocalidad::create(['s_localidad' => '01 USAQUÉN','simianti_id'=>1000]);
SisLocalidad::create(['s_localidad' => '02 CHAPINERO','simianti_id'=>2000]);
SisLocalidad::create(['s_localidad' => '03 SANTA FE','simianti_id'=>3000]);
SisLocalidad::create(['s_localidad' => '04 SAN CRISTÓBAL','simianti_id'=>4000]);
SisLocalidad::create(['s_localidad' => '05 USME','simianti_id'=>5000]);
SisLocalidad::create(['s_localidad' => '06 TUNJUELITO','simianti_id'=>6000]);
SisLocalidad::create(['s_localidad' => '07 BOSA','simianti_id'=>7000]);
SisLocalidad::create(['s_localidad' => '08 KENNEDY','simianti_id'=>8000]);
SisLocalidad::create(['s_localidad' => '09 FONTIBÓN','simianti_id'=>9000]);
SisLocalidad::create(['s_localidad' => '10 ENGATIVÁ','simianti_id'=>10000]);
SisLocalidad::create(['s_localidad' => '11 SUBA','simianti_id'=>11000]);
SisLocalidad::create(['s_localidad' => '12 BARRIOS UNIDOS','simianti_id'=>12000]);
SisLocalidad::create(['s_localidad' => '13 TEUSAQUILLO','simianti_id'=>13000]);
SisLocalidad::create(['s_localidad' => '14 LOS MÁRTIRES','simianti_id'=>14000]);
SisLocalidad::create(['s_localidad' => '15 ANTONIO NARIÑO','simianti_id'=>15000]);
SisLocalidad::create(['s_localidad' => '16 PUENTE ARANDA','simianti_id'=>16000]);
SisLocalidad::create(['s_localidad' => '17 LA CANDELARIA','simianti_id'=>17000]);
SisLocalidad::create(['s_localidad' => '18 RAFAEL URIBE','simianti_id'=>18000]);
SisLocalidad::create(['s_localidad' => '19 CIUDAD BOLÍVAR','simianti_id'=>19000]);
SisLocalidad::create(['s_localidad' => '20 SOACHA','simianti_id'=>208205]);
SisLocalidad::create(['s_localidad' => '21 SUMAPAZ','simianti_id'=>20000]);
        SisLocalidad::create([
            'id'=>22,
            's_localidad' => 'N/A',
        ]);

        SisLocalidad::create([
            'id'=>23,
            's_localidad' => 'LOCALIDA INCORRECTA EN LA BASE PLANA',
        ]);
    }
}
