<?php
Route::group(['prefix' => '{nnaj}/fiactividades'], function () {

	
	Route::get('', [
		'uses' => 'FichaIngreso\FiActividadestlController@create',
		'middleware' => ['permission:fiactividades-crear']
	])->name('fi.actividades.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiActividadestlController@store',
		'middleware' => ['permission:fiactividades-crear']
	])->name('fi.actividades.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiActividadestlController@edit',
		'middleware' => ['permission:fiactividades-editar']
	])->name('fi.actividades.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiActividadestlController@update',
		'middleware' => ['permission:fiactividades-editar']
	])->name('fi.actividades.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiActividadestlController@show',
		'middleware' => ['permission:fiactividades-leer']
	])->name('fi.actividades.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiActividadestlController@destroy',
		'middleware' => ['permission:fiactividades-borrar']
	])->name('fi.actividades.borrar');
});
