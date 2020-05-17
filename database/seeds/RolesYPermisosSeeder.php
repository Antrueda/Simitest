<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesYPermisosSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {

    // Restablecer roles y permisos en caché
    app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
    // crear permisos permiso
    Permission::create(['name' => 'permiso-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'permiso-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'permiso-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'permiso-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear permisos rol
    Permission::create(['name' => 'rol-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'rol-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'rol-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'rol-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear permisos usuario
    Permission::create(['name' => 'usuario-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'usuario-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'usuario-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'usuario-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    /** Crea permisos para cargos */
    Permission::create(['name' => 'siscargo-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'siscargo-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'siscargo-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'siscargo-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear permisos persona
    Permission::create(['name' => 'persona-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'persona-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'persona-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'persona-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear parámetros
    Permission::create(['name' => 'parametro-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'parametro-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'parametro-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'parametro-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear temas
    Permission::create(['name' => 'tema-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'tema-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'tema-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'tema-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de ingreso
    Permission::create(['name' => 'fichaIngreso-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fichaIngreso-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fichaIngreso-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fichaIngreso-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de dependencias
    Permission::create(['name' => 'dependencia-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'dependencia-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'dependencia-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'dependencia-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de documentoFuente
    Permission::create(['name' => 'documentoFuente-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'documentoFuente-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'documentoFuente-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'documentoFuente-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de entidades
    Permission::create(['name' => 'entidad-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'entidad-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'entidad-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'entidad-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de fiactividades
    Permission::create(['name' => 'actividad-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'actividad-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'actividad-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'actividad-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de Mapa de procesos
    Permission::create(['name' => 'mapaProceso-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'mapaProceso-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'mapaProceso-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'mapaProceso-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de procesos
    Permission::create(['name' => 'proceso-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'proceso-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'proceso-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'proceso-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de Actividad procesos
    Permission::create(['name' => 'actividadProceso-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'actividadProceso-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'actividadProceso-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'actividadProceso-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para administración de indicadores
    Permission::create(['name' => 'area-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'area-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'area-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'area-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear preguntas para administración de indicadores
    Permission::create(['name' => 'inpreguntas-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inpreguntas-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inpreguntas-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inpreguntas-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI datos básicos
    Permission::create(['name' => 'vsidatobasico-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsidatobasico-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsidatobasico-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsidatobasico-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI bienvenida
    Permission::create(['name' => 'vsibienvenida-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsibienvenida-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsibienvenida-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsibienvenida-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI violencia
    Permission::create(['name' => 'vsiviolencia-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiviolencia-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiviolencia-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiviolencia-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI educación
    Permission::create(['name' => 'vsieducacion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsieducacion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsieducacion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsieducacion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI relaciones sociales
    Permission::create(['name' => 'vsirelsocial-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsirelsocial-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsirelsocial-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsirelsocial-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para fivestuario
    Permission::create(['name' => 'fivestuario-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fivestuario-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fivestuario-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fivestuario-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para firesidencia
    Permission::create(['name' => 'firesidencia-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firesidencia-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firesidencia-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firesidencia-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI salud
    Permission::create(['name' => 'vsisalud-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsisalud-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsisalud-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsisalud-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Dinámica Familiar
    Permission::create(['name' => 'vsidinfamiliar-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsidinfamiliar-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsidinfamiliar-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsidinfamiliar-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Relación Familiar
    Permission::create(['name' => 'vsirelfamiliar-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsirelfamiliar-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsirelfamiliar-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsirelfamiliar-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para fiactividades de tiempo libre en FI
    Permission::create(['name' => 'fiactividades-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiactividades-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiactividades-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiactividades-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para bienvenida de tiempo libre en FI
    Permission::create(['name' => 'fibienvenida-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fibienvenida-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fibienvenida-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fibienvenida-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para compsicion familiar de tiempo libre en FI
    Permission::create(['name' => 'ficomposicion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficomposicion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficomposicion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficomposicion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para consumo en FI
    Permission::create(['name' => 'ficonsumo-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficonsumo-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficonsumo-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficonsumo-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para asignar las sustancias consumidas
    Permission::create(['name' => 'fisustanciaconsume-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisustanciaconsume-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisustanciaconsume-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisustanciaconsume-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para contacto en FI
    Permission::create(['name' => 'ficontacto-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficontacto-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficontacto-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ficontacto-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    //Crear permisos para formacion en FI
    Permission::create(['name' => 'fiformacion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiformacion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiformacion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiformacion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para ingresos en FI
    Permission::create(['name' => 'fiingresos-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiingresos-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiingresos-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiingresos-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para justicia restaurativa en FI
    Permission::create(['name' => 'fijusticia-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fijusticia-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fijusticia-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fijusticia-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para razones para entrar al IDIPRON en FI
    Permission::create(['name' => 'firazones-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firazones-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firazones-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firazones-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para salud en FI
    Permission::create(['name' => 'fisalud-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisalud-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisalud-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisalud-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para situacion especial y ESCNNA en FI
    Permission::create(['name' => 'fisituacion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisituacion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisituacion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisituacion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para violencia en FI
    Permission::create(['name' => 'fiviolencia-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiviolencia-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiviolencia-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiviolencia-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para redes de apoyo en FI
    Permission::create(['name' => 'firedapoyo-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firedapoyo-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firedapoyo-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firedapoyo-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Antecedentes
    Permission::create(['name' => 'vsiantecedente-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiantecedente-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiantecedente-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiantecedente-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Generación de Ingresos
    Permission::create(['name' => 'vsigeningresos-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsigeningresos-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsigeningresos-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsigeningresos-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Presunto Abuso Sexual
    Permission::create(['name' => 'vsipresabusosexual-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsipresabusosexual-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsipresabusosexual-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsipresabusosexual-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Redes Sociales y Apoyo
    Permission::create(['name' => 'vsiredesapoyo-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiredesapoyo-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiredesapoyo-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiredesapoyo-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Situación Especial y ESCNNA
    Permission::create(['name' => 'vsisituacionespecial-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsisituacionespecial-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsisituacionespecial-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsisituacionespecial-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Activación emocional
    Permission::create(['name' => 'vsiactemocional-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiactemocional-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiactemocional-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiactemocional-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Estado emocional
    Permission::create(['name' => 'vsiestemocional-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiestemocional-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiestemocional-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiestemocional-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Consumo de Sustancias Psicoactivas
    Permission::create(['name' => 'vsiconsumo-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconsumo-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconsumo-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconsumo-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Factores
    Permission::create(['name' => 'vsifactor-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsifactor-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsifactor-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsifactor-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Potencialidades y metas
    Permission::create(['name' => 'vsimeta-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsimeta-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsimeta-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsimeta-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear   datos básicos para FI
    Permission::create(['name' => 'fidatobasico-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fidatobasico-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fidatobasico-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fidatobasico-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear   datos básicos para FI
    Permission::create(['name' => 'fiautorizacion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiautorizacion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiautorizacion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiautorizacion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI Áreas de ajuste sicosocial
    Permission::create(['name' => 'vsiareaajuste-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiareaajuste-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiareaajuste-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiareaajuste-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI concepto
    Permission::create(['name' => 'vsiconcepto-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconcepto-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconcepto-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconcepto-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para VSI consentimiento
    Permission::create(['name' => 'vsiconsentimiento-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconsentimiento-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconsentimiento-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vsiconsentimiento-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD datos básicos
    Permission::create(['name' => 'csddatobasico-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csddatobasico-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csddatobasico-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csddatobasico-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD violencia
    Permission::create(['name' => 'csdviolencia-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdviolencia-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdviolencia-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdviolencia-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Situación Especial y ESCNNA
    Permission::create(['name' => 'csdsituacionespecial-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdsituacionespecial-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdsituacionespecial-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdsituacionespecial-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Justicia Restaurativa
    Permission::create(['name' => 'csdjusticia-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdjusticia-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdjusticia-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdjusticia-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Motivos de Vinculación y Bienvenida
    Permission::create(['name' => 'csdbienvenida-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdbienvenida-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdbienvenida-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdbienvenida-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Alimentación de la familia
    Permission::create(['name' => 'csdalimentacion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdalimentacion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdalimentacion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdalimentacion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Composición Familiar
    Permission::create(['name' => 'csdcomfamiliar-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdcomfamiliar-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdcomfamiliar-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdcomfamiliar-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Alimentación de la familia
    Permission::create(['name' => 'csdconclusiones-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdconclusiones-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdconclusiones-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdconclusiones-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Dinámica familiar
    Permission::create(['name' => 'csddinfamiliar-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csddinfamiliar-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csddinfamiliar-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csddinfamiliar-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Residencia
    Permission::create(['name' => 'csdresidencia-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdresidencia-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdresidencia-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdresidencia-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Generación de Ingresos
    Permission::create(['name' => 'csdgeningresos-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdgeningresos-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdgeningresos-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdgeningresos-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear areas para CSD Redes de Apoyo
    Permission::create(['name' => 'csdredesapoyo-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdredesapoyo-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdredesapoyo-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'csdredesapoyo-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para redes apoyo antecedentes
    Permission::create(['name' => 'fiantecedentes-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiantecedentes-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiantecedentes-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiantecedentes-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para redes apoyo actuales
    Permission::create(['name' => 'firedactual-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firedactual-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firedactual-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'firedactual-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear datos básicos para Intervención Sicosocial
    Permission::create(['name' => 'isintervencion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'isintervencion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'isintervencion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'isintervencion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para asignar los camponentes familiares que tengan enfermedades
    Permission::create(['name' => 'fisaludenfermedad-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisaludenfermedad-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisaludenfermedad-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fisaludenfermedad-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Crear permisos para asignar los camponentes familiares con procesos judiciales
    Permission::create(['name' => 'fiprocesojudicial-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiprocesojudicial-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiprocesojudicial-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fiprocesojudicial-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Ficha de Observación y Seguimiento
    Permission::create(['name' => 'fosfichaobservacion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fosfichaobservacion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fosfichaobservacion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fosfichaobservacion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // indicadores
    // permisos para indicadores
    Permission::create(['name' => 'indicador-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indicador-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indicador-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indicador-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    // permisos para acciones gestion
    Permission::create(['name' => 'inacciongestion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inacciongestion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inacciongestion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inacciongestion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    // permisos para linea base
    Permission::create(['name' => 'inlineabase-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inlineabase-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inlineabase-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inlineabase-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    // permisos para documentos fuente con el indicador
    Permission::create(['name' => 'indocindicador-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indocindicador-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indocindicador-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indocindicador-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    // permisos para base fuente
    Permission::create(['name' => 'inbasefuente-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inbasefuente-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inbasefuente-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inbasefuente-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // permisos para grupos de linea base
    $grupliba='grupliba';
    Permission::create(['name' =>  $grupliba.'-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' =>  $grupliba.'-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' =>  $grupliba.'-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' =>  $grupliba.'-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    // permisos para validaciones
    Permission::create(['name' => 'invalidacion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'invalidacion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'invalidacion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'invalidacion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // permisos para graficos individuales
    Permission::create(['name' => 'inindividual-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inindividual-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inindividual-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inindividual-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // permisos para graficos grupales
    Permission::create(['name' => 'ingrupal-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ingrupal-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ingrupal-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'ingrupal-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // permisos para graficos grupales
    Permission::create(['name' => 'inrespuesta-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inrespuesta-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inrespuesta-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inrespuesta-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    // permisos para graficos grupales

    Permission::create(['name' => 'inbasedocumen-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inbasedocumen-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inbasedocumen-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'inbasedocumen-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    Permission::create(['name' => 'indiagnostico-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indiagnostico-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indiagnostico-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'indiagnostico-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // permisos para agregar componenete familiar a justicia restaurativa
    Permission::create(['name' => 'fijrfamiliar-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fijrfamiliar-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fijrfamiliar-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fijrfamiliar-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // permisos para acciones grupales

    Permission::create(['name' => 'agtema-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agtema-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agtema-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agtema-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    Permission::create(['name' => 'agtaller-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agtaller-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agtaller-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agtaller-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    Permission::create(['name' => 'agsubtema-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agsubtema-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agsubtema-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agsubtema-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    Permission::create(['name' => 'agcontexto-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agcontexto-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agcontexto-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agcontexto-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    Permission::create(['name' => 'agrecurso-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agrecurso-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agrecurso-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agrecurso-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    Permission::create(['name' => 'agconvenio-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agconvenio-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agconvenio-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agconvenio-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    Permission::create(['name' => 'agactividad-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agactividad-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agactividad-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'agactividad-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // Permisos para Acciones Individuales
    Permission::create(['name' => 'aiindex-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aiindex-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aiindex-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aiindex-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // Permisos para AI Salida Mayores
    Permission::create(['name' => 'aisalidamayores-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aisalidamayores-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aisalidamayores-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aisalidamayores-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // Permisos para AI Evasión
    Permission::create(['name' => 'aievasion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aievasion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aievasion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aievasion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // Permisos para AI Salida Menores
    Permission::create(['name' => 'aisalidamenores-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aisalidamenores-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aisalidamenores-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'aisalidamenores-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // Permisos para AI Retorno Salidas
    Permission::create(['name' => 'airetornosalida-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'airetornosalida-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'airetornosalida-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'airetornosalida-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);



// Permisos para AI Retorno Salidas
Permission::create(['name' => 'sistitulos-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'sistitulos-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'sistitulos-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'sistitulos-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);


// Permisos para AI Retorno Salidas
Permission::create(['name' => 'depeluga-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'depeluga-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'depeluga-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'depeluga-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);


// Permisos para AI Retorno Salidas
Permission::create(['name' => 'siseslug-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'siseslug-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'siseslug-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
Permission::create(['name' => 'siseslug-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);









    // Permisos para que se visualicen los módulos en el menú izquierdo
    /** Módulo territorio */
    Permission::create(['name' => 'territorio-modulo', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    /** Módulo Acciones */
    Permission::create(['name' => 'acciones-modulo', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    /** Modulo Administración */
    Permission::create(['name' => 'administracion-modulo', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    /** Módulo Indicadores */
    Permission::create(['name' => 'indicadores-modulo', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha de epss
    Permission::create(['name' => 'eps-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'eps-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'eps-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'eps-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    // crear ficha indicadores/valoracion
    Permission::create(['name' => 'invaloracion-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'invaloracion-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'invaloracion-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'invaloracion-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Creación de permisos para el módulo de Salud
    Permission::create(['name' => 'saludIndex-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'mitigacionIndex-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vspaIndex-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Creación de Permisos para VSPA
    Permission::create(['name' => 'vspa-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vspa-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vspa-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vspa-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Creación de Permisos para VMA
    Permission::create(['name' => 'vma-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vma-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vma-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'vma-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Creación de Permisos para el crud de estados
    Permission::create(['name' => 'sisesta-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'sisesta-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'sisesta-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'sisesta-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Creación de Permisos para Fsoporte
    Permission::create(['name' => 'fsoporte-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fsoporte-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fsoporte-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fsoporte-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'intervención sicosocial especializada', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

    //Permisos para Administración de FOS
    Permission::create(['name' => 'fos-admin', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fos-area-admin', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fos-tipo-admin', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fos-sub-tipo-admin', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fostipo-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fostipo-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fostipo-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fostipo-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fossubtipo-leer', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fossubtipo-crear', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fossubtipo-editar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Permission::create(['name' => 'fossubtipo-borrar', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);

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
        'vsidatobasico-leer', 'vsidatobasico-crear', 'vsidatobasico-editar', 'vsidatobasico-borrar',
        'vsibienvenida-leer', 'vsibienvenida-crear', 'vsibienvenida-editar', 'vsibienvenida-borrar',
        'vsiviolencia-leer', 'vsiviolencia-crear', 'vsiviolencia-editar', 'vsiviolencia-borrar',
        'vsieducacion-leer', 'vsieducacion-crear', 'vsieducacion-editar', 'vsieducacion-borrar',
        'fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar',
        'firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar',
        'vsisalud-leer', 'vsisalud-crear', 'vsisalud-editar', 'vsisalud-borrar',
        'vsidinfamiliar-leer', 'vsidinfamiliar-crear', 'vsidinfamiliar-editar', 'vsidinfamiliar-borrar',
        'vsirelfamiliar-leer', 'vsirelfamiliar-crear', 'vsirelfamiliar-editar', 'vsirelfamiliar-borrar',
        'vsirelsocial-leer', 'vsirelsocial-crear', 'vsirelsocial-editar', 'vsirelsocial-borrar',
        'vsiconsumo-leer', 'vsiconsumo-crear', 'vsiconsumo-editar', 'vsiconsumo-borrar',
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
        'vsiantecedente-leer', 'vsiantecedente-crear', 'vsiantecedente-editar', 'vsiantecedente-borrar',
        'vsigeningresos-leer', 'vsigeningresos-crear', 'vsigeningresos-editar', 'vsigeningresos-borrar',
        'vsiactemocional-leer', 'vsiactemocional-crear', 'vsiactemocional-editar', 'vsiactemocional-borrar',
        'vsipresabusosexual-leer', 'vsipresabusosexual-crear', 'vsipresabusosexual-editar', 'vsipresabusosexual-borrar',
        'vsisituacionespecial-leer', 'vsisituacionespecial-crear', 'vsisituacionespecial-editar', 'vsisituacionespecial-borrar',
        'vsifactor-leer', 'vsifactor-crear', 'vsifactor-editar', 'vsifactor-borrar',
        'vsimeta-leer', 'vsimeta-crear', 'vsimeta-editar', 'vsimeta-borrar',
        'vsiredesapoyo-leer', 'vsiredesapoyo-crear', 'vsiredesapoyo-editar', 'vsiredesapoyo-borrar',
        'fidatobasico-leer', 'fidatobasico-crear', 'fidatobasico-editar', 'fidatobasico-borrar',
        'fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar',
        'vsiareaajuste-leer', 'vsiareaajuste-crear', 'vsiareaajuste-editar', 'vsiareaajuste-borrar',
        'vsiconcepto-leer', 'vsiconcepto-crear', 'vsiconcepto-editar', 'vsiconcepto-borrar',
        'vsiestemocional-leer', 'vsiestemocional-crear', 'vsiestemocional-editar', 'vsiestemocional-borrar',
        'vsiconsentimiento-leer', 'vsiconsentimiento-crear', 'vsiconsentimiento-editar', 'vsiconsentimiento-borrar',
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
        'vsidatobasico-leer', 'vsidatobasico-crear', 'vsidatobasico-editar', 'vsidatobasico-borrar',
        'vsibienvenida-leer', 'vsibienvenida-crear', 'vsibienvenida-editar', 'vsibienvenida-borrar',
        'vsiviolencia-leer', 'vsiviolencia-crear', 'vsiviolencia-editar', 'vsiviolencia-borrar',
        'vsieducacion-leer', 'vsieducacion-crear', 'vsieducacion-editar', 'vsieducacion-borrar',
        'vsisalud-leer', 'vsisalud-crear', 'vsisalud-editar', 'vsisalud-borrar',
        'vsidinfamiliar-leer', 'vsidinfamiliar-crear', 'vsidinfamiliar-editar', 'vsidinfamiliar-borrar',
        'vsirelfamiliar-leer', 'vsirelfamiliar-crear', 'vsirelfamiliar-editar', 'vsirelfamiliar-borrar',
        'vsirelsocial-leer', 'vsirelsocial-crear', 'vsirelsocial-editar', 'vsirelsocial-borrar',
        'vsiconsumo-leer', 'vsiconsumo-crear', 'vsiconsumo-editar', 'vsiconsumo-borrar',
        'vsiantecedente-leer', 'vsiantecedente-crear', 'vsiantecedente-editar', 'vsiantecedente-borrar',
        'vsigeningresos-leer', 'vsigeningresos-crear', 'vsigeningresos-editar', 'vsigeningresos-borrar',
        'vsiactemocional-leer', 'vsiactemocional-crear', 'vsiactemocional-editar', 'vsiactemocional-borrar',
        'vsipresabusosexual-leer', 'vsipresabusosexual-crear', 'vsipresabusosexual-editar', 'vsipresabusosexual-borrar',
        'vsisituacionespecial-leer', 'vsisituacionespecial-crear', 'vsisituacionespecial-editar', 'vsisituacionespecial-borrar',
        'vsifactor-leer', 'vsifactor-crear', 'vsifactor-editar', 'vsifactor-borrar',
        'vsimeta-leer', 'vsimeta-crear', 'vsimeta-editar', 'vsimeta-borrar',
        'vsiredesapoyo-leer', 'vsiredesapoyo-crear', 'vsiredesapoyo-editar', 'vsiredesapoyo-borrar',
        'vsiareaajuste-leer', 'vsiareaajuste-crear', 'vsiareaajuste-editar', 'vsiareaajuste-borrar',
        'vsiconcepto-leer', 'vsiconcepto-crear', 'vsiconcepto-editar', 'vsiconcepto-borrar',
        'vsiestemocional-leer', 'vsiestemocional-crear', 'vsiestemocional-editar', 'vsiestemocional-borrar',
        'vsiconsentimiento-leer', 'vsiconsentimiento-crear', 'vsiconsentimiento-editar', 'vsiconsentimiento-borrar',
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


    Role::create(['name' => 'PSICÓLOGO(A) CLÍNICO', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])->givePermissionTo(['intervención sicosocial especializada']);
    Role::create(['name' => 'PRUEBA', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1]);
    Role::create(['name' => 'aux_administrativo_territorio', 'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1])
            ->givePermissionTo(['fichaIngreso-leer',
                'fichaIngreso-leer'
                , 'fichaIngreso-crear'
                , 'fichaIngreso-editar'
                , 'fichaIngreso-borrar'
                , 'fivestuario-leer'
                , 'fivestuario-crear'
                , 'fivestuario-editar'
                , 'fivestuario-borrar'
                , 'firesidencia-leer'
                , 'firesidencia-crear'
                , 'firesidencia-editar'
                , 'firesidencia-borrar'
                , 'fiactividades-leer'
                , 'fiactividades-crear'
                , 'fiactividades-editar'
                , 'fiactividades-borrar'
                , 'fibienvenida-leer'
                , 'fibienvenida-crear'
                , 'fibienvenida-editar'
                , 'fibienvenida-borrar'
                , 'ficomposicion-leer'
                , 'ficomposicion-crear'
                , 'ficonsumo-leer'
                , 'ficonsumo-crear'
                , 'ficonsumo-editar'
                , 'ficonsumo-borrar'
                , 'fisustanciaconsume-leer'
                , 'fisustanciaconsume-crear'
                , 'fisustanciaconsume-editar'
                , 'fisustanciaconsume-borrar'
                , 'ficontacto-leer'
                , 'ficontacto-crear'
                , 'ficontacto-editar'
                , 'ficontacto-borrar'
                , 'fiformacion-leer'
                , 'fiformacion-crear'
                , 'fiformacion-editar'
                , 'fiformacion-borrar'
                , 'fiingresos-leer'
                , 'fiingresos-crear'
                , 'fiingresos-editar'
                , 'fiingresos-borrar'
                , 'fijusticia-leer'
                , 'fijusticia-crear'
                , 'fijusticia-editar'
                , 'fijusticia-borrar'
                , 'firazones-leer'
                , 'firazones-crear'
                , 'firazones-editar'
                , 'firazones-borrar'
                , 'fisalud-leer'
                , 'fisalud-crear'
                , 'fisalud-editar'
                , 'fisalud-borrar'
                , 'fisituacion-leer'
                , 'fisituacion-crear'
                , 'fisituacion-editar'
                , 'fisituacion-borrar'
                , 'fiviolencia-leer'
                , 'fiviolencia-crear'
                , 'fiviolencia-editar'
                , 'fiviolencia-borrar'
                , 'firedapoyo-leer'
                , 'firedapoyo-crear'
                , 'firedapoyo-editar'
                , 'firedapoyo-borrar'
                , 'fidatobasico-leer'
                , 'fidatobasico-crear'
                , 'fidatobasico-editar'
                , 'fidatobasico-borrar'
                , 'fiautorizacion-leer'
                , 'fiautorizacion-crear'
                , 'fiautorizacion-editar'
                , 'fiautorizacion-borrar'
                , 'fiantecedentes-leer'
                , 'fiantecedentes-crear'
                , 'fiantecedentes-editar'
                , 'fiantecedentes-borrar'
                , 'firedactual-leer'
                , 'firedactual-crear'
                , 'firedactual-editar'
                , 'firedactual-borrar'
                , 'territorio-modulo'
    ]);
  }

}
