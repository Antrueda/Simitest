<?php
$routexxx = 'cgimodu-modulo';
$controll = 'Acciones\Individuales\Educacion\CuestionarioGustos\CgiModuloController@';
Route::group(['prefix' => 'modulocgi'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx]
    ])->name($routexxx);


    
    require_once('web_admicatecgih.php');
    require_once('web_admihabicgih.php');
   
});
