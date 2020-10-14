<?php
$routexxx = 'csdxxxxx';
$controll = 'Domicilio\Csd';
Route::group(['prefix' => '{padrexxx}/csds'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@getListado',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.listaxxx');
    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.nuevo');
    Route::post('crear', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.crear');
});
Route::group(['prefix' => 'csd'], function () use ($routexxx, $controll) {
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'Controller@show',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx . '.ver');
    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routexxx . '-editar']
    ])->name($routexxx . '.editar');

    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');
     include_once('web_CSD_basico.php');
     include_once('web_CSD_violencia.php');
     include_once('web_CSD_situacionesespecial.php');
     include_once('web_CSD_justicia.php');
     include_once('web_CSD_residencia.php');
     include_once('web_CSD_dinfamiliar.php');
     include_once('web_csd_dinfampadre.php');
    include_once('web_csd_dinfamadre.php');
    // include_once('web_CSD_comfamiliar.php');
     include_once('web_CSD_bienvenida.php');
     include_once('web_CSD_alimentacion.php');
    include_once('web_CSD_geningresos.php');
    // include_once('web_CSD_redesapoyo.php');
     include_once('web_CSD_conclusiones.php');
});
