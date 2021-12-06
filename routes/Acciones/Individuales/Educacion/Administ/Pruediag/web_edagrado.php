<?php
$controll='Acciones\Individuales\Educacion\Administ\Pruediag\EdaGradoController@';
$routxxxx='edagrado';
Route::group(['prefix' => 'grados'], function () use($controll,$routxxxx){
	Route::get('', [
		'uses' => $controll.'index',
		'middleware' => ['permission:'.
        $routxxxx.'-leerxxxx|'.
        $routxxxx.'-crearxxx|'.
        $routxxxx.'-editarxx|'.
        $routxxxx.'-borrarxx|'.
        $routxxxx.'-activarx']
	])->name($routxxxx);
    Route::get('listgrad', [
		'uses' => $controll.'getGrados',
		'middleware' => ['permission:'.$routxxxx.'-leerxxxx']
    ])->name($routxxxx.'.listgrad');
	Route::get('nuevo', [
		'uses' => $controll.'create',
		'middleware' => ['permission:'.$routxxxx.'-crearxxx']
	])->name($routxxxx.'.nuevoxxx');

	Route::post('crear', [
		'uses' => $controll.'store',
		'middleware' => ['permission:'.$routxxxx.'-crearxxx']
    ])->name($routxxxx.'.crearxxx');

    Route::get('editar/{modeloxx}', [
		'uses' => $controll.'edit',
		'middleware' => ['permission:'.$routxxxx.'-editarxx']
	])->name($routxxxx.'.editarxx');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'update',
		'middleware' => ['permission:'.$routxxxx.'-editarxx']
	])->name($routxxxx.'.editarxx');

	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'show',
		'middleware' => ['permission:'.$routxxxx.'-leerxxxx']
	])->name($routxxxx.'.verxxxxx');

	Route::get('borrar/{modeloxx}', [
	    'uses' => $controll.'inactivate',
	    'middleware' => ['permission:'.$routxxxx.'-borrarxx']
    ])->name($routxxxx.'.borrarxx');

    Route::put('borrar/{modeloxx}', [
		'uses' => $controll . 'destroy',
		'middleware' => ['permission:' . $routxxxx . '-borrarxx']
    ])->name($routxxxx . '.borrarxx');

    Route::get('activate/{modeloxx}', [
	    'uses' => $controll.'activate',
	    'middleware' => ['permission:'.$routxxxx.'-activarx']
    ])->name($routxxxx.'.activarx');

    Route::put('activate/{modeloxx}', [
		'uses' => $controll . 'activar',
		'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

    require_once('web_edasigra.php');
});



