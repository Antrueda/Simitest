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
	]);
	Route::get('editar/{id}', [
	    'uses' => 'Indicadores\AreaController@edit',
	    'middleware' => ['permission:area-editar']
	])->name('area.editar');
	Route::put('editar/{id}', [
	    'uses' => 'Indicadores\AreaController@update',
	    'middleware' => ['permission:area-editar']
	]);
	Route::put('editar/{id}/{id0}', [
	    'uses' => 'Indicadores\AreaController@updateParametro',
	    'middleware' => ['permission:area-crear|area-editar']
	])->name('area.editarParametro');
	Route::get('ver/{id}', [
	    'uses' => 'Indicadores\AreaController@show',
	    'middleware' => ['permission:area-leer']
	])->name('area.ver');
	Route::delete('ver/{id}', [
	    'uses' => 'Indicadores\AreaController@destroy',
	    'middleware' => ['permission:area-borrar']
	]);
	Route::delete('ver/{id}/{id0}', [
	    'uses' => 'Indicadores\AreaController@destroyParametro',
	    'middleware' => ['permission:area-borrar']
	])->name('area.verParametro');
});