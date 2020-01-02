<?php
Route::group(['prefix' => 'fosarea'], function () {
    Route::get('', [
	    'uses' => 'Administracion\FosAreaController@index',
	    'middleware' => ['permission:fosarea-leer|fosarea-crear|fosarea-editar|fosarea-borrar']
	])->name('fosarea');
	Route::get('nuevo', [
	    'uses' => 'Administracion\FosAreaController@create',
	    'middleware' => ['permission:fosarea-crear']
	])->name('fosarea.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\FosAreaController@store',
	    'middleware' => ['permission:fosarea-crear']
	]);
	Route::get('editar/{id}', [
	    'uses' => 'Administracion\FosAreaController@edit',
	    'middleware' => ['permission:fosarea-editar']
	])->name('fosarea.editar');
	Route::put('editar/{id}', [
	    'uses' => 'Administracion\FosAreaController@update',
	    'middleware' => ['permission:fosarea-editar']
	]);
	Route::put('editar/{id}/{id0}', [
	    'uses' => 'Administracion\FosAreaController@updateParametro',
	    'middleware' => ['permission:fosarea-crear|fosarea-editar']
	])->name('fosarea.editarParametro');
	Route::get('ver/{id}', [
	    'uses' => 'Administracion\FosAreaController@show',
	    'middleware' => ['permission:fosarea-leer']
	])->name('fosarea.ver');
	Route::delete('ver/{id}', [
	    'uses' => 'Administracion\FosAreaController@destroy',
	    'middleware' => ['permission:fosarea-borrar']
	]);
	Route::delete('ver/{id}/{id0}', [
	    'uses' => 'Administracion\FosAreaController@destroyParametro',
	    'middleware' => ['permission:fosarea-borrar']
	])->name('fosarea.verParametro');
});