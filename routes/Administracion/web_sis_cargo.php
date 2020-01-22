<?php
Route::group(['prefix' => 'cargo'], function () {
    Route::get('', [ 
	    'uses' => 'Administracion\SisCargoController@index',
	    'middleware' => ['permission:siscargo-leer|siscargo-crear|siscargo-editar|siscargo-borrar']
	])->name('sis.cargo');
	Route::get('nuevo', [
	    'uses' => 'Administracion\SisCargoController@create',
	    'middleware' => ['permission:siscargo-crear']
	])->name('sis.cargo.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\SisCargoController@store',
	    'middleware' => ['permission:siscargo-crear']
	])->name('sis.cargo.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\SisCargoController@edit',
	    'middleware' => ['permission:siscargo-editar']
	])->name('sis.cargo.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\SisCargoController@update',
	    'middleware' => ['permission:siscargo-editar']
	])->name('sis.cargo.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\SisCargoController@show',
	    'middleware' => ['permission:siscargo-leer']
	])->name('sis.cargo.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\SisCargoController@destroy',
	    'middleware' => ['permission:siscargo-borrar']
	])->name('sis.cargo.borrar');
	
});