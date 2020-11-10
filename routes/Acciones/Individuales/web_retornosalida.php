<?php
$routexxx = 'airetornosalida';
$controll = 'Acciones\Individuales\AIRetornoSalida';
  Route::group(['prefix' => '{padrexxx}/retornosalida'], function () use ($controll, $routexxx) {
      Route::get('', [
        'uses' => $controll . 'Controller@index',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@getListado',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx . '.listaxxx');
    Route::get('visitados', [
        'uses' => $controll . 'Controller@getNnajVisitados',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx . '.visitado');
    
    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.nuevo');
    Route::post('crear', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routexxx . '-crear']
    ])->name($routexxx . '.crear');
    
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
});
    Route::group(['prefix' => 'resretornosalida'], function () use ($controll, $routexxx) {
        Route::get('responsa', [
            'uses' => $controll . 'Controller@getResponsable',
            'middleware' => ['permission:' . $routexxx . '-borrar']
        ])->name($routexxx . '.responsa');
    });
