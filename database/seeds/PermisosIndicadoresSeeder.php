<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosIndicadoresSeeder extends Seeder
{
    public function getPermisos($dataxxxx)
    {
        $listaxxx = 'Permiso que permite ver el contenido para: ';

        $descripc = [
            'leerxxxx' => $listaxxx,
            'crearxxx' => 'Permiso que permite crear registro para: ',
            'editarxx' => 'Permiso que permite editar registro para: ',
            'borrarxx' => 'Permiso que permite inactivar registro para: ',
            'activarx' => 'Permiso que permite activar registro para: ',
            // 'asignarx' => 'Permiso que permite asignar registro para: ',
            'moduloxx' => 'Permiso que permite mostrar el módulo para: ',
        ];
        foreach ($dataxxxx['permisos'] as $value) {
            Permission::create([
                'name' => $dataxxxx['permisox'] . '-' . $value,
                'sis_pestania_id' => $dataxxxx['pestania'],
                'descripcion' => $descripc[$value] . $dataxxxx['compleme'],
                'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
            ]);
        }
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'];
        $this->getPermisos(['permisox' => 'indimodu', 'permisos' => ['moduloxx'], 'compleme' => 'modulo indicadores individuales', 'pestania' => 1]);
        /**
         * parametrizacion
         */
        // permisos para linea base
        $this->getPermisos(['permisox' => 'inlineabase', 'permisos' => $permisos, 'compleme' => 'Línea Base IN', 'pestania' => 1]);
        // // permisos para indicadores
        $this->getPermisos(['permisox' => 'indicador', 'permisos' => $permisos, 'compleme' => 'Indicadores IN', 'pestania' => 1]);
        //Pestaña parametrizacion de los indicadores
        $this->getPermisos(['permisox' => 'indipara', 'permisos' => ['leerxxxx'], 'compleme' => 'Parametrizacion de los indicadores', 'pestania' => 1]);
        // listado de areas para asignar los indicadores
        $this->getPermisos(['permisox' => 'indiarea', 'permisos' => ['leerxxxx'], 'compleme' => 'Parametrizacion de los indicadores', 'pestania' => 1]);
        // permisos para unir el area con sus indicadores
        $this->getPermisos(['permisox' => 'areaindi', 'permisos' => $permisos, 'compleme' => 'Indicadores con área', 'pestania' => 1]);
        // permisos para linea base       inbasefuente
        $this->getPermisos(['permisox' => 'indiliba', 'permisos' => $permisos, 'compleme' => 'Lineas base asociadas al indicador', 'pestania' => 1]);
        //                                 grupliba
        $this->getPermisos(['permisox' => 'libagrup', 'permisos' => $permisos, 'compleme' => 'Grupos de la línea base IN', 'pestania' => 1]);
        //asignar preguntas a los grupos de la linea base
        //                                  inpreguntas
        $this->getPermisos(['permisox' => 'grupregu', 'permisos' => $permisos, 'compleme' => 'Preguntas de indicadores', 'pestania' => 1]);
        // permisos para pestaña respuestas IN
        //                                 inrespuesta
        $this->getPermisos(['permisox' => 'pregresp', 'permisos' => $permisos, 'compleme' => 'respuestas de las preguntas', 'pestania' => 1]);







        // permisos para graficos grupales
        $this->getPermisos(['permisox' => 'ingrupal', 'permisos' => $permisos, 'compleme' => 'Gráficos grupales indicadores', 'pestania' => 1]);
        // permisos para pestaña documento fuente IN
        $this->getPermisos(['permisox' => 'inbasedocumen', 'permisos' => $permisos, 'compleme' => 'pestaña documento fuente indicadores', 'pestania' => 1]);
        // $this->getPermisos(['permisox' => 'indiagnostico', 'permisos' => $permisos,'compleme'=>'','pestania'=>1]);

        /** Módulo Indicadores resultados*/
        // $this->getPermisos(['permisox' => 'indicadores', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Indicadores resultados', 'pestania' => 1]);
        /** Módulo Indicadores administracion*/
        // $this->getPermisos(['permisox' => 'indiadmi', 'permisos' => ['moduloxx'], 'compleme' => 'Módulo de Indicadores administración', 'pestania' => 1]);
        //Creación de Permisos para Fsoporte
        $this->getPermisos(['permisox' => 'fsoporte', 'permisos' => $permisos, 'compleme' => 'documentos fuentes para las actividade de indicadores', 'pestania' => 1]);
        // permisos para acciones gestion
        $this->getPermisos(['permisox' => 'inacciongestion', 'permisos' => $permisos, 'compleme' => 'Acciones-Gestión IN', 'pestania' => 1]);

        // // permisos para documentos fuente con el indicador
        // $this->getPermisos(['permisox' => 'indocindicador', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'Documentos del indicador','pestania'=>1]);



        // // permisos para validaciones
        // $this->getPermisos(['permisox' => 'invalidacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'Preguntas de ','pestania'=>1]);

        // permisos para graficos individuales
        $this->getPermisos(['permisox' => 'inindividual', 'permisos' => $permisos, 'compleme' => 'Gráficos individuales individuales', 'pestania' => 1]);
    }
}
