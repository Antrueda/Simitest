<?php

use App\Models\Usuario\Estusuario;
use Illuminate\Database\Seeder;

class EstusuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estusuario::create([
            'id'=>1,
            'estado'=>'CREACION USUARIO',
            'prm_formular_id'=>2325,
            'user_crea_id'=>1,
            'user_edita_id'=>1,
            'sis_esta_id'=>1,
        ]);
        Estusuario::create([
            'id'=>2,
            'estado'=>'INACTIVACION USUARIO',
            'prm_formular_id'=>2325,
            'user_crea_id'=>1,
            'user_edita_id'=>1,
            'sis_esta_id'=>2,
        ]);
    }
}
