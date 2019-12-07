<?php
Route::group(['prefix' => 'tema'], function () {
    Route::get('', [
	    'uses' => 'Administracion\TemaController@index',
	    'middleware' => ['permission:tema-leer|tema-crear|tema-editar|tema-borrar']
	])->name('tema');
	Route::get('nuevo', [
	    'uses' => 'Administracion\TemaController@create',
	    'middleware' => ['permission:tema-crear']
	])->name('tema.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\TemaController@store',
	    'middleware' => ['permission:tema-crear']
	]);
	Route::get('editar/{id}', [
	    'uses' => 'Administracion\TemaController@edit',
	    'middleware' => ['permission:tema-editar']
	])->name('tema.editar');
	Route::put('editar/{id}', [
	    'uses' => 'Administracion\TemaController@update',
	    'middleware' => ['permission:tema-editar']
	]);
	Route::put('editar/{id}/{id0}', [
	    'uses' => 'Administracion\TemaController@updateParametro',
	    'middleware' => ['permission:tema-crear|tema-editar']
	])->name('tema.editarParametro');
	Route::get('ver/{id}', [
	    'uses' => 'Administracion\TemaController@show',
	    'middleware' => ['permission:tema-leer']
	])->name('tema.ver');
	Route::delete('ver/{id}', [
	    'uses' => 'Administracion\TemaController@destroy',
	    'middleware' => ['permission:tema-borrar']
	]);
	Route::delete('ver/{id}/{id0}', [
	    'uses' => 'Administracion\TemaController@destroyParametro',
	    'middleware' => ['permission:tema-borrar']
	])->name('tema.verParametro');
});