<?php
Route::group(['prefix' => 'inbasedocumen'], function () {
	Route::get('', [
		'uses' => 'Indicadores\InBaseDocumenController@index',
		'middleware' => ['permission:inbasedocumen-leer|inbasedocumen-crear|inbasedocumen-editar|inbasedocumen-borrar']
	])->name('bd');
	Route::get('nuevo', [
		'uses' => 'Indicadores\InBaseDocumenController@create',
		'middleware' => ['permission:inbasedocumen-crear']
	])->name('bd.basedocumen.nuevo');
	Route::post('nuevo', [
		'uses' => 'Indicadores\InBaseDocumenController@store',
		'middleware' => ['permission:inbasedocumen-crear']
	])->name('bd.basedocumen.crear');

	Route::get('editar/{objetoxx}', [
		'uses' => 'Indicadores\InBaseDocumenController@edit',
		'middleware' => ['permission:inbasedocumen-editar']
	])->name('bd.basedocumen.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => 'Indicadores\InBaseDocumenController@update',
		'middleware' => ['permission:inbasedocumen-editar']
	])->name('bd.basedocumen.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => 'Indicadores\InBaseDocumenController@show',
		'middleware' => ['permission:inbasedocumen-leer']
	])->name('bd.basedocumen.ver');
	Route::delete('ver/{objetoxx}', [
		'uses' => 'Indicadores\InBaseDocumenController@destroy',
		'middleware' => ['permission:inbasedocumen-borrar']
	])->name('bd.basedocumen.borrar');

	Route::post('documentos', [
		'uses' => 'Indicadores\InBaseDocumenController@documentos',
	])->name('bd.basedocumen.documentos');
	Route::post('asignarlineabase', [
		'uses' => 'Indicadores\InBaseDocumenController@asignardocumento',
	])->name('bd.basedocumen.asignarlineabase');
});
