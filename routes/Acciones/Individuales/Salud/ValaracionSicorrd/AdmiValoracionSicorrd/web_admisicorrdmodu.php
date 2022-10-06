<?php

$routexxx = 'vsrrdmod';
$controll = 'Acciones\Individuales\Salud\ValoracionSicorrd\AdmiValoracionSicorrd\VsrrdModulo';
Route::group(['prefix' => 'administraccion/vsrrd'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    require_once('web_admivsrrdentornos.php');
    require_once('web_admivsrrdfactores.php');
    require_once('web_admivsrrdentornofactor.php');
});
