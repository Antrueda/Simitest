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

        AsdTiactividad::create(['id' => 1, 'nombre' => 'EVENTOS ESPECIALES', 'prm_lugactiv_id' => 2762, 'item' => '146', 'descripcion' => 'EVENTOS ESPECIALES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 2, 'nombre' => 'SALIDAS PEDAGÓGICAS DENTRO DE LA CIUDAD (UPZ, LOCALIDAD, BARRIO)', 'prm_lugactiv_id' => 2763, 'item' => '147', 'descripcion' => 'SALIDAS PEDAGÓGICAS DENTRO DE LA CIUDAD (UPZ, LOCALIDAD, BARRIO)', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 3, 'nombre' => 'SALIDAS PEDAGÓGICAS FUERA DE LA CIUDAD (MUNICIPIO, DEPARTAMENTO)', 'prm_lugactiv_id' => 2764, 'item' => '294', 'descripcion' => 'SALIDAS PEDAGÓGICAS FUERA DE LA CIUDAD (MUNICIPIO, DEPARTAMENTO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 4, 'nombre' => 'ACTIVIDADES ACADEMIA', 'prm_lugactiv_id' => 2762, 'item' => '85', 'descripcion' => 'ACTIVIDADES ACADEMIA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 5, 'nombre' => 'ACTIVIDADES TALLERES', 'prm_lugactiv_id' => 2762, 'item' => '743', 'descripcion' => 'ACTIVIDADES TALLERES', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 6, 'nombre' => 'ACTIVIDADES FORMACIÓN TÉCNICA', 'prm_lugactiv_id' => 2762, 'item' => '744', 'descripcion' => 'ACTIVIDADES FORMACIÓN TÉCNICA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 7, 'nombre' => 'ACTIVIDADES UPI INTERNADO', 'prm_lugactiv_id' => 2762, 'item' => '745', 'descripcion' => 'ACTIVIDADES UPI INTERNADO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 8, 'nombre' => 'ACTIVIDADES UPI EXTERNADO', 'prm_lugactiv_id' => 2762, 'item' => '746', 'descripcion' => 'ACTIVIDADES UPI EXTERNADO', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 9, 'nombre' => 'ACTIVIDADES UPI RURALES (RECREATIVAS)', 'prm_lugactiv_id' => 2763, 'item' => '89', 'descripcion' => 'ACTIVIDADES UPI RURALES (RECREATIVAS)', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 10, 'nombre' => 'ACTIVIDADES COMPLEMENTARIAS', 'prm_lugactiv_id' => 2762, 'item' => '747', 'descripcion' => 'ACTIVIDADES COMPLEMENTARIAS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 11, 'nombre' => 'ASISTENCIA CONVENIOS', 'prm_lugactiv_id' => 2762, 'item' => '748', 'descripcion' => 'ASISTENCIA CONVENIOS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 12, 'nombre' => 'ESTRATEGIA CULTURA CIUDADANA/LABORATORIOS', 'prm_lugactiv_id' => 2763, 'item' => '701', 'descripcion' => 'ESTRATEGIA CULTURA CIUDADANA/LABORATORIOS', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
        AsdTiactividad::create(['id' => 13, 'nombre' => 'DEPORVIDA', 'prm_lugactiv_id' => 2763, 'item' => '93', 'descripcion' => 'DEPORVIDA', 'estusuarios_id' => 71, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1]);
    }
}
