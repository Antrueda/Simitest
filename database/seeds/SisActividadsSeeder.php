<?php

use App\Models\Sistema\SisActividad;
use Illuminate\Database\Seeder;

class SisActividadsSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'CREAR USUARIOS EN EL SISTEMA',  'sis_docfuen_id' => 1]);                //1
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'DATOS BASICOS',  'sis_docfuen_id' => 2]);                               //2
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'REMISIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 2]);       //3
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'REFERENCIACIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 2]); //4
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'SEGUIMIENTO A REDES INTRAINSTITUCIONALES',  'sis_docfuen_id' => 2]);    //5
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'ORIENTACIÓN DE REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 2]);   //6

        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'REFERENCIACIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);//7
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'SEGUIMIENTO A REDES INTRAINSTITUCIONALES',  'sis_docfuen_id' => 3]);    //8
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'INTERVENCIÓN CON NNAJ',  'sis_docfuen_id' => 3]);                       //9
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'IDENTIFICACIÓN DE REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);//10
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'INTERVENCIÓN GRUPAL CON NNAJ',  'sis_docfuen_id' => 3]);                //11


        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'VSI - DATOS BASICOS',  'sis_docfuen_id' => 3]);                         //12
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'REMISIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);       //13
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'ORIENTACIÓN DE REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);   //14
        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'SEGUIMIENTO DE REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);   //15



        SisActividad::create(['sis_esta_id'=>1,'user_crea_id'=>1,'user_edita_id'=>1,'nombre' => 'REMISIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 4]);       //16



    }
}
