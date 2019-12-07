<?php

use App\Models\sistema\SisCargo;
use Illuminate\Database\Seeder;

class SisCargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SisCargo::create([
            's_cargo' => 'INGENIERO DE SISTEMAS',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
        SisCargo::create([
            's_cargo' => 'TÉCNICO',
            'activo' => '1', 'user_crea_id' => '1', 'user_edita_id' => '1'
        ]);
    }
}
