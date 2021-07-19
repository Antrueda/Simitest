<?php
$persmiso = 'asistenc';
$controll = "Actaencu\Ae" . ucfirst($persmiso) . "Controller@";
Route::group(['prefix' => 'ae' . $persmiso], function () use ($persmiso, $controll) {
    Route::get('{padrexxx}', [
        'uses' => $controll . 'index',
        'middleware' => [
            'permission:' .
                $persmiso . '-leerxxxx|' .
                $persmiso . '-crearxxx|' .
                $persmiso . '-editarxx|' .
                $persmiso . '-borrarxx|' .
                $persmiso . '-activarx|'
        ]
    ])->name($persmiso);
    Route::get('{padrexxx}/listaxxx', [
        'uses' => $controll . 'getListaContactos',
        'middleware' => ['permission:' . $persmiso . '-leerxxxx']
    ])->name($persmiso . '.listaxxx');
    Route::get('{padrexxx}/nuevo', [
        'uses' => $controll . 'create',
        'middleware' => ['permission:' . $persmiso . '-crearxxx']
    ])->name($persmiso . '.nuevoxxx');
    Route::post('{padrexxx}/crear', [
        'uses' => $controll . 'store',
        'middleware' => ['permission:' . $persmiso . '-crearxxx']
    ])->name($persmiso . '.crearxxx');
    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'edit',
        'middleware' => ['permission:' . $persmiso . '-editarxx']
    ])->name($persmiso . '.editarxx');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'update',
        'middleware' => ['permission:' . $persmiso . '-editarxx']
    ])->name($persmiso . '.editarxx');
    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'show',
        'middleware' => ['permission:' . $persmiso . '-leerxxxx']
    ])->name($persmiso . '.verxxxxx');
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'inactivate',
        'middleware' => ['permission:' . $persmiso . '-borrarxx']
    ])->name($persmiso . '.borrarxx');
    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'destroy',
        'middleware' => ['permission:' . $persmiso . '-borrarxx']
    ])->name($persmiso . '.borrarxx');
    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'activate',
        'middleware' => ['permission:' . $persmiso . '-activarx']
    ])->name($persmiso . '.activarx');
    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'activar',
        'middleware' => ['permission:' . $persmiso . '-activarx']
    ])->name($persmiso . '.activarx');
});
