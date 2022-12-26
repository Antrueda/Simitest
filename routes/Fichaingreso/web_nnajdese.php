<?php

use Illuminate\Support\Facades\Route;

$routexxx = 'nnajdese';
$controll = 'FichaIngreso\NnajdeseController@';

Route::group(['prefix' => 'nnajs/dependencia/{dependen}/servicios'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => [
            'permission:' .
                $routexxx . '-listaxxx|' .
                $routexxx . '-borrarxx|' .
                $routexxx . '-activarx|'
        ]
    ])->name($routexxx);

    Route::get('listaxxx', [
        'uses' => $controll . 'getNnajUpi',
        'middleware' => ['permission:' . $routexxx . '-listaxxx']
    ])->name($routexxx . '.listaxxx');
});
Route::group(['prefix' => 'nnajs/dependencia/servicio'], function () use ($routexxx, $controll) {
    Route::get('inactivar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-inactiva']
    ])->name($routexxx . '.inactiva');

    Route::put('inactivar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-inactiva']
    ])->name($routexxx . '.inactiva');

    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
});
