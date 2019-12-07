<?php
Route::group(['prefix' => 'fsoporte'], function () {
    Route::get('', [
	    'uses' => 'Administracion\SisFsoporteController@index',
	    'middleware' => ['permission:fsoporte-leer|fsoporte-crear|fsoporte-editar|fsoporte-borrar']
	])->name('fsoporte');
	Route::get('nuevo', [
	    'uses' => 'Administracion\SisFsoporteController@create',
	    'middleware' => ['permission:fsoporte-crear']
	])->name('fsoporte.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\SisFsoporteController@store',
	    'middleware' => ['permission:fsoporte-crear']
	])->name('fsoporte.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\SisFsoporteController@edit',
	    'middleware' => ['permission:fsoporte-editar']
	])->name('fsoporte.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\SisFsoporteController@update',
	    'middleware' => ['permission:fsoporte-editar']
	])->name('fsoporte.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\SisFsoporteController@show',
	    'middleware' => ['permission:fsoporte-leer']
	])->name('fsoporte.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\SisFsoporteController@destroy',
	    'middleware' => ['permission:fsoporte-borrar']
	])->name('fsoporte.borrar');

});
