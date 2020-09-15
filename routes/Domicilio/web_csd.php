<?php
Route::group(['prefix' => 'csde'], function () {
    Route::get('', [
        'uses' => 'Domicilio\CsdController@index',
        'middleware' => ['permission:csddatobasico-leer|csddatobasico-crear|csddatobasico-editar|csddatobasico-borrar']
    ])->name('csd');
    Route::get('{id}', [
        'uses' => 'Domicilio\CsdController@show',
        'middleware' => ['permission:csddatobasico-leer|csddatobasico-crear|csddatobasico-editar|csddatobasico-borrar']
    ])->name('csd.ver');
    Route::get('nnaj/{id}', [
        'uses' => 'Domicilio\CsdController@nnaj',
        'middleware' => ['permission:csddatobasico-leer|csddatobasico-crear|csddatobasico-editar|csddatobasico-borrar']
    ])->name('csd.nnaj');
    Route::get('nuevo/{id}', [
        'uses' => 'Domicilio\CsdController@create',
        'middleware' => ['permission:csddatobasico-crear']
    ])->name('csd.nuevo');
    Route::post('nuevo/{id}', [
        'uses' => 'Domicilio\CsdController@store',
        'middleware' => ['permission:csddatobasico-crear']
    ]);
    Route::get('editar/{id}/{id0}', [
        'uses' => 'Domicilio\CsdController@edit',
        'middleware' => ['permission:csddatobasico-editar']
    ])->name('csd.editar');
    Route::put('editar/{id}/{id0}', [
        'uses' => 'Domicilio\CsdController@update',
        'middleware' => ['permission:csddatobasico-editar']
    ]);
    Route::get('agregar/{id}', [
        'uses' => 'Domicilio\CsdController@agregar',
        'middleware' => ['permission:csddatobasico-leer|csddatobasico-crear|csddatobasico-editar|csddatobasico-borrar']
    ])->name('csd.agregar');
    Route::post('agregar/{id}', [
        'uses' => 'Domicilio\CsdController@agrega',
        'middleware' => ['permission:csddatobasico-leer|csddatobasico-crear|csddatobasico-editar|csddatobasico-borrar']
    ]);
    Route::get('eliminar/{id}/{id0}', [
        'uses' => 'Domicilio\CsdController@destroy',
        'middleware' => ['permission:csddatobasico-borrar']
    ])->name('csd.eliminar');
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
