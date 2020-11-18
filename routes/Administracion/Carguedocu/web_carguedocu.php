<?php
$routexxx='cargdocu';
$controll='Administracion\Carguedocu\Modulo';
Route::group(['prefix' => 'carguedocumentos'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);

    Route::get('listaxxx', [
		'uses' => $controll.'Controller@listaNnaj',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx.'.listaxxx');
});
require_once('web_fi.php');

