<?php
$routexxx = 'enfermeria';
$controll = 'Acciones\Individuales\Salud\Enfermeria\EnfermeriaController@';
Route::group(['prefix' => '{padrexxx}/enfermeria'], function () use ($routexxx, $controll) {
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


Route::group(['prefix' => 'enfermeria'], function () use ($controll, $routexxx) {
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






    Route::get('enfermeria/tipoacti', [
        'uses' => $controll . 'getTipoacti',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.tipoacti');

    Route::get('enfermeria/actividad', [
        'uses' => $controll . 'getActividad',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.actividad');






    Route::get('enfermeria/dependen', [
        'uses' => $controll . 'getDependen',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.dependen');

    Route::get('enfermeria/servicio', [
        'uses' => $controll . 'getServiciosUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.servicio');


});



