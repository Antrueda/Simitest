<?php

use Illuminate\Support\Facades\Route;

$routexxx = 'fiupinna';
$controll = 'FichaIngreso\FiUpinnajController@';
Route::group(['prefix' => 'nnajs'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => [
            'permission:' .
                $routexxx . '-listaxxx|' .
                $routexxx . '-inactiva|' .
                $routexxx . '-activarx|'
        ]
    ])->name($routexxx);

    Route::get('listnnaj', [
        'uses' => $controll . 'getFiDatosBasico',
        'middleware' => ['permission:' . $routexxx . '-listnnaj']
    ])->name($routexxx . '.listnnaj');

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

    Route::group(['prefix' => '{nnajxxxx}/upis'], function () use ($routexxx, $controll) {
        Route::get('', [
            'uses' => $controll . 'indexUpisnnaj',
            'middleware' => [
                'permission:' .
                    $routexxx . '-listaxxx|' .
                    $routexxx . '-borrarxx|' .
                    $routexxx . '-activarx|'
            ]
        ])->name($routexxx . '.upisnnaj');

        Route::get('listaxxx', [
            'uses' => $controll . 'getNnajUpi',
            'middleware' => ['permission:' . $routexxx . '-listaxxx']
        ])->name($routexxx . '.listaxxx');
    });

});
 include_once('web_nnajdese.php'); 