<?php
Route::group(['prefix' => 'inlineabase'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InLineaBaseController@index',
	    'middleware' => ['permission:inlineabase-leer|inlineabase-crear|inlineabase-editar|inlineabase-borrar']
	])->name('li');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\InLineaBaseController@create',
	    'middleware' => ['permission:inlineabase-crear']
	])->name('li.lineabase.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InLineaBaseController@store',
	    'middleware' => ['permission:inlineabase-crear']
	])->name('li.lineabase.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InLineaBaseController@edit',
	    'middleware' => ['permission:inlineabase-editar']
	])->name('li.lineabase.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InLineaBaseController@update',
	    'middleware' => ['permission:inlineabase-editar']
	])->name('li.lineabase.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InLineaBaseController@show',
	    'middleware' => ['permission:inlineabase-leer']
	])->name('li.lineabase.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InLineaBaseController@destroy',
	    'middleware' => ['permission:inlineabase-borrar']
	])->name('li.lineabase.borrar');
});