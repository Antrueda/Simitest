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
	Route::get('{padrexxx}/fos', [
		'uses' => $controll.'Controller@indexFos',
		'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx.'.indexfos');

    Route::get('{padrexxx}/nuevo', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');

	Route::post('{padrexxx}/crear', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:'.$routxxxx.'-crear']
    ])->name($routxxxx.'.crear');







	Route::get('obtenerTipoSeguimientos', [
		'uses' => $controll.'Controller@obtenerTipoSeguimientos',
		'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
	 ])->name($routxxxx.'.fichaobservacion.obtenerTipoSeguimientos');
	include_once('web_fos_ficha_observacion.php');
});

