<?php
$routexxx='ayuduser';
$controll='Ayudline\Frontend\AyudaFrontendController@';

Route::group(['prefix' => 'ayudasfront'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'index',
		'middleware' => ['permission:'.$routexxx.'-leerxxxx']
    ])->name($routexxx);

    Route::get('listaxxx', [
		'uses' => $controll.'listayudasfornt',
		'middleware' => ['permission:'.$routexxx.'-leerxxxx']
    ])->name($routexxx.'.listaxxx');


	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'show',
		'middleware' => ['permission:'.$routexxx.'-leerxxxx']
	])->name($routexxx.'.verxxxxx');
});
