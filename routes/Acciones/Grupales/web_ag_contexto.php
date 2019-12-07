<?php
Route::group(['prefix' => 'agcontexto'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgContextoController@index',
	    'middleware' => ['permission:agcontexto-leer|agcontexto-crear|agcontexto-editar|agcontexto-borrar']
	])->name('ag.cont');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgContextoController@create',
	    'middleware' => ['permission:agcontexto-crear']
	])->name('ag.cont.contexto.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgContextoController@store',
	    'middleware' => ['permission:agcontexto-crear']
	])->name('ag.cont.contexto.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgContextoController@edit',
	    'middleware' => ['permission:agcontexto-editar']
	])->name('ag.cont.contexto.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgContextoController@update',
	    'middleware' => ['permission:agcontexto-editar']
	])->name('ag.cont.contexto.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgContextoController@show',
	    'middleware' => ['permission:agcontexto-leer']
	])->name('ag.cont.contexto.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgContextoController@destroy',
	    'middleware' => ['permission:agcontexto-borrar']
	])->name('ag.cont.contexto.borrar');
});