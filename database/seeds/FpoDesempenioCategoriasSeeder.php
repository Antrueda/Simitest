<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioCategoria;


class FpoDesempenioCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         FpoDesempenioCategoria::create([ 'id'=>1, 'nombre'=>'VISIÓN','user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioCategoria::create([ 'id'=>2, 'nombre'=>'AUDICIÓN','user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioCategoria::create([ 'id'=>3, 'nombre'=>'SENSIBILIDAD SUPERFICIAL Y PROFUNDA','user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioCategoria::create([ 'id'=>4, 'nombre'=>'OLFATO GUSTO','user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
    }
}
