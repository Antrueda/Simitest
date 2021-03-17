<?php

use Spatie\Permission\Models\Role;

Role::find(10)->givePermissionTo([
                'territorio-modulo','acciones-modulo','accindiv-modulo','accigrup-modulo','contrase-editar',
                'agactividad-leer', 'agactividad-crear', 'agactividad-editar', 'agactividad-borrar',
                              // ficha de ingreso
                'ficonvio-leer','fivestuario-leer','firesidencia-leer','fidatbas-leer','fiautorizacion-leer',
                'fiactividades-leer','fibienvenida-leer','ficomposicion-leer','ficonsumo-leer',
                'ficontacto-leer', 'fiformacion-leer','fiingresos-leer','fijusticia-leer',
                'firazones-leer','firedapoyo-leer','fisalud-leer','fisituacion-leer','fiviolencia-leer',
                'firedactual-leer','fisalenf-leer','fiprocesojudicial-leer',
                'fiprocesojudicial-leer','fisustanciaconsume-leer',
                // permisos para agregar componenete familiar a justicia restaurativa
                'fijrfamiliar-leer',
                // Intervencion Sicosocial
                'acuerdo-editar',

            ]);

