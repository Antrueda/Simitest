<?php
Route::group(['prefix' => 'parametro'], function () {
	Route::get('', [
		'uses' => 'Administracion\ParametroController@index',
		'middleware' => ['permission:parametro-leer|parametro-crear|parametro-editar|parametro-borrar']
	])->name('parametro');
	Route::get('nuevo', [
		'uses' => 'Administracion\ParametroController@create',
		'middleware' => ['permission:parametro-crear']
	])->name('parametro.nuevo');
	Route::post('nuevo', [
		'uses' => 'Administracion\ParametroController@store',
		'middleware' => ['permission:parametro-crear']
	]);
	Route::get('editar/{id}', [
		'uses' => 'Administracion\ParametroController@edit',
		'middleware' => ['permission:parametro-editar']
	])->name('parametro.editar');
	Route::put('editar/{id}', [
		'uses' => 'Administracion\ParametroController@update',
		'middleware' => ['permission:parametro-editar']
	]);
	Route::get('ver/{id}', [
		'uses' => 'Administracion\ParametroController@show',
		'middleware' => ['permission:parametro-leer']
	])->name('parametro.ver');
	Route::delete('ver/{id}', [
		'uses' => 'Administracion\ParametroController@destroy',
		'middleware' => ['permission:parametro-borrar']
	]);
});