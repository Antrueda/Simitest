<?php
$routxxxx = 'egresopost';
$controll = 'Acciones\Individuales\Emprendimiento\Egreso\EgresoSeguimiento';
Route::group(['prefix' => '{padrexxx}/SeguiEgreso'], function () use ($controll, $routxxxx) {
    Route::get('', [
	    'uses' => $controll.'Controller@index',
	    'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx);
    Route::get('nuevo', [
	    'uses' => $controll.'Controller@create',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');
	Route::post('nuevo', [
	    'uses' => $controll.'Controller@store',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.crear');
	Route::get('listaxxz', [
        'uses' => $controll . 'Controller@listaDientes',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxz');

    Route::get('listaxxx', [
        'uses' => $controll . 'Controller@listaTelefonos',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxx');

    Route::get('quitar', [
        'uses' => $controll . 'Controller@quitartele',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.quitar');

});

Route::group(['prefix' => 'SeguiEgresos'], function () use ($controll, $routxxxx) {

    Route::get('editar/{modeloxx}', [
	    'uses' => $controll.'Controller@edit',
	    'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');
	Route::put('editar/{modeloxx}', [
	    'uses' => $controll.'Controller@update',
	    'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');
	Route::get('ver/{modeloxx}', [
	    'uses' => $controll.'Controller@show',
	    'middleware' => ['permission:'.$routxxxx.'-leer']
	])->name($routxxxx.'.ver');
	Route::get('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');
    Route::get('agregar', [
        'uses' => $controll . 'Controller@getAgregartele',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.agregar');


    Route::get('superficie', [
        'uses' => $controll . 'Controller@getSuperficie',
        'middleware' => ['permission:' . $routxxxx . '-crear']
	])->name($routxxxx . '.superficie');

    Route::get('diagnostico', [
        'uses' => $controll . 'Controller@getDiagnostico',
        'middleware' => ['permission:' . $routxxxx . '-crear']
	])->name($routxxxx . '.diagnostico');

    Route::get('tiposuper', [
        'uses' => $controll . 'Controller@getTipoSuperficie',
        'middleware' => ['permission:' . $routxxxx . '-crear']
	])->name($routxxxx . '.tiposuper');


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
});


