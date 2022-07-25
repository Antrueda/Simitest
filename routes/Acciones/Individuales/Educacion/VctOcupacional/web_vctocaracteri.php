<?php
$routexxx='vctocara';
$controll = 'Acciones\Individuales\Educacion\VctOcupacional\FormuVtcOcupacional\VctoCaracteri';
Route::group(['prefix' => 'caracterizacion'], function () use($routexxx,$controll) {
    Route::get('{padrexxx}/nuevo', [
        'uses' => $controll.'Controller@create',
        'middleware' => ['permission:'.$routexxx.'-crearxxx']
    ])->name($routexxx.'.nuevoxxx');
    Route::post('{padrexxx}/crear', [
        'uses' => $controll.'Controller@store',
        'middleware' => ['permission:'.$routexxx.'-crearxxx']
    ])->name($routexxx.'.crearxxx');
	Route::get('editar/{modeloxx}', [
	    'uses' => $controll.'Controller@edit',
	    'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editarxx');
	Route::put('editar/{modeloxx}', [
	    'uses' => $controll.'Controller@update',
	    'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editarxx');
	Route::get('ver/{modeloxx}', [
	    'uses' => $controll.'Controller@show',
	    'middleware' => ['permission:'.$routexxx.'-leerxxxx']
	])->name($routexxx.'.verxxxxx');
});
