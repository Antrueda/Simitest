<?php

$controll = 'Administracion\Reportes\Excel\Excel';
$routexxx = 'excel';
Route::group(['prefix' => 'excel'], function () use ($controll, $routexxx) {

	Route::get('excel', [
		'uses' => $controll . 'Controller@getExcel',
		'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);
    Route::get('exportar', [
		'uses' => $controll . 'Controller@setExcel',
		'middleware' => ['permission:' . $routexxx . '-crear']
	])->name($routexxx . '.exportar');






	Route::get('nuevo', [
		'uses' => $controll . 'Controller@create',
		'middleware' => ['permission:' . $routexxx . '-crear']
	])->name($routexxx . '.nuevo');
	Route::post('crear', [
		'uses' => $controll . 'Controller@store',
		'middleware' => ['permission:' . $routexxx . '-crear']
	])->name($routexxx . '.crear');
	Route::get('editar/{objetoxx}', [
		'uses' => $controll . 'Controller@edit',
		'middleware' => ['permission:' . $routexxx . '-editar']
	])->name($routexxx . '.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => $controll . 'Controller@update',
		'middleware' => ['permission:' . $routexxx . '-editar']
	])->name($routexxx . '.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => $controll . 'Controller@show',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.ver');

	Route::get('armarSeeder', [
		'uses' => $controll . 'Controller@armarSeeder',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.armarSeeder');

	Route::delete('borrar/{objetoxx}', [
		'uses' => $controll . 'Controller@destroy',
		'middleware' => ['permission:' . $routexxx . '-borrar']
	])->name($routexxx . '.borrar');


});
