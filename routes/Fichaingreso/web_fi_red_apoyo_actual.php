<?php
Route::group(['prefix' => '{nnaj}/firedactual'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiRedApoyoActualController@create',
		'middleware' => ['permission:firedactual-crear']
	])->name('fi.redactual.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiRedApoyoActualController@store',
		'middleware' => ['permission:firedactual-crear']
	])->name('fi.redactual.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRedApoyoActualController@edit',
		'middleware' => ['permission:firedactual-editar']
	])->name('fi.redactual.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRedApoyoActualController@update',
		'middleware' => ['permission:firedactual-editar']
	])->name('fi.redactual.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRedApoyoActualController@show',
		'middleware' => ['permission:firedactual-leer']
	])->name('fi.redactual.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRedApoyoActualController@destroy',
		'middleware' => ['permission:firedactual-borrar']
	])->name('fi.redactual.borrar');
});
