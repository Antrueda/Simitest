<?php
$routexxx = 'direccionref';
$controll = 'Direccionamiento\DireccionamientoController@';
Route::group(['prefix' => 'Direccionamiento'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'getListaxxx',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx . '.listaxxx');
    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.nuevo');
    Route::get('listnnaj', [
        'uses' => $controll . 'getListaNnajsAsignaar',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar|'. $routexxx . '-activarx']
    ])->name($routexxx . '.listnnaj');
    Route::get('nnajsele', [
		'uses' => $controll . 'getNnajselect',
		'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.nnajsele');

    Route::get('{padrexxx}/listfami', [
        'uses' => $controll . 'getListaFamiliaAsignar',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar|'. $routexxx . '-activarx']
    ])->name($routexxx . '.listfami');
    Route::get('compsele', [
		'uses' => $controll . 'getCompselect',
		'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.compsele');

    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.crear');
    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'update',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.ver');
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');
    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::get('aeEncuentro/getServicios', [
        'uses' => $controll . 'getServiciosUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.servicio');
    Route::get('responsable', [
        'uses' => $controll . 'getResponsableUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.responsa');
    Route::post('municipio', [
        'uses' => $controll . 'municipioajax',
    ])->name($routexxx . '.municipio');
    Route::get('depamuni', [
		'uses' => $controll.'getDepaMuni',
		'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.depamuni');

    Route::get('upiarea', [
        'uses' => $controll . 'getUpiArea',
        'middleware' => ['permission:' . $routexxx . '-leer']
        ])->name($routexxx . '.upiarea');

        Route::get('userarea', [
            'uses' => $controll . 'getAreas',
            'middleware' => ['permission:' . $routexxx . '-leer']
            ])->name($routexxx . '.userarea');
});
