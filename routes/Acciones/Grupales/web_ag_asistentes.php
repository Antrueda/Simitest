<?php
$controll = 'Acciones\Grupales\AgAsistente';
$routxxxx = 'agasiste';
Route::group(['prefix' => '{padrexxx}/agsisitentes'], function () use ($controll, $routxxxx) {
    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routxxxx . '-crear']
    ])->name($routxxxx . '.nuevo');
    Route::post('nuevo', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routxxxx . '-crear']
    ])->name($routxxxx . '.crear');
    Route::get('agregar', [
        'uses' => $controll . 'Controller@getAgregarNnaj',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.agregar');
    Route::get('listannajs', [
        'uses' => $controll . 'Controller@getNnajs',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listnnaj');
    Route::get('quitar', [
        'uses' => $controll . 'Controller@getQuitarNnaj',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.quitar');
});
Route::group(['prefix' => 'agsisitente'], function () use ($controll, $routxxxx) {

    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routxxxx . '-editar']
    ])->name($routxxxx . '.editar');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routxxxx . '-editar']
    ])->name($routxxxx . '.editar');



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
