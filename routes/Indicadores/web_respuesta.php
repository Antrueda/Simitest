<?php
Route::group(['prefix' => 'respuesta'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InRespuestaController@index',
	    'middleware' => ['permission:inrespuesta-leer|inrespuesta-crear|inrespuesta-editar|inrespuesta-borrar']
	])->name('re');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\InRespuestaController@create',
	    'middleware' => ['permission:inrespuesta-crear']
	])->name('re.respuesta.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InRespuestaController@store',
	    'middleware' => ['permission:inrespuesta-crear']
	])->name('re.respuesta.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InRespuestaController@edit',
	    'middleware' => ['permission:inrespuesta-editar']
	])->name('re.respuesta.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InRespuestaController@update',
	    'middleware' => ['permission:inrespuesta-editar']
	])->name('re.respuesta.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InRespuestaController@show',
	    'middleware' => ['permission:inrespuesta-leer']
	])->name('re.respuesta.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InRespuestaController@destroy',
	    'middleware' => ['permission:inrespuesta-borrar']
	])->name('re.respuesta.borrar');
	
});