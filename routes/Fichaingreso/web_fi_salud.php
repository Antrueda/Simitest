<?php
$controll='FichaIngreso\FiSalud';
$routexxx='fisalud';
Route::group(['prefix' => '{padrexxx}/fisalud'], function () use($controll,$routexxx){
    Route::get('', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:fisalud-crear']
	])->name($routexxx.'.nuevo');

	Route::post('crear', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:fisalud-crear']
	])->name($routexxx.'.crear');

	Route::get('editar/{modeloxx}', [
		'uses' => $controll.'Controller@edit',
		'middleware' => ['permission:fisalud-editar']
	])->name($routexxx.'.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'Controller@update',
		'middleware' => ['permission:fisalud-editar']
	])->name('fiobjetoxxsalud.editar');

	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'Controller@show',
		'middleware' => ['permission:fisalud-leer']
	])->name($routexxx.'.ver');

	Route::delete('borrar/{modeloxx}', [
		'uses' => $controll.'Controller@destroy',
		'middleware' => ['permission:fisalud-borrar']
    ])->name($routexxx.'.borrar');

    Route::get('victimax', [
		'uses' => $controll.'Controller@getCaminando',
		'middleware' => ['permission:fisalud-leer']
	])->name($routexxx.'.victimax');
});
