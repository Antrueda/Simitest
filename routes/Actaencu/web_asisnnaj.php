<?php
$routexxx = 'asisnnaj';
$controll = 'Actaencu\AeAsisNnajsController@';
Route::group(['prefix' => 'aeasisnnaj'], function () use ($routexxx, $controll) {
    Route::get('{padrexxx}', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx);
    // Route::get('{padrexxx}/listaxxx', [
    //     'uses' => $controll . 'getListaContactos',
    //     'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    // ])->name($routexxx . '.listaxxx');
    Route::get('{padrexxx}/nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');
    Route::post('{padrexxx}/crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');
    Route::get('{padrexxx}/editar/{modeloxx}', [
        'uses' => $controll . 'edit',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    Route::put('{padrexxx}/editar/{modeloxx}', [
        'uses' => $controll . 'update',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.editarxx');
    // Route::get('ver/{modeloxx}', [
    //     'uses' => $controll . 'show',
    //     'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    // ])->name($routexxx . '.verxxxxx');
    // Route::get('borrar/{modeloxx}', [
    //     'uses' => $controll . 'inactivate',
    //     'middleware' => ['permission:' . $routexxx . '-borrarxx']
    // ])->name($routexxx . '.borrarxx');
    // Route::put('borrar/{modeloxx}', [
    //     'uses' => $controll . 'destroy',
    //     'middleware' => ['permission:' . $routexxx . '-borrarxx']
    // ])->name($routexxx . '.borrarxx');
    // Route::get('activate/{modeloxx}', [
    //     'uses' => $controll . 'activate',
    //     'middleware' => ['permission:' . $routexxx . '-activarx']
    // ])->name($routexxx . '.activarx');
    // Route::put('activate/{modeloxx}', [
    //     'uses' => $controll . 'activar',
    //     'middleware' => ['permission:' . $routexxx . '-activarx']
    // ])->name($routexxx . '.activarx');
   
});

Route::group(['prefix' => 'aeasisnnajsin'], function () use ($routexxx, $controll) {
    
    Route::get('cdocuayud', [
        'uses' => $controll . 'getDocuAyudaAjax',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.docuayud');
    Route::get('perfil', [
        'uses' => $controll . 'getPerfilAjax',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.perfil');
});
