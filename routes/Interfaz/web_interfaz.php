<?php
$routexxx = 'fidatbas';
$controll = 'BkProduccionController@';
Route::group(['prefix' => 'bk'], function () use ($routexxx, $controll) {
    Route::get('{tablaxxx}/{maximoxx}/{orderbyx}', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . 
        $routexxx . '-leer|' . 
        $routexxx . '-crear|' . 
        $routexxx . '-editar|' . 
        $routexxx . '-borrar']
    ])->name($routexxx.'backupxx'); 
});

