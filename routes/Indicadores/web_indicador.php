<?php

$controll = 'Indicadores\InIndicador';
$permisox = 'indicador';
$routexxx = 'in.indicador';
Route::group(['prefix' => 'indicador'], function () use ($controll, $routexxx,$permisox) {
	Route::get('{areaxxxx}', [
		'uses' => $controll . 'Controller@index',
		'middleware' => ['permission:' . $permisox . '-leer|' . $permisox . '-crear|' . $permisox . '-editar|' . $permisox . '-borrar']
	])->name($routexxx);
	Route::get('{areaxxxx}/nuevo', [
		'uses' => $controll . 'Controller@create',
		'middleware' => ['permission:' . $permisox . '-crear']
	])->name($routexxx . '.nuevo');
	Route::post('crear', [
		'uses' => $controll . 'Controller@store',
		'middleware' => ['permission:' . $permisox . '-crear']
	])->name($routexxx . '.crear');
	Route::get('editar/{objetoxx}', [
		'uses' => $controll . 'Controller@edit',
		'middleware' => ['permission:' . $permisox . '-editar']
	])->name($routexxx . '.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => $controll . 'Controller@update',
		'middleware' => ['permission:' . $permisox . '-editar']
	])->name($routexxx . '.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => $controll . 'Controller@show',
		'middleware' => ['permission:' . $permisox . '-leer']
	])->name($routexxx . '.ver');
	Route::delete('borrar/{objetoxx}', [
		'uses' => $controll . 'Controller@destroy',
		'middleware' => ['permission:' . $permisox . '-borrar']
	])->name($routexxx . '.borrar');
});