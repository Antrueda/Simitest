<?php
Route::group(['prefix' => 'entidad'], function (){
	Route::get('', [
		'uses' => 'Administracion\EntidadController@index', 
		'middleware' => ['permission:entidad-leer|entidad-crear|entidad-editar|entidad-borrar']
	])->name('entidad');
	Route::get('nuevo', [
		'uses' => 'Administracion\EntidadController@create',
		'middleware' => ['permission:entidad-crear']
	])->name('entidad.nuevo');
	Route::post('nuevo', [
		'uses' => 'Administracion\EntidadController@store',
		'middleware' => ['permission:entidad-crear']
	]);
	Route::get('editar/{id}', [
		'uses' => 'Administracion\EntidadController@edit',
		'middleware' => ['permission:entidad-editar']
	])->name('entidad.editar');
	Route::put('editar/{id}', [
		'uses' => 'Administracion\EntidadController@update',
		'middleware' => ['permission:entidad-editar']
	]);
	Route::get('ver/{id}', [
		'uses' => 'Administracion\EntidadController@show',
		'middleware' => ['permission:entidad-leer']
	])->name('entidad.ver');
	Route::delete('ver/{id}', [
		'uses' => 'Administracion\EntidadController@destroy',
		'middleware' => ['permission:entidad-borrar']
	]);
});