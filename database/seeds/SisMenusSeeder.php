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
    {
        SisMenu::create(['id'=>1,'s_menu' => 'NUEVO', 's_icono' => 'e', 'sis_menu_id' => 1, 'sis_docfuen_id' => 1]); // 1
        SisMenu::create(['id'=>2,'s_menu' => 'TERRITORIO', 's_icono' => 'fa-globe-americas', 'sis_menu_id' => 1, 'sis_docfuen_id' => 1]); // 2
        SisMenu::create(['id'=>3,'s_menu' => 'SICOSOCIAL', 's_icono' => 'fa-globe-americas', 'sis_menu_id' => 2, 'sis_docfuen_id' => 1]); // 3
        SisMenu::create(['id'=>4,'s_menu' => 'VALORACION SICOSOCIAL', 's_icono' => 'fa-globe-americas', 'sis_menu_id' => 3, 'sis_docfuen_id' => 1]); // 4
        SisMenu::create(['id'=>5,'s_menu' => 'CONSULTA SOCIAL EN DOMICILIO', 's_icono' => 'fa-globe-americas', 'sis_menu_id' => 3, 'sis_docfuen_id' => 1]); // 5
        SisMenu::create(['id'=>6,'s_menu' => 'INTERVENCION SICOSOCIAL', 's_icono' => 'fa-globe-americas', 'sis_menu_id' => 3, 'sis_docfuen_id' => 1]); // 6
        SisMenu::create(['id'=>7,'s_menu' => 'FICHA DE OBSERVACION', 's_icono' => 'fa-globe-americas', 'sis_menu_id' => 3, 'sis_docfuen_id' => 1]); // 7
        SisMenu::create(['id'=>8,'s_menu' => 'FICHA DE INGRESO', 's_icono' => 'fa-globe-americas', 'sis_menu_id' => 2, 'sis_docfuen_id' => 1]); // 8
        SisMenu::create(['id'=>9,'s_menu' => 'ACCIONES', 's_icono' => 'fa-clipboard-check', 'sis_menu_id' => 1, 'sis_docfuen_id' => 1]); // 9
        SisMenu::create(['id'=>10,'s_menu' => 'INDIVIDUALES', 's_icono' => 'fa-clipboard-check', 'sis_menu_id' => 9, 'sis_docfuen_id' => 1]); // 10
        SisMenu::create(['id'=>11,'s_menu' => 'GRUPALES', 's_icono' => 'fa-clipboard-check', 'sis_menu_id' => 9, 'sis_docfuen_id' => 1]); // 11
        SisMenu::create(['id'=>12,'s_menu' => 'GRUPALES', 's_icono' => 'fa-clipboard-check', 'sis_menu_id' => 11, 'sis_docfuen_id' => 1]); // 12
        SisMenu::create(['id'=>13,'s_menu' => 'ADMINISTRACION', 's_icono' => 'fa-tools', 'sis_menu_id' => 1, 'sis_docfuen_id' => 1]); // 13
        SisMenu::create(['id'=>14,'s_menu' => 'FICHA DE OBSERVACION Y/O SEGUIMIENTO', 's_icono' => 'fa-tools', 'sis_menu_id' => 13, 'sis_docfuen_id' => 1]); // 14
        SisMenu::create(['id'=>15,'s_menu' => 'TIPO DE SEGUIMIENTO', 's_icono' => 'fa-tools', 'sis_menu_id' => 14, 'sis_docfuen_id' => 1]); // 15
        SisMenu::create(['id'=>16,'s_menu' => 'SUB TIPO DE SEGUIMIENTO', 's_icono' => 'fa-tools', 'sis_menu_id' => 14, 'sis_docfuen_id' => 1]); // 16
        SisMenu::create(['id'=>17,'s_menu' => 'INDICADORES', 's_icono' => 'fa-tools', 'sis_menu_id' => 13, 'sis_docfuen_id' => 1]); // 17
        SisMenu::create(['id'=>18,'s_menu' => 'PREGUNTAS', 's_icono' => 'fa-tools', 'sis_menu_id' => 17, 'sis_docfuen_id' => 1]); // 18
        SisMenu::create(['id'=>19,'s_menu' => 'LINEAS BASE', 's_icono' => 'fa-tools', 'sis_menu_id' => 17, 'sis_docfuen_id' => 1]); // 19
        SisMenu::create(['id'=>20,'s_menu' => 'FUENTES SOPORTE', 's_icono' => 'fa-tools', 'sis_menu_id' => 17, 'sis_docfuen_id' => 1]); // 20
        SisMenu::create(['id'=>21,'s_menu' => 'SISTEMA', 's_icono' => 'fa-tools', 'sis_menu_id' => 13, 'sis_docfuen_id' => 1]); // 21
        SisMenu::create(['id'=>22,'s_menu' => 'TEMA', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 22
        SisMenu::create(['id'=>23,'s_menu' => 'ESPACIO/LUGAR', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 23
        SisMenu::create(['id'=>24,'s_menu' => 'DEPENDENCIA E/L', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 24
        SisMenu::create(['id'=>25,'s_menu' => 'TALLER', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 25
        SisMenu::create(['id'=>26,'s_menu' => 'SUB TEMA TALLER', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 26
        SisMenu::create(['id'=>27,'s_menu' => 'CONTEXTO PEDAGOGICO', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 27
        SisMenu::create(['id'=>28,'s_menu' => 'RECURSO', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 28
        SisMenu::create(['id'=>29,'s_menu' => 'CONVENIOS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 29
        SisMenu::create(['id'=>30,'s_menu' => 'DEPENDENCIAS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 30
        SisMenu::create(['id'=>31,'s_menu' => 'ESTADOS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 31
        SisMenu::create(['id'=>32,'s_menu' => 'USUARIOS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 32
        SisMenu::create(['id'=>33,'s_menu' => 'ROLES', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 33
        SisMenu::create(['id'=>34,'s_menu' => 'ACTIVIDADES', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 34
        SisMenu::create(['id'=>35,'s_menu' => 'DOCUMENTOS FUENTES', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 35
        SisMenu::create(['id'=>36,'s_menu' => 'PROCESOS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 36
        SisMenu::create(['id'=>37,'s_menu' => 'MAPA DE PROCESOS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 37
        SisMenu::create(['id'=>38,'s_menu' => 'ENTIDADES', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 38
        SisMenu::create(['id'=>39,'s_menu' => 'TEMAS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 39
        SisMenu::create(['id'=>40,'s_menu' => 'PARAMETROS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 40
        SisMenu::create(['id'=>41,'s_menu' => 'CARGOS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 41
        SisMenu::create(['id'=>42,'s_menu' => 'EPS', 's_icono' => 'fa-tools', 'sis_menu_id' => 21, 'sis_docfuen_id' => 1]); // 42
        SisMenu::create(['id'=>43,'s_menu' => 'INDICADORES', 's_icono' => 'fa-tools', 'sis_menu_id' => 1, 'sis_docfuen_id' => 1]); // 43
        SisMenu::create(['id'=>44,'s_menu' => 'INDIVIDUALES', 's_icono' => 'fa-tools', 'sis_menu_id' => 43, 'sis_docfuen_id' => 1]); // 44
    }
}
