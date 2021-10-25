<?php
$controll='Acciones\Individuales\Educacion\Administ\Pruediag\EdasipreController@';
$routxxxx='edasipre';
Route::group(['prefix' => '{padrexxx}/presaberes'], function () use($controll,$routxxxx){
	Route::get('', [
		'uses' => $controll.'index',
		'middleware' => ['permission:'.
        $routxxxx.'-leerxxxx|'.
        $routxxxx.'-crearxxx|'.
        $routxxxx.'-editarxx|'.
        $routxxxx.'-borrarxx|'.
        $routxxxx.'-activarx']
	])->name($routxxxx);

    Route::get('listaxxx', [
		'uses' => $controll.'getEdasipreAsignados',
		'middleware' => ['permission:'.$routxxxx.'-leerxxxx']
    ])->name($routxxxx.'.listaxxx');


	Route::post('crear', [
		'uses' => $controll.'store',
		'middleware' => ['permission:'.$routxxxx.'-crearxxx']
    ])->name($routxxxx.'.crearxxx');

    Route::get('asignarx', [
		'uses' => $controll.'getEdasipreAsignar',
		'middleware' => ['permission:'.$routxxxx.'-leerxxxx']
    ])->name($routxxxx.'.asignarx');


});

Route::group(['prefix' => 'presaber'], function () use($controll,$routxxxx){
	Route::get('borrar/{modeloxx}', [
	    'uses' => $controll.'inactivate',
	    'middleware' => ['permission:'.$routxxxx.'-borrarxx']
    ])->name($routxxxx.'.borrarxx');

    Route::put('borrar/{modeloxx}', [
		'uses' => $controll . 'destroy',
		'middleware' => ['permission:' . $routxxxx . '-borrarxx']
    ])->name($routxxxx . '.borrarxx');

    Route::get('activate/{modeloxx}', [
	    'uses' => $controll.'activate',
	    'middleware' => ['permission:'.$routxxxx.'-activarx']
    ])->name($routxxxx.'.activarx');

    Route::put('activate/{modeloxx}', [
		'uses' => $controll . 'activar',
		'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

});


