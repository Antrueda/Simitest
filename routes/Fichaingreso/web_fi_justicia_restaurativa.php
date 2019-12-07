<?php
Route::group(['prefix' => '{nnaj}/fijusticia'], function () {
	
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiJusticiaRestaurativaController@create',
		'middleware' => ['permission:fijusticia-crear']
	])->name('fi.justicia.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiJusticiaRestaurativaController@store',
		'middleware' => ['permission:fijusticia-crear']
	])->name('fi.justicia.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiJusticiaRestaurativaController@edit',
		'middleware' => ['permission:fijusticia-editar']
	])->name('fi.justicia.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiJusticiaRestaurativaController@update',
		'middleware' => ['permission:fijusticia-editar']
	])->name('fi.justicia.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiJusticiaRestaurativaController@show',
		'middleware' => ['permission:fijusticia-leer']
	])->name('fi.justicia.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiJusticiaRestaurativaController@destroy',
		'middleware' => ['permission:fijusticia-borrar']
	])->name('fi.justicia.borrar');
});
