<?php
$routexxx = 'cgicuest';
$controll = 'Acciones\Individuales\Educacion\CuestionarioGustos\CgiCuestionarioController@';
Route::group(['prefix' => '{padrexxx}/cgicuest'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
         'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'getListaxxx',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.listaxxx');
    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');
    Route::post('nuevo', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');
});


Route::group(['prefix' => 'cgicuest'], function () use ($controll, $routexxx) {
    Route::get('editar/{modeloxx}', [
	    'uses' => $controll.'edit',
	    'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editarxx');
	Route::put('editar/{modeloxx}', [
	    'uses' => $controll.'update',
	    'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editarxx');
	Route::get('ver/{modeloxx}', [
	    'uses' => $controll.'show',
	    'middleware' => ['permission:'.$routexxx.'-leerxxxx']
	])->name($routexxx.'.verxxxxx');
	Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');

    Route::get('nnajsele', [
		'uses' => $controll . 'getNnajsele',
		'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.nnajsele');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
});



