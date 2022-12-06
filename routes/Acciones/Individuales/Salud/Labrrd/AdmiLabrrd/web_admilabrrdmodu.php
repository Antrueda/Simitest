<?php

$routexxx = 'labrrdmo';
$controll = 'Acciones\Individuales\Salud\Labrrd\AdmiLabrrd\LabrrdModulo';

Route::group(['prefix' => 'adminlabrrd'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    require_once('web_admilabrrdcomponentes.php');
    require_once('web_admilabrrdasocomponentes.php');
});
