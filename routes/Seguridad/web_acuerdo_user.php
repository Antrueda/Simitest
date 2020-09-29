<?php

$controll = 'Seguridad\Usuario\Acuerdo';
$routexxx = 'acuerdo';
Route::group(['prefix' => 'usuario/acuerdo'], function () use ($controll, $routexxx) {
    Route::get('editar/{objetoxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.cambiar');
	Route::put('editar/{objetoxx}', [
		'uses' => $controll . 'Controller@update',
		'middleware' => ['permission:' . $routexxx . '-editar']
	])->name($routexxx . '.editar');
});
