<?php
$routexxx = 'assemodu';
$controll = 'Acciones\Grupales\Asistencias\Semanal\AsisSemaModuloController@';
Route::group(['prefix' => 'assemodu'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);
    require_once('web_asissema.php');
});
