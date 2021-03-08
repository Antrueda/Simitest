<?php
$routexxx = 'temamodu';
$controll = 'Administracion\Temas\TemaModulo';
Route::group(['prefix' => 'temaparametros'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-modulo']
    ])->name($routexxx);

    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@listaNnaj',
        'middleware' => ['permission:' . $routexxx . '-modulo']
    ])->name($routexxx . '.listaxxx');
    require_once('web_temaxxxx.php');
    require_once('web_parametr.php');
    require_once('web_comboxxx.php');
    require_once('web_combpara.php');
});
