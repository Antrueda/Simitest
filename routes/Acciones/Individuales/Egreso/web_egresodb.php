<?php
$routxxxx = 'egresosdb';
$controll = 'Acciones\Individuales\Emprendimiento\Egreso\EgresoBasicos';
Route::group(['prefix' => '{padrexxx}/SEgreso'], function () use ($controll, $routxxxx) {
    Route::get('', [
	    'uses' => $controll.'Controller@index',
	    'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@listaSEgresos',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxx');
    
    Route::get('nuevo', [
	    'uses' => $controll.'Controller@create',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');
	Route::post('nuevo', [
	    'uses' => $controll.'Controller@store',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.crear');
    Route::get('listodox', [
        'uses' => $controll . 'Controller@getTodoComFami',
        'middleware' => ['permission:' . $routxxxx . '-leer|']
    ])->name($routxxxx . '.listodox');

});

Route::group(['prefix' => 'EgresoDB'], function () use ($controll, $routxxxx) {

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
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');


    Route::get('nnajsele', [
		'uses' => $controll . 'Controller@getNnajsele',
		'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.nnajsele');
    
    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activate',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activar',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');
});
require_once('web_egresosder.php');
require_once('web_egresoredes.php');
require_once('web_egresopost.php');
require_once('web_egresocomite.php');

