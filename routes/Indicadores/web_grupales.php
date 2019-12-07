<?php
Route::group(['prefix' => 'ingrupal'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InGrupalController@index',
	    'middleware' => ['permission:ingrupal-leer|ingrupal-crear|ingrupal-editar|ingrupal-borrar']
	])->name('gru');
	Route::get('nuevo', [  
	    'uses' => 'Indicadores\InGrupalController@create',
	    'middleware' => ['permission:ingrupal-crear']
	])->name('gru.grupal.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InGrupalController@store',
	    'middleware' => ['permission:ingrupal-crear']
	])->name('gru.grupal.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InGrupalController@edit',
	    'middleware' => ['permission:ingrupal-editar']
	])->name('gru.grupal.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InGrupalController@update',
	    'middleware' => ['permission:ingrupal-editar']
	])->name('gru.grupal.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InGrupalController@show',
	    'middleware' => ['permission:ingrupal-leer']
	])->name('gru.grupal.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InGrupalController@destroy',
	    'middleware' => ['permission:ingrupal-borrar']
	])->name('gru.grupal.borrar');
});