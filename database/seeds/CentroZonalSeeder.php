<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\SocialLegal\AsociarCaso;
use App\Models\Acciones\Individuales\SocialLegal\SeguimientoCaso;
use App\Models\Acciones\Individuales\SocialLegal\TemaCaso;
use App\Models\Acciones\Individuales\SocialLegal\TipoCaso;
use App\Models\CentroZonal\AsignarCentro;
use App\Models\CentroZonal\CentroZonal;
use App\Models\CentroZonal\CentroZosec;

class CentroZonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Centro Zonal
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR AMAZONAS ', 'estusuario_id' => 49]); // 1
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR ANTIOQUIA ', 'estusuario_id' => 49]); // 2
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR ARAUCA ', 'estusuario_id' => 49]); // 3
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR ATLANTICO ', 'estusuario_id' => 49]); // 4
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR BOGOTA ', 'estusuario_id' => 49]); // 5
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR BOLIVAR ', 'estusuario_id' => 49]); // 6
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR BOYACA ', 'estusuario_id' => 49]); // 7
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR CALDAS ', 'estusuario_id' => 49]); // 8
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR CAQUETA ', 'estusuario_id' => 49]); // 9
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR CAUCA ', 'estusuario_id' => 49]); // 10
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR CASANARE ', 'estusuario_id' => 49]); // 11
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR CESAR  ', 'estusuario_id' => 49]); // 12
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR CHOCO ', 'estusuario_id' => 49]); // 13
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR CORDOBA ', 'estusuario_id' => 49]); // 14
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR CUNDINAMARCA ', 'estusuario_id' => 49]); // 15
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR GUAINIA ', 'estusuario_id' => 49]); // 16
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR GUAVIARE ', 'estusuario_id' => 49]); // 17
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR LA GUAJIRA ', 'estusuario_id' => 49]); // 18
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR HUILA ', 'estusuario_id' => 49]); // 19
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR MAGDALENA ', 'estusuario_id' => 49]); // 20
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR META ', 'estusuario_id' => 49]); // 21
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR NARIÑO ', 'estusuario_id' => 49]); // 22
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR NORTE DE SANTADER ', 'estusuario_id' => 49]); // 23
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR PUTUMAYOZ ', 'estusuario_id' => 49]); // 24
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR QUINDIO ', 'estusuario_id' => 49]); // 25
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR RISARALDA ', 'estusuario_id' => 49]); // 26
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR SAN ANDRES ', 'estusuario_id' => 49]); // 27
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR SANTANDER ', 'estusuario_id' => 49]); // 28
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR SUCRE ', 'estusuario_id' => 49]); // 29
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR TOLIMA ', 'estusuario_id' => 49]); // 30
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR VALLE ', 'estusuario_id' => 49]); // 31
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR VAUPES ', 'estusuario_id' => 49]); // 32
        CentroZonal::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>  'CR VICHADA ', 'estusuario_id' => 49]); // 33



        //Temacaso
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ BARRIOS UNIDOS', 'estusuario_id' => 49]); // 1
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ BOSA', 'estusuario_id' => 49]); // 2
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ CIUDAD BOLIVAR', 'estusuario_id' => 49]); // 3
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ ENGATIVA', 'estusuario_id' => 49]); // 4
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ FONTIBON', 'estusuario_id' => 49]); // 5
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ KENNEDY', 'estusuario_id' => 49]); // 6
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ MARTIRES', 'estusuario_id' => 49]); // 7
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ RAFAEL URIBE', 'estusuario_id' => 49]); // 8
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ SAN CRISTOBAL', 'estusuario_id' => 49]); // 9
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ SAN SANTAFE', 'estusuario_id' => 49]); // 10
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ SUBA', 'estusuario_id' => 49]); // 11
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ TEUSAQUILLO', 'estusuario_id' => 49]); // 12
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ USAQUEN', 'estusuario_id' => 49]); // 13
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ USME', 'estusuario_id' => 49]); // 14
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ PUENTE ARANDA', 'estusuario_id' => 49]); // 15
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CE CESPA', 'estusuario_id' => 49]); // 16
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CE REVIVIR', 'estusuario_id' => 49]); // 17
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ CREER', 'estusuario_id' => 49]); // 18
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CASA DE JUSTICIA CIUDAD BOLÍVAR', 'estusuario_id' => 49]); // 19
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CASA DE JUSTICIA SUBA', 'estusuario_id' => 49]); // 20
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ CHOCONTA', 'estusuario_id' => 49]); // 21
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ CAQUEZA', 'estusuario_id' => 49]); // 22
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ FACATATIVA', 'estusuario_id' => 49]); // 23
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ FUSAGAZUGA', 'estusuario_id' => 49]); // 24
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ GACHETA', 'estusuario_id' => 49]); // 25
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ GIRARDOT', 'estusuario_id' => 49]); // 26
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ LA MESA', 'estusuario_id' => 49]); // 27
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ PACHO', 'estusuario_id' => 49]); // 28
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ SAN JUAN DE RIO SECO', 'estusuario_id' => 49]); // 29
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ SOACHA', 'estusuario_id' => 49]); // 30
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ SOACHA CENTRO', 'estusuario_id' => 49]); // 31
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ UBATE', 'estusuario_id' => 49]); // 32
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ VILLETA', 'estusuario_id' => 49]); // 33
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CZ ZIPAQUIRA', 'estusuario_id' => 49]); // 34
        CentroZosec::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CASA DE JUSTICIA GIRARDOT', 'estusuario_id' => 49]); // 35



        //asociarcaso
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 1,]); // 1
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 2,]); // 2
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 3,]); // 3
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 4,]); // 4
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 5,]); // 5
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 6,]); // 6
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 7,]); // 7
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 8,]); // 8
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 9,]); // 9
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 10,]); // 10
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 11,]); // 11
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 12,]); // 12
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 13,]); // 13
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 14,]); // 14
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 15,]); // 15
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 16,]); // 16
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 17,]); // 17
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 18,]); // 18
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 19,]); // 19
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 5, 'censec_id' => 20,]); // 20
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 21,]); // 21
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 22,]); // 22
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 23,]); // 23
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 24,]); // 24
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 25,]); // 25
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 26,]); // 26
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 27,]); // 27
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 28,]); // 28
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 29,]); // 29
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 30,]); // 30
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 31,]); // 31
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 32,]); // 32
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 33,]); // 33
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 34,]); // 34
        AsignarCentro::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'centro_id' => 15, 'censec_id' => 35,]); // 35










    }
}
