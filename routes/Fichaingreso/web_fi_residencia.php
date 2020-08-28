<?php
Route::group(['prefix' => '{padrexxx}/firesidencia'], function () {

	Route::get('', [
		'uses' => 'FichaIngreso\FiResidenciaController@create',
		'middleware' => ['permission:firesidencia-crear']
	])->name('fi.residencia.nuevo');

	Route::post('crear', [
		'uses' => 'FichaIngreso\FiResidenciaController@store',
		'middleware' => ['permission:firesidencia-crear']
	])->name('fi.residencia.crear');

	Route::get('editar/{modeloxx}', [
		'uses' => 'FichaIngreso\FiResidenciaController@edit',
		'middleware' => ['permission:firesidencia-editar']
	])->name('fi.residencia.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => 'FichaIngreso\FiResidenciaController@update',
		'middleware' => ['permission:firesidencia-editar']
	])->name('fi.residencia.editar');

	Route::get('ver/{modeloxx}', [
		'uses' => 'FichaIngreso\FiResidenciaController@show',
		'middleware' => ['permission:firesidencia-leer']
	])->name('fi.residencia.ver');
});
