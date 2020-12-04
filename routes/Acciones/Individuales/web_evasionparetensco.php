<?php

$routexxx = 'evasionpar';
$controll = 'Acciones\Individuales\AIEvasionParentesco';
Route::group(['prefix' => '{padrexxx}/evasionfamiliar'], function () use ($routexxx, $controll) {
	Route::get('nuevo', [
        'uses' => $controll.'Controller@create',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.nuevo');

    Route::post('crear', [
        'uses' => $controll.'Controller@store',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.crear');

        Route::get('borrar/{modeloxx}', [
        'uses' => $controll.'Controller@inactivate',
        'middleware' => ['permission:'.$routexxx.'-borrar']
    ])->name($routexxx.'.borrar');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');


    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@getListado',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.listaxxx');

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

    Route::get('listodox', [
        'uses' => $controll . 'Controller@getListodo',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.listodox');
    Route::get('nnajsele', [
		'uses' => $controll . 'Controller@getNnajsele',
		'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.nnajsele');
});
