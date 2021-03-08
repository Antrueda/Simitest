<?php
$routexxx='combpara';
$controll='Administracion\Temas\ComboParametro';
Route::group(['prefix' => 'admincomboparametros'], function () use($routexxx,$controll){
    Route::get('{padrexxx}', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx);
    Route::get('{padrexxx}/listaxxx', [
		'uses' => $controll.'Controller@listaComboparametros',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx.'.listaxxx');
    Route::get('{padrexxx}/listapar', [
		'uses' => $controll.'Controller@listaParametrosNotIn',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx.'.listapar');
    Route::get('{padrexxx}/nuevo', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.nuevo');
	Route::post('{padrexxx}/crear', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.crear');
	Route::get('editar/{padrexxx}/{modeloxx}', [
		'uses' => $controll.'Controller@edit',
		'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::put('editar/{padrexxx}/{modeloxx}', [
		'uses' => $controll.'Controller@update',
		'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'Controller@show',
		'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.ver');
	Route::get('borrar/{modeloxx}', [
	    'uses' => $controll.'Controller@inactivate',
	    'middleware' => ['permission:'.$routexxx.'-borrar']
    ])->name($routexxx.'.borrar');
    Route::put('borrar/{padrexxx}', [
		'uses' => $controll . 'Controller@destroy',
		'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');
    Route::get('activate/{modeloxx}', [
	    'uses' => $controll.'Controller@activate',
	    'middleware' => ['permission:'.$routexxx.'-activarx']
    ])->name($routexxx.'.activarx');
    Route::put('activate/{modeloxx}', [
		'uses' => $controll . 'Controller@activar',
		'middleware' => ['permission:' . $routexxx . '-activarx']
	])->name($routexxx . '.activarx');
});
