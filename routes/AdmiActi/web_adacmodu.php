<?php
$routexxx = 'adacmodu';
$controll = 'AdmiActi\AAModuloController@';
Route::group(['prefix' => 'moduloaa'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    require_once('web_admiacti.php');
    require_once('web_admitiac.php');
});
