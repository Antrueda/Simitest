<?php
$routexxx='fosadmin';
$controll='Fosadmin\Modulo';
Route::group(['prefix' => 'modulofos'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-modulo']
    ])->name($routexxx);
});
require_once('web_fosts.php');
require_once('web_fossts.php');

