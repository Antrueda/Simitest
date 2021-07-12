<?php
$routexxx = 'csdatbas';
$controll = 'Domicilio\CsdBasico';
Route::group(['prefix' => 'csd/{padrexxx}/datosbasicos'], function () use ($routexxx, $controll) {

    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.nuevo');
    Route::post('crear', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routexxx . '-crear']
	])->name($routexxx . '.crear');

	Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'Controller@show',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx . '.ver');
    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');
    Route::get('listodox', [
        'uses' => $controll . 'Controller@getListodo',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx . '.listodox');
    Route::get('nnajsele', [
		'uses' => $controll . 'Controller@getNnajselect',
		'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.nnajsele');
});

