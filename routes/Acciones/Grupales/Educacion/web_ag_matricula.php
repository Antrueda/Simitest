<?php
$controll = 'Acciones\Grupales\AgActividad';
$routxxxx = 'agactividad';
Route::group(['prefix' => 'agactividad'], function () use($controll,$routxxxx) {
    Route::get('', [
	    'uses' => $controll.'Controller@index',
	    'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@listaActividades',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxx');
    Route::get('{padrexxx}/responsable', [
        'uses' => $controll . 'Controller@listaResponsables',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.responsa');

    Route::get('{padrexxx}/asistentes', [
        'uses' => $controll . 'Controller@getAsistente',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.agasiste');

    Route::get('{padrexxx}/documento', [
        'uses' => $controll . 'Controller@listaDocumentos',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.agcargdoc');


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

});
require_once('web_ag_responsable.php');
require_once('web_ag_asistentes.php');
require_once('web_ag_relacion.php');
require_once('web_agcargdoc.php');


