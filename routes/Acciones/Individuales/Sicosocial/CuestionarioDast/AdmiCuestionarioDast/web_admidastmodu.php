<?php

$routexxx = 'adastmod';
$controll = 'Acciones\Individuales\Sicosocial\CuestionarioDast\AdmiCuestionarioDast\DastModulo';

Route::group(['prefix' => 'admindast'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    require_once('web_admidastaccion.php');
    require_once('web_admidastresultados.php');
    require_once('web_admidastpreguntas.php');
});
