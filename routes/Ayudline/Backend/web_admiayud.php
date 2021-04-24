<?php
$routexxx='ayudadmi';
$controll='Ayudline\Backend\AyudaBackendController@';
Route::group(['prefix' => 'ayudasadmin'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'index',
		'middleware' => ['permission:'.$routexxx.'-leerxxxx']
    ])->name($routexxx);

    Route::get('nuevo', [
		'uses' => $controll.'create',
		'middleware' => ['permission:'.$routexxx.'-crearxxx']
	])->name($routexxx.'.nuevoxxx');

    Route::get('listaxxx', [
		'uses' => $controll.'listayudasadmin',
		'middleware' => ['permission:'.$routexxx.'-leerxxxx']
    ])->name($routexxx.'.listaxxx');

	Route::post('crear', [
		'uses' => $controll.'store',
		'middleware' => ['permission:'.$routexxx.'-crearxxx']
    ])->name($routexxx.'.crearxxx');
	Route::get('editar/{modeloxx}', [
		'uses' => $controll.'edit',
		'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editarxx');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'update',
		'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editarxx');

	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'show',
		'middleware' => ['permission:'.$routexxx.'-leerxxxx']
	])->name($routexxx.'.verxxxxx');

	Route::get('borrar/{modeloxx}', [
	    'uses' => $controll.'inactivate',
	    'middleware' => ['permission:'.$routexxx.'-borrarxx']
    ])->name($routexxx.'.borrarxx');

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
