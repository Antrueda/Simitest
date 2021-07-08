<?php
$controll = 'Acciones\Grupales\Traslado\Trasladonnaj';
$routxxxx = 'traslannaj';
Route::group(['prefix' => '{padrexxx}/trasladonnaj'], function () use ($controll, $routxxxx) {
    Route::get('nuevo', [
        'uses' => $controll . 'Controller@create',
        'middleware' => ['permission:' . $routxxxx . '-crear']
    ])->name($routxxxx . '.nuevo');
    Route::post('nuevo', [
        'uses' => $controll . 'Controller@store',
        'middleware' => ['permission:' . $routxxxx . '-crear']
    ])->name($routxxxx . '.crear');
    Route::get('agregar', [
        'uses' => $controll . 'Controller@getAgregarTrasNnajs',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.agregar');
    Route::get('listannajs', [
        'uses' => $controll . 'Controller@getNnajtras',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listnnajs');
    Route::get('quitar', [
        'uses' => $controll . 'Controller@getQuitarNnaj',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.quitar');
    Route::get('nnajsele', [
		'uses' => $controll . 'Controller@getNnajsele',
		'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.nnajsele');

});
Route::group(['prefix' => 'trasladonnajs'], function () use ($controll, $routxxxx) {

    Route::get('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@edit',
        'middleware' => ['permission:' . $routxxxx . '-editar']
    ])->name($routxxxx . '.editar');
    Route::put('editar/{modeloxx}', [
        'uses' => $controll . 'Controller@update',
        'middleware' => ['permission:' . $routxxxx . '-editar']
    ])->name($routxxxx . '.editar');
    Route::get('representa', [
		'uses' => $controll . 'Controller@getRepresenta',
	//	'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.representa');

    Route::post('grupo', [
		'uses' => $controll . 'Controller@getGrupo',
	//	'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.grupo');

    Route::get('ver/{modeloxx}', [
        'uses' => $controll . 'Controller@show',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.ver');
    Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');

    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activate',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activar',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

    Route::get('obtenerMotivos', [
		'uses' => $controll.'Controller@obtenerMotivos',
		'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
	 ])->name($routxxxx.'.obtenerMotivos');


});
