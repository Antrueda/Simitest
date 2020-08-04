<?php
Route::group(['prefix' => 'is'], function () {
	Route::get('', [
		'uses' => 'Intervencion\IsDatoBasicoController@index',
		'middleware' => ['permission:isintervencion-leer|isintervencion-crear|isintervencion-editar|isintervencion-borrar']
	])->name('is');
		Route::get('{id}', [
		'uses' => 'Intervencion\IsDatoBasicoController@lista',
		'middleware' => ['permission:isintervencion-leer|isintervencion-crear|isintervencion-editar|isintervencion-borrar']
	])->name('is.ver');
	
	include_once('web_is_intervencion.php');
});
