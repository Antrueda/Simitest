<?php
$routexxx='vsimetas';
$controll='Sicosocial\VsiMeta';
Route::group(['prefix' => 'vsimetas'], function () use($routexxx,$controll) {
    Route::get('{objetoxx}', [
	    'uses' => $controll.'Controller@meta',
	    'middleware' => ['permission:'.$routexxx.'-metaxxxx']
	])->name($routexxx.'.metaxxxx');
});
require_once('web_vsi_metapotencia.php');
require_once('web_vsi_metame.php');
