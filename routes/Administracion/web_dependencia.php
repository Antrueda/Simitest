<?php
Route::group(['prefix' => 'dependencia'], function () {
    Route::get('', [
        'uses' => 'Administracion\DependenciaController@index',
        'middleware' => ['permission:dependencia-leer|dependencia-crear|dependencia-editar|dependencia-borrar']
    ])->name('dependencia');

    Route::get('listnuev', [
        'uses' => 'Administracion\DependenciaController@getListadoActual',
        'middleware' => ['permission:dependencia-leer|dependencia-crear|dependencia-editar|dependencia-borrar']
    ])->name('dependencia.listnuev');
    Route::get('listanti', [
        'uses' => 'Administracion\DependenciaController@getListadoAntiguo',
        'middleware' => ['permission:dependencia-leer|dependencia-crear|dependencia-editar|dependencia-borrar']
    ])->name('dependencia.listanti');

    Route::get('nuevo', [
        'uses' => 'Administracion\DependenciaController@create',
        'middleware' => ['permission:dependencia-crear']
    ])->name('dependencia.nuevo');
    Route::post('nuevo', [
        'uses' => 'Administracion\DependenciaController@store',
        'middleware' => ['permission:dependencia-crear']
    ])->name('dependencia.crear');

    Route::post('migraupi', [
        'uses' => 'Administracion\DependenciaController@migraupi',
        'middleware' => ['permission:dependencia-crear']
    ])->name('dependencia.migraupi');

    Route::get('editar/{objetoxx}', [
        'uses' => 'Administracion\DependenciaController@edit',
        'middleware' => ['permission:dependencia-editar']
    ])->name('dependencia.editar');
    Route::put('editar/{objetoxx}', [
        'uses' => 'Administracion\DependenciaController@update',
        'middleware' => ['permission:dependencia-editar']
    ])->name('dependencia.editar');
    Route::get('ver/{objetoxx}', [
        'uses' => 'Administracion\DependenciaController@show',
        'middleware' => ['permission:dependencia-leer']
    ])->name('dependencia.ver');
    Route::delete('ver/{objetoxx}', [
        'uses' => 'Administracion\DependenciaController@destroy',
        'middleware' => ['permission:dependencia-borrar']
    ])->name('dependencia.borrar');

    $controll = 'Administracion\Dependencia';
    $routexxx = 'dependencia';
    Route::get('motivos', [
	    'uses' => $controll.'Controller@getMotivos',
	    'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.motivosx');

    $controll = 'Administracion\Dependencia\ServicioDep';
    $routexxx = 'servdepe';
    Route::group(['prefix' => '{padrexxx}/sevicio'], function () use ($controll, $routexxx) {
        Route::get('', [
            'uses' => $controll . 'Controller@index',
            'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
        ])->name($routexxx);
        Route::get('nuevo', [
            'uses' => $controll . 'Controller@create',
            'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.nuevo');
    });

    $controll = 'Administracion\Dependencia\UsuarioDep';
    $routexxx = 'usuadepe';
    Route::group(['prefix' => '{padrexxx}/usuario'], function () use ($controll, $routexxx) {
        Route::get('', [
            'uses' => $controll . 'Controller@index',
            'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
        ])->name($routexxx);
        Route::get('nuevo', [
            'uses' => $controll . 'Controller@create',
            'middleware' => ['permission:' . $routexxx . '-crear']
        ])->name($routexxx . '.nuevo');
    });
});

include_once('web_servicio_dep.php');
include_once('web_usuario_dep.php');
