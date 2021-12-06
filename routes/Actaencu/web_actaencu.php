<?php
$routexxx = 'actaencu';
$controll = 'Actaencu\AeEncuentroController@';
Route::group(['prefix' => 'encuentro'], function () use ($routexxx, $controll) {
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
    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');
    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'edit',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'update',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.verxxxxx');
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
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
    Route::get('aeEncuentro/getUpzs', [
        'uses' => $controll . 'getUPZ',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . 'GetUPZs');
    Route::get('aeEncuentro/getBarrio', [
        'uses' => $controll . 'getBarrio',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . 'GetBarrio');
    Route::get('aeEncuentro/getActividades', [
        'uses' => $controll . 'getActividadesAjax',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . 'GetActividades');
    Route::post('aeEncuentro/saveContactos', [
        'uses' => $controll . 'saveAeContacto',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . 'SaveContactos');
    Route::post('aeEncuentro/saveRecursos', [
        'uses' => $controll . 'saveAeRecurso',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . 'SaveRecursos');
    Route::get('aeEncuentro/getServicios', [
        'uses' => $controll . 'getServiciosUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.servicio');
    Route::get('responsable', [
        'uses' => $controll . 'getResponsableUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.responsa');
    Route::get('contratista', [
        'uses' => $controll . 'getContratistaUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.contrati');

    Route::post('tiemcarg', [
        'uses' => $controll . 'getTiempoCargue',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.tiemcarg');
});
