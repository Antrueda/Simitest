<?php

$routexxx = 'fiviolencia';
$controll = 'FichaIngreso\FiViolencia';
Route::group(['prefix' => '{padrexxx}/fiviolencia'], function () use ($routexxx, $controll) {
    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.nuevo');
    Route::post('crear', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.crear');

    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');

    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'Controller@show',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.ver');
});
require_once('web_fi_vcontviol.php');
