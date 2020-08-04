<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesYPermisosSeeder extends Seeder
{
    public function getPermisos($dataxxxx)
    {
        foreach ($dataxxxx['permisos'] as $value) {
            Permission::create(['name' => $dataxxxx['permisox'] . '-' . $value, 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
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
        $this->getPermisos(['permisox' => 'permiso', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);
        // crear permisos rol
        $this->getPermisos(['permisox' => 'rol', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear permisos usuario
        $this->getPermisos(['permisox' => 'usuario', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);
        /**
         * cabio de contraseña
         */
        $this->getPermisos(['permisox' => 'contrase', 'permisos' => ['editar']]);
        /** Crea permisos para cargos */
        $this->getPermisos(['permisox' => 'siscargo', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);
        // crear permisos persona
        $this->getPermisos(['permisox' => 'persona', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear parámetros
        $this->getPermisos(['permisox' => 'parametro', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);
        // crear temas
        $this->getPermisos(['permisox' => 'tema', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha de ingreso
        $this->getPermisos(['permisox' => 'fichaIngreso', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha de dependencias
        $this->getPermisos(['permisox' => 'dependencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        /**
         * servicios que ofrece la dependencia
         */
        $this->getPermisos(['permisox' => 'servdepe', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);
        /**
         * usuarios de la dependencia
         */

        $this->getPermisos(['permisox' => 'usuadepe', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);
        $this->getPermisos(['permisox' => 'usudepen', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);
        /**
         * areas del usuario
         */
        $this->getPermisos(['permisox' => 'areausua', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        /**
         * reles del usuario
         */
        $this->getPermisos(['permisox' => 'roleusua', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha de documentoFuente
        $this->getPermisos(['permisox' => 'documentoFuente', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha de entidades

        $this->getPermisos(['permisox' => 'entidad', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha de fiactividades
        $this->getPermisos(['permisox' => 'actividad', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha de Mapa de procesos
        $this->getPermisos(['permisox' => 'mapaProceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha de procesos
        $this->getPermisos(['permisox' => 'proceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha de Actividad procesos
        $this->getPermisos(['permisox' => 'actividadProceso', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para administración de indicadores
        $this->getPermisos(['permisox' => 'area', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear preguntas para administración de indicadores
        $this->getPermisos(['permisox' => 'inpreguntas', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        /**
         * permisos para VSI
         */
        $this->getPermisos(['permisox' => 'vsinnajs', 'permisos' => ['leer']]);

        $this->getPermisos(['permisox' => 'vsixxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para VSI datos básicos
        $this->getPermisos(['permisox' => 'vsidabas', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI bienvenida
        $this->getPermisos(['permisox' => 'vsibienv', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI violencia
        $this->getPermisos(['permisox' => 'vsiviole', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI educación
        $this->getPermisos(['permisox' => 'vsieduca', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI relaciones sociales
        $this->getPermisos(['permisox' => 'vsirelac', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI salud
        $this->getPermisos(['permisox' => 'vsisalud', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Dinámica Familiar
        $this->getPermisos(['permisox' => 'vsidinam', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Relación Familiar
        $this->getPermisos(['permisox' => 'vsirefam', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Antecedentes
        $this->getPermisos(['permisox' => 'vsiantec', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Generación de Ingresos
        $this->getPermisos(['permisox' => 'vsigener', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Presunto Abuso Sexual
        $this->getPermisos(['permisox' => 'vsiabuso', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Redes Sociales y Apoyo
        $this->getPermisos(['permisox' => 'vsiredes', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Situación Especial y ESCNNA
        $this->getPermisos(['permisox' => 'vsisitua', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Activación emocional
        $this->getPermisos(['permisox' => 'vsiactiv', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Estado emocional
        $this->getPermisos(['permisox' => 'vsiemoci', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Consumo de Sustancias Psicoactivas
        $this->getPermisos(['permisox' => 'vsiconsu', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Factores
        $this->getPermisos(['permisox' => 'vsifacto', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI Potencialidades y metas
        $this->getPermisos(['permisox' => 'vsimetas', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear permisos para fivestuario
        $this->getPermisos(['permisox' => 'fivestuario', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para firesidencia
        $this->getPermisos(['permisox' => 'firesidencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para fiactividades de tiempo libre en FI
        $this->getPermisos(['permisox' => 'fiactividades', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para bienvenida de tiempo libre en FI
        $this->getPermisos(['permisox' => 'fibienvenida', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para compsicion familiar de tiempo libre en FI
        $this->getPermisos(['permisox' => 'ficomposicion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para consumo en FI
        $this->getPermisos(['permisox' => 'ficonsumo', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para asignar las sustancias consumidas
        $this->getPermisos(['permisox' => 'fisustanciaconsume', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para contacto en FI
        $this->getPermisos(['permisox' => 'ficontacto', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para formacion en FI
        $this->getPermisos(['permisox' => 'fiformacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para ingresos en FI
        $this->getPermisos(['permisox' => 'fiingresos', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para justicia restaurativa en FI
        $this->getPermisos(['permisox' => 'fijusticia', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para razones para entrar al IDIPRON en FI
        $this->getPermisos(['permisox' => 'firazones', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para salud en FI
        $this->getPermisos(['permisox' => 'fisalud', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para situacion especial y ESCNNA en FI
        $this->getPermisos(['permisox' => 'fisituacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para violencia en FI
        $this->getPermisos(['permisox' => 'fiviolencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para redes de apoyo en FI
        $this->getPermisos(['permisox' => 'firedapoyo', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear   datos básicos para FI
        $this->getPermisos(['permisox' => 'fidatobasico', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear   datos básicos para FI
        $this->getPermisos(['permisox' => 'fiautorizacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para VSI Áreas de ajuste sicosocial
        $this->getPermisos(['permisox' => 'vsiareas', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI concepto
        $this->getPermisos(['permisox' => 'vsisocia', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para VSI consentimiento
        $this->getPermisos(['permisox' => 'vsiconse', 'permisos' => ['leer', 'crear', 'editar']]);

        //Crear areas para CSD datos básicos
        $this->getPermisos(['permisox' => 'csddatobasico', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD violencia
        $this->getPermisos(['permisox' => 'csdviolencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Situación Especial y ESCNNA
        $this->getPermisos(['permisox' => 'csdsituacionespecial', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Justicia Restaurativa
        $this->getPermisos(['permisox' => 'csdjusticia', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Motivos de Vinculación y Bienvenida
        $this->getPermisos(['permisox' => 'csdbienvenida', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Alimentación de la familia
        $this->getPermisos(['permisox' => 'csdalimentacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Composición Familiar
        $this->getPermisos(['permisox' => 'csdcomfamiliar', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Alimentación de la familia
        $this->getPermisos(['permisox' => 'csdconclusiones', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Dinámica familiar
        $this->getPermisos(['permisox' => 'csddinfamiliar', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Residencia
        $this->getPermisos(['permisox' => 'csdresidencia', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Generación de Ingresos
        $this->getPermisos(['permisox' => 'csdgeningresos', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear areas para CSD Redes de Apoyo
        $this->getPermisos(['permisox' => 'csdredesapoyo', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para redes apoyo antecedentes
        $this->getPermisos(['permisox' => 'fiantecedentes', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para redes apoyo actuales
        $this->getPermisos(['permisox' => 'firedactual', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear datos básicos para Intervención Sicosocial
        $this->getPermisos(['permisox' => 'isintervencion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para asignar los camponentes familiares que tengan enfermedades
        $this->getPermisos(['permisox' => 'fisaludenfermedad', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Crear permisos para asignar los camponentes familiares con procesos judiciales
        $this->getPermisos(['permisox' => 'fiprocesojudicial', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Ficha de Observación y Seguimiento
        $this->getPermisos(['permisox' => 'fosfichaobservacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        /**
         * permisos para indicadores
         */
        // permisos para indicadores
        $this->getPermisos(['permisox' => 'indicador', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para acciones gestion
        $this->getPermisos(['permisox' => 'inacciongestion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para linea base
        $this->getPermisos(['permisox' => 'inlineabase', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para documentos fuente con el indicador
        $this->getPermisos(['permisox' => 'indocindicador', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para base fuente
        $this->getPermisos(['permisox' => 'inbasefuente', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para grupos de linea base
        $this->getPermisos(['permisox' => 'grupliba', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para validaciones
        $this->getPermisos(['permisox' => 'invalidacion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para graficos individuales
        $this->getPermisos(['permisox' => 'inindividual', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para graficos grupales
        $this->getPermisos(['permisox' => 'ingrupal', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para graficos grupales
        $this->getPermisos(['permisox' => 'inrespuesta', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para graficos grupales
        $this->getPermisos(['permisox' => 'inbasedocumen', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'indiagnostico', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // permisos para agregar componenete familiar a justicia restaurativa
        $this->getPermisos(['permisox' => 'fijrfamiliar', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);
        /**
         * permisos para acciones grupales
         */

        $this->getPermisos(['permisox' => 'agtema', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'agtaller', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'agsubtema', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'agcontexto', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'agrecurso', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'agconvenio', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'agactividad', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        /**
         * Permisos para Acciones Individuales
         */
        $this->getPermisos(['permisox' => 'aiindex', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // Permisos para AI Salida Mayores
        $this->getPermisos(['permisox' => 'aisalidamayores', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // Permisos para AI Evasión
        $this->getPermisos(['permisox' => 'aievasion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // Permisos para AI Salida Menores
        $this->getPermisos(['permisox' => 'aisalidamenores', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // Permisos para AI Retorno Salidas
        $this->getPermisos(['permisox' => 'airetornosalida', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'sistitulos', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'depeluga', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        $this->getPermisos(['permisox' => 'siseslug', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        /**
         * premisos para los modulos
         */
        /** Módulo territorio */
        $this->getPermisos(['permisox' => 'territorio', 'permisos' => ['modulo']]);

        /** Módulo Acciones */
        $this->getPermisos(['permisox' => 'acciones', 'permisos' => ['modulo']]);

        /** Modulo Administración */
        $this->getPermisos(['permisox' => 'administracion', 'permisos' => ['modulo']]);

        /** Módulo Indicadores */
        $this->getPermisos(['permisox' => 'indicadores', 'permisos' => ['modulo']]);

        // crear ficha de epss
        $this->getPermisos(['permisox' => 'eps', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        // crear ficha indicadores/valoracion
        $this->getPermisos(['permisox' => 'invaloracion', 'permisos' => ['leer', 'crear', 'editar', 'borrar']]);

        //Creación de permisos para el módulo de Salud
        $this->getPermisos(['permisox' => 'saludIndex', 'permisos' => ['leer']]);

        $this->getPermisos(['permisox' => 'mitigacionIndex', 'permisos' => ['leer']]);

        $this->getPermisos(['permisox' => 'vspaIndex', 'permisos' => ['leer']]);

        //Creación de Permisos para VSPA
        $this->getPermisos(['permisox'=>'vspa','permisos'=>['leer','crear','editar','borrar']]);

        //Creación de Permisos para VMA
        $this->getPermisos(['permisox'=>'vma','permisos'=>['leer','crear','editar','borrar']]);

        //Creación de Permisos para el crud de estados
        $this->getPermisos(['permisox'=>'sisesta','permisos'=>['leer','crear','editar','borrar']]);

        //Creación de Permisos para Fsoporte
        $this->getPermisos(['permisox'=>'fsoporte','permisos'=>['leer','crear','editar','borrar']]);

        Permission::create(['name' => 'intervención sicosocial especializada', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

        //Permisos para Administración de FOS
        $this->getPermisos(['permisox'=>'fos','permisos'=>['admin','area-admin','tipo-admin','sub-tipo-admin']]);

        $this->getPermisos(['permisox'=>'fostipo','permisos'=>['leer','crear','editar','borrar']]);

        $this->getPermisos(['permisox'=>'fossubtipo','permisos'=>['leer','crear','editar','borrar']]);

        //permisos para el cargue excel
        $this->getPermisos(['permisox'=>'excel','permisos'=>['leer','crear','editar','borrar']]);

        // crear roles y asignar los permisos
        Role::create(['name' => 'super-administrador', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])->givePermissionTo(Permission::all());
        Role::create(['name' => 'administrador', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])->givePermissionTo([
            'rol-leer', 'rol-crear', 'rol-editar', 'rol-borrar',
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
            'vsidinam-leer', 'vsidinam-crear', 'vsidinam-editar',
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
            'vsifacto-leer', 'vsifacto-crear', 'vsifacto-editar',
            'vsimetas-leer', 'vsimetas-crear', 'vsimetas-editar',
            'vsiredes-leer', 'vsiredes-crear', 'vsiredes-editar',
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
            'indocindicador-leer', 'indocindicador-crear', 'indocindicador-editar', 'indocindicador-borrar',
            'invalidacion-leer', 'invalidacion-crear', 'invalidacion-editar', 'invalidacion-borrar',
            'inindividual-leer', 'inindividual-crear', 'inindividual-editar', 'inindividual-borrar',
            'ingrupal-leer', 'ingrupal-crear', 'ingrupal-editar', 'ingrupal-borrar',
            'inrespuesta-leer', 'inrespuesta-crear', 'inrespuesta-editar', 'inrespuesta-borrar',
            'inbasedocumen-leer', 'inbasedocumen-crear', 'inbasedocumen-editar', 'inbasedocumen-borrar',
            'invaloracion-leer', 'invaloracion-crear', 'invaloracion-editar', 'invaloracion-borrar',
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
            'saludIndex-leer', 'mitigacionIndex-leer', 'vspaIndex-leer',
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
            'vsirefam-leer', 'vsirefam-crear', 'vsirefam-editar',
            'vsirelac-leer', 'vsirelac-crear', 'vsirelac-editar',
            'vsiconsu-leer', 'vsiconsu-crear', 'vsiconsu-editar',
            'vsiantec-leer', 'vsiantec-crear', 'vsiantec-editar',
            'vsigener-leer', 'vsigener-crear', 'vsigener-editar',
            'vsiactiv-leer', 'vsiactiv-crear', 'vsiactiv-editar',
            'vsiabuso-leer', 'vsiabuso-crear', 'vsiabuso-editar',
            'vsisitua-leer', 'vsisitua-crear', 'vsisitua-editar',
            'vsifacto-leer', 'vsifacto-crear', 'vsifacto-editar',
            'vsimetas-leer', 'vsimetas-crear', 'vsimetas-editar',
            'vsiredes-leer', 'vsiredes-crear', 'vsiredes-editar',
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
                'fichaIngreso-leer',
                'fichaIngreso-leer', 'fichaIngreso-crear', 'fichaIngreso-editar', 'fichaIngreso-borrar', 'fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar', 'firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar', 'fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar', 'fiactividades-borrar', 'fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar', 'ficomposicion-leer', 'ficomposicion-crear', 'ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar', 'ficonsumo-borrar', 'fisustanciaconsume-leer', 'fisustanciaconsume-crear', 'fisustanciaconsume-editar', 'fisustanciaconsume-borrar', 'ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar', 'fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar', 'fiingresos-leer', 'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar', 'fijusticia-leer', 'fijusticia-crear', 'fijusticia-editar', 'fijusticia-borrar', 'firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar', 'fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar', 'fisituacion-leer', 'fisituacion-crear', 'fisituacion-editar', 'fisituacion-borrar', 'fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar', 'fiviolencia-borrar', 'firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar', 'fidatobasico-leer', 'fidatobasico-crear', 'fidatobasico-editar', 'fidatobasico-borrar', 'fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar', 'fiantecedentes-leer', 'fiantecedentes-crear', 'fiantecedentes-editar', 'fiantecedentes-borrar', 'firedactual-leer', 'firedactual-crear', 'firedactual-editar', 'firedactual-borrar', 'territorio-modulo'
            ]);
    }
}
