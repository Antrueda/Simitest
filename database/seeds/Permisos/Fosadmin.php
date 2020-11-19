<?php


$this->getPermisos([
    'permisox' => 'fosadmod',
    'permisos' => ['modulo'],
    'compleme' => 'Módulo de FOS',
    'pestania' => 1
]);

//permisos para el crud de cague de documentos
$this->getPermisos([
    'permisox' => 'fostipse',
    'permisos' => [
        'leer',
        'crear',
        'editar',
        'borrar',
        'activarx'
    ],
    'compleme' => 'FOS tipo de seguimiento',
    'pestania' => 1
]);

$this->getPermisos([
    'permisox' => 'fosubtse',
    'permisos' => [
        'leer',
        'crear',
        'editar',
        'borrar',
        'activarx'
    ],
    'compleme' => 'FOS sub tipo de seguimiento',
    'pestania' => 1
]);
