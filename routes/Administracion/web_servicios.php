<?php
$routexxx='servicio';
$controll='Administracion\SisServicio';
Route::group(['prefix' => 'servicios'], function ()use($routexxx,$controll){
	Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
	])->name($routexxx);
	Route::get('motivos', [
		'uses' => $controll . 'Controller@getMotivos',
		'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.motivosx');
    Route::get('listaxxx', [
		'uses' => $controll.'Controller@getListado',
		'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.listaxxx');
	Route::get('nuevo', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.nuevo');
	Route::post('nuevo', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.crear');
	Route::get('editar/{objetoxx}', [
		'uses' => $controll.'Controller@edit',
		'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => $controll.'Controller@update',
		'middleware' => ['permission:'.$routexxx.'-editar']
	]);
	Route::get('ver/{objetoxx}', [
		'uses' => $controll.'Controller@show',
		'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.ver');
	Route::delete('ver/{objetoxx}', [
		'uses' => $controll.'Controller@destroy',
		'middleware' => ['permission:'.$routexxx.'-borrar']
	]);
    Route::get('borrar/{objetoxx}', [
        'uses' => $controll . 'Controller@inactivate',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');

    Route::put('borrar/{objetoxx}', [
        'uses' => $controll . 'Controller@destroy',
        'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');
});
