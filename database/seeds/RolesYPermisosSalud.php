<?php

//Crear   Matricula curso talleres básicos para FI
$this->getPermisos(['permisox' => 'diagnostico', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Administración Diagnostico', 'pestania' => 1]);


//Crear permisos para Denominación
$this->getPermisos(['permisox' => 'enfermedad', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Administración Enfermedad', 'pestania' => 1]);

//Crear permisos cursos
$this->getPermisos(['permisox' => 'asignaenfer', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Administración asignar enfermedad a diagnostico', 'pestania' => 1]);

//Crear permisos para consumo en FI
$this->getPermisos(['permisox' => 'saludmodulo', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx','modulo'], 'compleme' => 'Modulo de Administración de salud', 'pestania' => 1]);


$this->getPermisos(['permisox' => 'vsmedicina', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Valoracion medica general', 'pestania' => 1]);

$this->getPermisos(['permisox' => 'vdiagnosti', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'Valoracion medica general diagnostico', 'pestania' => 1]);




