<?php
Route::group(['prefix' => 'fostipo'], function () {
    Route::get('', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@index',
	    'middleware' => ['permission:fostipo-leer|fostipo-crear|fostipo-editar|fostipo-borrar']
	])->name('fostipo');
	Route::get('nuevo', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@create',
	    'middleware' => ['permission:fostipo-crear']
	])->name('fostipo.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@store',
	    'middleware' => ['permission:fostipo-crear']
	]);
	Route::get('editar/{id}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@edit',
	    'middleware' => ['permission:fostipo-editar']
	])->name('fostipo.editar');
	Route::put('editar/{id}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@update',
	    'middleware' => ['permission:fostipo-editar']
	]);
	Route::put('editar/{id}/{id0}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@updateParametro',
	    'middleware' => ['permission:fostipo-crear|fostipo-editar']
	])->name('fostipo.editarParametro');
	Route::get('ver/{id}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@show',
	    'middleware' => ['permission:fostipo-leer']
	])->name('fostipo.ver');
	Route::delete('ver/{id}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@destroy',
	    'middleware' => ['permission:fostipo-borrar']
	]);
	Route::delete('ver/{id}/{id0}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@destroyParametro',
	    'middleware' => ['permission:fostipo-borrar']
	])->name('fostipo.verParametro');
});