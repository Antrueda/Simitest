<?php
Route::group(['prefix' => '{nnaj}/fisustanciaconsume'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiSustanciaConsumidaController@create',
		'middleware' => ['permission:fisustanciaconsume-crear']
	])->name('fi.sustanciaconsume.nuevo');
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiSustanciaConsumidaController@store',
		'middleware' => ['permission:fisustanciaconsume-crear']
	])->name('fi.sustanciaconsume.crear');
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSustanciaConsumidaController@edit',
		'middleware' => ['permission:fisustanciaconsume-editar']
	])->name('fi.sustanciaconsume.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiSustanciaConsumidaController@update',
		'middleware' => ['permission:fisustanciaconsume-editar']
	])->name('fi.sustanciaconsume.editar');
});
