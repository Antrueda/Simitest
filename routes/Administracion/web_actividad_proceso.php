<?php
Route::group(['prefix' => 'actividadproceso'], function (){
	Route::get('', [
		'uses' => 'Administracion\ActividadProcesoController@index', 
		'middleware' => ['permission:actividadProceso-leer|actividadProceso-crear|actividadProceso-editar|actividadProceso-borrar']
	])->name('actividadproceso');
	Route::get('nuevo', [
		'uses' => 'Administracion\ActividadProcesoController@create',
		'middleware' => ['permission:actividadProceso-crear']
	])->name('actividadproceso.nuevo');
	Route::post('nuevo', [
		'uses' => 'Administracion\ActividadProcesoController@store',
		'middleware' => ['permission:actividadProceso-crear']
	]);
	Route::get('editar/{id}', [
		'uses' => 'Administracion\ActividadProcesoController@edit',
		'middleware' => ['permission:actividadProceso-editar']
	])->name('actividadproceso.editar');
	Route::put('editar/{id}', [
		'uses' => 'Administracion\ActividadProcesoController@update',
		'middleware' => ['permission:actividadProceso-editar']
	]);
	Route::get('ver/{id}', [
		'uses' => 'Administracion\ActividadProcesoController@show',
		'middleware' => ['permission:actividadProceso-leer']
	])->name('actividadproceso.ver');
	Route::delete('ver/{id}', [
		'uses' => 'Administracion\ActividadProcesoController@destroy',
		'middleware' => ['permission:actividadProceso-borrar']
	]);
});