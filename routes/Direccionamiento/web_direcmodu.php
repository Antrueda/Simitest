<?php
$routexxx = 'direccionmodulo';
$controll = 'Direccionamiento\DireccionamientoModuloController@';
Route::group(['prefix' => 'modulodire'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-modulo']
    ])->name($routexxx);


    Route::get('listaxxx', [
        'uses' => $controll . 'getListaxxx',
        'middleware' => ['permission:' . $routexxx . '-modulo']
    ])->name($routexxx . '.listaxxx');

    require_once('web_direccionamiento.php');
    require_once('web_moduloE.php');
    
});
