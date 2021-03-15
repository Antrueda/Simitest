<?php
$routexxx='municipi';
$controll='Administracion\Ubicacion\SisMunicipio';
Route::group(['prefix' => 'municipios'], function () use($routexxx,$controll){
    Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx);

    Route::get('nuevo', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.nuevo');

    Route::get('listaxxx', [
		'uses' => $controll.'Controller@listaMunicipios',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx.'.listaxxx');

	Route::post('crear', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.crear');
});
Route::group(['prefix' => 'municipio'], function () use($routexxx,$controll){


	Route::get('editar/{modeloxx}', [
		'uses' => $controll.'Controller@edit',
		'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');

	Route::put('editar/{modeloxx}', [
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

    Route::put('borrar/{modeloxx}', [
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
