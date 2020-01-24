<?php
Route::group(['prefix' => 'area'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\AreaController@index',
	    'middleware' => ['permission:area-leer|area-crear|area-editar|area-borrar']
	])->name('area');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\AreaController@create',
	    'middleware' => ['permission:area-crear']
	])->name('area.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\AreaController@store',
	    'middleware' => ['permission:area-crear']
	])->name('area.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\AreaController@edit',
	    'middleware' => ['permission:area-editar']
	])->name('area.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\AreaController@update',
	    'middleware' => ['permission:area-editar']
	])->name('area.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => 'Indicadores\AreaController@show',
		'middleware' => ['permission:inacciongestion-leer']
	])->name('area.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\AreaController@destroy',
	    'middleware' => ['permission:area-borrar']
	])->name('area.borrar');
});