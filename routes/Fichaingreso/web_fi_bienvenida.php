<?php
Route::group(['prefix' => '{nnaj}/fibienvenida'], function () {
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiBienvenidaController@create',
		'middleware' => ['permission:fibienvenida-crear']
	])->name('fi.bienvenida.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiBienvenidaController@store',
		'middleware' => ['permission:fibienvenida-crear']
	])->name('fi.bienvenida.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiBienvenidaController@edit',
		'middleware' => ['permission:fibienvenida-editar']
	])->name('fi.bienvenida.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiBienvenidaController@update',
		'middleware' => ['permission:fibienvenida-editar']
	])->name('fi.bienvenida.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiBienvenidaController@show',
		'middleware' => ['permission:fibienvenida-leer']
	])->name('fi.bienvenida.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiBienvenidaController@destroy',
		'middleware' => ['permission:fibienvenida-borrar']
	])->name('fi.bienvenida.borrar');
});
