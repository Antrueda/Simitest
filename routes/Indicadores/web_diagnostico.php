<?php
Route::group(['prefix' => 'indiagnostico'], function () {
	Route::get('', [
		'uses' => 'Indicadores\InDiagnosticoController@index',
		'middleware' => ['permission:indiagnostico-leer|indiagnostico-crear|indiagnostico-editar|indiagnostico-borrar']
	])->name('diagnostico');
	Route::get('nuevo', [
		'uses' => 'Indicadores\InDiagnosticoController@create',
		'middleware' => ['permission:indiagnostico-crear']
	])->name('diagnostico.nuevo');
	Route::post('nuevo', [
		'uses' => 'Indicadores\InDiagnosticoController@store',
		'middleware' => ['permission:indiagnostico-crear']
	])->name('diagnostico.crear');

	Route::get('editar/{objetoxx}', [
		'uses' => 'Indicadores\InDiagnosticoController@edit',
		'middleware' => ['permission:indiagnostico-editar']
	])->name('diagnostico.editar');
	Route::put('editar/{objetoxx}', [
		'uses' => 'Indicadores\InDiagnosticoController@update',
		'middleware' => ['permission:indiagnostico-editar']
	])->name('diagnostico.editar');
	Route::get('ver/{objetoxx}', [
		'uses' => 'Indicadores\InDiagnosticoController@show',
		'middleware' => ['permission:indiagnostico-leer']
	])->name('diagnostico.ver');
	Route::delete('ver/{objetoxx}', [
		'uses' => 'Indicadores\InDiagnosticoController@destroy',
		'middleware' => ['permission:indiagnostico-borrar']
	])->name('diagnostico.borrar');

	Route::group(['prefix' => '{nnaj}/bases'], function () {


		Route::get('', [
			'uses' => 'Indicadores\InDiagnosticoController@listar_lieas_base_nnaj',
			'middleware' => ['permission:indiagnostico-leer|indiagnostico-crear|indiagnostico-editar|indiagnostico-borrar']
		])->name('diagnostico.nnajbases');
	});
});
