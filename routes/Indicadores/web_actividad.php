<?php

Route::group(['prefix' => '{acti}'], function () {

	Route::get('', [
		'uses' => 'Indicadores\InAccionGestionController@index',
		'middleware' => ['permission:inacciongestion-leer|inacciongestion-crear|inacciongestion-editar|inacciongestion-borrar']
	])->name('ag.acciongestion.actividad');
	Route::get('nuevo', [
		'uses' => 'Indicadores\InAccionGestionController@create',
		'middleware' => ['permission:inacciongestion-crear']
	])->name('ag.acciongestion.nuevo');
	Route::post('nuevo', [
		'uses' => 'Indicadores\InAccionGestionController@store',
		'middleware' => ['permission:inacciongestion-crear']
	])->name('ag.acciongestion.crear');

	Route::get('editar/{objetoxx}', [
		'uses' => 'Indicadores\InAccionGestionController@edit',
		'middleware' => ['permission:inacciongestion-editar']
	])->name('ag.acciongestion.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => 'Indicadores\InAccionGestionController@update',
		'middleware' => ['permission:inacciongestion-editar']
	])->name('ag.acciongestion.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => 'Indicadores\InAccionGestionController@show',
		'middleware' => ['permission:inacciongestion-leer']
	])->name('ag.acciongestion.ver');
	Route::delete('ver/{objetoxx}', [
		'uses' => 'Indicadores\InAccionGestionController@destroy',
		'middleware' => ['permission:inacciongestion-borrar']
	])->name('ag.acciongestion.borrar');

	Route::get('porcentaje', [
		'uses' => 'Indicadores\InAccionGestionController@porcentaje',

	])->name('ag.acciongestion.porcentaje');
	require_once('web_in_act_fuente.php');
});
