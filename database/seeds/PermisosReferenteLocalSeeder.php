<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermisosReferenteLocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::find(10)->givePermissionTo(
            ['contrase-editar',
            'acuerdo-editar',
            'territorio-modulo',
            'acciones-modulo',
            'accindiv-modulo',
            'accigrup-modulo',
            'fidatbas-leer',
            'fivestuario-leer',
            'firesidencia-leer',
            'fiactividades-leer',
            'fibienvenida-leer',
            'ficomposicion-leer',
            'ficonsumo-leer',
            'fisustanciaconsume-leer',
            'ficontacto-leer',
            'fiformacion-leer',
            'fiingresos-leer',
            'fijusticia-leer',
            'firazones-leer',
            'fiobserva-leer',
            'fisalud-leer',
            'fisituacion-leer',
            'fiviolencia-leer',
            'ficonvio-leer',
            'firedapoyo-leer',
            'fiautorizacion-leer',
            'firedactual-leer',
            'fisalenf-leer',
            'fiprocesojudicial-leer',
            'fijrfamiliar-leer',
            'agactividad-leer',
            'agactividad-crear',
            'agactividad-editar',
            'agactividad-borrar',]
    );
    }
}
