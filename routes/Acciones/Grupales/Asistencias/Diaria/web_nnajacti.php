<?php
use Illuminate\Support\Facades\Route;
$permisox = 'nnajasdi';
$routexxx = 'nnajacti';

$controll = 'Acciones\Grupales\Asistencias\Diaria\AsdNnajActividadesController@';
Route::group(['prefix' => '{padrexxx}/nnajactividades'], function () use ($routexxx,$permisox, $controll) {
   
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $permisox . '-leerxxxx|' . $permisox . '-crearxxx|' . $permisox . '-editarxx|' . $permisox . '-borrarxx']
    ])->name($routexxx);
    Route::get('diaria/listaxxx', [
        'uses' => $controll . 'getNnajsAgregados',
        'middleware' => ['permission:' . $permisox . '-leerxxxx']
    ])->name($routexxx . '.listaxxx');

    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $permisox . '-crearxxx']
    ])->name($routexxx . '.nuevoxxx');

    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $permisox . '-crearxxx']
    ])->name($routexxx . '.crearxxx');

    Route::get('diaria/listagre', [
        'uses' => $controll . 'getNnajsAgregar',
        'middleware' => ['permission:' . $permisox . '-leerxxxx']
    ])->name($routexxx . '.listagre');


});
