<?php

use Illuminate\Database\Seeder;

class PermisosIndicadoresSeeder extends Seeder
{
    use EstructuraBaseTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * permisos para indicadores
         */
        $this->permisox = 'inadmini';
        $this->compleme = 'de indicadores';
        $this->getModulo();

        $this->permisox = 'indimodu';
        $this->compleme = 'de indicadores';
        $this->getModulo();

        $this->permisox = 'invalini';
        $this->compleme = 'de indicadores';
        $this->getModulo();

        $this->permisox = 'inaccges';
        $this->compleme = 'de indicadores';
        $this->getModulo();

        $this->permisox = 'invalora';
        $this->compleme = 'de indicadores';
        $this->getModulo();

        $this->permisox = 'indiarea';
        $this->compleme = 'listar las áreas que se le van asignar indicadores';
        $this->getBase();

        $this->permisox = 'indicado';
        $this->compleme = 'administracion de indicadores';
        $this->getBase();

        $this->permisox = 'areaindi';
        $this->compleme = 'Asociar area con indicadores';
        $this->getBase();

        $this->permisox = 'indiliba';
        $this->compleme = 'asociarle líneas base al indicador';
        $this->getBase();

        $this->permisox = 'libagrup';
        $this->compleme = 'asociarle grupos a la línea base';
        $this->getBase();

        $this->permisox = 'grupregu';
        $this->compleme = 'asociarle preguntas al grupo';
        $this->getBase();

        $this->permisox = 'pregresp';
        $this->compleme = 'asociarle respuestas a la pregunta';
        $this->getBase();

        $this->permisox = 'linebase'; // inlineabase
        $this->compleme = 'administracion de las líneas base';
        $this->getBase();

        $this->permisox = 'areaxxxx'; // area
        $this->compleme = 'Administracion de las áreas';
        $this->getBase();

        // * INDICADORES EL NNAJ
        $this->permisox = 'indinnaj'; // 
        $this->compleme = 'Lista de NNAJ para visualizar los indicadores';
        $this->getBase();

        $this->permisox = 'indiagno'; // 
        $this->compleme = 'Diagnóstico del nnaj';
        $this->getBase();

        
        // // permisos para acciones gestion
        // $this->getPermisos(['permisox' => 'inacciongestion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Acciones-Gestión IN', 'pestania' => 1]);

        // // // permisos para documentos fuente con el indicador
        // // $this->getPermisos(['permisox' => 'indocindicador', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'Documentos del indicador','pestania'=>1]);

        // // permisos para base fuente
        // $this->getPermisos(['permisox' => 'inbasefuente', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Documentos de la línea base IN', 'pestania' => 1]);

        // // permisos para grupos de linea base
        // $this->getPermisos(['permisox' => 'grupliba', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Grupos de la línea base IN', 'pestania' => 1]);

        // // // permisos para validaciones
        // // $this->getPermisos(['permisox' => 'invalidacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'Preguntas de ','pestania'=>1]);

        // // permisos para graficos individuales
        // $this->getPermisos(['permisox' => 'inindividual', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Gráficos individuales individuales', 'pestania' => 1]);

        // // permisos para graficos grupales
        // $this->getPermisos(['permisox' => 'ingrupal', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Gráficos grupales indicadores', 'pestania' => 1]);

        // // permisos para pestaña respuestas IN
        // $this->getPermisos(['permisox' => 'inrespuesta', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'pestaña respuestas indicadores', 'pestania' => 1]);

        // // permisos para pestaña documento fuente IN
        // $this->getPermisos(['permisox' => 'inbasedocumen', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'pestaña documento fuente indicadores', 'pestania' => 1]);

        // $this->getPermisos(['permisox' => 'indiagnostico', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'','pestania'=>1]);




    }
}
