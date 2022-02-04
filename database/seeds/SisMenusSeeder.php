<?php

use App\Models\Sistema\SisMenu;
use Illuminate\Database\Seeder;

class SisMenusSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {SisMenu::create(['sis_menu_id'=>'1','s_menu'=>'NUEVO','s_icono'=>'e','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 1
        SisMenu::create(['sis_menu_id'=>'1','s_menu'=>'TERRITORIO','s_icono'=>'fa-globe-americas','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 2
        SisMenu::create(['sis_menu_id'=>'2','s_menu'=>'SICOSOCIAL','s_icono'=>'fa-globe-americas','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 3
        SisMenu::create(['sis_menu_id'=>'3','s_menu'=>'VALORACION SICOSOCIAL','s_icono'=>'fa-globe-americas','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 4
        SisMenu::create(['sis_menu_id'=>'3','s_menu'=>'CONSULTA SOCIAL EN DOMICILIO','s_icono'=>'fa-globe-americas','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 5
        SisMenu::create(['sis_menu_id'=>'3','s_menu'=>'INTERVENCION SICOSOCIAL','s_icono'=>'fa-globe-americas','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 6
        SisMenu::create(['sis_menu_id'=>'3','s_menu'=>'FICHA DE OBSERVACION','s_icono'=>'fa-globe-americas','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 7
        SisMenu::create(['sis_menu_id'=>'2','s_menu'=>'FICHA DE INGRESO','s_icono'=>'fa-globe-americas','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 8
        SisMenu::create(['sis_menu_id'=>'1','s_menu'=>'ACCIONES','s_icono'=>'fa-clipboard-check','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 9
        SisMenu::create(['sis_menu_id'=>'9','s_menu'=>'INDIVIDUALES','s_icono'=>'fa-clipboard-check','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 10
        SisMenu::create(['sis_menu_id'=>'9','s_menu'=>'GRUPALES','s_icono'=>'fa-clipboard-check','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 11
        SisMenu::create(['sis_menu_id'=>'11','s_menu'=>'GRUPALES','s_icono'=>'fa-clipboard-check','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 12
        SisMenu::create(['sis_menu_id'=>'1','s_menu'=>'ADMINISTRACION','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 13
        SisMenu::create(['sis_menu_id'=>'13','s_menu'=>'FICHA DE OBSERVACION Y/O SEGUIMIENTO','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 14
        SisMenu::create(['sis_menu_id'=>'14','s_menu'=>'TIPO DE SEGUIMIENTO','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 15
        SisMenu::create(['sis_menu_id'=>'14','s_menu'=>'SUB TIPO DE SEGUIMIENTO','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 16
        SisMenu::create(['sis_menu_id'=>'13','s_menu'=>'INDICADORES','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 17
        SisMenu::create(['sis_menu_id'=>'17','s_menu'=>'PREGUNTAS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 18
        SisMenu::create(['sis_menu_id'=>'17','s_menu'=>'LINEAS BASE','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 19
        SisMenu::create(['sis_menu_id'=>'17','s_menu'=>'FUENTES SOPORTE','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 20
        SisMenu::create(['sis_menu_id'=>'13','s_menu'=>'SISTEMA','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 21
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'TEMA','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 22
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'ESPACIO/LUGAR','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 23
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'DEPENDENCIA E/L','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 24
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'TALLER','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 25
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'SUB TEMA TALLER','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 26
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'CONTEXTO PEDAGOGICO','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 27
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'RECURSO','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 28
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'CONVENIOS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 29
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'DEPENDENCIAS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 30
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'ESTADOS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 31
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'USUARIOS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 32
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'ROLES','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 33
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'ACTIVIDADES','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 34
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'DOCUMENTOS FUENTES','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 35
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'PROCESOS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 36
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'MAPA DE PROCESOS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 37
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'ENTIDADES','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 38
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'TEMAS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 39
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'PARAMETROS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 40
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'CARGOS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 41
        SisMenu::create(['sis_menu_id'=>'21','s_menu'=>'EPS','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 42
        SisMenu::create(['sis_menu_id'=>'1','s_menu'=>'INDICADORES','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 43
        SisMenu::create(['sis_menu_id'=>'43','s_menu'=>'INDIVIDUALES','s_icono'=>'fa-tools','sis_docfuen_id'=>'1','created_at'=>'2021-04-27T16:56:10.000000Z','updated_at'=>'2021-04-27T16:56:10.000000Z',]); // 44
        // 5333
    }
}
