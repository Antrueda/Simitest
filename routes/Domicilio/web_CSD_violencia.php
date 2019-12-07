<?php
Route::group(['prefix' => '{id}/violencia'], function (){
	Route::get('', [
		'uses' => 'Domicilio\CsdViolenciaController@show',
		'middleware' => ['permission:csdviolencia-crear|csdviolencia-editar']
	])->name('CSD.violencia');
	Route::post('', [
		'uses' => 'Domicilio\CsdViolenciaController@store',
		'middleware' => ['permission:csdviolencia-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Domicilio\CsdViolenciaController@update',
		'middleware' => ['permission:csdviolencia-editar']
	])->name('CSD.violencia.editar');
});