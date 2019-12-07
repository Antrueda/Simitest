<?php
Route::group(['prefix' => '{nnaj}/ficontacto'], function () {

	Route::get('', [
		'uses' => 'FichaIngreso\FiContactoController@create',
		'middleware' => ['permission:ficontacto-crear']
	])->name('fi.contacto.nuevo');

	Route::post('crear', [
		'uses' => 'FichaIngreso\FiContactoController@store',
		'middleware' => ['permission:ficontacto-crear']
	])->name('fi.contacto.crear');

	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiContactoController@edit',
		'middleware' => ['permission:ficontacto-editar']
	])->name('fi.contacto.editar');

	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiContactoController@update',
		'middleware' => ['permission:ficontacto-editar']
	])->name('fi.contacto.editar');

	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiContactoController@show',
		'middleware' => ['permission:ficontacto-leer']
	])->name('fi.contacto.ver');

	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiContactoController@destroy',
		'middleware' => ['permission:ficontacto-borrar']
	])->name('fi.contacto.borrar');
});
