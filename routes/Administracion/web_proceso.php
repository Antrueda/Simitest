<?php
Route::group(['prefix' => 'proceso'], function (){
	Route::get('', [
		'uses' => 'Administracion\ProcesoController@index', 
		'middleware' => ['permission:proceso-leer|proceso-crear|proceso-editar|proceso-borrar']
	])->name('proceso');
	Route::get('nuevo', [
		'uses' => 'Administracion\ProcesoController@create',
		'middleware' => ['permission:proceso-crear']
	])->name('proceso.nuevo');
	Route::post('nuevo', [
		'uses' => 'Administracion\ProcesoController@store',
		'middleware' => ['permission:proceso-crear']
	]);
	Route::get('editar/{id}', [
		'uses' => 'Administracion\ProcesoController@edit',
		'middleware' => ['permission:proceso-editar']
	])->name('proceso.editar');
	Route::put('editar/{id}', [
		'uses' => 'Administracion\ProcesoController@update',
		'middleware' => ['permission:proceso-editar']
	]);
	Route::get('ver/{id}', [
		'uses' => 'Administracion\ProcesoController@show',
		'middleware' => ['permission:proceso-leer']
	])->name('proceso.ver');
	Route::delete('ver/{id}', [
		'uses' => 'Administracion\ProcesoController@destroy',
		'middleware' => ['permission:proceso-borrar']
	]);
});