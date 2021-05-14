<?php
$controll = 'Acciones\Grupales\Matricula\Matriculannaj';
$routxxxx = 'imatriculannaj';
Route::group(['prefix' => '{padrexxx}/matriculannaj'], function () use ($controll, $routxxxx) {
    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routxxxx . '-crear']
    ])->name($routxxxx . '.nuevo');
    Route::post('nuevo', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routxxxx . '-crear']
    ])->name($routxxxx . '.crear');
    Route::get('agregar', [
        'uses' => $controll . 'Controller@getAgregarjoven',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.agregar');
    Route::get('listannajs', [
        'uses' => $controll . 'Controller@getNnaj',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listnnaj');
    Route::get('quitar', [
        'uses' => $controll . 'Controller@getQuitarNnaj',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.quitar');
    Route::get('nnajsele', [
		'uses' => $controll . 'Controller@getNnajsele',
		'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.nnajsele');
});
Route::group(['prefix' => 'matriculannaj'], function () use ($controll, $routxxxx) {

    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routxxxx . '-editar']
    ])->name($routxxxx . '.editar');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routxxxx . '-editar']
    ])->name($routxxxx . '.editar');
    Route::get('representa', [
		'uses' => $controll . 'Controller@getRepresenta',
	//	'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.representa');


    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'Controller@show',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.ver');
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
