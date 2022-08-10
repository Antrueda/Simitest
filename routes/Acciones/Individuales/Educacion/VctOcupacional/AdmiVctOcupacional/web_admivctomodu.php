<?php

$routexxx='avctmodu';
$controll='Acciones\Individuales\Educacion\VctOcupacional\AdmiVctOcupacional\VctModulo';
Route::group(['prefix' => 'AdminVcto'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-moduloxx']
    ])->name($routexxx);

    require_once('web_admivctoarea.php');
    require_once('web_admivctosubarea.php');
    require_once('web_admivctoitem.php');
});
