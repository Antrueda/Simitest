<?php
$controll = 'Intervencion\IsDatoBasicoController@';
$permisox = 'isintervencion';
$routexxx = 'is.intervencion';


Route::group(['prefix' => '{nnaj}/isintervencion'], function () use ($controll, $permisox, $routexxx) {


    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:'.$permisox.'-crear']
    ])->name($routexxx.'.nuevo');

    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:'.$permisox.'-crear']
    ])->name($routexxx.'.crear');

    Route::get('editar/{intervencion}', [
        'uses' => $controll . 'edit',
        'middleware' => ['permission:'.$permisox.'-editar']
    ])->name($routexxx.'.editar');

    Route::put('editar/{intervencion}', [
        'uses' => $controll . 'update',
        'middleware' => ['permission:'.$permisox.'-editar']
    ])->name($routexxx.'.editar');

    Route::get('ver/{intervencion}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:'.$permisox.'-leer']
    ])->name($routexxx.'.ver');
    Route::post('subarea', [
        'uses' => $controll . 'subareasajax',
    ])->name($routexxx.'.subarea');

    Route::post('area', [
        'uses' => $controll . 'areasajax',
    ])->name($routexxx.'.area');

    Route::get('lista', [
        'uses' => $controll . 'lista',
        'middleware' => ['permission:'.$permisox.'-leer']
    ])->name($routexxx.'.lista');

    Route::get('intlista', [
        'uses' => $controll . 'intlista',
        'middleware' => ['permission:'.$permisox.'-leer|'.$permisox.'-crear|'.$permisox.'-editar|'.$permisox.'-borrar']
    ])->name($routexxx.'.intlista');

    Route::get('responsa', [
        'uses' => $controll . 'getResponsable',
        'middleware' => ['permission:'.$permisox.'-leer|'.$permisox.'-crear|'.$permisox.'-editar|'.$permisox.'-borrar']
    ])->name($routexxx.'.responsable');
});

Route::group(['prefix' => 'isintervencionx'], function () use ($controll, $permisox, $routexxx) {
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $permisox . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $permisox . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $permisox . '-activarx']
    ])->name($routexxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $permisox . '-activarx']
    ])->name($routexxx . '.activarx');
});
