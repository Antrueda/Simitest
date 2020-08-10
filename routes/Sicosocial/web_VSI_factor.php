<?php
$routexxx='vsifacto';
$controll='Sicosocial\VsiFactor';
Route::group(['prefix' => 'vsifactor'], function () use($routexxx,$controll) {
	Route::get('{objetoxx}', [
	    'uses' => $controll.'Controller@factor',
	    'middleware' => ['permission:'.$routexxx.'-factorxx']
	])->name($routexxx.'.factorxx');
});
require_once('web_vsi_factprotector.php');
require_once('web_vsi_factriesgo.php');
