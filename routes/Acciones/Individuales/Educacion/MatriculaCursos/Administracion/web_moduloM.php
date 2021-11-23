<?php
$routexxx='motivoadmin';
$controll='Motivoadmin\MotivoModulo';
Route::group(['prefix' => 'modulomotivo'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_curso.php');
require_once('web_denomina.php');
require_once('web_modulo.php');
require_once('web_moduloasignar.php');
require_once('web_unidadasignar.php');

