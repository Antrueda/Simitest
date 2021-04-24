<?php
$routexxx='ayudline';
$controll='Ayudline\Frontend\AyudaFrontendModuloController@';

Route::group(['prefix' => 'moduloayudas'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'index',
		'middleware' => ['permission:'.$routexxx.'-moduloxx']
    ])->name($routexxx);

});
require_once('Frondend/web_ayuduser.php');
require_once('Backend/web_admiayud.php');
