<?php
Route::group(['prefix' => '{nnaj}/ficomposicion'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiComposicionFamiController@index',
		'middleware' => ['permission:ficomposicion-leer|ficomposicion-crear|ficomposicion-editar|ficomposicion-borrar']
	])->name('fi.composicion');
	
	Route::get('nuevo', [
		'uses' => 'FichaIngreso\FiComposicionFamiController@create',
		'middleware' => ['permission:ficomposicion-crear']
	])->name('fi.composicion.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiComposicionFamiController@store',
		'middleware' => ['permission:ficomposicion-crear']
	])->name('fi.composicion.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiComposicionFamiController@edit',
		'middleware' => ['permission:ficomposicion-editar']
	])->name('fi.composicion.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiComposicionFamiController@update',
		'middleware' => ['permission:ficomposicion-editar']
	])->name('fi.composicion.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiComposicionFamiController@show',
		'middleware' => ['permission:ficomposicion-leer']
	])->name('fi.composicion.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiComposicionFamiController@destroy',
		'middleware' => ['permission:ficomposicion-borrar']
	])->name('fi.composicion.borrar');
});
