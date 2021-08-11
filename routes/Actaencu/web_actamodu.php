<?php
$routexxx = 'actamodu';
$controll = 'Actaencu\AeModuloController@';
Route::group(['prefix' => 'moduloae'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    require_once('web_actaencu.php');
    require_once('web_aecontac.php');
    require_once('web_asistenc.php');
    require_once('web_asisnnaj.php');
    require_once('web_aerecadm.php');
    require_once('web_aerecurs.php');
});
