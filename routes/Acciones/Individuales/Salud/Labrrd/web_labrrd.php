<?php
$routxxxx = 'labrrdvs';
$controll = 'Acciones\Individuales\Salud\Labrrd\Labrrd';
Route::group(['prefix' => 'ai/salud/{padrexxx}/LAB-RRD'], function () use ($controll, $routxxxx) {
	Route::get('', [
		'uses' => $controll . 'Controller@index',
		'middleware' => ['permission:' . $routxxxx . '-leerxxxx|' . $routxxxx . '-crearxxx|' . $routxxxx . '-editarxx|' . $routxxxx . '-borrarxx']
	])->name($routxxxx);
	Route::get('listaxxx', [
		'uses' => $controll . 'Controller@getListaxxx',
		'middleware' => ['permission:' . $routxxxx . '-leerxxxx']
	])->name($routxxxx . '.listaxxx');
	Route::get('listaspa', [
		'uses' => $controll . 'Controller@getListaspa',
		'middleware' => ['permission:' . $routxxxx . '-leerxxxx']
	])->name($routxxxx . '.listaspa');
	Route::get('nuevo', [
		'uses' => $controll . 'Controller@create',
		'middleware' => ['permission:' . $routxxxx . '-crearxxx']
	])->name($routxxxx . '.nuevoxxx');
	Route::post('nuevo', [
		'uses' => $controll . 'Controller@store',
		'middleware' => ['permission:' . $routxxxx . '-crearxxx']
	])->name($routxxxx . '.crearxxx');
});

Route::group(['prefix' => 'ai/salud/LAB-RRD'], function () use ($controll, $routxxxx) {
	Route::get('editar/{modeloxx}', [
		'uses' => $controll . 'Controller@edit',
		'middleware' => ['permission:' . $routxxxx . '-editarxx']
	])->name($routxxxx . '.editarxx');
	Route::put('editar/{modeloxx}', [
		'uses' => $controll . 'Controller@update',
		'middleware' => ['permission:' . $routxxxx . '-editarxx']
	])->name($routxxxx . '.editarxx');
	Route::get('ver/{modeloxx}', [
		'uses' => $controll . 'Controller@show',
		'middleware' => ['permission:' . $routxxxx . '-leerxxxx']
	])->name($routxxxx . '.verxxxxx');
	Route::get('borrar/{modeloxx}', [
		'uses' => $controll . 'Controller@inactivate',
		'middleware' => ['permission:' . $routxxxx . '-borrarxx']
	])->name($routxxxx . '.borrarxx');
	Route::put('borrar/{modeloxx}', [
		'uses' => $controll . 'Controller@destroy',
		'middleware' => ['permission:' . $routxxxx . '-borrarxx']
	])->name($routxxxx . '.borrarxx');
	Route::get('activate/{modeloxx}', [
		'uses' => $controll . 'Controller@activate',
		'middleware' => ['permission:' . $routxxxx . '-activarx']
	])->name($routxxxx . '.activarx');

	Route::put('activate/{modeloxx}', [
		'uses' => $controll . 'Controller@activar',
		'middleware' => ['permission:' . $routxxxx . '-activarx']
	])->name($routxxxx . '.activarx');
});
require_once('web_labrrdseguimientos.php');

//administraccion
require_once('AdmiLabrrd/web_admilabrrdmodu.php');
