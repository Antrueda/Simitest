<?php
use Illuminate\Support\Facades\Route;
$routexxx = 'nnajacti';


$controll = 'Acciones\Grupales\Asistencias\Diaria\AsdNnajActividadesController@';
Route::group(['prefix' => '{padrexxx}/nnajactividades'], function () use ($routexxx,$controll) {
   
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx);
    Route::get('diaria/listaxxx', [
        'uses' => $controll . 'getNnajsAgregados',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.listaxxx');

    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');

    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');

    Route::get('diaria/listagre', [
        'uses' => $controll . 'getNnajsAgregar',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.listagre');


});
