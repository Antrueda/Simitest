<?php
Route::group(['prefix' => 'agsubtema'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgSubtemaController@index',
	    'middleware' => ['permission:agsubtema-leer|agsubtema-crear|agsubtema-editar|agsubtema-borrar']
	])->name('ag.subt');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgSubtemaController@create',
	    'middleware' => ['permission:agsubtema-crear']
	])->name('ag.subt.subtema.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgSubtemaController@store',
	    'middleware' => ['permission:agsubtema-crear']
	])->name('ag.subt.subtema.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgSubtemaController@edit',
	    'middleware' => ['permission:agsubtema-editar']
	])->name('ag.subt.subtema.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgSubtemaController@update',
	    'middleware' => ['permission:agsubtema-editar']
	])->name('ag.subt.subtema.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgSubtemaController@show',
	    'middleware' => ['permission:agsubtema-leer']
	])->name('ag.subt.subtema.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgSubtemaController@destroy',
	    'middleware' => ['permission:agsubtema-borrar']
	])->name('ag.subt.subtema.borrar');
});