<?php
$routexxx='direcadmin';
$controll='DireccionamientoAdmin\Modulo';
Route::group(['prefix' => 'moduloEntidad'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_entidaddir.php');
require_once('web_programa.php');
require_once('web_entidadasignar.php');

