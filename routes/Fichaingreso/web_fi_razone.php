<?php
$routexxx='firazones';
$controll='FichaIngreso\FiRazone';
Route::group(['prefix' => '{padrexxx}/firazones'], function () use($routexxx,$controll){
    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@getListado',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.listaxxx');
	Route::get('', [
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

  Route::get('cargos', [
		'uses' => $controll . 'Controller@cargos',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.cargos');

});
