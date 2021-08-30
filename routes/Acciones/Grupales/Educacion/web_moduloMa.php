<?php
$routexxx='matriculaadmin';
$controll='Matriculaadmin\MatriculaModulo';
Route::group(['prefix' => 'moduloMatricula'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_grado.php');
require_once('web_grupo.php');
require_once('web_grupoasignar.php');
require_once('web_gradoasignar.php');

