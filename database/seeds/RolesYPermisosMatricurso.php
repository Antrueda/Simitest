<?php

//Crear   Matricula curso talleres básicos para FI
$this->getPermisos(['permisox' => 'matricurso', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Matricula curso talleres', 'pestania' => 1]);


//Crear permisos para Denominación
$this->getPermisos(['permisox' => 'denomina', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Denominación administración', 'pestania' => 1]);

//Crear permisos cursos
$this->getPermisos(['permisox' => 'cursos', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Cursos administración', 'pestania' => 1]);

//Crear permisos para actividades de tiempo libre en FI
$this->getPermisos(['permisox' => 'modulos', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Modulos administración', 'pestania' => 1]);

//Crear permisos para bienvenida de tiempo libre en FI
$this->getPermisos(['permisox' => 'uniasigna', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Unidad asignar administración', 'pestania' => 1]);

//Crear permisos para compsicion familiar de tiempo libre en FI
$this->getPermisos(['permisox' => 'moduloasigna', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'Modulo asignar administración', 'pestania' => 1]);

//Crear permisos para consumo en FI
$this->getPermisos(['permisox' => 'cursosmodulosm', 'permisos' => ['leer', 'crear', 'editar', 'borrar','modulo'], 'compleme' => 'Modulo de administración de cursos', 'pestania' => 1]);


