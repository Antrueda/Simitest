<?php
$routexxx = 'indimodu';
$controll = 'Indicadores\Individuales\IndividualesModuloController@';
Route::group(['prefix' => 'individualesvero'], function () use ($routexxx, $controll) { //pruebas vero 
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx);

    Route::get('listaxxx', [
        'uses' => $controll . 'listaNnaj',
        'middleware' => ['permission:' . $routexxx . '-moduloxx']
    ])->name($routexxx . '.listaxxx');
   require_once('web_indicador.php');
     /**require_once('web_parametr.php');
    require_once('web_comboxxx.php');
    require_once('web_combpara.php');**/
});
