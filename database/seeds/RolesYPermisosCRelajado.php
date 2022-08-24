<?php

use Spatie\Permission\Models\Role;

Role::find(5)->givePermissionTo([
                'acuerdo-editar',
                'territorio-modulo','contrase-editar',
                // ficha de ingreso
                'fivestuario-leer', 'fivestuario-crear', 'fivestuario-editar', 'fivestuario-borrar',
                'firesidencia-leer', 'firesidencia-crear', 'firesidencia-editar', 'firesidencia-borrar',
                'fidatbas-leer', 'fidatbas-crear', 'fidatbas-editar', 'fidatbas-borrar',
                'fiautorizacion-leer', 'fiautorizacion-crear', 'fiautorizacion-editar', 'fiautorizacion-borrar',

                'fiactividades-leer', 'fiactividades-crear', 'fiactividades-editar', 'fiactividades-borrar',
                'fibienvenida-leer', 'fibienvenida-crear', 'fibienvenida-editar', 'fibienvenida-borrar',
                'ficomposicion-leer', 'ficomposicion-crear', 'ficomposicion-editar', 'ficomposicion-borrar',
                'ficonsumo-leer', 'ficonsumo-crear', 'ficonsumo-editar', 'ficonsumo-borrar',
                'ficontacto-leer', 'ficontacto-crear', 'ficontacto-editar', 'ficontacto-borrar',
                'fiformacion-leer', 'fiformacion-crear', 'fiformacion-editar', 'fiformacion-borrar',
                'fiingresos-leer', 'fiingresos-crear', 'fiingresos-editar', 'fiingresos-borrar',
                'fijusticia-leer', 'fijusticia-crear', 'fijusticia-editar', 'fijusticia-borrar',
                'firazones-leer', 'firazones-crear', 'firazones-editar', 'firazones-borrar',
                'fiobserva-leer', 'fiobserva-crear', 'fiobserva-editar', 'fiobserva-borrar',
                'firedapoyo-leer', 'firedapoyo-crear', 'firedapoyo-editar', 'firedapoyo-borrar',
                'fisalud-leer', 'fisalud-crear', 'fisalud-editar', 'fisalud-borrar',
                'fisituacion-leer', 'fisituacion-crear', 'fisituacion-editar', 'fisituacion-borrar',
                'fiviolencia-leer', 'fiviolencia-crear', 'fiviolencia-editar', 'fiviolencia-borrar',

                'firedactual-leer', 'firedactual-crear', 'firedactual-editar', 'firedactual-borrar',
                'fisalenf-leer', 'fisalenf-crear', 'fisalenf-editar', 'fisalenf-borrar',
                'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
                'fiprocesojudicial-leer', 'fiprocesojudicial-crear', 'fiprocesojudicial-editar', 'fiprocesojudicial-borrar',
                'fisustanciaconsume-leer', 'fisustanciaconsume-crear', 'fisustanciaconsume-editar', 'fisustanciaconsume-borrar',
                // permisos para agregar componenete familiar a justicia restaurativa
                'fijrfamiliar-leer', 'fijrfamiliar-crear', 'fijrfamiliar-editar', 'fijrfamiliar-borrar',


            ]);

