<?php
Route::group(['prefix' => 'actividad'], function (){
	Route::get('', [
		'uses' => 'Administracion\ActividadController@index', 
		'middleware' => ['permission:actividad-leer|actividad-crear|actividad-editar|actividad-borrar']
	])->name('actividad');
	Route::get('nuevo', [
		'uses' => 'Administracion\ActividadController@create',
		'middleware' => ['permission:actividad-crear']
	])->name('actividad.nuevo');
	Route::post('nuevo', [
		'uses' => 'Administracion\ActividadController@store',
		'middleware' => ['permission:actividad-crear']
	]);
	Route::get('editar/{id}', [
		'uses' => 'Administracion\ActividadController@edit',
		'middleware' => ['permission:actividad-editar']
	])->name('actividad.editar');
	Route::put('editar/{id}', [
		'uses' => 'Administracion\ActividadController@update',
		'middleware' => ['permission:actividad-editar']
	]);
	Route::get('ver/{id}', [
		'uses' => 'Administracion\ActividadController@show',
		'middleware' => ['permission:actividad-leer']
	])->name('actividad.ver');
	Route::delete('ver/{id}', [
		'uses' => 'Administracion\ActividadController@destroy',
		'middleware' => ['permission:actividad-borrar']
	]);
});