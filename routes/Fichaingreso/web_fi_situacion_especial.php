<?php
Route::group(['prefix' => '{nnaj}/fisituacion'], function () {
	
	Route::get('', [
		'uses' => 'FichaIngreso\FiSituacionEspecialController@create',
		'middleware' => ['permission:fisituacion-crear']
	])->name('fi.situacion.nuevo');
	
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiSituacionEspecialController@store',
		'middleware' => ['permission:fisituacion-crear']
	])->name('fi.situacion.crear');
	
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSituacionEspecialController@edit',
		'middleware' => ['permission:fisituacion-editar']
	])->name('fi.situacion.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSituacionEspecialController@update',
		'middleware' => ['permission:fisituacion-editar']
	])->name('fi.situacion.editar');
	
	Route::get('ver/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSituacionEspecialController@show',
		'middleware' => ['permission:fisituacion-leer']
	])->name('fi.situacion.ver');
	
    Route::get('getEscnna', [
		'uses' => 'FichaIngreso\FiSituacionEspecialController@getEscnna',
	])->name('fi.situacion.getEscnna');  


	Route::delete('borrar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSituacionEspecialController@destroy',
		'middleware' => ['permission:fisituacion-borrar']
	])->name('fi.situacion.borrar');
});
