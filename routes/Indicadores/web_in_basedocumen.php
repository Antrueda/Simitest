<?php
$controll = 'Indicadores\InBaseFuente';
$permisox = 'inbasedocumen';
$routexxx = 'bd.basedocumen';
Route::group(['prefix' => '{padrexxx}/documentos'], function () use ($controll, $routexxx,$permisox) {
	Route::get('', [
		'uses' => $controll . 'Controller@index',
		'middleware' => ['permission:' . $permisox . '-leer|' . $permisox . '-crear|' . $permisox . '-editar|' . $permisox . '-borrar']
	])->name($routexxx);
	Route::get('nuevo', [
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


	Route::post('documentos', [
		'uses' => $controll . 'Controller@documentos',
	])->name($routexxx . '.documentos');
	Route::post('asignarlineabase', [
		'uses' => $controll . 'Controller@asignardocumento',
	])->name($routexxx . '.asignarlineabase');

});