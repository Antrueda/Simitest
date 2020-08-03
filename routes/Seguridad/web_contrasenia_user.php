<?php

$controll = 'Seguridad\Usuario\CambioContrase';
$routexxx = 'contrase';
Route::group(['prefix' => 'usuario/cambiocontra'], function () use ($controll, $routexxx) {
    Route::get('editar/{objetoxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.cambiar');
	Route::put('editar/{objetoxx}', [
		'uses' => $controll . 'Controller@update',
		'middleware' => ['permission:' . $routexxx . '-editar']
	])->name($routexxx . '.editar');
});
