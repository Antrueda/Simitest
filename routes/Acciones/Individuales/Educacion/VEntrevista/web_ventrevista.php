<?php
$routxxxx = 'ventrevista';
$controll = 'Acciones\Individuales\Educacion\VEntrevista\VEntrevista';
Route::group(['prefix' => '{padrexxx}/VEntrevista'], function () use ($controll, $routxxxx) {
    Route::get('', [
	    'uses' => $controll.'Controller@index',
	    'middleware' => ['permission:'.$routxxxx.'-leer|'.$routxxxx.'-crear|'.$routxxxx.'-editar|'.$routxxxx.'-borrar']
    ])->name($routxxxx);
	Route::get('listaxxx', [
        'uses' => $controll . 'Controller@listaMatriculaCursos',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxx');

    Route::get('listaxxz', [
        'uses' => $controll . 'Controller@listaUnidades',
        'middleware' => ['permission:' . $routxxxx . '-leer']
    ])->name($routxxxx . '.listaxxz');

	Route::get('nuevo', [
	    'uses' => $controll.'Controller@create',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');
	Route::post('nuevo', [
	    'uses' => $controll.'Controller@store',
	    'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.crear');

	

	Route::get('curso', [
        'uses' => $controll . 'Controller@getCurso',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.curso');

	Route::get('responsa', [
        'uses' => $controll . 'Controller@getResponsableUpiE',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.responsa');

    Route::get('responsar', [
        'uses' => $controll . 'Controller@getResponsableUpiR',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.responsar');



    Route::get('upiservicio', [
        'uses' => $controll . 'Controller@getUpiTServicio',
        'middleware' => ['permission:' . $routxxxx . '-borrar']
    ])->name($routxxxx . '.upiservicio');

});

Route::group(['prefix' => 'FormatoValora'], function () use ($controll, $routxxxx) {

	Route::get('curso', [
        'uses' => $controll . 'Controller@getCurso',
        'middleware' => ['permission:' . $routxxxx . '-leer']
	])->name($routxxxx . '.curso');
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

