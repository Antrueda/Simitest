<?php
// $permisox = 'inbasefuente';
$routexxx = 'libagrup';
$controll = "Indicadores\Admin\In" . ucfirst($routexxx) . "Controller@";
Route::group(['prefix' => '{padrexxx}/paramegrupos'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'getLibagrup',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-asignarx|' . $routexxx . '-borrarxx' . $routexxx . 'activarx']
    ])->name($routexxx . '.listaxxx');
    Route::get('nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
	])->name($routexxx . '.nuevoxxx');
    Route::post('crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $routexxx . '-crearxxx']
    ])->name($routexxx . '.crearxxx');
});

Route::group(['prefix' => 'paramegrupo'], function () use ($routexxx, $controll) {
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $routexxx . '-borrarxx']
    ])->name($routexxx . '.borrarxx');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $routexxx . '-activarx']
    ])->name($routexxx . '.activarx');
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx']
    ])->name($routexxx . '.leerxxxx');
});
