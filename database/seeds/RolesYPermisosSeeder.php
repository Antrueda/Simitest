<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesYPermisosSeeder extends Seeder
{
    public function getPermisos($dataxxxx)
    {
        $descripc = [
            'leer' => 'Permiso que permite ver y listar el contenido para: ',
            'crear' => 'Permiso que permite crear registro para: ',
            'editar' => 'Permiso que permite editar registro para: ',
            'borrar' => 'Permiso que permite inactivar registro para: ',
            'factorxx' => 'Permioso que permite ver los: ',
            'metaxxxx' => 'Permioso que permite ver las: ',
            'modulo' => 'Permioso que permite ver el menu de: ',
            'admin' => 'Permiso para administrar: ',
            'area-admin' => 'Permiso para administrar: ',
            'tipo-admin' => 'Permiso para administrar: ',
            'sub-tipo-admin' => 'Permiso para administrar: '
        ];
        foreach ($dataxxxx['permisos'] as $value) {
            Permission::create(['name' => $dataxxxx['permisox'] . '-' . $value, 'descripcion' => $descripc[$value] . $dataxxxx['compleme'], 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
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
        // crear permisos permiso
        $this->getPermisos(['permisox' => 'permiso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'permiso']);
        // crear permisos para rol
        $this->getPermisos(['permisox' => 'rolesxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Administracion de reles']);
        // crear permisos rol
        $this->getPermisos(['permisox' => 'permirol', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'permisos de un rol']);

        // crear permisos usuario
        $this->getPermisos(['permisox' => 'usuario', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'usuario']);
        /**
         * cabio de contraseña
         */
        $this->getPermisos(['permisox' => 'contrase', 'permisos' => ['editar'], 'compleme' => 'cambiar contraseña']);
        /** Crea permisos para cargos */
        $this->getPermisos(['permisox' => 'siscargo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'cargo']);
        // crear permisos persona
        $this->getPermisos(['permisox' => 'persona', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'personas']);

        // crear parámetros
        $this->getPermisos(['permisox' => 'parametro', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'parámetros']);
        // crear temas
        $this->getPermisos(['permisox' => 'tema', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'tema']);

        // crear ficha de ingreso
        $this->getPermisos(['permisox' => 'fichaIngreso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Ficha de Ingreso']);

        // crear ficha de dependencias
        $this->getPermisos(['permisox' => 'dependencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'dependencias']);

        /**
         * servicios que ofrece la dependencia
         */
        $this->getPermisos(['permisox' => 'servdepe', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Servicio-Dependencia']);
        /**
         * usuarios de la dependencia
         */

        $this->getPermisos(['permisox' => 'usuadepe', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Usuario-Dependencias']);
        // $this->getPermisos(['permisox' => 'usudepen', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'']);
        /**
         * areas del usuario
         */
        $this->getPermisos(['permisox' => 'areausua', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Usuario-Areas']);

        /**
         * reles del usuario
         */
        $this->getPermisos(['permisox' => 'roleusua', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Usuario-Roles']);

        // crear ficha de documentoFuente
        $this->getPermisos(['permisox' => 'documentoFuente', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Documentos Fuentes']);

        // crear ficha de entidades

        $this->getPermisos(['permisox' => 'entidad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Entidades']);

        // crear ficha de fiactividades
        $this->getPermisos(['permisox' => 'actividad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Actividades']);

        // crear ficha de Mapa de procesos
        $this->getPermisos(['permisox' => 'mapaProceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Mapa-Proceso']);

        // crear ficha de procesos
        $this->getPermisos(['permisox' => 'proceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Procesos']);

        // crear ficha de Actividad procesos
        $this->getPermisos(['permisox' => 'actividadProceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Actividad-Proceso']);

        //Crear areas para administración de indicadores
        $this->getPermisos(['permisox' => 'area', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Areas']);

        //Crear preguntas para administración de indicadores
        $this->getPermisos(['permisox' => 'inpreguntas', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Preguntas de indicadores']);

        /**
         * permisos para VSI
         */
        $this->getPermisos(['permisox' => 'vsinnajs', 'permisos' => ['leer'], 'compleme' => 'NNAJ de valoracion sicosocial']);

        $this->getPermisos(['permisox' => 'vsixxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Valoracion Sicosocial']);

        //Crear areas para VSI datos básicos
        $this->getPermisos(['permisox' => 'vsidabas', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Datos Básicos VSI']);

        //Crear areas para VSI razones datos básicos
        $this->getPermisos(['permisox' => 'vsidatbi', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Razones de Datos Basicos de VSI']);

        //Crear areas para VSI bienvenida
        $this->getPermisos(['permisox' => 'vsibienv', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Motivos de Viculación y Bienvenida de VSI']);

        //Crear areas para VSI violencia
        $this->getPermisos(['permisox' => 'vsiviole', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Violenciass y Condición Especial']);

        //Crear areas para VSI educación
        $this->getPermisos(['permisox' => 'vsieduca', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Educación VSI']);

        //Crear areas para VSI relaciones sociales
        $this->getPermisos(['permisox' => 'vsirelac', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Relasiones Sociales VSI']);

        //Crear areas para VSI salud
        $this->getPermisos(['permisox' => 'vsisalud', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Antecedentes de Salud']);

        //Crear areas para VSI Dinámica Familiar
        $this->getPermisos(['permisox' => 'vsidinam', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Dinámica Familiar VSI']);

        //Crear areas para VSI Dinámica Familiar padre
        $this->getPermisos(['permisox' => 'vsidfpad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Dinámica Familiar Padre VSI']);

        //Crear areas para VSI Dinámica Familiar madre
        $this->getPermisos(['permisox' => 'vsidfmad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Dinámica Familiar Madre VSI']);

        //Crear areas para VSI Relación Familiar
        $this->getPermisos(['permisox' => 'vsirefam', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Relaciones Familiares VSI']);

        //Crear areas para VSI Antecedentes
        $this->getPermisos(['permisox' => 'vsiantec', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Antecedentes VSI']);

        //Crear areas para VSI Generación de Ingresos
        $this->getPermisos(['permisox' => 'vsigener', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Generación de Ingresos VSI']);

        //Crear areas para VSI Presunto Abuso Sexual
        $this->getPermisos(['permisox' => 'vsiabuso', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Presunto Abuso Sexual VSI']);

        //Crear areas para VSI Redes Sociales y Apoyo
        $this->getPermisos(['permisox' => 'vsiredes', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Redes Sociales de Apoyo VSI']);

        //Crear areas para VSI Redes Sociales y Apoyo actuales
        $this->getPermisos(['permisox' => 'vsiredac', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes Sociales de Apoyo actuales VSI']);

        //Crear areas para VSI Redes Sociales y Apoyo antecedentes institucionales
        $this->getPermisos(['permisox' => 'vsiredpa', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes Sociales de Apoyo Antecedentes Institucionales VSI']);


        //Crear areas para VSI Situación Especial y ESCNNA
        $this->getPermisos(['permisox' => 'vsisitua', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Situación Especial y ESCNNA VSI']);

        //Crear areas para VSI Activación emocional
        $this->getPermisos(['permisox' => 'vsiactiv', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Activación Emosional VSI']);

        //Crear areas para VSI Estado emocional
        $this->getPermisos(['permisox' => 'vsiemoci', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Estado Emosional VSI']);

        //Crear areas para VSI Consumo de Sustancias Psicoactivas
        $this->getPermisos(['permisox' => 'vsiconsu', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Consumo de Sustacias Sicoactivas VSI']);

        //Crear areas para VSI Factores
        $this->getPermisos(['permisox' => 'vsifacto', 'permisos' => ['factorxx'], 'compleme' => 'Factores de VSI']);

        //Crear areas para VSI Factores protector
        $this->getPermisos(['permisox' => 'vsifacpr', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Factor Protector VSI']);

        //Crear areas para VSI Factores riesgo
        $this->getPermisos(['permisox' => 'vsifacri', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Factor Riesgo']);

        //permisos para las alertas
        $this->getPermisos(['permisox' => 'alertas', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Alertas']);


        //Crear areas para VSI Potencialidades y metas
        $this->getPermisos(['permisox' => 'vsimetas', 'permisos' => ['metaxxxx'], 'compleme' => 'Pencialidades y Metas VSI']);

        //Crear areas para VSI Potencialidades
        $this->getPermisos(['permisox' => 'vsimetpo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Potencialidades VSI']);

        //Crear areas para VSI metas
        $this->getPermisos(['permisox' => 'vsimetme', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Metas VSI']);

        //Crear areas para VSI Áreas de ajuste sicosocial
        $this->getPermisos(['permisox' => 'vsiareas', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Areas de Ajuste Sicosocial VSI']);

        //Crear areas para VSI concepto
        $this->getPermisos(['permisox' => 'vsisocia', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Impresión Diagnóstica y Análisis Social VSI']);

        //Crear areas para VSI consentimiento
        $this->getPermisos(['permisox' => 'vsiconse', 'permisos' => ['leer', 'crear', 'editar'], 'compleme' => 'Consentimiento Informado VSI']);


        //Crear permisos para fivestuario
        $this->getPermisos(['permisox' => 'fivestuario', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Vestuario FI']);

        //Crear permisos para firesidencia
        $this->getPermisos(['permisox' => 'firesidencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Residencia FI']);

        //Crear permisos para fiactividades de tiempo libre en FI
        $this->getPermisos(['permisox' => 'fiactividades', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Actividades de Tiempo Libre FI']);

        //Crear permisos para bienvenida de tiempo libre en FI
        $this->getPermisos(['permisox' => 'fibienvenida', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Bienvenida FI']);

        //Crear permisos para compsicion familiar de tiempo libre en FI
        $this->getPermisos(['permisox' => 'ficomposicion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Composición Familiar FI']);

        //Crear permisos para consumo en FI
        $this->getPermisos(['permisox' => 'ficonsumo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Consumo FI']);

        //Crear permisos para asignar las sustancias consumidas
        $this->getPermisos(['permisox' => 'fisustanciaconsume', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Sustancias Consumidas FI']);

        //Crear permisos para contacto en FI
        $this->getPermisos(['permisox' => 'ficontacto', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Contacto FI']);

        //Crear permisos para formacion en FI
        $this->getPermisos(['permisox' => 'fiformacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Formación FI']);

        //Crear permisos para ingresos en FI
        $this->getPermisos(['permisox' => 'fiingresos', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'FI']);

        //Crear permisos para justicia restaurativa en FI
        $this->getPermisos(['permisox' => 'fijusticia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Justicia Restaurativa FI']);

        //Crear permisos para razones para entrar al IDIPRON en FI
        $this->getPermisos(['permisox' => 'firazones', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Razones para Entrar al IDIPRON']);

        //Crear permisos para salud en FI
        $this->getPermisos(['permisox' => 'fisalud', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Salud FI']);

        //Crear permisos para situacion especial y ESCNNA en FI
        $this->getPermisos(['permisox' => 'fisituacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Situción Especial y ESCNNA FI']);

        //Crear permisos para violencia en FI
        $this->getPermisos(['permisox' => 'fiviolencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Violencia FI']);

        //Crear permisos para redes de apoyo en FI
        $this->getPermisos(['permisox' => 'firedapoyo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes de Apoyo FI']);

        //Crear   datos básicos para FI
        $this->getPermisos(['permisox' => 'fidatobasico', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Datos Básicos FI']);

        //Crear   datos básicos para FI
        $this->getPermisos(['permisox' => 'fiautorizacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Autorización FI']);



        //Crear areas para CSD datos básicos
        $this->getPermisos(['permisox' => 'csddatobasico', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Datos Básicos CSD']);

        //Crear areas para CSD violencia
        $this->getPermisos(['permisox' => 'csdviolencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Violencia CSD']);

        //Crear areas para CSD Situación Especial y ESCNNA
        $this->getPermisos(['permisox' => 'csdsituacionespecial', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Situación Especial y ESCNNA CSD']);

        //Crear areas para CSD Justicia Restaurativa
        $this->getPermisos(['permisox' => 'csdjusticia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Justicia Restaurativa CSD']);

        //Crear areas para CSD Motivos de Vinculación y Bienvenida
        $this->getPermisos(['permisox' => 'csdbienvenida', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Motivos de Vinculación y Bienvenidad CSD']);

        //Crear areas para CSD Alimentación de la familia
        $this->getPermisos(['permisox' => 'csdalimentacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Alimentación de la Familia CSD']);

        //Crear areas para CSD Composición Familiar
        $this->getPermisos(['permisox' => 'csdcomfamiliar', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Composición Familiar CSD']);

        //Crear areas para CSD conclusiones
        $this->getPermisos(['permisox' => 'csdconclusiones', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Conclusiones CSD']);

        //Crear areas para CSD Dinámica familiar
        $this->getPermisos(['permisox' => 'csddinfamiliar', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Dinámica Familiar CSD']);

        //Crear areas para CSD Residencia
        $this->getPermisos(['permisox' => 'csdresidencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Residencia CSD']);

        //Crear areas para CSD Generación de Ingresos
        $this->getPermisos(['permisox' => 'csdgeningresos', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Generación de Ingresos CSD']);

        //Crear areas para CSD Redes de Apoyo
        $this->getPermisos(['permisox' => 'csdredesapoyo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes de Apoyo CSD']);

        //Crear permisos para redes apoyo antecedentes
        $this->getPermisos(['permisox' => 'fiantecedentes', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes de Apoyo Antecedentes CSD']);

        //Crear permisos para redes apoyo actuales
        $this->getPermisos(['permisox' => 'firedactual', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Redes de Apoyo Actual CSD']);

        //Crear permisos para asignar los camponentes familiares que tengan enfermedades
        $this->getPermisos(['permisox' => 'fisaludenfermedad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Componentes Familiares que tengan enfermedades FI']);

        //Crear permisos para asignar los camponentes familiares con procesos judiciales
        $this->getPermisos(['permisox' => 'fiprocesojudicial', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'componentes con procesos judiciales FI']);

        //Crear datos básicos para Intervención Sicosocial
        $this->getPermisos(['permisox' => 'isintervencion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Intevension Sicosocial IS']);



        //Ficha de Observación y Seguimiento
        $this->getPermisos(['permisox' => 'fosfichaobservacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Ficha Observación y Seguimiento FOS']);

        /**
         * permisos para indicadores
         */
        // permisos para indicadores
        $this->getPermisos(['permisox' => 'indicador', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Indicadores IN']);

        // permisos para acciones gestion
        $this->getPermisos(['permisox' => 'inacciongestion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Acciones-Gestión IN']);

        // permisos para linea base
        $this->getPermisos(['permisox' => 'inlineabase', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Línea Base IN']);

        // // permisos para documentos fuente con el indicador
        // $this->getPermisos(['permisox' => 'indocindicador', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'Documentos del indicador']);

        // permisos para base fuente
        $this->getPermisos(['permisox' => 'inbasefuente', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Documentos de la línea base IN']);

        // permisos para grupos de linea base
        $this->getPermisos(['permisox' => 'grupliba', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Grupos de la línea base IN']);

        // // permisos para validaciones
        // $this->getPermisos(['permisox' => 'invalidacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'Preguntas de ']);

        // permisos para graficos individuales
        $this->getPermisos(['permisox' => 'inindividual', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Gráficos individuales individuales']);

        // permisos para graficos grupales
        $this->getPermisos(['permisox' => 'ingrupal', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Gráficos grupales indicadores']);

        // permisos para pestaña respuestas IN
        $this->getPermisos(['permisox' => 'inrespuesta', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'pestaña respuestas indicadores']);

        // permisos para pestaña documento fuente IN
        $this->getPermisos(['permisox' => 'inbasedocumen', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'pestaña documento fuente indicadores']);

        // $this->getPermisos(['permisox' => 'indiagnostico', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'']);

        // permisos para agregar componenete familiar a justicia restaurativa
        $this->getPermisos(['permisox' => 'fijrfamiliar', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'componente familiar que tiene problemas de justicia restaurativa FI']);
        /**
         * permisos para acciones grupales
         */

        $this->getPermisos(['permisox' => 'agtema', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Temas Acciones Grupales']);

        $this->getPermisos(['permisox' => 'agtaller', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Talleres Acciones Grupales']);

        $this->getPermisos(['permisox' => 'agsubtema', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Subtemas Acciones Grupales']);

        $this->getPermisos(['permisox' => 'agcontexto', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Contextos Acciones Grupales']);

        $this->getPermisos(['permisox' => 'agrecurso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Recursos Acciones Grupales']);

        $this->getPermisos(['permisox' => 'agconvenio', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Convenios Acciones Grupales']);

        $this->getPermisos(['permisox' => 'agactividad', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Actividades Acciones Grupales']);

        /**
         * Permisos para Acciones Individuales
         */
        $this->getPermisos(['permisox' => 'aiindex', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Acciones grupales']);

        // Permisos para AI Salida Mayores
        $this->getPermisos(['permisox' => 'aisalidamayores', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'salida de mayores acciones individuales(AI)']);

        // Permisos para AI Evasión
        $this->getPermisos(['permisox' => 'aievasion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Evasión acciones individuales(AI)']);

        // Permisos para AI Salida Menores
        $this->getPermisos(['permisox' => 'aisalidamenores', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Salida menores acciones individuales(AI)']);

        // Permisos para AI Retorno Salidas
        $this->getPermisos(['permisox' => 'airetornosalida', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Retorno salida acciones individuales(AI)']);

        $this->getPermisos(['permisox' => 'sistitulos', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Titulos SIS']);

        $this->getPermisos(['permisox' => 'depeluga', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Lugares-Dependencia']);

        $this->getPermisos(['permisox' => 'siseslug', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Slug SIS']);

        /**
         * premisos para los modulos
         */
        /** Módulo territorio */
        $this->getPermisos(['permisox' => 'territorio', 'permisos' => ['modulo'], 'compleme' => 'Territorio']);

        /** Módulo Acciones */
        $this->getPermisos(['permisox' => 'acciones', 'permisos' => ['modulo'], 'compleme' => 'Acciones']);

        /** Modulo Administración */
        $this->getPermisos(['permisox' => 'administracion', 'permisos' => ['modulo'], 'compleme' => 'Administración']);

        /** Módulo Indicadores */
        $this->getPermisos(['permisox' => 'indicadores', 'permisos' => ['modulo'], 'compleme' => 'Indicadores sultados']);

        // crear ficha de epss
        $this->getPermisos(['permisox' => 'eps', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Eps']);

        // // crear ficha indicadores/valoracion
        // $this->getPermisos(['permisox' => 'invaloracion', 'permisos' => ['leer', 'crear', 'editar', 'borrar'],'compleme'=>'']);

        //Creación de permisos para el módulo de Salud
        // $this->getPermisos(['permisox' => 'saludIndex', 'permisos' => ['leer'],'compleme'=>'']);

        // $this->getPermisos(['permisox' => 'mitigacionIndex', 'permisos' => ['leer'],'compleme'=>'']);

        // $this->getPermisos(['permisox' => 'vspaIndex', 'permisos' => ['leer'],'compleme'=>'']);

        //Creación de Permisos para VSPA
        $this->getPermisos(['permisox' => 'vspa', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Vspa']);

        //Creación de Permisos para VMA
        $this->getPermisos(['permisox' => 'vma', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Vma mitigación']);

        //Creación de Permisos para el crud de estados
        $this->getPermisos(['permisox' => 'sisesta', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Estados del sistemas']);

        //Creación de Permisos para Fsoporte
        $this->getPermisos(['permisox' => 'fsoporte', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'documentos fuentes para las actividade de indicadores']);

        Permission::create(['name' => 'intervención sicosocial especializada', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1, 'descripcion' => 'intervención sicosocial especializada']);

        //Permisos para Administración de FOS
        $this->getPermisos(['permisox' => 'fos', 'permisos' => ['admin', 'area-admin', 'tipo-admin', 'sub-tipo-admin'], 'compleme' => 'Administracion FOS']);

        $this->getPermisos(['permisox' => 'fostipo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Tipo FOS']);

        $this->getPermisos(['permisox' => 'fossubtipo', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Subtipo FOS']);

        //permisos para el cargue excel
        $this->getPermisos(['permisox' => 'excel', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'manejo de archivos excel']);

        // crear roles y asignar los permisos
        Role::create(['name' => 'super-administrador', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])->givePermissionTo(Permission::all());
        Role::create(['name' => 'administrador', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])->givePermissionTo([
            'vsinnajs-leer',
            'vsidatbi-leer', 'vsidatbi-crear', 'vsidatbi-editar', 'vsidatbi-borrar',

            'rolesxxx-leer', 'rolesxxx-crear', 'rolesxxx-editar', 'rolesxxx-borrar',
            'permirol-leer', 'permirol-crear', 'permirol-editar', 'permirol-borrar',
            'grupliba-leer', 'grupliba-crear', 'grupliba-editar', 'grupliba-borrar',
            'usuario-leer', 'usuario-crear', 'usuario-editar', 'usuario-borrar',
            'siscargo-leer', 'siscargo-crear', 'siscargo-editar', 'siscargo-borrar',
            'persona-leer', 'persona-crear', 'persona-editar', 'persona-borrar',
            'parametro-leer', 'parametro-crear', 'parametro-editar', 'parametro-borrar',
            'tema-leer', 'tema-crear', 'tema-editar', 'tema-borrar', 'fichaIngreso-leer',
            'fichaIngreso-crear', 'fichaIngreso-editar', 'fichaIngreso-borrar',
            'dependencia-leer', 'dependencia-crear', 'dependencia-editar', 'dependencia-borrar',
            'eps-leer', 'eps-crear', 'eps-editar', 'eps-borrar',
            'fsoporte-leer', 'fsoporte-crear', 'fsoporte-editar', 'fsoporte-borrar',
            'documentoFuente-leer', 'documentoFuente-crear', 'documentoFuente-editar', 'documentoFuente-borrar',
            'entidad-leer', 'entidad-crear', 'entidad-editar', 'entidad-borrar',
            'actividad-leer', 'actividad-crear', 'actividad-editar', 'actividad-borrar',
            'mapaProceso-leer', 'mapaProceso-crear', 'mapaProceso-editar', 'mapaProceso-borrar',
            'proceso-leer', 'proceso-crear', 'proceso-editar', 'proceso-borrar',
            'actividadProceso-leer', 'actividadProceso-crear', 'actividadProceso-editar', 'actividadProceso-borrar',
            'vsidabas-leer', 'vsidabas-crear', 'vsidabas-editar',
            'vsibienv-leer', 'vsibienv-crear', 'vsibienv-editar',
            'vsiviole-leer', 'vsiviole-crear', 'vsiviole-editar',
            'vsieduca-leer', 'vsieduca-crear', 'vsieduca-editar',
            'fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar',
            'firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar',
            'vsisalud-leer', 'vsisalud-crear', 'vsisalud-editar',
            'vsidfpad-leer', 'vsidfpad-crear', 'vsidfpad-editar', 'vsidfpad-borrar',
            'vsidfmad-leer', 'vsidfmad-crear', 'vsidfmad-editar', 'vsidfmad-borrar',


            'vsirefam-leer', 'vsirefam-crear', 'vsirefam-editar',
            'vsirelac-leer', 'vsirelac-crear', 'vsirelac-editar',
            'vsiconsu-leer', 'vsiconsu-crear', 'vsiconsu-editar',
            'fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar', 'fiactividades-borrar',
            'fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar',
            'ficomposicion-leer', 'ficomposicion-crear', 'ficomposicion-editar', 'ficomposicion-borrar',
            'ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar', 'ficonsumo-borrar',
            'ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar',
            'fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar',
            'fiingresos-leer', 'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar',
            'fijusticia-leer', 'fijusticia-crear', 'fijusticia-editar', 'fijusticia-borrar',
            'firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar',
            'firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar',
            'fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar',
            'fisituacion-leer', 'fisituacion-crear', 'fisituacion-editar', 'fisituacion-borrar',
            'fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar', 'fiviolencia-borrar',
            'vsiantec-leer', 'vsiantec-crear', 'vsiantec-editar',
            'vsigener-leer', 'vsigener-crear', 'vsigener-editar',
            'vsiactiv-leer', 'vsiactiv-crear', 'vsiactiv-editar',
            'vsiabuso-leer', 'vsiabuso-crear', 'vsiabuso-editar',
            'vsisitua-leer', 'vsisitua-crear', 'vsisitua-editar',
            'vsifacto-factorxx',
            'vsifacpr-leer', 'vsifacpr-crear', 'vsifacpr-editar', 'vsifacpr-borrar',
            'vsifacri-leer', 'vsifacri-crear', 'vsifacri-editar', 'vsifacri-borrar',
            'vsimetas-metaxxxx',
            'vsimetpo-leer', 'vsimetpo-crear', 'vsimetpo-editar', 'vsimetpo-borrar',
            'vsimetme-leer', 'vsimetme-crear', 'vsimetme-editar', 'vsimetme-borrar',

            'vsiredes-leer', 'vsiredes-crear', 'vsiredes-editar',
            'vsiredac-leer', 'vsiredac-crear', 'vsiredac-editar', 'vsiredac-borrar',
            'vsiredpa-leer', 'vsiredpa-crear', 'vsiredpa-editar', 'vsiredpa-borrar',

            'fidatobasico-leer', 'fidatobasico-crear', 'fidatobasico-editar', 'fidatobasico-borrar',
            'fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar',
            'vsiareas-leer', 'vsiareas-crear', 'vsiareas-editar',
            'vsisocia-leer', 'vsisocia-crear', 'vsisocia-editar',
            'vsiemoci-leer', 'vsiemoci-crear', 'vsiemoci-editar',
            'vsiconse-leer', 'vsiconse-crear', 'vsiconse-editar',
            //Consulta Social en Domicilio
            'csddatobasico-leer', 'csddatobasico-crear', 'csddatobasico-editar', 'csddatobasico-borrar',
            'csdviolencia-leer', 'csdviolencia-crear', 'csdviolencia-editar', 'csdviolencia-borrar',
            'csdsituacionespecial-leer', 'csdsituacionespecial-crear', 'csdsituacionespecial-editar', 'csdsituacionespecial-borrar',
            'csdjusticia-leer', 'csdjusticia-crear', 'csdjusticia-editar', 'csdjusticia-borrar',
            'csdbienvenida-leer', 'csdbienvenida-crear', 'csdbienvenida-editar', 'csdbienvenida-borrar',
            'csdalimentacion-leer', 'csdalimentacion-crear', 'csdalimentacion-editar', 'csdalimentacion-borrar',
            'csdconclusiones-leer', 'csdconclusiones-crear', 'csdconclusiones-editar', 'csdconclusiones-borrar',
            'csddinfamiliar-leer', 'csddinfamiliar-crear', 'csddinfamiliar-editar', 'csddinfamiliar-borrar',
            'csdcomfamiliar-leer', 'csdcomfamiliar-crear', 'csdcomfamiliar-editar', 'csdcomfamiliar-borrar',
            'csdresidencia-leer', 'csdresidencia-crear', 'csdresidencia-editar', 'csdresidencia-borrar',
            'csdgeningresos-leer', 'csdgeningresos-crear', 'csdgeningresos-editar', 'csdgeningresos-borrar',
            'csdredesapoyo-leer', 'csdredesapoyo-crear', 'csdredesapoyo-editar', 'csdredesapoyo-borrar',
            // ficha de ingreso
            'fiantecedentes-leer', 'fiantecedentes-crear', 'fiantecedentes-editar', 'fiantecedentes-borrar',
            'firedactual-leer', 'firedactual-crear', 'firedactual-editar', 'firedactual-borrar',
            'fisaludenfermedad-leer', 'fisaludenfermedad-crear', 'fisaludenfermedad-editar', 'fisaludenfermedad-borrar',
            'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
            'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
            'fisustanciaconsume-leer', 'fisustanciaconsume-crear', 'fisustanciaconsume-editar', 'fisustanciaconsume-borrar',
            // Intervencion Sicosocial
            'isintervencion-leer', 'isintervencion-crear', 'isintervencion-editar', 'isintervencion-borrar',
            // ficha de observacion y seguimiento
            'fosfichaobservacion-leer', 'fosfichaobservacion-crear', 'fosfichaobservacion-editar', 'fosfichaobservacion-borrar',
            // indicadores
            'indicador-leer', 'indicador-crear', 'indicador-editar', 'indicador-borrar',
            'area-leer', 'area-crear', 'area-editar', 'area-borrar',
            'inpreguntas-leer', 'inpreguntas-crear', 'inpreguntas-editar', 'inpreguntas-borrar',
            'inacciongestion-leer', 'inacciongestion-crear', 'inacciongestion-editar', 'inacciongestion-borrar',
            'inlineabase-leer', 'inlineabase-crear', 'inlineabase-editar', 'inlineabase-borrar',
            'inbasefuente-leer', 'inbasefuente-crear', 'inbasefuente-editar', 'inbasefuente-borrar',
            // 'indocindicador-leer', 'indocindicador-crear', 'indocindicador-editar', 'indocindicador-borrar',
            // 'invalidacion-leer', 'invalidacion-crear', 'invalidacion-editar', 'invalidacion-borrar',
            'inindividual-leer', 'inindividual-crear', 'inindividual-editar', 'inindividual-borrar',
            'ingrupal-leer', 'ingrupal-crear', 'ingrupal-editar', 'ingrupal-borrar',
            'inrespuesta-leer', 'inrespuesta-crear', 'inrespuesta-editar', 'inrespuesta-borrar',
            'inbasedocumen-leer', 'inbasedocumen-crear', 'inbasedocumen-editar', 'inbasedocumen-borrar',
            // 'invaloracion-leer', 'invaloracion-crear', 'invaloracion-editar', 'invaloracion-borrar',
            // permisos para agregar componenete familiar a justicia restaurativa
            'fijrfamiliar-leer', 'fijrfamiliar-crear', 'fijrfamiliar-editar', 'fijrfamiliar-borrar',
            'agtema-leer', 'agtema-crear', 'agtema-editar', 'agtema-borrar',
            'agtaller-leer', 'agtaller-crear', 'agtaller-editar', 'agtaller-borrar',
            'agsubtema-leer', 'agsubtema-crear', 'agsubtema-editar', 'agsubtema-borrar',
            'agcontexto-leer', 'agcontexto-crear', 'agcontexto-editar', 'agcontexto-borrar',
            'agrecurso-leer', 'agrecurso-crear', 'agrecurso-editar', 'agrecurso-borrar',
            'agconvenio-leer', 'agconvenio-crear', 'agconvenio-editar', 'agconvenio-borrar',
            'agactividad-leer', 'agactividad-crear', 'agactividad-editar', 'agactividad-borrar',
            // Asignación de permisos Acciones Individuales
            'aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar',
            'aisalidamayores-leer', 'aisalidamayores-crear', 'aisalidamayores-editar', 'aisalidamayores-borrar',
            'aievasion-leer', 'aievasion-crear', 'aievasion-editar', 'aievasion-borrar',
            'aisalidamenores-leer', 'aisalidamenores-crear', 'aisalidamenores-editar', 'aisalidamenores-borrar',
            'airetornosalida-leer', 'airetornosalida-crear', 'airetornosalida-editar', 'airetornosalida-borrar',
            //Asignación de permisos para el módulo de Salud
            // 'saludIndex-leer', 'mitigacionIndex-leer', 'vspaIndex-leer',
            //Asignación de permisos para VSPA
            'vspa-leer', 'vspa-crear', 'vspa-editar', 'vspa-borrar',
            'vma-leer', 'vma-crear', 'vma-editar', 'vma-borrar',
            'intervención sicosocial especializada',
            //Asignación de permisos para Administración de FOS
            'fos-admin', 'fos-area-admin', 'fos-tipo-admin', 'fos-sub-tipo-admin',
            'fostipo-leer', 'fostipo-crear', 'fostipo-editar', 'fostipo-borrar',
            'fossubtipo-leer', 'fossubtipo-crear', 'fossubtipo-editar', 'fossubtipo-borrar',
        ]);

        Role::create(['name' => 'PSICÓLOGO(A)', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])->givePermissionTo([
            'vsidabas-leer', 'vsidabas-crear', 'vsidabas-editar',
            'vsibienv-leer', 'vsibienv-crear', 'vsibienv-editar',

            'vsiviole-leer', 'vsiviole-crear', 'vsiviole-editar',
            'vsieduca-leer', 'vsieduca-crear', 'vsieduca-editar',
            'vsisalud-leer', 'vsisalud-crear', 'vsisalud-editar',
            'vsidinam-leer', 'vsidinam-crear', 'vsidinam-editar',
            'vsidfpad-leer', 'vsidfpad-crear', 'vsidfpad-editar', 'vsidfpad-borrar',
            'vsidfmad-leer', 'vsidfmad-crear', 'vsidfmad-editar', 'vsidfmad-borrar',
            'vsirefam-leer', 'vsirefam-crear', 'vsirefam-editar',
            'vsirelac-leer', 'vsirelac-crear', 'vsirelac-editar',
            'vsiconsu-leer', 'vsiconsu-crear', 'vsiconsu-editar',
            'vsiantec-leer', 'vsiantec-crear', 'vsiantec-editar',
            'vsigener-leer', 'vsigener-crear', 'vsigener-editar',
            'vsiactiv-leer', 'vsiactiv-crear', 'vsiactiv-editar',
            'vsiabuso-leer', 'vsiabuso-crear', 'vsiabuso-editar',
            'vsisitua-leer', 'vsisitua-crear', 'vsisitua-editar',
            'vsifacto-factorxx',
            'vsifacpr-leer', 'vsifacpr-crear', 'vsifacpr-editar', 'vsifacpr-borrar',
            'vsifacri-leer', 'vsifacri-crear', 'vsifacri-editar', 'vsifacri-borrar',
            'vsimetas-metaxxxx',
            'vsimetpo-leer', 'vsimetpo-crear', 'vsimetpo-editar', 'vsimetpo-borrar',
            'vsimetme-leer', 'vsimetme-crear', 'vsimetme-editar', 'vsimetme-borrar',
            'vsiredes-leer', 'vsiredes-crear', 'vsiredes-editar',
            'vsiredac-leer', 'vsiredac-crear', 'vsiredac-editar', 'vsiredac-borrar',
            'vsiredpa-leer', 'vsiredpa-crear', 'vsiredpa-editar', 'vsiredpa-borrar',
            'vsiareas-leer', 'vsiareas-crear', 'vsiareas-editar',
            'vsisocia-leer', 'vsisocia-crear', 'vsisocia-editar',
            'vsiemoci-leer', 'vsiemoci-crear', 'vsiemoci-editar',
            'vsiconse-leer', 'vsiconse-crear', 'vsiconse-editar',
            //Consulta Social en Domicilio
            'csddatobasico-leer', 'csddatobasico-crear', 'csddatobasico-editar', 'csddatobasico-borrar',
            'csdviolencia-leer', 'csdviolencia-crear', 'csdviolencia-editar', 'csdviolencia-borrar',
            'csdsituacionespecial-leer', 'csdsituacionespecial-crear', 'csdsituacionespecial-editar', 'csdsituacionespecial-borrar',
            'csdjusticia-leer', 'csdjusticia-crear', 'csdjusticia-editar', 'csdjusticia-borrar',
            'csdbienvenida-leer', 'csdbienvenida-crear', 'csdbienvenida-editar', 'csdbienvenida-borrar',
            'csdalimentacion-leer', 'csdalimentacion-crear', 'csdalimentacion-editar', 'csdalimentacion-borrar',
            'csdconclusiones-leer', 'csdconclusiones-crear', 'csdconclusiones-editar', 'csdconclusiones-borrar',
            'csddinfamiliar-leer', 'csddinfamiliar-crear', 'csddinfamiliar-editar', 'csddinfamiliar-borrar',
            'csdcomfamiliar-leer', 'csdcomfamiliar-crear', 'csdcomfamiliar-editar', 'csdcomfamiliar-borrar',
            'csdresidencia-leer', 'csdresidencia-crear', 'csdresidencia-editar', 'csdresidencia-borrar',
            'csdgeningresos-leer', 'csdgeningresos-crear', 'csdgeningresos-editar', 'csdgeningresos-borrar',
            'csdredesapoyo-leer', 'csdredesapoyo-crear', 'csdredesapoyo-editar', 'csdredesapoyo-borrar',
            // ficha de ingreso
            'fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar',
            'firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar',
            'fidatobasico-leer', 'fidatobasico-crear', 'fidatobasico-editar', 'fidatobasico-borrar',
            'fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar',
            'fichaIngreso-leer', 'fichaIngreso-crear', 'fichaIngreso-editar', 'fichaIngreso-borrar',
            'fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar', 'fiactividades-borrar',
            'fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar',
            'ficomposicion-leer', 'ficomposicion-crear', 'ficomposicion-editar', 'ficomposicion-borrar',
            'ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar', 'ficonsumo-borrar',
            'ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar',
            'fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar',
            'fiingresos-leer', 'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar',
            'fijusticia-leer', 'fijusticia-crear', 'fijusticia-editar', 'fijusticia-borrar',
            'firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar',
            'firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar',
            'fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar',
            'fisituacion-leer', 'fisituacion-crear', 'fisituacion-editar', 'fisituacion-borrar',
            'fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar', 'fiviolencia-borrar',
            'fiantecedentes-leer', 'fiantecedentes-crear', 'fiantecedentes-editar', 'fiantecedentes-borrar',
            'firedactual-leer', 'firedactual-crear', 'firedactual-editar', 'firedactual-borrar',
            'fisaludenfermedad-leer', 'fisaludenfermedad-crear', 'fisaludenfermedad-editar', 'fisaludenfermedad-borrar',
            'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
            'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
            'fisustanciaconsume-leer', 'fisustanciaconsume-crear', 'fisustanciaconsume-editar', 'fisustanciaconsume-borrar',
            // permisos para agregar componenete familiar a justicia restaurativa
            'fijrfamiliar-leer', 'fijrfamiliar-crear', 'fijrfamiliar-editar', 'fijrfamiliar-borrar',
            // Intervencion Sicosocial
            'isintervencion-leer', 'isintervencion-crear', 'isintervencion-editar', 'isintervencion-borrar',
            // ficha de observacion y seguimiento
            'fosfichaobservacion-leer', 'fosfichaobservacion-crear', 'fosfichaobservacion-editar', 'fosfichaobservacion-borrar',
            // Asignación de permisos Acciones Individuales
            'aiindex-leer', 'aiindex-crear', 'aiindex-editar', 'aiindex-borrar',
            'aisalidamayores-leer', 'aisalidamayores-crear', 'aisalidamayores-editar', 'aisalidamayores-borrar',
            'aievasion-leer', 'aievasion-crear', 'aievasion-editar', 'aievasion-borrar',
            'aisalidamenores-leer', 'aisalidamenores-crear', 'aisalidamenores-editar', 'aisalidamenores-borrar',
            'airetornosalida-leer', 'airetornosalida-crear', 'airetornosalida-editar', 'airetornosalida-borrar',
            'territorio-modulo'
        ]);


        Role::create(['name' => 'PSICÓLOGO(A) CLÍNICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])
            ->givePermissionTo(['intervención sicosocial especializada']);
        Role::create(['name' => 'PRUEBA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
        Role::create(['name' => 'aux_administrativo_territorio', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])
            ->givePermissionTo([
                'fichaIngreso-leer', 'fichaIngreso-crear', 'fichaIngreso-editar', 'fichaIngreso-borrar', 'fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar', 'firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar', 'fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar', 'fiactividades-borrar', 'fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar', 'ficomposicion-leer', 'ficomposicion-crear', 'ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar', 'ficonsumo-borrar', 'fisustanciaconsume-leer', 'fisustanciaconsume-crear', 'fisustanciaconsume-editar', 'fisustanciaconsume-borrar', 'ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar', 'fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar', 'fiingresos-leer', 'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar', 'fijusticia-leer', 'fijusticia-crear', 'fijusticia-editar', 'fijusticia-borrar', 'firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar', 'fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar', 'fisituacion-leer', 'fisituacion-crear', 'fisituacion-editar', 'fisituacion-borrar', 'fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar', 'fiviolencia-borrar', 'firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar', 'fidatobasico-leer', 'fidatobasico-crear', 'fidatobasico-editar', 'fidatobasico-borrar', 'fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar', 'fiantecedentes-leer', 'fiantecedentes-crear', 'fiantecedentes-editar', 'fiantecedentes-borrar', 'firedactual-leer', 'firedactual-crear', 'firedactual-editar', 'firedactual-borrar', 'territorio-modulo'
            ]);
    }
}
