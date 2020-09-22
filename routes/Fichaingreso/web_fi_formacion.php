<?php
Route::group(['prefix' => '{padrexxx}/fiformacion'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiFormacionController@create',
		'middleware' => ['permission:fiformacion-crear']
	])->name('fi.formacion.nuevo');

	Route::post('crear', [
		'uses' => 'FichaIngreso\FiFormacionController@store',
		'middleware' => ['permission:fiformacion-crear']
	])->name('fi.formacion.crear');

	Route::get('editar/{modeloxx}', [
		'uses' => 'FichaIngreso\FiFormacionController@edit',
		'middleware' => ['permission:fiformacion-editar']
	])->name('fi.formacion.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => 'FichaIngreso\FiFormacionController@update',
		'middleware' => ['permission:fiformacion-editar']
	])->name('fi.formacion.editar');

	Route::get('ver/{modeloxx}', [
		'uses' => 'FichaIngreso\FiFormacionController@show',
		'middleware' => ['permission:fiformacion-leer']
	])->name('fi.formacion.ver');
    Route::get('ultinive', [
		'uses' => 'FichaIngreso\FiFormacionController@getUltimoNivel',
		'middleware' => ['permission:fiformacion-leer']
	])->name('fi.formacion.ultinive');

});
