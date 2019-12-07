<?php
Route::group(['prefix' => 'fichaIngreso'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FichaingresoController@index',
		'middleware' => ['permission:fichaIngreso-leer|fichaIngreso-crear|fichaIngreso-editar|fichaIngreso-borrar']
	])->name('fichaIngreso');
	
	Route::get('nuevo', [
		'uses' => 'FichaIngreso\FichaingresoController@create',
		'middleware' => ['permission:fichaIngreso-crear']
	])->name('fichaIngreso.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FichaingresoController@store',
		'middleware' => ['permission:fichaIngreso-crear']
	])->name('fichaIngreso.crear');
	
	Route::get('editar/{fichaingreso}', [
		'uses' => 'FichaIngreso\FichaingresoController@edit',
		'middleware' => ['permission:fichaIngreso-editar']
	])->name('fichaIngreso.editar');
	
	Route::put('editar/{fichaingreso}', [
		'uses' => 'FichaIngreso\FichaingresoController@update',
		'middleware' => ['permission:fichaIngreso-editar']
	])->name('fichaIngreso.editar');
	
	Route::get('ver/{fichaingreso}', [
		'uses' => 'FichaIngreso\FichaingresoController@show',
		'middleware' => ['permission:fichaIngreso-leer']
	])->name('fichaIngreso.ver');
	
	Route::delete('borrar/{fichaingreso}', [
		'uses' => 'FichaIngreso\FichaingresoController@destroy',
		'middleware' => ['permission:fichaIngreso-borrar']
	])->name('fichaIngreso.borrar');
});
