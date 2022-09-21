<?php

//Crear   Matricula curso talleres básicos para FI
$this->getPermisos(['permisox' => 'matricurso', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Matricula curso talleres', 'pestania' => 1]);


//Crear permisos para Denominación
$this->getPermisos(['permisox' => 'denomina', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Denominación administración', 'pestania' => 1]);

//Crear permisos cursos
$this->getPermisos(['permisox' => 'cursos', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Cursos administración', 'pestania' => 1]);

//Crear permisos para actividades de tiempo libre en FI
$this->getPermisos(['permisox' => 'modulos', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Modulos administración', 'pestania' => 1]);

//Crear permisos para bienvenida de tiempo libre en FI
$this->getPermisos(['permisox' => 'uniasigna', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Unidad asignar administración', 'pestania' => 1]);

//Crear permisos para compsicion familiar de tiempo libre en FI
$this->getPermisos(['permisox' => 'moduloasigna', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Modulo asignar administración', 'pestania' => 1]);

//Crear permisos para consumo en FI
$this->getPermisos(['permisox' => 'cursosmodulosm', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx','modulo'], 'compleme' => 'Modulo de administración de cursos', 'pestania' => 1]);


<<<<<<< HEAD
$this->getPermisos(['permisox' => 'formatov', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Formato de Valoracion de competencias', 'pestania' => 1]);

$this->getPermisos(['permisox' => 'valorcomp', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Formato de Valoracion de competencias Unidades CUrsos', 'pestania' => 1]);
=======
 $this->getPermisos(['permisox' => 'formatov', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Modulo asignar administración', 'pestania' => 1]);
>>>>>>> master

$this->getPermisos(['permisox' => 'formatomodulo', 'permisos' => ['modulo'], 'compleme' => 'Modulo asignar administración', 'pestania' => 1]);

$this->getPermisos(['permisox' => 'ventrevista', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'VALORACIÓN TERAPIA OCUPACIONAL ENTREVISTA SEMIESTRUCTURADA', 'pestania' => 1]);




