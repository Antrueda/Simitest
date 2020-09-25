<?php
$routexxx='csdxxxxx';
$controll='Domicilio\Csd';
Route::group(['prefix' => '{padrexxx}/csds'], function () use($routexxx,$controll) {
    Route::get('', [
        'uses' => $controll.'Controller@index',
        'middleware' => ['permission:csdxxxxx-leer|csdxxxxx-crear|csdxxxxx-editar|csdxxxxx-borrar']
    ])->name($routexxx);
    Route::get('listaxxx', [
		'uses' => $controll.'Controller@getListado',
		'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.listaxxx');
    Route::get('nuevo', [
        'uses' => $controll.'Controller@create',
        'middleware' => ['permission:csdxxxxx-crear']
    ])->name($routexxx.'.nuevo');
    Route::post('crear', [
        'uses' => $controll.'Controller@store',
        'middleware' => ['permission:csdxxxxx-crear']
        ])->name($routexxx.'.crear');
});
Route::group(['prefix' => 'csd'], function () use($routexxx,$controll) {
    
    Route::get('ver', [
        'uses' => $controll.'Controller@show',
        'middleware' => ['permission:csdxxxxx-leer|csdxxxxx-crear|csdxxxxx-editar|csdxxxxx-borrar']
    ])->name($routexxx.'.ver');
  /*  Route::get('nnaj/{padrexxx}', [
        'uses' => $controll.'Controller@nnaj',
        'middleware' => ['permission:csdxxxxx-leer|csdxxxxx-crear|csdxxxxx-editar|csdxxxxx-borrar']
    ])->name($routexxx.'.nnaj');
    */
  

    Route::get('editar/{padrexxx}', [
        'uses' => $controll.'Controller@edit',
        'middleware' => ['permission:csdxxxxx-editar']
    ])->name($routexxx.'.editar');
    Route::put('editar/{padrexxx}', [
        'uses' => $controll.'Controller@update',
        'middleware' => ['permission:csdxxxxx-editar']
        ])->name($routexxx.'.editar');
    Route::get('agregar/{padrexxx}', [
        'uses' => $controll.'Controller@agregar',
        'middleware' => ['permission:csdxxxxx-leer|csdxxxxx-crear|csdxxxxx-editar|csdxxxxx-borrar']
    ])->name($routexxx.'.agregar');
    Route::post('agregar/{padrexxx}', [
        'uses' => $controll.'Controller@agrega',
        'middleware' => ['permission:csdxxxxx-leer|csdxxxxx-crear|csdxxxxx-editar|csdxxxxx-borrar']
        ])->name($routexxx.'.agregar');
    Route::get('eliminar/{padrexxx}', [
        'uses' => $controll.'Controller@destroy',
        'middleware' => ['permission:csdxxxxx-borrar']
    ])->name($routexxx.'.eliminar');
    include_once('web_CSD_basico.php');
    include_once('web_CSD_violencia.php');
    include_once('web_CSD_situacionesespecial.php');
    include_once('web_CSD_justicia.php');
    include_once('web_CSD_residencia.php');
    include_once('web_CSD_dinfamiliar.php');
    include_once('web_CSD_comfamiliar.php');
    include_once('web_CSD_bienvenida.php');
    include_once('web_CSD_alimentacion.php');
    include_once('web_CSD_geningresos.php');
    include_once('web_CSD_redesapoyo.php');
    include_once('web_CSD_conclusiones.php');
});

