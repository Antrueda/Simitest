<?php

use App\Models\Acciones\Individuales\Salud\Odontologia\Superficie;
use App\Models\Acciones\Individuales\Salud\Odontologia\TipoSuper;
use Illuminate\Database\Seeder;

class SuperficiesOdontologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoSuper::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'UNA SUPERFICIE', 'estusuario_id' => 49]); // 1
        TipoSuper::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DOS SUPERFICIES', 'estusuario_id' => 49]); // 2
        TipoSuper::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TRES SUPERFICIES', 'estusuario_id' => 49]); // 3
        TipoSuper::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'CUATRO SUPERFICIES', 'estusuario_id' => 49]); // 3
        TipoSuper::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'TODAS', 'estusuario_id' => 49]); // 3

        //1 SUPERFICIE
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'D', 'tiposu_id' => 1, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'L', 'tiposu_id' => 1, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'O', 'tiposu_id' => 1, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'M', 'tiposu_id' => 1, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'V', 'tiposu_id' => 1, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'I', 'tiposu_id' => 1, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'C', 'tiposu_id' => 1, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'P', 'tiposu_id' => 1, 'estusuario_id' => 49]); // 1

        //2 SUPERFICIE
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DI', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DL', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DV', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DP', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DO', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IL', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IP', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IV', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MP', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MD', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ML', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MI', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MV', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MO', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DO', 'tiposu_id' => 2, 'estusuario_id' => 49]); // 1

        //3 SUPERFICIE

        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DVI', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DVP', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DOM', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DLV', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DIM', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DVO', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DLV', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IDP', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IPV', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IVP', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IDL', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IML', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IMP', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MVO', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MVP', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MVL', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ODL', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'OPD', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'OML', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'OMP', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'OPV', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ODP', 'tiposu_id' => 3, 'estusuario_id' => 49]); // 1


        //4 SUPERFICIE

        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'DPMV', 'tiposu_id' => 4, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'IDPV', 'tiposu_id' => 4, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MODV', 'tiposu_id' => 4, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MDPV', 'tiposu_id' => 4, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'MODP', 'tiposu_id' => 4, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ODVL', 'tiposu_id' => 4, 'estusuario_id' => 49]); // 1
        Superficie::create(['sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' => 'ODPV', 'tiposu_id' => 4, 'estusuario_id' => 49]); // 1


    }
}
