<?php
$routexxx='benefici';
$controll='FichaIngreso\FiFamBeneficiarioController@';
Route::group(['prefix' => 'beneficiario'], function () use($routexxx,$controll){
	Route::get('', [
		'uses' => $controll.'index',
		// 'middleware' => ['permission:'.$routexxx.'-crearxxx|'.$routexxx.'-leerxxxx|'.$routexxx.'-borrarxx|'.$routexxx.'-editarxx|]
	])->name($routexxx);

    // Route::get('fi/familiar', 'FichaIngreso\\FiFamBeneficiario@index')->name('fi.familiar');
    // Route::get('fi/familiar/{id}', 'FichaIngreso\\FiFamBeneficiario@edit')->name('fi.familiar.agregar');
    // Route::put('fi/familiar/{id}', 'FichaIngreso\\FiFamBeneficiario@update')->name('fi.familiar.update');

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

    Route::get('servicio', [
		'uses' => $controll.'servicio',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.servicio');

    Route::get('departam', [
		'uses' => $controll.'departam',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.departam');

	Route::get('municipi', [
		'uses' => $controll.'municipi',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.municipi');

    Route::get('neciayud', [
		'uses' => $controll.'neciayud',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.neciayud');

    Route::get('upz', [
		'uses' => $controll.'upz',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.upzxxxxx');

    Route::get('barrio', [
		'uses' => $controll.'barrio',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.barrioxx');

    Route::get('etniaxxx', [
		'uses' => $controll.'pobletnia',
		// 'middleware' => ['permission:'.$routexxx.'-editarxx']
	])->name($routexxx.'.etniaxxx');

});
