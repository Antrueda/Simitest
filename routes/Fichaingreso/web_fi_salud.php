<?php
Route::group(['prefix' => '{nnaj}/fisalud'], function () {
	
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiSaludController@create',
		'middleware' => ['permission:fisalud-crear']
	])->name('fi.salud.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiSaludController@store',
		'middleware' => ['permission:fisalud-crear']
	])->name('fi.salud.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSaludController@edit',
		'middleware' => ['permission:fisalud-editar']
	])->name('fi.salud.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSaludController@update',
		'middleware' => ['permission:fisalud-editar']
	])->name('fiobjetoxxsalud.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSaludController@show',
		'middleware' => ['permission:fisalud-leer']
	])->name('fi.salud.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSaludController@destroy',
		'middleware' => ['permission:fisalud-borrar']
	])->name('fi.salud.borrar');
});
