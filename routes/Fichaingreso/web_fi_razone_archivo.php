<?php
Route::group(['prefix' => '{nnaj}/{razon}/fiarchivos'], function () {
	
	Route::get('nuevo', [
		'uses' => 'FichaIngreso\FiRazonArchivoController@create',
		'middleware' => ['permission:firazones-crear']
	])->name('fi.archivos.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiRazonArchivoController@store',
		'middleware' => ['permission:firazones-crear']
	])->name('fi.archivos.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRazonArchivoController@edit',
		'middleware' => ['permission:firazones-editar']
	])->name('fi.archivos.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRazonArchivoController@update',
		'middleware' => ['permission:firazones-editar']
	])->name('fi.archivos.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRazonArchivoController@show',
		'middleware' => ['permission:firazones-leer']
	])->name('fi.archivos.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRazonArchivoController@destroy',
		'middleware' => ['permission:firazones-borrar']
	])->name('fi.archivos.borrar');
  
});
