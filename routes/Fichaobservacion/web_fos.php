<?php
$controll='FichaObservacion\Fos';
$routxxxx='fosfichaobservacion';
Route::group(['prefix' => 'nnajsfos'], function () use($controll,$routxxxx){
	Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
	])->name($routxxxx);
    Route::get('listaxxx', [
		'uses' => $controll.'Controller@getListado',
		'middleware' => ['permission:'.$routxxxx.'-leer']
    ])->name($routxxxx.'.listaxxx');
	Route::get('{id}', [
		'uses' => $controll.'Controller@lista',
		'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
	])->name($routxxxx.'.ver');

	Route::get('obtenerTipoSeguimientos', [
		'uses' => $controll.'Controller@obtenerTipoSeguimientos',
		'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
	 ])->name($routxxxx.'.fichaobservacion.obtenerTipoSeguimientos');
	include_once('web_fos_ficha_observacion.php');
});
