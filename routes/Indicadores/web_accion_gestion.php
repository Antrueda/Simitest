<?php
Route::group(['prefix' => 'ina'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InNnajController@index',
	    'middleware' => ['permission:inacciongestion-leer|inacciongestion-crear|inacciongestion-editar|inacciongestion-borrar']
	])->name('ag');
	
	require_once('web_accion_gestion_nnaj.php');
});