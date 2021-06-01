<?php

$routexxx = 'indiarea';
$controll = "Indicadores\Admin\\".ucfirst($routexxx)."Controller@";
Route::group(['prefix' => 'areasinidicador'], function () use ($controll, $routexxx) {
	Route::get('', [
		'uses' => $controll . 'index',
		'middleware' => ['permission:' . $routexxx . '-leerxxxx|']
	])->name($routexxx);
	Route::get('listaxxx', [
		'uses' => $controll . 'getAreas',
		'middleware' => ['permission:' . $routexxx . '-leerxxxx']
	])->name($routexxx . '.listaxxx');
});

