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
  
    Route::delete('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
  
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');

     //get ajax fecha puede cargar
    Route::get('asistencias/fechapuede', [
        'uses' => $controll . 'getFechaPuede',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.fechapuede');

    //planilla asistencia diaria - asistencias
    Route::get('asistencias/{modeloxx}', [
        'uses' => $controll . 'asistencias',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.asistencias');

    Route::get('asistencias/ver/{modeloxx}', [
        'uses' => $controll . 'verasistencias',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.verasistencia');

    //cambiar estado asitencia ajax
    Route::post('asistencias/cambiarestado', [
        'uses' => $controll . 'setEstadoAsistencia',
        'middleware' => ['permission:' . $routexxx . '-editarxx']
    ])->name($routexxx . '.estadoasis');
});

