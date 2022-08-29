<?php

use Illuminate\Database\Seeder;

use App\Models\AdmiActiAsd\AsdTiactividad;

class TipoActividadesAsdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        AsdTiactividad::create(['nombre' => 'EVENTOS ESPECIALES', 'prm_lugactiv_id' => 2762, 'item' => '146', 'descripcion' => 'EVENTOS ESPECIALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'SALIDAS PEDAGÓGICAS DENTRO DE LA CIUDAD (UPZ, LOCALIDAD, BARRIO)', 'prm_lugactiv_id' => 2763, 'item' => '147', 'descripcion' => 'SALIDAS PEDAGÓGICAS DENTRO DE LA CIUDAD (UPZ, LOCALIDAD, BARRIO)', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'SALIDAS PEDAGÓGICAS FUERA DE LA CIUDAD (MUNICIPIO, DEPARTAMENTO)', 'prm_lugactiv_id' => 2764, 'item' => '294', 'descripcion' => 'SALIDAS PEDAGÓGICAS FUERA DE LA CIUDAD (MUNICIPIO, DEPARTAMENTO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ACTIVIDADES ACADEMIA', 'prm_lugactiv_id' => 2762, 'item' => '85', 'descripcion' => 'ACTIVIDADES ACADEMIA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ACTIVIDADES TALLERES', 'prm_lugactiv_id' => 2762, 'item' => '743', 'descripcion' => 'ACTIVIDADES TALLERES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ACTIVIDADES FORMACIÓN TÉCNICA', 'prm_lugactiv_id' => 2762, 'item' => '744', 'descripcion' => 'ACTIVIDADES FORMACIÓN TÉCNICA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ACTIVIDADES UPI INTERNADO', 'prm_lugactiv_id' => 2762, 'item' => '745', 'descripcion' => 'ACTIVIDADES UPI INTERNADO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ACTIVIDADES UPI EXTERNADO', 'prm_lugactiv_id' => 2762, 'item' => '746', 'descripcion' => 'ACTIVIDADES UPI EXTERNADO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ACTIVIDADES UPI RURALES (RECREATIVAS)', 'prm_lugactiv_id' => 2763, 'item' => '89', 'descripcion' => 'ACTIVIDADES UPI RURALES (RECREATIVAS)', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ACTIVIDADES COMPLEMENTARIAS', 'prm_lugactiv_id' => 2762, 'item' => '747', 'descripcion' => 'ACTIVIDADES COMPLEMENTARIAS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ASISTENCIA CONVENIOS', 'prm_lugactiv_id' => 2762, 'item' => '748', 'descripcion' => 'ASISTENCIA CONVENIOS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'ESTRATEGIA CULTURA CIUDADANA/LABORATORIOS', 'prm_lugactiv_id' => 2763, 'item' => '701', 'descripcion' => 'ESTRATEGIA CULTURA CIUDADANA/LABORATORIOS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['nombre' => 'DEPORVIDA', 'prm_lugactiv_id' => 2763, 'item' => '93', 'descripcion' => 'DEPORVIDA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
    }
}
