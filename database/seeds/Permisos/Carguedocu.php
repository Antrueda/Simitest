<?php


$this->getPermisos([
    'permisox' => 'cargdocu',
    'permisos' => ['modulo'],
    'compleme' => 'Módulo de cargue de documentos',
    'pestania' => 1
]);

//permisos para el crud de cague de documentos
$this->getPermisos([
    'permisox' => 'cardocfi',
    'permisos' => [
        'leer',
        'crear',
        'editar',
        'borrar',
        'activarx'
    ],
    'compleme' => 'administracion cargue documentos FI',
    'pestania' => 1
]);
