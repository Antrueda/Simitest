<?php

Route::group(['prefix' => '{fuen}'], function () {
	Route::get('', [
		'uses' => 'Indicadores\InActFuenteController@index',
		'middleware' => ['permission:inacciongestion-leer|inacciongestion-crear|inacciongestion-editar|inacciongestion-borrar']
	])->name('ag.actfuente.actividad');
	Route::get('nuevo', [
		'uses' => 'Indicadores\InActFuenteController@create',
		'middleware' => ['permission:inacciongestion-crear']
	])->name('ag.actfuente.nuevo');
	Route::post('nuevo', [
		'uses' => 'Indicadores\InActFuenteController@store',
		'middleware' => ['permission:inacciongestion-crear']
	])->name('ag.actfuente.crear');

	Route::get('editar/{objetoxx}', [
		'uses' => 'Indicadores\InActFuenteController@edit',
		'middleware' => ['permission:inacciongestion-editar']
	])->name('ag.actfuente.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => 'Indicadores\InActFuenteController@update',
		'middleware' => ['permission:inacciongestion-editar']
	])->name('ag.actfuente.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => 'Indicadores\InActFuenteController@show',
		'middleware' => ['permission:inacciongestion-leer']
	])->name('ag.actfuente.ver');
	Route::delete('ver/{objetoxx}', [
		'uses' => 'Indicadores\InActFuenteController@destroy',
		'middleware' => ['permission:inacciongestion-borrar']
	])->name('ag.actfuente.borrar');
});
