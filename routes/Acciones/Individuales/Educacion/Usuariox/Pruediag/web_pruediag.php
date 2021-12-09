<?php
$routexxx = 'pruediag';
$controll = 'Acciones\Individuales\Educacion\Usuariox\Pruediag\PruediagController@';
Route::group(['prefix' => '{padrexxx}/pruediags'], function () use ($controll, $routexxx) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' .
        $routexxx . '-leerxxxx|' .
        $routexxx . '-crearxxx|' .
        $routexxx . '-editarxx|' .
        $routexxx . '-borrarxx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'getPruediagIndex',
        'middleware' => ['permission:' .
        $routexxx . '-leerxxxx|' .
        $routexxx . '-crearxxx|' .
        $routexxx . '-editarxx|' .
        $routexxx . '-borrarxx']
    ])->name($routexxx . '.listaxxx');

    Route::get('listpres', [
        'uses' => $controll . 'getPruediagView',
        'middleware' => ['permission:' .
        $routexxx . '-leerxxxx|' .
        $routexxx . '-crearxxx|' .
        $routexxx . '-editarxx|' .
        $routexxx . '-borrarxx']
    ])->name($routexxx . '.listpres');

    Route::get('nuevoxxx', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');
    Route::post('crearxxx', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');

});

Route::group(['prefix' => 'pruediag'], function () use ($controll, $routexxx) {
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.verxxxxx');
    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'edit',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'update',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');

    Route::get('activate/{modeloxx}', [
	    'uses' => $controll.'activate',
	    'middleware' => ['permission:'.$routexxx.'-activarx']
    ])->name($routexxx.'.activarx');

    Route::put('activate/{modeloxx}', [
		'uses' => $controll . 'activar',
		'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
});
require_once('web_edupresa.php');
