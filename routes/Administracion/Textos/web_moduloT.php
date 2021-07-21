<?php
$routexxx='textosadmin';
$controll='TextoAdmin\TextoModulo';
Route::group(['prefix' => 'moduloTexto'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_texto.php');


