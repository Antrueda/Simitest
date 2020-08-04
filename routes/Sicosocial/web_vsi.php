<?php
$routexxx='vsixxxxx';
$controll='Sicosocial\Vsi';
Route::group(['prefix' => 'vsi'], function () use($routexxx,$controll) {
	Route::get('editar/{objetoxx}', [
	    'uses' => $controll.'Controller@edit',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => $controll.'Controller@update',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => $controll.'Controller@show',
	    'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.ver');
	Route::get('borrar', [
	    'uses' => $controll.'Controller@destroy',
	    'middleware' => ['permission:'.$routexxx.'-borrar']
	])->name($routexxx.'.borrar');

});
