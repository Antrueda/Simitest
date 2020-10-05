<?php

$routexxx='vsieduca';
$controll='Sicosocial\VsiEducacion';
Route::group(['prefix' => 'educacion'], function () use($routexxx,$controll) {

    Route::get('{padrexxx}/nuevo', [
        'uses' => $controll.'Controller@create',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.nuevo');
    Route::post('{padrexxx}/crear', [
        'uses' => $controll.'Controller@store',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => $controll.'Controller@edit',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => $controll.'Controller@update',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => $controll.'Controller@show',
	    'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.ver');

	Route::get('limpiar', [
	    'uses' => $controll.'Controller@limpiar',
	    'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.limpiar');
});
