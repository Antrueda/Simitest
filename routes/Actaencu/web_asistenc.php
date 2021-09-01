<?php
$routexxx = 'asistenc';
$controll = 'Actaencu\AeAsistencController@';
Route::group(['prefix' => 'aistencia'], function () use ($routexxx, $controll) {
    Route::get('{padrexxx}', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx|'. $routexxx . '-activarx']
    ])->name($routexxx);

    Route::get('{padrexxx}/listxxxx', [
        'uses' => $controll . 'getListaAsistencias',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx|'. $routexxx . '-activarx']
    ])->name($routexxx . '.listxxxx');

    Route::get('{padrexxx}/listnnaj', [
        'uses' => $controll . 'getListaNnajsAsignaar',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx|'. $routexxx . '-activarx']
    ])->name($routexxx . '.listnnaj');

    Route::get('{padrexxx}/nnajsele', [
        'uses' => $controll . 'getListaNnajsSelected',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx|'. $routexxx . '-activarx']
    ])->name($routexxx . '.nnajsele');

    Route::post('{padrexxx}/asignar', [
        'uses' => $controll . 'setAsignar',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx|'. $routexxx . '-activarx']
    ])->name($routexxx . '.asignarx');

    Route::get('{padrexxx}/nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');
    Route::post('{padrexxx}/crear', [
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
    Route::get('crearfix/{contacto}', [
        'uses' => $controll . 'crearFichaDeIngreso',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.crearfix');
});
