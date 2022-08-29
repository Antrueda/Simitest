<?php

use Spatie\Permission\Models\Role;

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
    'firedactual-borrar', 'territorio-modulo',

    /** Módulo asistencias */
     'actamodu-moduloxx',
    //permisos para el crud de acta de encuentro
    'actaencu-leerxxxx', 'actaencu-crearxxx', 'actaencu-editarxx', 'actaencu-borrarxx', 'actaencu-activarx',
    // permisos para los contactos del acta de encuentro
    'aecontac-leerxxxx', 'aecontac-crearxxx', 'aecontac-editarxx', 'aecontac-borrarxx', 'aecontac-activarx',
    // permisos para las asistencias del acta de encuentro
    // 'asistenc-leerxxxx', 'asistenc-crearxxx', 'asistenc-editarxx', 'asistenc-borrarxx', 'asistenc-activarx'

]);
