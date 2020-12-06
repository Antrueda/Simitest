<?php
$routexxx='fiingresos';
$controll='FichaIngreso\FiGeneracionIngreso';
Route::group(['prefix' => '{padrexxx}/fiingreso'], function () use($routexxx,$controll){

	Route::get('', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.nuevo');

	Route::post('crear', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.crear');

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



	Route::delete('borrar/{modeloxx}', [
		'uses' => $controll.'Controller@destroy',
		'middleware' => ['permission:'.$routexxx.'-borrar']
	])->name('fiingreso.borrar');
});

Route::group(['prefix' => 'fiingreso'], function () use($routexxx,$controll){
    Route::get('pgeningr', [
		'uses' => $controll.'Controller@getGeneraIngreso',
		'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.pgeningr');
});
