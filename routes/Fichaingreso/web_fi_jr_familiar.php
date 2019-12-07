<?php
Route::group(['prefix' => '{nnaj}/fijrfamiliar'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiJrFamiliarController@index',
		'middleware' => ['permission:fijrfamiliar-leer|fijrfamiliar-crear|fijrfamiliar-editar|fijrfamiliar-borrar']
	])->name('fi.jrfamiliar');
	
	Route::get('nuevo', [
		'uses' => 'FichaIngreso\FiJrFamiliarController@create',
		'middleware' => ['permission:fijrfamiliar-crear']
	])->name('fi.jrfamiliar.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiJrFamiliarController@store',
		'middleware' => ['permission:fijrfamiliar-crear']
	])->name('fi.jrfamiliar.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiJrFamiliarController@edit',
		'middleware' => ['permission:fijrfamiliar-editar']
	])->name('fi.jrfamiliar.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiJrFamiliarController@update',
		'middleware' => ['permission:fijrfamiliar-editar']
	])->name('fi.jrfamiliar.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiJrFamiliarController@show',
		'middleware' => ['permission:fijrfamiliar-leer']
	])->name('fi.jrfamiliar.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiJrFamiliarController@destroy',
		'middleware' => ['permission:fijrfamiliar-borrar']
	])->name('fi.jrfamiliar.borrar');
});
