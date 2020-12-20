<?php
Route::group(['prefix' => 'agcontexto'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgContextoController@index',
	    'middleware' => ['permission:agcontexto-leer|agcontexto-crear|agcontexto-editar|agcontexto-borrar']
	])->name('agcontexto');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgContextoController@create',
	    'middleware' => ['permission:agcontexto-crear']
	])->name('agcontexto.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgContextoController@store',
	    'middleware' => ['permission:agcontexto-crear']
	])->name('agcontexto.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgContextoController@edit',
	    'middleware' => ['permission:agcontexto-editar']
	])->name('agcontexto.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgContextoController@update',
	    'middleware' => ['permission:agcontexto-editar']
	])->name('agcontexto.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgContextoController@show',
	    'middleware' => ['permission:agcontexto-leer']
	])->name('agcontexto.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgContextoController@destroy',
	    'middleware' => ['permission:agcontexto-borrar']
	])->name('agcontexto.borrar');
});