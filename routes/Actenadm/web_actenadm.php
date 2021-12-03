<?php
$routexxx = 'actenadm';
$controll = 'Actenadm\AeAdminModuloController@';
Route::group(['prefix' => 'adminmoduloae'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);
    require_once('web_aerecadm.php');
});
