<?php

use Illuminate\Database\Seeder;
use App\Models\Acciones\Individuales\Educacion\perfilOcupacional\FpoDesempenioComponente;

class FpoDesempenioComponenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         FpoDesempenioComponente::create([ 'id'=>1, 'nombre'=>'MOTRICIDAD GRUESA','estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioComponente::create([ 'id'=>2, 'nombre'=>'MOTRICIDAD FINA','estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioComponente::create([ 'id'=>3, 'nombre'=>'SENSOPERCEPCIÓN','estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioComponente::create([ 'id'=>4, 'nombre'=>'COGNITIVO','estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioComponente::create([ 'id'=>5, 'nombre'=>'COMPETENCIAS BASICAS ESCOLARES','estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioComponente::create([ 'id'=>6, 'nombre'=>'HÁBITOS SOCIO OCUPACIONALES','estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
        FpoDesempenioComponente::create([ 'id'=>7, 'nombre'=>'COMPETENCIAS SOCIO OCUPACIONALES','estusuario_id'=>46,'user_crea_id'=>2, 'user_edita_id'=>2, 'sis_esta_id'=>1 ]);
    }
}
