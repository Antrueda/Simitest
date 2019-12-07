<?php
Route::group(['prefix' => 'is'], function () {
	Route::get('', [
		'uses' => 'Intervencion\IsDatoBasicoController@index',
		'middleware' => ['permission:isintervencion-leer|isintervencion-crear|isintervencion-editar|isintervencion-borrar']
	])->name('is');
	
	include_once('web_is_intervencion.php');
});
