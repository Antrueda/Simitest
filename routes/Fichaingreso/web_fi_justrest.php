<?php
$routexxx = 'fijusticia';
$controll = 'FichaIngreso\FiJustrest';
Route::group(['prefix' => '{padrexxx}/fijusticia'], function () use ($routexxx, $controll) {

    Route::get('', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.nuevo');
    Route::get('listaxxx', [
        'uses' => $controll.'Controller@getListado',
        'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.listaxxx');

    Route::post('crear', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.crear');

    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');

    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');

    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'Controller@show',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.ver');

    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::get('pardspoa', [
        'uses' => $controll . 'Controller@getJustrestJRT',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.pardspoa');
});
