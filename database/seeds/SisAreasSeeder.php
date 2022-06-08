<?php

use App\Models\Indicadores\Administ\Area;
use Illuminate\Database\Seeder;

class SisAreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create(['nombre' => 'EDUCACION', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>227]); //1
        Area::create(['nombre' => 'EMPRENDER', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>227]); //2
        Area::create(['nombre' => 'EMPRENDER AC', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>228]); //3
        Area::create(['nombre' => 'ESPIRITUALIDAD', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>227]); //4
        Area::create(['nombre' => 'SALUD', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>227]); //5
        Area::create(['nombre' => 'SICOSOCIAL', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>227]); //6
        Area::create(['nombre' => 'SOCIOLEGAL', 'contexto' => 'SL', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>227]); //7
        Area::create(['nombre' => 'TRANSVERSALES', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>228]); //8
        Area::create(['nombre' => 'TERRITORIO', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>228]); //8
        Area::create(['nombre' => 'ESPIRITUALIDAD (COORDINADORES Y/O TUTOR)', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>228]); //8
        Area::create(['nombre' => 'SALUD-RRD', 'contexto' => 'BA', 'descripcion' => '', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1,'prm_principal'=>227]); //8
    }
}
