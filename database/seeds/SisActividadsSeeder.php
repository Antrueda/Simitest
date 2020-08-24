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
        SisActividad::create(['nombre' => 'CREAR USUARIOS EN EL SISTEMA',  'sis_docfuen_id' => 1]);                //1
        SisActividad::create(['nombre' => 'DATOS BASICOS',  'sis_docfuen_id' => 2]);                               //2
        SisActividad::create(['nombre' => 'REMISIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 2]);       //3
        SisActividad::create(['nombre' => 'REFERENCIACIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 2]); //4
        SisActividad::create(['nombre' => 'SEGUIMIENTO A REDES INTRAINSTITUCIONALES',  'sis_docfuen_id' => 2]);    //5
        SisActividad::create(['nombre' => 'ORIENTACIÓN DE REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 2]);   //6

        SisActividad::create(['nombre' => 'REFERENCIACIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);//7
        SisActividad::create(['nombre' => 'SEGUIMIENTO A REDES INTRAINSTITUCIONALES',  'sis_docfuen_id' => 3]);    //8
        SisActividad::create(['nombre' => 'INTERVENCIÓN CON NNAJ',  'sis_docfuen_id' => 3]);                       //9
        SisActividad::create(['nombre' => 'IDENTIFICACIÓN DE REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);//10
        SisActividad::create(['nombre' => 'INTERVENCIÓN GRUPAL CON NNAJ',  'sis_docfuen_id' => 3]);                //11


        SisActividad::create(['nombre' => 'VSI - DATOS BASICOS',  'sis_docfuen_id' => 3]);                         //12
        SisActividad::create(['nombre' => 'REMISIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);       //13
        SisActividad::create(['nombre' => 'ORIENTACIÓN DE REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);   //14
        SisActividad::create(['nombre' => 'SEGUIMIENTO DE REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 3]);   //15



        SisActividad::create(['nombre' => 'REMISIÓN A REDES INTERINSTITUCIONALES',  'sis_docfuen_id' => 4]);       //16



    }
}
