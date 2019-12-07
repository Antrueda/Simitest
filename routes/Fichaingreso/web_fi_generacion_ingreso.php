<?php
Route::group(['prefix' => '{nnaj}/fiingreso'], function () {
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiGeneracionIngresoController@create',
		'middleware' => ['permission:fiingresos-crear']
	])->name('fi.ingresos.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiGeneracionIngresoController@store',
		'middleware' => ['permission:fiingresos-crear']
	])->name('fi.ingresos.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiGeneracionIngresoController@edit',
		'middleware' => ['permission:fiingresos-editar']
	])->name('fi.ingresos.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiGeneracionIngresoController@update',
		'middleware' => ['permission:fiingresos-editar']
	])->name('fi.ingresos.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiGeneracionIngresoController@show',
		'middleware' => ['permission:fiingresos-leer']
	])->name('fi.ingresos.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiGeneracionIngresoController@destroy',
		'middleware' => ['permission:fiingresos-borrar']
	])->name('fi.ingreso.borrar');
});
