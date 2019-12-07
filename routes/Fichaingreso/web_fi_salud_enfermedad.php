<?php
Route::group(['prefix' => '{nnaj}/fisaludenfermedad'], function () {
	Route::get('', [
		'uses' => 'FichaIngreso\FiEnfermedadesFamiliaController@create',
		'middleware' => ['permission:fisaludenfermedad-crear']
	])->name('fi.saludenfermedad.nuevo');
	Route::post('crear', [
		'uses' => 'FichaIngreso\FiEnfermedadesFamiliaController@store',
		'middleware' => ['permission:fisaludenfermedad-crear']
	])->name('fi.saludenfermedad.crear');
	Route::get('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiEnfermedadesFamiliaController@edit',
		'middleware' => ['permission:fisaludenfermedad-editar']
	])->name('fi.saludenfermedad.editar');
	
	Route::put('editar/{objetoxx}', [
		'uses' => 'FichaIngreso\FiEnfermedadesFamiliaController@update',
		'middleware' => ['permission:fisaludenfermedad-editar']
	])->name('fi.saludenfermedad.editar');
});
