<?php
$routexxx = 'diarmodu';
$controll = 'Acciones\Grupales\Asistencias\Diaria\AsisDiarModuloController@';
Route::group(['prefix' => 'asistencia'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    require_once('web_diariaxx.php');
});
