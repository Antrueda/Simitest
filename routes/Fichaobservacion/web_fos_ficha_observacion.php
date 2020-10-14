<?php
$controll='FichaObservacion\Fos';
$routxxxx='fosfichaobservacion';
Route::group(['prefix' => '{nnaj}/fos'], function () use($controll,$routxxxx){

	Route::get('nuevo', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:'.$routxxxx.'-crear']
	])->name($routxxxx.'.nuevo');

	Route::post('crear', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:'.$routxxxx.'-crear']
    ])->name($routxxxx.'.crear');
    Route::get('', [
		'uses' => $controll.'Controller@fosIndex',
		'middleware' => ['permission:'.$routxxxx.'-leer']
    ])->name($routxxxx.'.lista');
});

Route::group(['prefix' => 'fos'], function () use($controll,$routxxxx){

	Route::get('editar/{fichaobservacion}', [
		'uses' => $controll.'Controller@edit',
		'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');

	Route::put('editar/{fichaobservacion}', [
		'uses' => $controll.'Controller@update',
		'middleware' => ['permission:'.$routxxxx.'-editar']
	])->name($routxxxx.'.editar');

	Route::get('ver/{fichaobservacion}', [
		'uses' => $controll.'Controller@show',
		'middleware' => ['permission:'.$routxxxx.'-leer']
	])->name($routxxxx.'.ver');

	Route::delete('borrar/{fichaobservacion}', [
		'uses' => $controll.'Controller@destroy',
		'middleware' => ['permission:'.$routxxxx.'-borrar']
	])->name($routxxxx.'.borrar');

	// Route::get('lista', [
	// 	'uses' => $controll.'Controller@lista',
	// 	'middleware' => ['permission:'.$routxxxx.'-leer']
	//  ])->name($routxxxx.'.lista');




	// Route::get('tipoSeguimiento/{id0}',$controll.'Controller@obtenerTipoSeguimientos');
	Route::get('subTipoSeguimiento/{id0}/{id1}',$controll.'Controller@obtenerSubTipoSeguimientos');
});

