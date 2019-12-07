<?php
Route::group(['prefix' => '{nnaj}/fiviolencia'], function () {
	
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiViolenciaController@create',
		'middleware' => ['permission:fiviolencia-crear']
	])->name('fi.violencia.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiViolenciaController@store',
		'middleware' => ['permission:fiviolencia-crear']
	])->name('fi.violencia.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiViolenciaController@edit',
		'middleware' => ['permission:fiviolencia-editar']
	])->name('fi.violencia.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiViolenciaController@update',
		'middleware' => ['permission:fiviolencia-editar']
	])->name('fi.violencia.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiViolenciaController@show',
		'middleware' => ['permission:fiviolencia-leer']
	])->name('fi.violencia.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiViolenciaController@destroy',
		'middleware' => ['permission:fiviolencia-borrar']
	])->name('fi.violencia.borrar');
});
