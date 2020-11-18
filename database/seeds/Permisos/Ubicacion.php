<?php

/** Módulo ubicaciones */
$this->getPermisos(['permisox' => 'ubicacio', 'permisos' => ['modulo'], 'compleme' => 'Módulo de ubicaciones', 'pestania' => 1]);

//permisos para el crud de paises
$this->getPermisos(['permisox' => 'paisxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'administracion paises', 'pestania' => 1]);
//permisos para el crud de departmentos
$this->getPermisos(['permisox' => 'departam', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'administracion departamentos', 'pestania' => 1]);
//permisos para el crud de municipios
$this->getPermisos(['permisox' => 'municipi', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'administracion municipios', 'pestania' => 1]);
//permisos para el crud de localidades
$this->getPermisos(['permisox' => 'localida', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'administracion localidades', 'pestania' => 1]);
//permisos para el crud de unir un upz con una localiad
$this->getPermisos(['permisox' => 'localupz', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'unir localidad con upz', 'pestania' => 1]);
//permisos para el crud de upzs
$this->getPermisos(['permisox' => 'upzxxxxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'administracion upzs', 'pestania' => 1]);
//permisos para el crud de unir una upz con un barrio
$this->getPermisos(['permisox' => 'barriupz', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'unir upz con barrio', 'pestania' => 1]);
//permisos para el crud de barrios
$this->getPermisos(['permisox' => 'barrioxx', 'permisos' => ['leer', 'crear', 'editar', 'borrar','activarx'], 'compleme' => 'administracion barrios', 'pestania' => 1]);
