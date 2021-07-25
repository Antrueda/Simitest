<?php
 $controll = 'Administracion\DependenciaController@';
 $routexxx = 'dependencia';
Route::group(['prefix' => 'dependencia'], function () use($controll,$routexxx){
    Route::get('', [
        'uses' => $controll.'index',
        'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx);

    Route::get('listnuev', [
        'uses' => $controll.'getListadoActual',
        'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx.'.listnuev');
    Route::get('listanti', [
        'uses' => $controll.'getListadoAntiguo',
        'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx.'.listanti');

    Route::get('nuevo', [
        'uses' => $controll.'create',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.nuevo');
    Route::post('nuevo', [
        'uses' => $controll.'store',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.crear');

    Route::post('migraupi', [
        'uses' => $controll.'migraupi',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.migraupi');

    Route::get('editar/{objetoxx}', [
        'uses' => $controll.'edit',
        'middleware' => ['permission:'.$routexxx.'-editar']
    ])->name($routexxx.'.editar');
    Route::put('editar/{objetoxx}', [
        'uses' => $controll.'update',
        'middleware' => ['permission:'.$routexxx.'-editar']
    ])->name($routexxx.'.editar');

    Route::get('editarmigr/{objetoxx}', [
        'uses' => $controll.'editmigr',
        'middleware' => ['permission:'.$routexxx.'-editar']
    ])->name($routexxx.'.editmigr');

    Route::get('ver/{objetoxx}', [
        'uses' => $controll.'show',
        'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.ver');
    Route::delete('ver/{objetoxx}', [
        'uses' => $controll.'destroy',
        'middleware' => ['permission:'.$routexxx.'-borrar']
    ])->name($routexxx.'.borrar');

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
