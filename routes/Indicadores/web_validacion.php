<?php
Route::group(['prefix' => 'invalidacion'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InValidacionController@index',
	    'middleware' => ['permission:invalidacion-leer|invalidacion-crear|invalidacion-editar|invalidacion-borrar']
	])->name('va');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\InValidacionController@create',
	    'middleware' => ['permission:invalidacion-crear']
	])->name('va.validacion.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InValidacionController@store',
	    'middleware' => ['permission:invalidacion-crear']
	])->name('va.validacion.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InValidacionController@edit',
	    'middleware' => ['permission:invalidacion-editar']
	])->name('va.validacion.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InValidacionController@update',
	    'middleware' => ['permission:invalidacion-editar']
	])->name('va.validacion.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InValidacionController@show',
	    'middleware' => ['permission:invalidacion-leer']
	])->name('va.validacion.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InValidacionController@destroy',
	    'middleware' => ['permission:invalidacion-borrar']
	])->name('va.validacion.borrar');
});