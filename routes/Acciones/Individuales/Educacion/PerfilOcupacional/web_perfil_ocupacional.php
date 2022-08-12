<?php
$routexxx = 'fpoaplicacion';
$controll = 'Acciones\Individuales\Educacion\PerfilOcupacional\PerfilOcupacional';


Route::group(['prefix' => 'nnajfpo'], function () use ($routexxx, $controll) {
     
        Route::get('{padrexxx}/perfil-ocupacional', [
            'uses' => $controll . 'Controller@index',
           'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
        ])->name($routexxx.'-leer');
     
        //peticion ajax
        Route::get('{padrexxx}/perfil-ocupacional/listaxxx', [
                'uses' => $controll . 'Controller@getListado',
                'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
            ])->name($routexxx . '.listaxxx');
   
        Route::get('{padrexxx}/perfil-ocupacional/nuevo', [
            'uses' => $controll.'Controller@create',
            'middleware' => ['permission:'.$routexxx.'-crear']
        ])->name($routexxx.'.nuevo');

        Route::post('{padrexxx}/perfil-ocupacional/nuevo', [
                'uses' => $controll.'Controller@store',
                'middleware' => ['permission:'.$routexxx.'-crear']
            ])->name($routexxx.'.crear');

            Route::get('{padrexxx}/perfil-ocupacional/ver/{modeloxx}', [
                'uses' => $controll . 'Controller@show',
                'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
            ])->name($routexxx . '.ver');

            Route::get('{padrexxx}/perfil-ocupacional/editar/{modeloxx}', [
                'uses' => $controll . 'Controller@edit',
                'middleware' => ['permission:' . $routexxx . '-editar']
            ])->name($routexxx . '.editar');

            Route::put('{padrexxx}/perfil-ocupacional/editar/{modeloxx}', [
                'uses' => $controll . 'Controller@update',
                'middleware' => ['permission:' . $routexxx . '-editar']
            ])->name($routexxx . '.editar');

            Route::get('{padrexxx}/perfil-ocupacional/borrar/{modeloxx}', [
                'uses' => $controll . 'Controller@inactivate',
                'middleware' => ['permission:' . $routexxx . '-borrar']
            ])->name($routexxx . '.borrar');
        
            Route::put('{padrexxx}/perfil-ocupacional/borrar/{modeloxx}', [
                'uses' => $controll . 'Controller@destroy',
                'middleware' => ['permission:' . $routexxx . '-borrar']
            ])->name($routexxx . '.borrar');
           
            Route::get('{padrexxx}/perfil-ocupacional/activar/{modeloxx}', [
                'uses' => $controll . 'Controller@getActivar',
                'middleware' => ['permission:' . $routexxx . '-borrar']
            ])->name($routexxx . '.activar');
        
            Route::put('{padrexxx}/perfil-ocupacional/activar/{modeloxx}', [
                'uses' => $controll . 'Controller@activar',
                'middleware' => ['permission:' . $routexxx . '-borrar']
            ])->name($routexxx . '.activar');
});
