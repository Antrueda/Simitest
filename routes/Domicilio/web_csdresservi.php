<?php

$routexxx = 'csdresservi';
$controll = 'Domicilio\CsdResservi';
Route::group(['prefix' => '{padrexxx}/csdservicio'], function () use ($routexxx, $controll) {
	Route::get('{residenc}/nuevo', [
        'uses' => $controll.'Controller@create',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.nuevo');

    Route::post('{residenc}/crear', [
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


    Route::get('{residenc}/otracosa', [
        'uses' => $controll . 'Controller@getListado',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.otracosa');

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
