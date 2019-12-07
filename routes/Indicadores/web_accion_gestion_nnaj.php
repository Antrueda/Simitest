<?php
Route::group(['prefix' => '{nnaj}/inaccion'], function () {
	Route::get('', [
		'uses' => 'Indicadores\InLineabaseNnajController@index',
		'middleware' => ['permission:inacciongestion-leer|inacciongestion-crear|inacciongestion-editar|inacciongestion-borrar']
	])->name('ag.acciongestion.bases');

	require_once('web_actividad.php');
});
