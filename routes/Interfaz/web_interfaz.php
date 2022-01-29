<?php
$routexxx = 'fidatbas';
$controll = 'BkProduccionController@';
Route::group(['prefix' => 'bk/produccion'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx.'backupxx');
   
});

