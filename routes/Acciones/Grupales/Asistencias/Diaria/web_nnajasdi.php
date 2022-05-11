<?php
use Illuminate\Support\Facades\Route;
$routexxx = 'nnajasdi';
$controll = 'Acciones\Grupales\Asistencias\Diaria\AsdSisNnajController@';
Route::group(['prefix' => '{padrexxx}/nnajasasistentes'], function () use ($routexxx, $controll) {
   
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx);
    Route::get('diaria/listaxxx', [
        'uses' => $controll . 'getNnajsAgregados',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.listaxxx');

    //AJAX
    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');

    Route::get('diaria/listagre', [
        'uses' => $controll . 'getNnajsAgregar',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.listagre');


});


Route::group(['prefix' => 'nnajasasistente'], function () use ($routexxx, $controll) {
   
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
    // Route::get('borrar/{modeloxx}', [
    //     'uses' => $controll . 'inactivate',
    //     'middleware' => ['permission:' . $routexxx . '-borrarxx']
    // ])->name($routexxx . '.inactivarxx');
    Route::delete('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    
    // Route::get('activate/{modeloxx}', [
    //     'uses' => $controll . 'activate',
    //     'middleware' => ['permission:' . $routexxx . '-activarx']
    // ])->name($routexxx . '.activarx');
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
});
