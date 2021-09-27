<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesYPermisosSeeder extends Seeder
{
    public function getPermisos($dataxxxx)
    {
        $listaxxx = 'Permiso que permite ver el contenido para: ';

        $descripc = [
            'leer' => $listaxxx,
            'crear' => 'Permiso que permite crear registro para: ',
            'editar' => 'Permiso que permite editar registro para: ',
            'borrar' => 'Permiso que permite inactivar registro para: ',
            'descarga' => 'Permiso que permite la descarga de archivos para: ',
            'factorxx' => 'Permioso que permite ver los: ',
            'metaxxxx' => 'Permioso que permite ver las: ',
            'psicologo' => 'Permioso que permite ver contenido de psicologo: ',
            'social' => 'Permioso que permite ver contenido de trabajador social: ',
            'modulo' => 'Permioso que permite ver el menu de: ',
            'moduloxx' => 'Permioso que permite ver el menu de: ',
            'admin' => 'Permiso para administrar: ',
            'area-admin' => 'Permiso para administrar: ',
            'tipo-admin' => 'Permiso para administrar: ',
            'sub-tipo-admin' => 'Permiso para administrar: ',
            'activarx' => 'Permiso que permite activar registro para: '
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
        // Restablecer roles y permisos en caché
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        require_once('Reportes/RolesYPermisosReportesSeeder.php'); // Reportes
        require_once('Permisos/Temas.php'); // Reportes
        // crear permisos permiso
        $this->getPermisos(['permisox' => 'permiso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Permisos', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'diafesti', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Días festivos', 'pestania' => 1]);
        // crear permisos para rol
        $this->getPermisos(['permisox' => 'rolesxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Administracion de reles', 'pestania' => 1]);
        // crear permisos rol
        $this->getPermisos(['permisox' => 'permirol', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'permisos de un rol', 'pestania' => 1]);

        //Permiso Reporte Caminando relajado
        $this->getPermisos(['permisox' => 'repcamre', 'permisos' => ['leer'], 'compleme' => 'permisos de un rol', 'pestania' => 1]);

        /**
         * Creación de Permisos para el crud de estados de los usuarios
         */
        $this->getPermisos(['permisox' => 'estausua', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Estados de los usuarios', 'pestania' => 1]);

        //Creación de Permisos para el crud de estados
        $this->getPermisos(['permisox' => 'sisesta', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Estados del sistemas', 'pestania' => 1]);


        /**
         * cambio de contraseña
         */

        $this->getPermisos(['permisox' => 'contrase', 'permisos' => ['editar'], 'compleme' => 'cambiar contraseña', 'pestania' => 1]);

        /**acuerdo-editar
         * contrase-editar
         * acuerdo de confidencialidad
         */
        $this->getPermisos(['permisox' => 'acuerdo', 'permisos' => ['editar'], 'compleme' => 'Acuerdo de confidencialidad', 'pestania' => 1]);

        /* Administrador de textos
        */
        $this->getPermisos(['permisox' => 'textos', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'adminitrador de Textos', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'textosadmin', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Textos', 'pestania' => 1]);
        /** Crea permisos para cargos */
        $this->getPermisos(['permisox' => 'siscargo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'cargo', 'pestania' => 1]);
        // crear permisos persona
        $this->getPermisos(['permisox' => 'persona', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'personas', 'pestania' => 1]);

        // crear parámetros
        $this->getPermisos(['permisox' => 'parametro', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'parámetros', 'pestania' => 1]);
        // crear temas
        $this->getPermisos(['permisox' => 'tema', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'tema', 'pestania' => 1]);


        // crear dependencias
        $this->getPermisos(['permisox' => 'dependencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'dependencias', 'pestania' => 1]);
        /**
         * Personal de  la dependencia
         */
        $this->getPermisos(['permisox' => 'usuadepe', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Personal-Dependencia', 'pestania' => 1]);
        /**
         * servicios
         */
        $this->getPermisos(['permisox' => 'servicio', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Servicio', 'pestania' => 1]);


        /**
         * servicios que ofrece la dependencia
         */
        $this->getPermisos(['permisox' => 'servdepe', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Servicio-Dependencia', 'pestania' => 1]);



        // crear permisos usuario
        $this->getPermisos(['permisox' => 'usuario', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'usuario', 'pestania' => 1]);
        /**
         * usuarios de la dependencia
         */
        $this->getPermisos(['permisox' => 'usudepen', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Usuario-Dependencias', 'pestania' => 1]);
        /**
         * areas del usuario
         */
        $this->getPermisos(['permisox' => 'areausua', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Usuario-Areas', 'pestania' => 1]);

        /**
         * reles del usuario
         */
        $this->getPermisos(['permisox' => 'roleusua', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Usuario-Roles', 'pestania' => 1]);

        // crear documentoFuente
        $this->getPermisos(['permisox' => 'documentoFuente', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Documentos Fuentes', 'pestania' => 1]);

        // crear entidades

        $this->getPermisos(['permisox' => 'entidad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Entidades', 'pestania' => 1]);

        // crear  actividades
        $this->getPermisos(['permisox' => 'actividad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Actividades', 'pestania' => 1]);

        // crear Mapa de procesos
        $this->getPermisos(['permisox' => 'mapaProceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Mapa-Proceso', 'pestania' => 1]);

        // crear procesos
        $this->getPermisos(['permisox' => 'proceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Procesos', 'pestania' => 1]);

        // crear Actividad procesos
        $this->getPermisos(['permisox' => 'actividadProceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Actividad-Proceso', 'pestania' => 1]);

        //Crear areas para administración de indicadores
        $this->getPermisos(['permisox' => 'area', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Areas', 'pestania' => 1]);
        //Administracion de las áreas
        $this->getPermisos(['permisox' => 'areaxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Administracion de las áreas', 'pestania' => 1]);

        //Crear preguntas para administración de indicadores
        $this->getPermisos(['permisox' => 'inpreguntas', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Preguntas de indicadores', 'pestania' => 1]);

        /**
         * permisos para VSI
         */

        //permisos para las alertas
        $this->getPermisos(['permisox' => 'alertas', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Alertas', 'pestania' => 1]);

        //permisos para las Mensajes
        $this->getPermisos(['permisox' => 'mensajes', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Mensajes', 'pestania' => 1]);

        require_once('RolesYPermisosFi.php');
        require_once('RolesYPermisosCsd.php');

        //Crear datos básicos para Intervención Sicosocial
        $this->getPermisos(['permisox' => 'isintervencion', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx', 'psicologo', 'social'], 'compleme' => 'Intevension Sicosocial IS', 'pestania' => 1]);



        //Ficha de Observación y Seguimiento
        $this->getPermisos(['permisox' => 'fosfichaobservacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Ficha Observación y Seguimiento FOS', 'pestania' => 1]);

        /**
         * permisos para indicadores
         */
        $this->getPermisos(['permisox' => 'indimodu', 'permisos' => ['moduloxx'], 'compleme' => 'modulo indicadores individuales', 'pestania' => 1]);

        // permisos para indicadores
        $this->getPermisos(['permisox' => 'indicador', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Indicadores IN', 'pestania' => 1]);

        // permisos para acciones gestion
        $this->getPermisos(['permisox' => 'inacciongestion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Acciones-Gestión IN', 'pestania' => 1]);

        // permisos para linea base
        $this->getPermisos(['permisox' => 'inlineabase', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Línea Base IN', 'pestania' => 1]);

        // // permisos para documentos fuente con el indicador
        // $this->getPermisos(['permisox' => 'indocindicador', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'Documentos del indicador','pestania'=>1]);

        // permisos para base fuente
        $this->getPermisos(['permisox' => 'inbasefuente', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Documentos de la línea base IN', 'pestania' => 1]);

        // permisos para grupos de linea base
        $this->getPermisos(['permisox' => 'grupliba', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Grupos de la línea base IN', 'pestania' => 1]);

        // // permisos para validaciones
        // $this->getPermisos(['permisox' => 'invalidacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'Preguntas de ','pestania'=>1]);

        // permisos para graficos individuales
        $this->getPermisos(['permisox' => 'inindividual', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Gráficos individuales individuales', 'pestania' => 1]);

        // permisos para graficos grupales
        $this->getPermisos(['permisox' => 'ingrupal', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Gráficos grupales indicadores', 'pestania' => 1]);

        // permisos para pestaña respuestas IN
        $this->getPermisos(['permisox' => 'inrespuesta', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'pestaña respuestas indicadores', 'pestania' => 1]);

        // permisos para pestaña documento fuente IN
        $this->getPermisos(['permisox' => 'inbasedocumen', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'pestaña documento fuente indicadores', 'pestania' => 1]);

        // $this->getPermisos(['permisox' => 'indiagnostico', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'','pestania'=>1]);


        /**
         * permisos para acciones grupales
         */

        $this->getPermisos(['permisox' => 'agtema', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Temas Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agtaller', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Talleres Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agsubtema', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Subtemas Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agcontexto', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Contextos Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agrecurso', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Recursos Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agconvenio', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Convenios Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agrelacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Convenios Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agcargdoc', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Documentos adjuntos', 'pestania' => 1]);




        $this->getPermisos(['permisox' => 'taccform', 'permisos' => ['modulo'], 'compleme' => 'Módulo de talleres y acciones formativas', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agactividad', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Actividades Acciones Grupales', 'pestania' => 1]);
        $this->getPermisos(['permisox' => 'agrespon', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Actividades Acciones Grupales', 'pestania' => 1]);
        $this->getPermisos(['permisox' => 'agasiste', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Actividades Acciones Grupales', 'pestania' => 1]);
        $this->getPermisos(['permisox' => 'agrecurs', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Actividades Acciones Grupales', 'pestania' => 1]);

        /**
         * Permisos para Acciones Individuales
         */
        $this->getPermisos(['permisox' => 'aiindex', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Acciones grupales', 'pestania' => 1]);

        // Permisos para AI Salida Mayores
        $this->getPermisos(['permisox' => 'aisalidamayores', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'salida de mayores acciones Grupales(AI)', 'pestania' => 1]);
        // Permisos para AI Salida Mayores
        $this->getPermisos(['permisox' => 'salidajovenes', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Jovenes Salida acciones grupales(AI)', 'pestania' => 1]);



        // Permisos para AI Evasión
        $this->getPermisos(['permisox' => 'aievasion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Evasión acciones individuales(AI)', 'pestania' => 1]);

        // Permisos para AI Evasión
        $this->getPermisos(['permisox' => 'evasionves', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Evasión vestuario', 'pestania' => 1]);
        // Permisos para AI Evasión
        $this->getPermisos(['permisox' => 'evasionpar', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Evasión parentesco', 'pestania' => 1]);

        // Permisos para AI Salida Menores
        $this->getPermisos(['permisox' => 'aisalidamenores', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Salida menores acciones individuales(AI)', 'pestania' => 1]);

        // Permisos para AI Retorno Salidas
        $this->getPermisos(['permisox' => 'airetornosalida', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Retorno salida acciones individuales(AI)', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'sistitulos', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Titulos SIS', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'depeluga', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Lugares-Dependencia', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'siseslug', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Slug SIS', 'pestania' => 1]);

        /**
         * premisos para los modulos
         */
        /** Módulo territorio */
        $this->getPermisos(['permisox' => 'territorio', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Territorio', 'pestania' => 1]);

        /** Módulo Acciones */
        $this->getPermisos(['permisox' => 'acciones', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Acciones', 'pestania' => 1]);
        /** Módulo Acciones individuales*/
        $this->getPermisos(['permisox' => 'accindiv', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Acciones Individuales', 'pestania' => 1]);

        /** Módulo Acciones grupales*/
        $this->getPermisos(['permisox' => 'accigrup', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Acciones grupales', 'pestania' => 1]);

        /** Modulo Administración */
        $this->getPermisos(['permisox' => 'administracion', 'permisos' => ['modulo'], 'compleme' => 'Modulo de Administración', 'pestania' => 1]);

        /** Modulo Administración */
        $this->getPermisos(['permisox' => 'sistemax', 'permisos' => ['modulo'], 'compleme' => 'Modulo de Administración Sistema', 'pestania' => 1]);
        /** Módulo Indicadores resultados*/
        $this->getPermisos(['permisox' => 'indicadores', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Indicadores resultados', 'pestania' => 1]);

        /** Módulo Indicadores administracion*/
        $this->getPermisos(['permisox' => 'indiadmi', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Indicadores administración', 'pestania' => 1]);


        /** Módulo Indicadores*/
        $this->getPermisos(['permisox' => 'fosadmin', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Administración FOS', 'pestania' => 1]);

        /** Módulo Indicadores*/
        $this->getPermisos(['permisox' => 'motaller', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Administración Talleres', 'pestania' => 1]);



        // crear ficha de epss
        $this->getPermisos(['permisox' => 'eps', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Eps', 'pestania' => 1]);

        // // crear ficha indicadores/valoracion
        // $this->getPermisos(['permisox' => 'invaloracion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'','pestania'=>1]);

        //Creación de permisos para el módulo de Salud
        // $this->getPermisos(['permisox' => 'saludIndex', 'permisos' => ['leer'],'compleme'=>'','pestania'=>1]);

        // $this->getPermisos(['permisox' => 'mitigacionIndex', 'permisos' => ['leer'],'compleme'=>'','pestania'=>1]);

        // $this->getPermisos(['permisox' => 'vspaIndex', 'permisos' => ['leer'],'compleme'=>'','pestania'=>1]);

        //Creación de Permisos para VSPA
        $this->getPermisos(['permisox' => 'vspa', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Vspa', 'pestania' => 1]);

        //Creación de Permisos para VMA
        $this->getPermisos(['permisox' => 'vma', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Vma mitigación', 'pestania' => 1]);


        //Creación de Permisos para Fsoporte
        $this->getPermisos(['permisox' => 'fsoporte', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'documentos fuentes para las actividade de indicadores', 'pestania' => 1]);

        Permission::create(['name' => 'intervención sicosocial especializada', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'descripcion' => 'intervención sicosocial especializada', 'sis_pestania_id' => 1]);

        //Permisos para Administración de FOS
        $this->getPermisos(['permisox' => 'fos', 'permisos' => ['admin', 'area-admin', 'tipo-admin', 'sub-tipo-admin'], 'compleme' => 'Administracion FOS', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'fostipo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Tipo FOS', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'fossubtipo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Subtipo FOS', 'pestania' => 1]);

        //Permisos para Educacion(Acciones individuales)
        // $this->getPermisos(['permisox' => 'histomat', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Historial Matriculas', 'pestania' => 1]);
        //      //Permisos para Prueba Diagnostica Presaber
        // $this->getPermisos(['permisox' => 'pruediagpre', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Prueba Diagnostica Presaber', 'pestania' => 1]);

        // //Permisos para Prueba Diagnostica Presaber
        // $this->getPermisos(['permisox' => 'presaberadmin', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'presaberadmin', 'pestania' => 1]);

        // //Permisos para Prueba Diagnostica Presaber
        // $this->getPermisos(['permisox' => 'presaber', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'presaber', 'pestania' => 1]);

        // //Permisos para Prueba Diagnostica Presaber
        // $this->getPermisos(['permisox' => 'presaberasigna', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'presaberasigna', 'pestania' => 1]);

        //Permisos para Matricula
        $this->getPermisos(['permisox' => 'imatricula', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Matricula', 'pestania' => 1]);
        //Permisos para Matricula NNAJ
        $this->getPermisos(['permisox' => 'imatriculannaj', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Matricula NNAJ', 'pestania' => 1]);

        //Permisos para traslado
        $this->getPermisos(['permisox' => 'traslado', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'Traslado y egreso', 'pestania' => 1]);
        //Permisos para traslado NNAJ
        $this->getPermisos(['permisox' => 'traslannaj', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Traslado nnaj', 'pestania' => 1]);


        //Permisos para direccionamiento
        $this->getPermisos(['permisox' => 'direccionref', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => ' direccionamiento', 'pestania' => 1]);
        //Permisos para traslado NNAJ
        $this->getPermisos(['permisox' => 'direccionmodulo', 'permisos' => ['modulo'], 'compleme' => 'direccionamiento modulo', 'pestania' => 1]);

        //Permisos para motivo
        $this->getPermisos(['permisox' => 'direcadmin', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Administración direccionamiento y referenciacion', 'pestania' => 1]);
        //Permisos para motivo
        $this->getPermisos(['permisox' => 'direentidad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Entidad direccionamiento ', 'pestania' => 1]);
        //Permisos para motivo secundario
        $this->getPermisos(['permisox' => 'direcprogrma', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'entidad programa', 'pestania' => 1]);
        //Permisos para motivo secundario
        $this->getPermisos(['permisox' => 'direcasignar', 'permisos' => ['leer', 'crear', 'editar', 'borrar', 'activarx'], 'compleme' => 'entidad asignar programa', 'pestania' => 1]);

        //Permisos para motivo
        $this->getPermisos(['permisox' => 'motivoadmin', 'permisos' => ['modulo'], 'compleme' => 'Módulo de Administración FOS', 'pestania' => 1]);
        //Permisos para motivo
        $this->getPermisos(['permisox' => 'motivoe', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Subtipo FOS', 'pestania' => 1]);
        //Permisos para motivo secundario
        $this->getPermisos(['permisox' => 'motivose', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Subtipo FOS', 'pestania' => 1]);
        //Permisos para motivo asignacion
        $this->getPermisos(['permisox' => 'motivouni', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Subtipo FOS', 'pestania' => 1]);

        require_once('RolesYPermisosAdmin.php');
        // require_once('Permisos/Carguedocu.php');
        require_once('RolesYPermisosPsicologo.php');
        require_once('RolesYPermisosSocial.php');
        require_once('RolesYPermisosCRelajado.php');
        require_once('RolesYPermisosEnfermeria.php');


        // crear roles y asignar los permisos
        Role::find(1)->givePermissionTo(Permission::all());

        require_once('RolesYPermisosPsiclinico.php');
        Role::find(8)->givePermissionTo([

            'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar', 'firesidencia-leer', 'firesidencia-crear',
            'firesidencia-editar', 'firesidencia-borrar', 'fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar',
            'fiactividades-borrar', 'fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar',
            'ficomposicion-leer', 'ficomposicion-crear', 'ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar',
            'ficonsumo-borrar', 'fisustanciaconsume-leer', 'fisustanciaconsume-crear', 'fisustanciaconsume-editar',
            'fisustanciaconsume-borrar', 'ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar',
            'fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar', 'fiingresos-leer',
            'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar', 'fijusticia-leer', 'fijusticia-crear',
            'fijusticia-editar', 'fijusticia-borrar', 'firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar',
            'fiobserva-leer', 'fiobserva-crear', 'fiobserva-editar', 'fiobserva-borrar',
            'fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar', 'fisituacion-leer', 'fisituacion-crear',
            'fisituacion-editar', 'fisituacion-borrar', 'fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar',
            'fiviolencia-borrar', 'firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar',
            'fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar', 'fiautorizacion-leer',
            'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar',
            'firedactual-leer', 'firedactual-crear', 'firedactual-editar',
            'firedactual-borrar', 'territorio-modulo'
        ]);

    }
}
