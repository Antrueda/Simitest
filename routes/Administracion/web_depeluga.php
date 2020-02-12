<?php
Route::group(['prefix' => 'espacios/dependencia'], function () {

	Route::get('', [
		'uses' => 'Acciones\Grupales\DepelugaController@index',
		'middleware' => ['permission:depeluga-leer|depeluga-crear|depeluga-editar|depeluga-borrar']
	])->name('depeluga');

	Route::group(['prefix' => '{depeluga}/'], function () {
		Route::get('nuevo', [
			'uses' => 'Acciones\Grupales\DepelugaController@create',
			'middleware' => ['permission:depeluga-crear']
		])->name('depeluga.nuevo');
		Route::post('nuevo', [
			'uses' => 'Acciones\Grupales\DepelugaController@store',
			'middleware' => ['permission:depeluga-crear']
		])->name('depeluga.crear');
		Route::get('editar/{objetoxx}', [
			'uses' => 'Acciones\Grupales\DepelugaController@edit',
			'middleware' => ['permission:depeluga-editar']
		])->name('depeluga.editar');
		Route::put('editar/{objetoxx}', [
			'uses' => 'Acciones\Grupales\DepelugaController@update',
			'middleware' => ['permission:depeluga-editar']
		])->name('depeluga.editar');
		Route::get('ver/{objetoxx}', [
			'uses' => 'Acciones\Grupales\DepelugaController@show',
			'middleware' => ['permission:depeluga-leer']
		])->name('depeluga.ver');
		Route::delete('ver/{objetoxx}', [
			'uses' => 'Acciones\Grupales\DepelugaController@destroy',
			'middleware' => ['permission:depeluga-borrar']
		])->name('depeluga.borrar');
	});
});
