<?php
Route::group(['prefix' => '{padrexxx}/vestuario'], function () {
	Route::get('', [
	    'uses' => 'FichaIngreso\FiVestuarioController@create',
	    'middleware' => ['permission:fivestuario-crear']
	])->name('fi.vestuario.nuevo');
	Route::post('crear', [
	    'uses' => 'FichaIngreso\FiVestuarioController@store',
	    'middleware' => ['permission:fivestuario-crear']
	])->name('fi.vestuario.crear');
	Route::get('editar/{modeloxx}', [
	    'uses' => 'FichaIngreso\FiVestuarioController@edit',
	    'middleware' => ['permission:fivestuario-editar']
	])->name('fi.vestuario.editar');
	Route::put('editar/{modeloxx}', [
	    'uses' => 'FichaIngreso\FiVestuarioController@update',
	    'middleware' => ['permission:fivestuario-editar']
	])->name('fivestuario.editar');
	Route::get('ver/{modeloxx}', [
	    'uses' => 'FichaIngreso\FiVestuarioController@show',
	    'middleware' => ['permission:fivestuario-leer']
	]);

	Route::post('tallas', [
	    'uses' => 'FichaIngreso\FiVestuarioController@tallasajax',
	])->name('fivestuario.tallas');
});
