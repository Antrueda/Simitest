<?php

use Illuminate\Support\Facades\Route;

$controll = 'Indicadores\Ajustes\InLigruTemacomboParametroController';
$permisox = 'documentoFuente';
$routexxx = 'temarespuesta';
Route::group(['prefix' => 'temarespuesta'], function () use ($controll, $routexxx, $permisox) {
	Route::get('{padrexxx}', [
		'uses' => $controll . '@index',
		'middleware' => ['permission:' . $permisox . '-leer|' . $permisox . '-crear|' . $permisox . '-editar|' . $permisox . '-borrar']
	])->name($routexxx);
	Route::get('{padrexxx}/nuevo', [
		'uses' => $controll . '@create',
		'middleware' => ['permission:' . $permisox . '-crear']
	])->name($routexxx . '.nuevo');
	Route::post('crear', [
		'uses' => $controll . '@store',
		'middleware' => ['permission:' . $permisox . '-crear']
	])->name($routexxx . '.crear');
	Route::get('editar/{objetoxx}', [
		'uses' => $controll . '@edit',
		'middleware' => ['permission:' . $permisox . '-editar']
	])->name($routexxx . '.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => $controll . '@update',
		'middleware' => ['permission:' . $permisox . '-editar']
	])->name($routexxx . '.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => $controll . '@show',
		'middleware' => ['permission:' . $permisox . '-leer']
	])->name($routexxx . '.ver');
	Route::delete('borrar/{objetoxx}', [
		'uses' => $controll . '@destroy',
		'middleware' => ['permission:' . $permisox . '-borrar']
	])->name($routexxx . '.borrar');
});
