<?php

Route::group(['prefix' => '{id}/basico'], function (){
	Route::get('', [
		'uses' => 'Domicilio\CsdBasicoController@show',
		'middleware' => ['permission:csddatobasico-crear|csddatobasico-editar']
	])->name('CSD.basico');
	Route::post('', [
		'uses' => 'Domicilio\CsdBasicoController@store',
		'middleware' => ['permission:csddatobasico-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Domicilio\CsdBasicoController@update',
		'middleware' => ['permission:csddatobasico-editar']
	])->name('CSD.basico.editar');
});
