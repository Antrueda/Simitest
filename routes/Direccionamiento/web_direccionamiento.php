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
    ])->name($routexxx . '.verxxxxx');
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
    Route::get('aeEncuentro/getUpzs', [
        'uses' => $controll . 'getUPZ',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . 'GetUPZs');
    Route::get('aeEncuentro/getBarrio', [
        'uses' => $controll . 'getBarrio',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . 'GetBarrio');
    Route::get('aeEncuentro/getActividades', [
        'uses' => $controll . 'getActividadesAjax',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . 'GetActividades');
    Route::post('aeEncuentro/saveContactos', [
        'uses' => $controll . 'saveAeContacto',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . 'SaveContactos');
    Route::post('aeEncuentro/saveRecursos', [
        'uses' => $controll . 'saveAeRecurso',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . 'SaveRecursos');
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
    Route::get('cafecnac', [
        'uses' => $controll . 'getFechaNacimiento',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.cafecnac');
});
