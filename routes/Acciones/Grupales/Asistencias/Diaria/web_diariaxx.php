<?php
use Illuminate\Support\Facades\Route;
$routexxx = 'diariaxx';
$controll = 'Acciones\Grupales\Asistencias\Diaria\AsdDiariaController@';
Route::group(['prefix' => 'diaria'], function () use ($routexxx, $controll) {
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


    
    Route::get('diaria/dependen', [
        'uses' => $controll . 'getDependen',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.dependen');

    Route::get('diaria/upzxxxxx', [
        'uses' => $controll . 'getUpz',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.upzxxxxx');

    Route::get('diaria/barrioxx', [
        'uses' => $controll . 'getBarrio',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.barrioxx');

    Route::get('diaria/municipi', [
        'uses' => $controll . 'getMunicipio',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.municipi');

    Route::get('diaria/pagrupox', [
        'uses' => $controll . 'getPaginaGrupos',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.pagrupox');
    Route::get('diaria/fechapuede', [
        'uses' => $controll . 'getFechaPuede',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.fechpued');



    Route::get('diaria/servicio', [
        'uses' => $controll . 'getServiciosUpiAT',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.servicio');

    
    
});
