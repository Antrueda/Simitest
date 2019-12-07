<?php
Route::group(['prefix' => 'inbasefuente'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InBaseFuenteController@index',
	    'middleware' => ['permission:inbasefuente-leer|inbasefuente-crear|inbasefuente-editar|inbasefuente-borrar']
	])->name('lbf');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\InBaseFuenteController@create',
	    'middleware' => ['permission:inbasefuente-crear']
	])->name('lbf.basefuente.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InBaseFuenteController@store',
	    'middleware' => ['permission:inbasefuente-crear'] 
	])->name('lbf.basefuente.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InBaseFuenteController@edit',
	    'middleware' => ['permission:inbasefuente-editar']
	])->name('lbf.basefuente.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InBaseFuenteController@update',
	    'middleware' => ['permission:inbasefuente-editar']
	])->name('lbf.basefuente.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InBaseFuenteController@show',
	    'middleware' => ['permission:inbasefuente-leer']
	])->name('lbf.basefuente.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InBaseFuenteController@destroy',
	    'middleware' => ['permission:inbasefuente-borrar']
	])->name('lbf.basefuente.borrar');
});