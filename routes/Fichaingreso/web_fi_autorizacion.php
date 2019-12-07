<?php
Route::group(['prefix' => '{nnaj}/fiautorizacion'], function () {
	
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiAutorizacionController@create',
		'middleware' => ['permission:fiautorizacion-crear']
	])->name('fi.autorizacion.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiAutorizacionController@store',
		'middleware' => ['permission:fiautorizacion-crear']
	])->name('fi.autorizacion.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiAutorizacionController@edit',
		'middleware' => ['permission:fiautorizacion-editar']
	])->name('fi.autorizacion.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiAutorizacionController@update',
		'middleware' => ['permission:fiautorizacion-editar']
	])->name('fi.autorizacion.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiAutorizacionController@show',
		'middleware' => ['permission:fiautorizacion-leer']
	])->name('fi.autorizacion.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiAutorizacionController@destroy',
		'middleware' => ['permission:fiautorizacion-borrar']
	])->name('fi.autorizacion.borrar');
});
