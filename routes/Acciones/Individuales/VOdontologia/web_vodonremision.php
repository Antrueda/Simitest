<?php
$routxxxx = 'vodonremites';
$controll = 'Acciones\Individuales\Salud\VOdontologia\VOdonRemision';
Route::group(['prefix' => '{padrexxx}/Remision'], function () use ($controll, $routxxxx) {

    Route::get('nuevo', [
	    'uses' => $controll.'Controller@create',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');
	Route::post('nuevo', [
	    'uses' => $controll.'Controller@store',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.crear');
	Route::get('listaxxz', [
        'uses' => $controll . 'Controller@ListaDiagnosticos',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxz');

    Route::get('quitar', [
        'uses' => $controll . 'Controller@getQuitar',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.quitar');
});

Route::group(['prefix' => 'Remisions'], function () use ($controll, $routxxxx) {

    Route::get('agregar', [
        'uses' => $controll . 'Controller@getAgregar',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.agregar');

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
    
    Route::get('diagnostico', [
        'uses' => $controll . 'Controller@getDiagnostico',
        'middleware' => ['permission:' . $routxxxx . '-crear']
	])->name($routxxxx . '.diagnostico');

    // Route::get('codigo', [
    //     'uses' => $controll . 'Controller@getCodigo',
    //     'middleware' => ['permission:' . $routxxxx . '-crear']
	// ])->name($routxxxx . '.codigo');

    Route::put('borrar/{modeloxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.borrar');


    Route::get('quitar/{modeloxx}', [
        'uses' => $controll . 'Controller@quitar',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.quitar');

    Route::get('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activate',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');

    Route::put('activate/{modeloxx}', [
        'uses' => $controll . 'Controller@activar',
        'middleware' => ['permission:' . $routxxxx . '-activarx']
    ])->name($routxxxx . '.activarx');
});


