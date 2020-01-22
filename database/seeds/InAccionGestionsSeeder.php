<?php

use App\Models\Indicadores\InAccionGestion;
use Illuminate\Database\Seeder;

class InAccionGestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataxxxx=[
        'sis_actividad_id'=>1, 
        'i_prm_ttiempo_id'=>400, 
        'in_lineabase_nnaj_id'=>1,
         'sis_documento_fuente_id'=>3, 
        'user_crea_id'=>1, 
        'user_edita_id'=>1, 
        'i_tiempo'=>2, 
        'i_porcentaje'=>30, 
        'sis_esta_id'=>1, 
        'created_at'=>'2019-12-03 00:18:26', 
        'updated_at'=>'2019-12-03 00:18:26',];
     for($i=1; $i<6;$i++){
        $dataxxxx['in_lineabase_nnaj_id']=$i;
        $dataxxxx['sis_actividad_id']=7;       
         InAccionGestion::create($dataxxxx);
         $dataxxxx['sis_actividad_id']=8;         
         InAccionGestion::create($dataxxxx);
         $dataxxxx['sis_actividad_id']=9;    
         InAccionGestion::create($dataxxxx);
     } 
     for($i=6; $i<10;$i++){
        $dataxxxx['in_lineabase_nnaj_id']=$i;
        $dataxxxx['sis_actividad_id']=8;       
         InAccionGestion::create($dataxxxx);
         $dataxxxx['sis_actividad_id']=10;         
         InAccionGestion::create($dataxxxx);
        
     }   

     for($i=10; $i<13;$i++){
        $dataxxxx['in_lineabase_nnaj_id']=$i;
        $dataxxxx['sis_actividad_id']=8;       
         InAccionGestion::create($dataxxxx);
         $dataxxxx['sis_actividad_id']=7;         
         InAccionGestion::create($dataxxxx);
         $dataxxxx['sis_actividad_id']=11;    
         InAccionGestion::create($dataxxxx);
     } 



    }
}
