<?php
Route::group(['prefix' => '{nnaj}/fiformacion'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiFormacionController@create',
		'middleware' => ['permission:fiformacion-crear']
	])->name('fi.formacion.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiFormacionController@store',
		'middleware' => ['permission:fiformacion-crear']
	])->name('fi.formacion.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiFormacionController@edit',
		'middleware' => ['permission:fiformacion-editar']
	])->name('fi.formacion.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiFormacionController@update',
		'middleware' => ['permission:fiformacion-editar']
	])->name('fi.formacion.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiFormacionController@show',
		'middleware' => ['permission:fiformacion-leer']
	])->name('fi.formacion.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiFormacionController@destroy',
		'middleware' => ['permission:fiformacion-borrar']
	])->name('fi.formacion.borrar');
});
