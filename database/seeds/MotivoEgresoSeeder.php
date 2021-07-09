<?php

use App\Models\Acciones\Grupales\Traslado\MotivoEgreso;
use Illuminate\Database\Seeder;

class MotivoEgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoEgreso::create(['estusuario_id' => 46, 'nombre' => 'SATISFACTORIO  ', 'descripcion' => '', 'user_crea_id' => 2, 'user_edita_id' => 2, 'sis_esta_id' => 1,]);
        MotivoEgreso::create(['estusuario_id' => 46, 'nombre' => 'EN PROCESO', 'descripcion' => '', 'user_crea_id' => 2, 'user_edita_id' => 2, 'sis_esta_id' => 1,]);
        MotivoEgreso::create(['estusuario_id' => 46, 'nombre' => 'NO SATISFACTORIO', 'descripcion' => '', 'user_crea_id' => 2, 'user_edita_id' => 2, 'sis_esta_id' => 1,]);
        MotivoEgreso::create(['estusuario_id' => 46, 'nombre' => 'SIN INFORMACIÓN', 'descripcion' => '', 'user_crea_id' => 2, 'user_edita_id' => 2, 'sis_esta_id' => 1,]);
        }
}
