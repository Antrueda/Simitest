<?php
Route::group(['prefix' => '{nnaj}/firazones'], function () {
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiRazoneController@create',
		'middleware' => ['permission:firazones-crear']
	])->name('fi.razones.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiRazoneController@store',
		'middleware' => ['permission:firazones-crear']
	])->name('fi.razones.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRazoneController@edit',
		'middleware' => ['permission:firazones-editar']
	])->name('fi.razones.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRazoneController@update',
		'middleware' => ['permission:firazones-editar']
	])->name('fi.razones.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRazoneController@show',
		'middleware' => ['permission:firazones-leer']
	])->name('fi.razones.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRazoneController@destroy',
		'middleware' => ['permission:firazones-borrar']
	])->name('fi.razones.borrar');
});
