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
        SisMenu::create([
            'id'=>1,
            'munu' => 'NUEVO',

            'icono' => '',
            'esmenu' => 1,
            'sis_menu_id' => 1
        ]);
        SisMenu::create([
            'id'=>2,
            'munu' => 'TERRITORIO',

            'icono' => 'fa-globe-americas',
            'esmenu' => 1,
            'sis_menu_id' => 1
        ]);
        SisMenu::create([
            'id'=>3,
            'munu' => 'SICOSOCIAL',

            'icono' => 'fa-globe-americas',
            'esmenu' => 1,
            'sis_menu_id' => 2
        ]);
        SisMenu::create([
            'id'=>4,
            'munu' => 'VALORACION SICOSOCIAL',

            'icono' => 'fa-globe-americas',
            'esmenu' => 0,
            'sis_menu_id' => 3
        ]);
        SisMenu::create([
            'id'=>5,
            'munu' => 'CONSULTA SOCIAL EN DOMICILIO',

            'icono' => 'fa-globe-americas',
            'esmenu' => 0,
            'sis_menu_id' => 3
        ]);
        SisMenu::create([
            'id'=>6,
            'munu' => 'INTERVENCION SICOSOCIAL',

            'icono' => 'fa-globe-americas',
            'esmenu' => 0,
            'sis_menu_id' => 3
        ]);
        SisMenu::create([
            'id'=>7,
            'munu' => 'FICHA DE OBSERVACION',

            'icono' => 'fa-globe-americas',
            'esmenu' => 0,
            'sis_menu_id' => 3
        ]);
        SisMenu::create([
            'id'=>8,
            'munu' => 'FICHA DE INGRESO',

            'icono' => 'fa-globe-americas',
            'esmenu' => 0,
            'sis_menu_id' => 2
        ]);
        SisMenu::create([
            'id'=>9,
            'munu' => 'ACCIONES',

            'icono' => 'fa-clipboard-check',
            'esmenu' => 1,
            'sis_menu_id' => 1
        ]);
        SisMenu::create([
            'id'=>10,
            'munu' => 'INDIVIDUALES',

            'icono' => 'fa-clipboard-check',
            'esmenu' => 0,
            'sis_menu_id' => 9
        ]);
        SisMenu::create([
            'id'=>11,
            'munu' => 'GRUPALES',

            'icono' => 'fa-clipboard-check',
            'esmenu' => 1,
            'sis_menu_id' => 9
        ]);
        SisMenu::create([
            'id'=>12,
            'munu' => 'GRUPALES',

            'icono' => 'fa-clipboard-check',
            'esmenu' => 0,
            'sis_menu_id' => 11
        ]);
        SisMenu::create([
            'id'=>13,
            'munu' => 'ADMINISTRACION',

            'icono' => 'fa-tools',
            'esmenu' => 1,
            'sis_menu_id' => 1
        ]);
        SisMenu::create([
            'id'=>14,
            'munu' => 'FICHA DE OBSERVACION Y/O SEGUIMIENTO',

            'icono' => 'fa-tools',
            'esmenu' => 1,
            'sis_menu_id' => 13
        ]);
        SisMenu::create([
            'id'=>15,
            'munu' => 'TIPO DE SEGUIMIENTO',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 14
        ]);

        SisMenu::create([
            'id'=>16,
            'munu' => 'SUB TIPO DE SEGUIMIENTO',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 14
        ]);
        SisMenu::create([
            'id'=>17,
            'munu' => 'INDICADORES',

            'icono' => 'fa-tools',
            'esmenu' => 1,
            'sis_menu_id' => 13
        ]);
        SisMenu::create([
            'id'=>18,
            'munu' => 'PREGUNTAS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 17
        ]);
        SisMenu::create([
            'id'=>19,
            'munu' => 'LINEAS BASE',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 17
        ]);
        SisMenu::create([
            'id'=>20,
            'munu' => 'FUENTES SOPORTE',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 17
        ]);

        SisMenu::create([
            'id'=>21,
            'munu' => 'SISTEMA',

            'icono' => 'fa-tools',
            'esmenu' => 1,
            'sis_menu_id' => 13
        ]);
        SisMenu::create([
            'id'=>22,
            'munu' => 'TEMA',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>23,
            'munu' => 'ESPACIO/LUGAR',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>24,
            'munu' => 'DEPENDENCIA E/L',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>25,
            'munu' => 'TALLER',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>26,
            'munu' => 'SUB TEMA TALLER',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);

        SisMenu::create([
            'id'=>27,
            'munu' => 'CONTEXTO PEDAGOGICO',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>28,
            'munu' => 'RECURSO',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>29,
            'munu' => 'CONVENIOS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>30,
            'munu' => 'DEPENDENCIAS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>31,
            'munu' => 'ESTADOS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);

        SisMenu::create([
            'id'=>32,
            'munu' => 'USUARIOS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>33,
            'munu' => 'ROLES',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>34,
            'munu' => 'ACTIVIDADES',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>35,
            'munu' => 'DOCUMENTOS FUENTES',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>36,
            'munu' => 'PROCESOS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);

        SisMenu::create([
            'id'=>37,
            'munu' => 'MAPA DE PROCESOS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);

        SisMenu::create([
            'id'=>38,
            'munu' => 'ENTIDADES',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>39,
            'munu' => 'TEMAS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>40,
            'munu' => 'PARAMETROS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>41,
            'munu' => 'CARGOS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>42,
            'munu' => 'EPS',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 21
        ]);
        SisMenu::create([
            'id'=>43,
            'munu' => 'INDICADORES',

            'icono' => 'fa-tools',
            'esmenu' => 1,
            'sis_menu_id' => 1
        ]);
        SisMenu::create([
            'id'=>44,
            'munu' => 'INDIVIDUALES',

            'icono' => 'fa-tools',
            'esmenu' => 0,
            'sis_menu_id' => 43
        ]);
    }
}
