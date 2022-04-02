<?php
$routexxx = 'cgihmodu';
$controll = 'Acciones\Individuales\Educacion\AdmiActiAsd\AAModuloController@';
Route::group(['prefix' => 'modulocgih'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        // 'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    require_once('web_admiactiasd.php');
    require_once('web_admitiacasd.php');
});
