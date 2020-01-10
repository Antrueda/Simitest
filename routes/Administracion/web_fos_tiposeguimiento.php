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
	])->name('fostipo.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@edit',
	    'middleware' => ['permission:fostipo-editar']
	])->name('fostipo.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@update',
	    'middleware' => ['permission:fostipo-editar']
	])->name('fostipo.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@show',
	    'middleware' => ['permission:fostipo-leer']
	])->name('fostipo.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\FosTipoSeguimientoController@destroy',
	    'middleware' => ['permission:fostipo-borrar']
	]);
});