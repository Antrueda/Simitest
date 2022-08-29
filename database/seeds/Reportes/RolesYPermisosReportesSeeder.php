<?php

/** Módulo territorio */
$this->getPermisos(['permisox' => 'reportes', 'permisos' => ['modulo'], 'compleme' => 'Módulo de reportes', 'pestania' => 1]);

//permisos para el cargue excel
$this->getPermisos(['permisox' => 'excel', 'permisos' => ['leer', 'crear', 'editar', 'borrar'], 'compleme' => 'manejo de archivos excel', 'pestania' => 1]);
