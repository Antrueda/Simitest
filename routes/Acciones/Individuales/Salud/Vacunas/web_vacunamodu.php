<?php
$routexxx = 'vacuna-modulo';
$controll = 'Acciones\Individuales\Salud\Vacunas\VacunaModuloController@';
Route::group(['prefix' => 'modulovacuna'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx]
    ])->name($routexxx);


    
    require_once('web_admitipovacuna.php');
    require_once('web_admivacuna.php');
   
});
