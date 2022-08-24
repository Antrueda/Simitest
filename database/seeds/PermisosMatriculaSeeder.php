<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisosMatriculaSeeder extends Seeder
{
    use EstructuraBaseTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leerxxxx = 'Permiso que permite ver el contenido para: ';
        $crearxxx = 'Permiso que permite crear registro para: ';
        $editarxx = 'Permiso que permite editar registro para: ';
        $borrarxx = 'Permiso que permite inactivar registro para: ';
        $moduloxx = 'Permiso que habilita el contenido del Módulo: ';
        $activarx = 'Permiso que permite activar registro para: ';
        $asignarx = 'Permiso que permite asignar registro para: ';
        /** Módulo Matricula */
        $permisox = 'matriculaadmin';
        $compleme = 'Administración de Matriculas';
        Permission::create([
            'name' => $permisox . '-modulo',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);


        //permisos para el crud de Matricula NNAJ
        $permisox = 'grupom';
        $compleme = 'Permisos para Matricula NNAJ';
        Permission::create([
            'name' => $permisox . '-leer',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crear',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editar',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrar',
            'sis_pestania_id' => 1,
            'descripcion' => $borrarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-activarx',
            'sis_pestania_id' => 1,
            'descripcion' => $activarx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);


        // permisos para los contactos del acta de encuentro
        $permisox = 'gradom';
        $compleme = 'Permisos para Matricula NNAJ';
        Permission::create([
            'name' => $permisox . '-leer',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crearx',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editar',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrar',
            'sis_pestania_id' => 1,
            'descripcion' => $borrarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-activarx',
            'sis_pestania_id' => 1,
            'descripcion' => $activarx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);


        // permisos para las asistencias del acta de encuentro
        $permisox = 'grupoasig';
        $compleme = 'Permisos para Matricula NNAJ';
        Permission::create([
            'name' => $permisox . '-leer',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crear',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editar',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrar',
            'sis_pestania_id' => 1,
            'descripcion' => $borrarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-activarx',
            'sis_pestania_id' => 1,
            'descripcion' => $activarx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        // permisos para crear contacto unico en la asistencia del acta de encuentro
        $permisox = 'gradoasig';
        $compleme = 'Permisos para Matricula NNAJ';
        Permission::create([
            'name' => $permisox . '-leer',
            'sis_pestania_id' => 1,
            'descripcion' => $leerxxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-crear',
            'sis_pestania_id' => 1,
            'descripcion' => $crearxxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-editar',
            'sis_pestania_id' => 1,
            'descripcion' => $editarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-borrar',
            'sis_pestania_id' => 1,
            'descripcion' => $borrarxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        Permission::create([
            'name' => $permisox . '-activarx',
            'sis_pestania_id' => 1,
            'descripcion' => $activarx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);
        /** Módulo Prueba Diagnóstica */
        $permisox = 'edaprudi';
        $compleme = 'Admistración de Prueba Diagnóstica';
        Permission::create([
            'name' => $permisox . '-moduloxx',
            'sis_pestania_id' => 1,
            'descripcion' => $moduloxx . $compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);
        // permisos para la administración del crud de las asignatuara de matrícula
        $this->permisox='edaasign';
        $this->compleme='Administración de las asignaturas de matrícula';
        $this->getBase();

        // permisos para la administración del crud de presaberes de la matricula
        $this->permisox='edapresa';
        $this->compleme='Administración de los presaberes de la matricula';
        $this->getBase();

        // permisos para la administración del crud de los cursos de la matrícula
        $this->permisox='edagrado';
        $this->compleme='Administración de los cursos de la matrícula';
        $this->getBase();

        // permisos para la administración del crud de las asignaturas del grado

        $this->permisox='edasigra';
        $this->compleme='Administración de las asignaturas del grado';
        $this->getBase();

        Permission::create([
            'name' => $this->permisox . '-asignarx',
            'sis_pestania_id' => 1,
            'descripcion' => $asignarx . $this->compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);

        // permisos para la administración del crud de los presaberes de la asignaturas

        $this->permisox='edasipre';
        $this->compleme='Administración de los presaberes de la asignatura';
        $this->getBase();
        Permission::create([
            'name' => $this->permisox . '-asignarx',
            'sis_pestania_id' => 1,
            'descripcion' => $asignarx . $this->compleme,
            'user_crea_id' => 1, 'user_edita_id' => 1, 'sis_esta_id' => 1
        ]);
    }
}
