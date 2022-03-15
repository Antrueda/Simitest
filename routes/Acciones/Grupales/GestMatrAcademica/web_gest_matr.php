<?php
$routexxx = 'gestmaca';
$controll = 'Acciones\Grupales\GestMatrAcademia\GestMatrAcademiaController@';
Route::group(['prefix' => 'gestmatriacademica'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx);
    // Route::get('listaxxx', [
    //     'uses' => $controll . 'getListaxxx',
    //     'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    // ])->name($routexxx . '.listaxxx');
    Route::get('{padrexx}/nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');
    Route::post('{padrexx}/crear', [
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

        //======> peticiones ajax <========///
    Route::get('buscarnnajs', [
        'uses' => $controll . 'getBuscarNnajs',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.buscarnnajs');

    Route::get('list-matri-nnaj/{modeloxx}', [
        'uses' => $controll . 'getListMatriculasNnaj',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
        ])->name($routexxx . '.listmatr');
    Route::get('hist-matri-nnaj/{modeloxx}', [
        'uses' => $controll . 'getHistMatriculasNnaj',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
        ])->name($routexxx . '.histmatr');

    Route::get('motivosretiro', [
        'uses' => $controll . 'getMotivosRetiro',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.motivos');

    Route::get('motivosaplazado', [
        'uses' => $controll . 'getMotivosAplazado',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.aplazado');
});
