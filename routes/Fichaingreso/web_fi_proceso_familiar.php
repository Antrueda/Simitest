<?php
Route::group(['prefix' => '{nnaj}/fiprocesojudicial'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiProcesoFamiliaController@create',
		'middleware' => ['permission:fiprocesojudicial-crear']
	])->name('fi.procesojudicial.nuevo');
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiProcesoFamiliaController@store',
		'middleware' => ['permission:fiprocesojudicial-crear']
	])->name('fi.procesojudicial.crear');
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiProcesoFamiliaController@edit',
		'middleware' => ['permission:fiprocesojudicial-editar']
	])->name('fi.procesojudicial.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiProcesoFamiliaController@update',
		'middleware' => ['permission:fiprocesojudicial-editar']
	])->name('fi.procesojudicial.editar');
});
