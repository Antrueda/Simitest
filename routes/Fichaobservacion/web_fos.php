<?php
Route::group(['prefix' => 'fos'], function () {
	Route::get('', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@index',
		'middleware' => ['permission:fosfichaobservacion-leer|fosfichaobservacion-crear|fosfichaobservacion-editar|fosfichaobservacion-borrar']
	])->name('fos');
	
	Route::get('obtenerTipoSeguimientos', [
		'uses' => 'FichaObservacion\FosDatoBasicoController@obtenerTipoSeguimientos',
		'middleware' => ['permission:fosfichaobservacion-leer']
	 ])->name('fos.fichaobservacion.obtenerTipoSeguimientos');
	include_once('web_fos_ficha_observacion.php');
});
