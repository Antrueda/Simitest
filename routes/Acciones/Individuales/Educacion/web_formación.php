<?php
$routexxx = 'histocon';
$controll = 'Acciones\Individuales\Educacion\HistorialFormacion\HistorialForma';
Route::group(['prefix' => '{padrexxx}/Histoformacion'], function () use ($controll, $routexxx) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@getNnajHistorial',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx . '.listaxxx');



});



