<?php
$routexxx='benefici';
$controll='FichaIngreso\FiFamBeneficiario@';
Route::group(['prefix' => 'beneficiario'], function () use($routexxx,$controll){
	Route::get('', [
		'uses' => $controll.'index',
		// 'middleware' => ['permission:'.$routexxx.'-crearxxx|'.$routexxx.'-leerxxxx|'.$routexxx.'-borrarxx|'.$routexxx.'-editarxx|]
	])->name($routexxx);

	Route::get('editar/{modeloxx}', [
		'uses' => $controll.'edit',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'update',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.editar');

	Route::get('estrateg', [
		'uses' => $controll.'estrategia',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.estrateg');
	// Route::get('ver/{modeloxx}', [
	// 	'uses' => $controll.'show',
	// 	// 'middleware' => ['permission:'.$routexxx.'-leerxxxx']
	// ])->name($routexxx.'.ver');
});
