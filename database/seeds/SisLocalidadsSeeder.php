<?php

use App\Models\sistema\SisLocalidad;
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
        SisLocalidad::create([
            's_localidad' => 'ANTONIO NARIÑO',
        ]);
        SisLocalidad::create([
            's_localidad' => 'BARRIOS UNIDOS',
        ]);

        SisLocalidad::create([
            's_localidad' => 'BOSA',
        ]);
        SisLocalidad::create([
            's_localidad' => 'CHAPINERO',
        ]);
        SisLocalidad::create([
            's_localidad' => 'CIUDAD BOLÍVAR',
        ]);
        SisLocalidad::create([
            's_localidad' => 'ENGATIVÁ',
        ]);
        SisLocalidad::create([
            's_localidad' => 'FONTIBÓN',
        ]);
        SisLocalidad::create([
            's_localidad' => 'KENNEDY',
        ]);
        SisLocalidad::create([
            's_localidad' => 'LA CANDELARIA',
        ]);
        SisLocalidad::create([
            's_localidad' => 'LOS MÁRTIRES',
        ]);
        SisLocalidad::create([
            's_localidad' => 'PUENTE ARANDA',
        ]);
        SisLocalidad::create([
            's_localidad' => 'RAFAEL URIBE',
        ]);
        SisLocalidad::create([
            's_localidad' => 'SAN CRISTÓBAL',
        ]);
        SisLocalidad::create([
            's_localidad' => 'SANTA FE',
        ]);
        SisLocalidad::create([
            's_localidad' => 'SOACHA',
        ]);
        SisLocalidad::create([
            's_localidad' => 'SUBA',
        ]);
        SisLocalidad::create([
            's_localidad' => 'SUMAPAZ',
        ]);
        SisLocalidad::create([
            's_localidad' => 'TEUSAQUILLO',
        ]);
        SisLocalidad::create([
            's_localidad' => 'TUNJUELITO',
        ]);
        SisLocalidad::create([
            's_localidad' => 'USAQUÉN',
        ]);
        SisLocalidad::create([
            's_localidad' => 'USME',
        ]);
        SisLocalidad::create([
            's_localidad' => 'NO APLICA',
        ]);
    }
}
