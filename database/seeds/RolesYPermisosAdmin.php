<?php

        // crear permisos permiso
        $this->getPermisos(['permisox' => 'permiso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Permisos', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'diafesti', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Días festivos', 'pestania' => 1]);
        // crear permisos para rol
        $this->getPermisos(['permisox' => 'rolesxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Administracion de reles', 'pestania' => 1]);
        // crear permisos rol
        $this->getPermisos(['permisox' => 'permirol', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'permisos de un rol', 'pestania' => 1]);


        /**
         * Creación de Permisos para el crud de estados de los usuarios
         */
        $this->getPermisos(['permisox' => 'estausua', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Estados de los usuarios', 'pestania' => 1]);

        //Creación de Permisos para el crud de estados
        $this->getPermisos(['permisox' => 'sisesta', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Estados del sistemas', 'pestania' => 1]);


        /**
         * cabio de contraseña
         */

        $this->getPermisos(['permisox' => 'contrase', 'permisos' => ['editar'], 'compleme' => 'cambiar contraseña', 'pestania' => 1]);
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
        $this->getPermisos(['permisox' => 'vsinnajs', 'permisos' => ['leer'], 'compleme' => 'NNAJ de valoracion sicosocial', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'vsixxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Valoracion Sicosocial', 'pestania' => 1]);

        //Crear areas para VSI datos básicos
        $this->getPermisos(['permisox' => 'vsidabas', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Datos Básicos VSI', 'pestania' => 1]);

        //Crear areas para VSI razones datos básicos
        $this->getPermisos(['permisox' => 'vsidatbi', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Razones de Datos Basicos de VSI', 'pestania' => 1]);

        //Crear areas para VSI bienvenida
        $this->getPermisos(['permisox' => 'vsibienv', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Motivos de Viculación y Bienvenida de VSI', 'pestania' => 1]);

        //Crear areas para VSI violencia
        $this->getPermisos(['permisox' => 'vsiviole', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Violenciass y Condición Especial', 'pestania' => 1]);

        //Crear areas para VSI educación
        $this->getPermisos(['permisox' => 'vsieduca', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Educación VSI', 'pestania' => 1]);

        //Crear areas para VSI relaciones sociales
        $this->getPermisos(['permisox' => 'vsirelac', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Relasiones Sociales VSI', 'pestania' => 1]);

        //Crear areas para VSI salud
        $this->getPermisos(['permisox' => 'vsisalud', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Antecedentes de Salud', 'pestania' => 1]);

        //Crear areas para VSI Dinámica Familiar
        $this->getPermisos(['permisox' => 'vsidinam', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Dinámica Familiar VSI', 'pestania' => 1]);

        //Crear areas para VSI Dinámica Familiar padre
        $this->getPermisos(['permisox' => 'vsidfpad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Dinámica Familiar Padre VSI', 'pestania' => 1]);

        //Crear areas para VSI Dinámica Familiar madre
        $this->getPermisos(['permisox' => 'vsidfmad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Dinámica Familiar Madre VSI', 'pestania' => 1]);

        //Crear areas para VSI Relación Familiar
        $this->getPermisos(['permisox' => 'vsirefam', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Relaciones Familiares VSI', 'pestania' => 1]);

        //Crear areas para VSI Antecedentes
        $this->getPermisos(['permisox' => 'vsiantec', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Antecedentes VSI', 'pestania' => 1]);

        //Crear areas para VSI Generación de Ingresos
        $this->getPermisos(['permisox' => 'vsigener', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Generación de Ingresos VSI', 'pestania' => 1]);

        //Crear areas para VSI Presunto Abuso Sexual
        $this->getPermisos(['permisox' => 'vsiabuso', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Presunto Abuso Sexual VSI', 'pestania' => 1]);

        //Crear areas para VSI Redes Sociales y Apoyo
        $this->getPermisos(['permisox' => 'vsiredes', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Redes Sociales de Apoyo VSI', 'pestania' => 1]);

        //Crear areas para VSI Redes Sociales y Apoyo actuales
        $this->getPermisos(['permisox' => 'vsiredac', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes Sociales de Apoyo actuales VSI', 'pestania' => 1]);

        //Crear areas para VSI Redes Sociales y Apoyo antecedentes institucionales
        $this->getPermisos(['permisox' => 'vsiredpa', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes Sociales de Apoyo Antecedentes Institucionales VSI', 'pestania' => 1]);


        //Crear areas para VSI Situación Especial y ESCNNA
        $this->getPermisos(['permisox' => 'vsisitua', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Situación Especial y ESCNNA VSI', 'pestania' => 1]);

        //Crear areas para VSI Activación emocional
        $this->getPermisos(['permisox' => 'vsiactiv', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Activación Emosional VSI', 'pestania' => 1]);

        //Crear areas para VSI Estado emocional
        $this->getPermisos(['permisox' => 'vsiemoci', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Estado Emosional VSI', 'pestania' => 1]);

        //Crear areas para VSI Consumo de Sustancias Psicoactivas
        $this->getPermisos(['permisox' => 'vsiconsu', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Consumo de Sustacias Sicoactivas VSI', 'pestania' => 1]);

        //Crear areas para VSI Factores
        $this->getPermisos(['permisox' => 'vsifacto', 'permisos' => ['factorxx'], 'compleme' => 'Factores de VSI', 'pestania' => 1]);

        //Crear areas para VSI Factores protector
        $this->getPermisos(['permisox' => 'vsifacpr', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Factor Protector VSI', 'pestania' => 1]);

        //Crear areas para VSI Factores riesgo
        $this->getPermisos(['permisox' => 'vsifacri', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Factor Riesgo', 'pestania' => 1]);

        //permisos para las alertas
        $this->getPermisos(['permisox' => 'alertas', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Alertas', 'pestania' => 1]);


        //Crear areas para VSI Potencialidades y metas
        $this->getPermisos(['permisox' => 'vsimetas', 'permisos' => ['metaxxxx'], 'compleme' => 'Pencialidades y Metas VSI', 'pestania' => 1]);

        //Crear areas para VSI Potencialidades
        $this->getPermisos(['permisox' => 'vsimetpo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Potencialidades VSI', 'pestania' => 1]);

        //Crear areas para VSI metas
        $this->getPermisos(['permisox' => 'vsimetme', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Metas VSI', 'pestania' => 1]);

        //Crear areas para VSI Áreas de ajuste sicosocial
        $this->getPermisos(['permisox' => 'vsiareas', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Areas de Ajuste Sicosocial VSI', 'pestania' => 1]);

        //Crear areas para VSI concepto
        $this->getPermisos(['permisox' => 'vsisocia', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Impresión Diagnóstica y Análisis Social VSI', 'pestania' => 1]);

        //Crear areas para VSI consentimiento
        $this->getPermisos(['permisox' => 'vsiconse', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Consentimiento Informado VSI', 'pestania' => 1]);

        require_once('RolesYPermisosFi.php');



        //Crear areas para CSD datos básicos
        $this->getPermisos(['permisox' => 'csddatobasico', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Datos Básicos CSD', 'pestania' => 1]);

        //Crear areas para CSD violencia
        $this->getPermisos(['permisox' => 'csdviolencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Violencia CSD', 'pestania' => 1]);

        //Crear areas para CSD Situación Especial y ESCNNA
        $this->getPermisos(['permisox' => 'csdsituacionespecial', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Situación Especial y ESCNNA CSD', 'pestania' => 1]);

        //Crear areas para CSD Justicia Restaurativa
        $this->getPermisos(['permisox' => 'csdjusticia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Justicia Restaurativa CSD', 'pestania' => 1]);

        //Crear areas para CSD Motivos de Vinculación y Bienvenida
        $this->getPermisos(['permisox' => 'csdbienvenida', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Motivos de Vinculación y Bienvenidad CSD', 'pestania' => 1]);

        //Crear areas para CSD Alimentación de la familia
        $this->getPermisos(['permisox' => 'csdalimentacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Alimentación de la Familia CSD', 'pestania' => 1]);

        //Crear areas para CSD Composición Familiar
        $this->getPermisos(['permisox' => 'csdcomfamiliar', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Composición Familiar CSD', 'pestania' => 1]);

        //Crear areas para CSD conclusiones
        $this->getPermisos(['permisox' => 'csdconclusiones', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Conclusiones CSD', 'pestania' => 1]);

        //Crear areas para CSD Dinámica familiar
        $this->getPermisos(['permisox' => 'csddinfamiliar', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Dinámica Familiar CSD', 'pestania' => 1]);

        //Crear areas para CSD Residencia
        $this->getPermisos(['permisox' => 'csdresidencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Residencia CSD', 'pestania' => 1]);

        //Crear areas para CSD Generación de Ingresos
        $this->getPermisos(['permisox' => 'csdgeningresos', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Generación de Ingresos CSD', 'pestania' => 1]);

        //Crear areas para CSD Redes de Apoyo
        $this->getPermisos(['permisox' => 'csdredesapoyo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes de Apoyo CSD', 'pestania' => 1]);

        //Crear datos básicos para Intervención Sicosocial
        $this->getPermisos(['permisox' => 'isintervencion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Intevension Sicosocial IS', 'pestania' => 1]);



        //Ficha de Observación y Seguimiento
        $this->getPermisos(['permisox' => 'fosfichaobservacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Ficha Observación y Seguimiento FOS', 'pestania' => 1]);

        /**
         * permisos para indicadores
         */
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

        $this->getPermisos(['permisox' => 'agrecurso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Recursos Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agconvenio', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Convenios Acciones Grupales', 'pestania' => 1]);

        $this->getPermisos(['permisox' => 'agactividad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Actividades Acciones Grupales', 'pestania' => 1]);

        /**
         * Permisos para Acciones Individuales
         */
        $this->getPermisos(['permisox' => 'aiindex', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Acciones grupales', 'pestania' => 1]);

        // Permisos para AI Salida Mayores
        $this->getPermisos(['permisox' => 'aisalidamayores', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'salida de mayores acciones individuales(AI)', 'pestania' => 1]);

        // Permisos para AI Evasión
        $this->getPermisos(['permisox' => 'aievasion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Evasión acciones individuales(AI)', 'pestania' => 1]);

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
        