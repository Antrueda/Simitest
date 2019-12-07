<?php
Route::group(['prefix' => '{nnaj}/vestuario'], function () {
	Route::get('', [
	    'uses' => 'FichaIngreso\FiVestuarioController@create',
	    'middleware' => ['permission:fivestuario-crear']
	])->name('fi.vestuario.nuevo');
	Route::post('crear', [
	    'uses' => 'FichaIngreso\FiVestuarioController@store',
	    'middleware' => ['permission:fivestuario-crear']
	])->name('fi.vestuario.crear');
	Route::get('editar/{ve}', [
	    'uses' => 'FichaIngreso\FiVestuarioController@edit',
	    'middleware' => ['permission:fivestuario-editar']
	])->name('fi.vestuario.editar');
	Route::put('editar/{ve}', [
	    'uses' => 'FichaIngreso\FiVestuarioController@update',
	    'middleware' => ['permission:fivestuario-editar']
	])->name('fivestuario.editar');
	Route::get('ver/{ve}', [
	    'uses' => 'FichaIngreso\FiVestuarioController@show',
	    'middleware' => ['permission:fivestuario-leer']
	]);
	Route::delete('borrar/{ve}', [
	    'uses' => 'FichaIngreso\FiVestuarioController@destroy',
	    'middleware' => ['permission:fivestuario-borrar']
	])->name('fivestuario.borrar');

	Route::post('tallas', [
	    'uses' => 'FichaIngreso\FiVestuarioController@tallasajax',
	])->name('fivestuario.tallas');
});