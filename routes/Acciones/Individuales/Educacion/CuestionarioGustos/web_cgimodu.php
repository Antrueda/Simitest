<?php
$routexxx = 'cgimodu';
$controll = 'Acciones\Idividuales\Educacion\CuesionarioGustos\CgModuloController@';
Route::group(['prefix' => 'modulocgi'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);


    Route::get('listaxxx', [
        'uses' => $controll . 'getListaxxx',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.listaxxx');
    require_once('web_actaencu.php');
    require_once('web_aerecurs.php');
    require_once('web_asistenc.php');
    require_once('web_aecontac.php');
    require_once('web_asisnnaj.php');
});
