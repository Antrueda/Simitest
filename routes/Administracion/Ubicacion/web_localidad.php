<?php
$routexxx = 'localida';
$controll = 'Administracion\Ubicacion\SisLocalidadController@';
Route::group(['prefix' => 'localidades'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'listaLocalidades',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.listaxxx');
});
