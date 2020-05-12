<?php
$controll = 'Indicadores\InLigru';
$permisox = 'indicador';
$routexxx = 'inligru';
Route::group(['prefix' => '{padrexxx}/lineagrupos'], function () use ($controll, $routexxx, $permisox) {
	Route::get('', [
		'uses' => $controll . 'Controller@index',
		'middleware' => ['permission:' . $permisox . '-leer|' . $permisox . '-crear|' . $permisox . '-editar|' . $permisox . '-borrar']
	])->name($routexxx);
	$controll = 'Indicadores\InGrupo';
	Route::group(['prefix' => '{inbafuid}/grupos'], function () use ($controll, $routexxx, $permisox) {
		Route::get('', [
			'uses' => $controll . 'Controller@index',
			'middleware' => ['permission:' . $permisox . '-leer|' . $permisox . '-crear|' . $permisox . '-editar|' . $permisox . '-borrar']
		])->name($routexxx . '.grupos');
		Route::get('nuevo', [
			'uses' => $controll . 'Controller@create',
			'middleware' => ['permission:' . $permisox . '-crear']
		])->name($routexxx . '.nuevo');
		Route::post('nuevo', [
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
		Route::delete('ver/{objetoxx}', [
			'uses' => $controll . 'Controller@destroy',
			'middleware' => ['permission:' . $permisox . '-borrar']
		])->name($routexxx . '.borrar');
	});
});
