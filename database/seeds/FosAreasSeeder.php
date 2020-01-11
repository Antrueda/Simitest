<?php

use App\Models\fichaobservacion\FosArea;
use Illuminate\Database\Seeder;

class FosAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FosArea::create(['id' => 1, 'nombre' => 'EDUCACION', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1]); //1
        FosArea::create(['id' => 2, 'nombre' => 'EMPRENDER', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1]); //2
        FosArea::create(['id' => 3, 'nombre' => 'EMPRENDER AC', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1]); //3
        FosArea::create(['id' => 4, 'nombre' => 'ESPIRITUALIDAD', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1]); //4
        FosArea::create(['id' => 5, 'nombre' => 'SALUD', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1]); //5
        FosArea::create(['id' => 6, 'nombre' => 'SICOSOCIAL', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1]); //6
        FosArea::create(['id' => 7, 'nombre' => 'SOCIOLEGAL', 'contexto' => 'SL', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1]); //7
        FosArea::create(['id' => 8, 'nombre' => 'TRANSVERSALES', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'activo' => 1]); //8
    }
}
