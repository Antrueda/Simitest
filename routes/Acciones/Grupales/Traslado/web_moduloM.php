<?php
$routexxx='motivoadmin';
$controll='Motivoadmin\MotivoModulo';
Route::group(['prefix' => 'modulomotivo'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_motivo.php');
require_once('web_motivosecu.php');
require_once('web_motivoasignar.php');

