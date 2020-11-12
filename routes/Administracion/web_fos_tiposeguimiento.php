<?php
Route::group(['prefix' => 'fostipo'], function () {
    Route::get('', [
	    'uses' => 'Administracion\FosTiposeguimientoController@index',
	    'middleware' => ['permission:fostipo-leer|fostipo-crear|fostipo-editar|fostipo-borrar']
	])->name('fostipo');
	Route::get('nuevo', [
	    'uses' => 'Administracion\FosTiposeguimientoController@create',
	    'middleware' => ['permission:fostipo-crear']
	])->name('fostipo.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\FosTiposeguimientoController@store',
	    'middleware' => ['permission:fostipo-crear']
	])->name('fostipo.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\FosTiposeguimientoController@edit',
	    'middleware' => ['permission:fostipo-editar']
	])->name('fostipo.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\FosTiposeguimientoController@update',
	    'middleware' => ['permission:fostipo-editar']
	])->name('fostipo.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\FosTiposeguimientoController@show',
	    'middleware' => ['permission:fostipo-leer']
	])->name('fostipo.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\FosTiposeguimientoController@destroy',
	    'middleware' => ['permission:fostipo-borrar']
	]);
});
