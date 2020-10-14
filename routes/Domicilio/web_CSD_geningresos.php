<?php

$routexxx = 'csdgeningresos';
$controll = 'Domicilio\CsdGeneracionIngresos';
Route::group(['prefix' => '{padrexxx}/geningresos'], function () use ($routexxx, $controll) {
	Route::get('nuevo', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.nuevo');
	Route::post('crear', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.crear');

	Route::get('editar/{modeloxx}', [
		'uses' => $controll.'Controller@edit',
		'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'Controller@update',
		'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'Controller@show',
		'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.ver');
    Route::post('aportante', [
		'uses' => $controll.'Controller@storeaportante',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name('CSD.geningresos.aportante');
	Route::delete('aportante/{id1}', [
		'uses' => $controll.'Controller@destroyaportante',
		'middleware' => ['permission:'.$routexxx.'-borrar']
	])->name('CSD.geningresos.aportante.borrar');

	Route::get('listaxxx', [
		'uses' => $controll.'Controller@getListado',
		'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.listaxxx');


});

