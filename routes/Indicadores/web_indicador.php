<?php
Route::group(['prefix' => 'indicador'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InIndicadorController@index',
	    'middleware' => ['permission:indicador-leer|indicador-crear|indicador-editar|indicador-borrar']
	])->name('in');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\InIndicadorController@create',
	    'middleware' => ['permission:indicador-crear']
	])->name('in.indicador.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InIndicadorController@store',
	    'middleware' => ['permission:indicador-crear']
	])->name('in.indicador.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InIndicadorController@edit',
	    'middleware' => ['permission:indicador-editar']
	])->name('in.indicador.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InIndicadorController@update',
	    'middleware' => ['permission:indicador-editar']
	])->name('in.indicador.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InIndicadorController@show',
	    'middleware' => ['permission:indicador-leer']
	])->name('in.indicador.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InIndicadorController@destroy',
	    'middleware' => ['permission:indicador-borrar']
	])->name('in.indicador.borrar');
});