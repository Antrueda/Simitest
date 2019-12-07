<?php
Route::group(['prefix' => '{nnaj}/fosfichaobservacion'], function () {
	
	
	Route::get('nuevo', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@create',
		'middleware' => ['permission:fosfichaobservacion-crear']
	])->name('fos.fichaobservacion.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@store',
		'middleware' => ['permission:fosfichaobservacion-crear']
	])->name('fos.fichaobservacion.crear');
	
	Route::get('editar/{fichaobservacion}', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@edit',
		'middleware' => ['permission:fosfichaobservacion-editar']
	])->name('fos.fichaobservacion.editar');
	
	Route::put('editar/{fichaobservacion}', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@update',
		'middleware' => ['permission:fosfichaobservacion-editar']
	])->name('fos.fichaobservacion.editar');
	
	Route::get('ver/{fichaobservacion}', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@show',
		'middleware' => ['permission:fosfichaobservacion-leer']
	])->name('fos.fichaobservacion.ver');
	
	Route::delete('borrar/{fichaobservacion}', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@destroy',
		'middleware' => ['permission:fosfichaobservacion-borrar']
	])->name('fos.fichaobservacion.borrar');

	Route::post('subarea', [
	    'uses' => 'FichaObservacion\FosDatoBasicoController@subareasajax',
	])->name('fos.fichaobservacion.subarea');

	Route::get('lista', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@lista',
		'middleware' => ['permission:fosfichaobservacion-leer']
	 ])->name('fos.fichaobservacion.lista');
});