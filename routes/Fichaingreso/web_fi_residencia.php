<?php
Route::group(['prefix' => '{nnaj}/firesidencia'], function () {
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiResidenciaController@create',
		'middleware' => ['permission:firesidencia-crear']
	])->name('fi.residencia.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiResidenciaController@store',
		'middleware' => ['permission:firesidencia-crear']
	])->name('fi.residencia.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiResidenciaController@edit',
		'middleware' => ['permission:firesidencia-editar']
	])->name('fi.residencia.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiResidenciaController@update',
		'middleware' => ['permission:firesidencia-editar']
	])->name('fi.residencia.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiResidenciaController@show',
		'middleware' => ['permission:firesidencia-leer']
	])->name('fi.residencia.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiResidenciaController@destroy',
		'middleware' => ['permission:firesidencia-borrar']
	])->name('fi.residencia.borrar');
});
