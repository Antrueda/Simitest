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

    Route::get('{padrexxx}/listafos', [
		'uses' => $controll.'Controller@getListaFos',
		'middleware' => ['permission:'.$routxxxx.'-leer']
	])->name($routxxxx.'.listafos');
	

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

    Route::get('editar/{modeloxx}', [
		'uses' => $controll.'Controller@edit',
		'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'Controller@update',
		'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');

	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'Controller@show',
		'middleware' => ['permission:'.$routxxxx.'-leer']
	])->name($routxxxx.'.ver');

	Route::get('borrar/{modeloxx}', [
	    'uses' => $controll.'Controller@inactivate',
	    'middleware' => ['permission:'.$routxxxx.'-borrar']
    ])->name($routxxxx.'.borrar');

    Route::put('borrar/{modeloxx}', [
		'uses' => $controll . 'Controller@destroy',
		'middleware' => ['permission:' . $routxxxx . '-borrar']
	])->name($routxxxx . '.borrar');
	Route::get('obtenerTipoSeguimientos', [
		'uses' => $controll.'Controller@obtenerTipoSeguimientos',
		'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
	 ])->name($routxxxx.'.obtenerTipoSeguimientos');

});

