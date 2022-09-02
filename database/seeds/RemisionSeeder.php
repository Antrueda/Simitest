<?php

use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remiespecial;
use App\Models\Acciones\Individuales\Salud\ValoracionMedicina\Remision;
use Illuminate\Database\Seeder;

class RemisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Remision::create(['id'=>1, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>'PREVENCIÓN', 'estusuario_id'=>49]); // 1
        Remision::create(['id'=>2, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>'NUTRICIÓN', 'estusuario_id'=>49]); // 2
         Remision::create(['id'=>3, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>'ODONTOLOGÍA', 'estusuario_id'=>49]); // 3
        Remision::create(['id'=>4, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>'REDUCCIÓN DE RIESGOS Y DAÑOS', 'estusuario_id'=>49]); // 4
        Remision::create(['id'=>5, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>'NINGUNO', 'estusuario_id'=>49]); // 5
     
     

        //Remiespecial::create(['id'=>1, 'sis_esta_id' => 1, 'user_crea_id' => 1, 'user_edita_id' => 1, 'nombre' =>'GIARDIASIS [LAMBLIASIS]', 'estusuario_id'=>49]); // 6
        
        

    }     
}
