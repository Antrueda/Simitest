<?php
Route::group(['prefix' => '{nnaj}/ficonsumo'], function () {
	
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiConsumoController@create',
		'middleware' => ['permission:ficonsumo-crear']
	])->name('fi.consumo.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiConsumoController@store',
		'middleware' => ['permission:ficonsumo-crear']
	])->name('fi.consumo.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiConsumoController@edit',
		'middleware' => ['permission:ficonsumo-editar']
	])->name('fi.consumo.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiConsumoController@update',
		'middleware' => ['permission:ficonsumo-editar']
	])->name('fi.consumo.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiConsumoController@show',
		'middleware' => ['permission:ficonsumo-leer']
	])->name('fi.consumo.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiConsumoController@destroy',
		'middleware' => ['permission:ficonsumo-borrar']
	])->name('fi.consumo.borrar');
});
