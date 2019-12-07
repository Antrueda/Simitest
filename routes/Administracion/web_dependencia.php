<?php 
Route::group(['prefix' => 'dependencia'], function () {
    Route::get('', [
	    'uses' => 'Administracion\DependenciaController@index',
	    'middleware' => ['permission:dependencia-leer|dependencia-crear|dependencia-editar|dependencia-borrar']
	])->name('dependencia');
	Route::get('nuevo', [
	    'uses' => 'Administracion\DependenciaController@create',
	    'middleware' => ['permission:dependencia-crear']
	])->name('dependencia.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\DependenciaController@store',
	    'middleware' => ['permission:dependencia-crear']
	])->name('dependencia.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\DependenciaController@edit',
	    'middleware' => ['permission:dependencia-editar']
	])->name('dependencia.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\DependenciaController@update',
	    'middleware' => ['permission:dependencia-editar']
	])->name('dependencia.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\DependenciaController@show',
	    'middleware' => ['permission:dependencia-leer']
	])->name('dependencia.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\DependenciaController@destroy',
	    'middleware' => ['permission:dependencia-borrar']
	])->name('dependencia.borrar');
	
});