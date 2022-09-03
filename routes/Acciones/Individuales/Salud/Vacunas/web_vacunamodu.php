<?php
$routexxx = 'vacuna-modulo';
$controll = 'Acciones\Individuales\Educacion\CuestionarioGustos\CgiModuloController@';
Route::group(['prefix' => 'modulovacuna'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx]
    ])->name($routexxx);


    
    require_once('web_admicatecgih.php');
    require_once('web_admilimitecgih.php');
    require_once('web_admihabicgih.php');
   
});
