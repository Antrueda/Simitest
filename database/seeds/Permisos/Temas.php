<?php


$this->getPermisos([
    'permisox' => 'temamodu',
    'permisos' => ['modulo'],
    'compleme' => 'Módulo parametrización de los temas, combos y prametros',
    'pestania' => 1
]);

//permisos para el crud de parametrizar los combos de los temas
$this->getPermisos([
    'permisox' => 'temaxxxx',
    'permisos' => [
        'leer',
        'crear',
        'editar',
        'borrar',
        'activarx'
    ],
    'compleme' => 'administracion de temas de la administración de formularios',
    'pestania' => 1
]);

//permisos para el crud de parametrizar los combos de los temas
$this->getPermisos([
    'permisox' => 'comboxxx',
    'permisos' => [
        'leer',
        'crear',
        'editar',
        'borrar',
        'activarx'
    ],
    'compleme' => 'administracion de los combos de los temas',
    'pestania' => 1
]);

//permisos para el crud de parametrizar los parametros para los combos
$this->getPermisos([
    'permisox' => 'parametr',
    'permisos' => [
        'leer',
        'crear',
        'editar',
        'borrar',
        'activarx'
    ],
    'compleme' => 'administracion de los parametros',
    'pestania' => 1
]);

//permisos para el crud para asociar los parametros con los combos
$this->getPermisos([
    'permisox' => 'combpara',
    'permisos' => [
        'leer',
        'crear',
        'editar',
        'borrar',
        'activarx'
    ],
    'compleme' => 'administracion de la asociación del combo con los parametros',
    'pestania' => 1
]);
