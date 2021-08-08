<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosActaencuetroSeeder extends Seeder
{
    public function getPermisos($dataxxxx)
    {
        $listaxxx = 'Permiso que permite ver el contenido para: ';
        $descripc = [
            'leerxxxx' => $listaxxx,
            'crearxxx' => 'Permiso que permite crear registro para: ',
            'editarxx' => 'Permiso que permite editar registro para: ',
            'borrarxx' => 'Permiso que permite inactivar registro para: ',
            'moduloxx' => 'Permioso que permite ver el menu de: ',
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
        /** Módulo asistencias */
        $this->getPermisos(['permisox' => 'actamodu', 'permisos' => ['moduloxx'], 'compleme' => 'Módulo acta de encuentro', 'pestania' => 1]);
        //permisos para el crud de acta de encuentro
        $this->getPermisos(['permisox' => 'actaencu', 'permisos' => ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'], 'compleme' => 'Acta de encuentro', 'pestania' => 1]);
        // permisos para los contactos del acta de encuentro
        $this->getPermisos(['permisox' => 'aecontac', 'permisos' => ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'], 'compleme' => 'Contactos del acta de encuentro', 'pestania' => 1]);
        // permisos para las asistencias del acta de encuentro
        $this->getPermisos(['permisox' => 'asistenc', 'permisos' => ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'], 'compleme' => 'Asisten del acta de encuentro', 'pestania' => 1]);
        // permisos para la administración de los recursos del acta de encuentro
        $this->getPermisos(['permisox' => 'aerecurs', 'permisos' => ['leerxxxx', 'crearxxx', 'editarxx', 'borrarxx', 'activarx'], 'compleme' => 'Administracion de los recursos del acta de encuentro', 'pestania' => 1]);
    }
}
