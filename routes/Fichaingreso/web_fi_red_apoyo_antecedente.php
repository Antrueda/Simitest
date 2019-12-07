<?php
Route::group(['prefix' => '{nnaj}/firedantecedente'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiRedApoyoAntecedenteController@create',
		'middleware' => ['permission:fiantecedentes-crear']
	])->name('fi.redantecedentes.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiRedApoyoAntecedenteController@store',
		'middleware' => ['permission:fiantecedentes-crear']
	])->name('fi.redantecedentes.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRedApoyoAntecedenteController@edit',
		'middleware' => ['permission:fiantecedentes-editar']
	])->name('fi.redantecedentes.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRedApoyoAntecedenteController@update',
		'middleware' => ['permission:fiantecedentes-editar']
	])->name('fi.redantecedentes.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRedApoyoAntecedenteController@show',
		'middleware' => ['permission:fiantecedentes-leer']
	])->name('fi.redantecedentes.ver');
	
	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiRedApoyoAntecedenteController@destroy',
		'middleware' => ['permission:fiantecedentes-borrar']
	])->name('fi.redantecedentes.borrar');
});
