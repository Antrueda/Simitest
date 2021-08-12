<?php
$routexxx = 'actamodu';
$controll = 'Actaencu\AeModuloController@';
Route::group(['prefix' => 'moduloae'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);


    Route::get('listaxxx', [
        'uses' => $controll . 'getListaxxx',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.listaxxx');
    require_once('web_actaencu.php');
<<<<<<< HEAD
    require_once('web_aerecurs.php');
    require_once('web_asistenc.php');
    require_once('web_aecontac.php');
    require_once('web_asisnnaj.php');
=======
    require_once('web_aecontac.php');
    require_once('web_asistenc.php');
    require_once('web_asisnnaj.php');
    require_once('web_aerecadm.php');
    require_once('web_aerecurs.php');
>>>>>>> d93c0f82f90075c9d9b4f4053fba6f75dd587397
});
