<?php

use App\Models\Indicadores\InLineabaseNnaj;
use Illuminate\Database\Seeder;

class InLineabaseNnajsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx=['in_fuente_id'=>1, 'sis_nnaj_id'=>1, 'user_crea_id'=>1, 'user_edita_id'=>1, 'sis_esta_id'=>1, 'created_at'=>'2019-12-03 00:18:26', 'updated_at'=>'2019-12-03 00:18:26',];
        for($i=1;$i<13;$i++){
           $dataxxxx['in_fuente_id']=$i;
           InLineabaseNnaj::create($dataxxxx);
        }  
    }
}
