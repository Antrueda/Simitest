<?php
Route::group(['prefix' => '{nnaj}/fidatobasico'], function () {
	
	Route::get('', [
	    'uses' => 'FichaIngreso\FiDatoBasicoController@edit',
	    'middleware' => ['permission:fidatobasico-editar']
	])->name('fi.datosbasicos.editar');
	Route::put('{id}', [
	    'uses' => 'FichaIngreso\FiDatoBasicoController@update',
	    'middleware' => ['permission:fidatobasico-editar']
	])->name('fi.datosbasico.editar');
	Route::get('ver/{db}', [
	    'uses' => 'FichaIngreso\FiDatoBasicoController@show',
	    'middleware' => ['permission:fidatobasico-leer']
	]);
	Route::delete('borrar/{db}', [
	    'uses' => 'FichaIngreso\FiDatoBasicoController@destroy',
	    'middleware' => ['permission:fidatobasico-borrar']
	])->name('fi.datobasico.borrar');
});