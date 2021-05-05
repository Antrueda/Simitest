<?php
$routexxx = 'aisalidamenores';
$controll = 'Acciones\Individuales\AISalidaMenores';
Route::group(['prefix' => '{padrexxx}/salidamenores'], function () use ($controll, $routexxx) {
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
    Route::get('listodox', [
        'uses' => $controll . 'Controller@getListodo',
        'middleware' => ['permission:' . $routexxx . '-leer|' . $routexxx . '-crear|' . $routexxx . '-editar|' . $routexxx . '-borrar']
    ])->name($routexxx . '.listodox');
    Route::get('nnajsele', [
		'uses' => $controll . 'Controller@getNnajsele',
		'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.nnajsele');
    Route::get('cargos', [
        'uses' => $controll . 'Controller@cargos',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.cargos');


    Route::get('responsa', [
        'uses' => $controll . 'Controller@getResponsable',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.responsa');
});


Route::group(['prefix' => 'ressalidamenores'], function () use ($controll, $routexxx) {
    Route::get('responsa', [
        'uses' => $controll . 'Controller@getResponsable',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.responsa');
});
