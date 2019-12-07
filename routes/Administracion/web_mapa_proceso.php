<?php
Route::group(['prefix' => 'mapaProceso'], function (){
	Route::get('', [
		'uses' => 'Administracion\MapaProcesoController@index', 
		'middleware' => ['permission:mapaProceso-leer|mapaProceso-crear|mapaProceso-editar|mapaProceso-borrar']
	])->name('mapaProceso');
	Route::get('nuevo', [
		'uses' => 'Administracion\MapaProcesoController@create',
		'middleware' => ['permission:mapaProceso-crear']
	])->name('mapaProceso.nuevo');
	Route::post('nuevo', [
		'uses' => 'Administracion\MapaProcesoController@store',
		'middleware' => ['permission:mapaProceso-crear']
	]);
	Route::get('editar/{id}', [
		'uses' => 'Administracion\MapaProcesoController@edit',
		'middleware' => ['permission:mapaProceso-editar']
	])->name('mapaProceso.editar');
	Route::put('editar/{id}', [
		'uses' => 'Administracion\MapaProcesoController@update',
		'middleware' => ['permission:mapaProceso-editar']
	]);
	Route::get('ver/{id}', [
		'uses' => 'Administracion\MapaProcesoController@show',
		'middleware' => ['permission:mapaProceso-leer']
	])->name('mapaProceso.ver');
	Route::delete('ver/{id}', [
		'uses' => 'Administracion\MapaProcesoController@destroy',
		'middleware' => ['permission:mapaProceso-borrar']
	]);
});