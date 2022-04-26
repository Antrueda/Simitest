<?php
$routexxx = 'cgicuest';
$controll = 'Acciones\Individuales\Educacion\CuestionarioGustos\CgiCuestionarioController@';
Route::group(['prefix' => '{padrexxx}/cgicuest'], function () use ($routexxx, $controll) {
    Route::get('', [
        'uses' => $controll . 'index',
        // 'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
    ])->name($routexxx);
    Route::get('listaxxx', [
        'uses' => $controll . 'getListaxxx',
        'middleware' => ['permission:' . $routexxx . '-leerxxxx|' . $routexxx . '-crearxxx|' . $routexxx . '-editarxx|' . $routexxx . '-borrarxx']
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


