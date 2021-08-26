<?php
$routxxxx = 'traslado';
$controll = 'Acciones\Grupales\Traslado\Traslado';
Route::group(['prefix' => 'traslado'], function () use ($controll, $routxxxx) {
    Route::get('', [
	    'uses' => $controll.'Controller@index',
	    'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx);
    Route::get('nnajs', [
        'uses' => $controll . 'Controller@getNnajTraslado',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.trasladonnajs');
	Route::get('{padrexxx}/nnajs', [
        'uses' => $controll . 'Controller@getNnajTraslado',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.trasladonnaj');
	Route::get('listaxxx', [
        'uses' => $controll . 'Controller@listaTraslados',
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

	Route::get('servicio', [
	    'uses' => $controll.'Controller@getServicio',
	    'middleware' => ['permission:'.$routxxxx.'-leer']
    ])->name($routxxxx.'.servicio');

	Route::get('responsa', [
        'uses' => $controll . 'Controller@getResponsableUpiE',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.responsa');

    Route::get('responsar', [
        'uses' => $controll . 'Controller@getResponsableUpiR',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.responsar');

    Route::get('gabela', [
        'uses' => $controll . 'Controller@getGabela',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.gabela');

    Route::get('upiservicio', [
        'uses' => $controll . 'Controller@getUpiTServicio',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.upiservicio');

    Route::get('egreso', [
        'uses' => $controll . 'Controller@getEgreso',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.egreso');

    Route::get('traslado', [
        'uses' => $controll . 'Controller@getTraslado',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.traslado');


    
});

require_once('web_trasladonnnaj.php');