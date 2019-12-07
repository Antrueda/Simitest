<?php
Route::group(['prefix' => 'documentoFuente'], function (){
	Route::get('', [
		'uses' => 'Administracion\DocumentoFuenteController@index', 
		'middleware' => ['permission:documentoFuente-leer|documentoFuente-crear|documentoFuente-editar|documentoFuente-borrar']
	])->name('documentoFuente');
	Route::get('nuevo', [
		'uses' => 'Administracion\DocumentoFuenteController@create',
		'middleware' => ['permission:documentoFuente-crear']
	])->name('documentoFuente.nuevo');
	Route::post('nuevo', [
		'uses' => 'Administracion\DocumentoFuenteController@store',
		'middleware' => ['permission:documentoFuente-crear']
	])->name('documentoFuente.nuevo');
	Route::get('editar/{id}', [
		'uses' => 'Administracion\DocumentoFuenteController@edit',
		'middleware' => ['permission:documentoFuente-editar']
	])->name('documentoFuente.editar');
	Route::put('editar/{id}', [
		'uses' => 'Administracion\DocumentoFuenteController@update',
		'middleware' => ['permission:documentoFuente-editar']
	])->name('documentoFuente.editar');
	Route::get('ver/{id}', [
		'uses' => 'Administracion\DocumentoFuenteController@show',
		'middleware' => ['permission:documentoFuente-leer']
	])->name('documentoFuente.ver');
	Route::delete('ver/{id}', [
		'uses' => 'Administracion\DocumentoFuenteController@destroy',
		'middleware' => ['permission:documentoFuente-borrar']
	])->name('documentoFuente.borrar');
});