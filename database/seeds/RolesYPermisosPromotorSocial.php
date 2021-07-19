<?php

use Spatie\Permission\Models\Role;

Role::find(9)->givePermissionTo([
    /** Módulo asistencias */
    'actamodu-moduloxx',
    //permisos para el crud de acta de encuentro
    'actaencu-leerxxxx', 'actaencu-crearxxx', 'actaencu-editarxx', 'actaencu-borrarxx', 'actaencu-activarx',
    // permisos para los contactos del acta de encuentro
    'aecontac-leerxxxx', 'aecontac-crearxxx', 'aecontac-editarxx', 'aecontac-borrarxx', 'aecontac-activarx',
    // permisos para las asistencias del acta de encuentro
    // 'asistenc-leerxxxx', 'asistenc-crearxxx', 'asistenc-editarxx', 'asistenc-borrarxx', 'asistenc-activarx',
]);
