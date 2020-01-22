<?php
Route::group(['prefix' => 'sisesta'], function () {
    Route::get('', [
	    'uses' => 'Administracion\SisEstaController@index',
	    'middleware' => ['permission:sisesta-leer|sisesta-crear|sisesta-editar|sisesta-borrar']
	])->name('sisesta');
	Route::get('nuevo', [
	    'uses' => 'Administracion\SisEstaController@create',
	    'middleware' => ['permission:sisesta-crear']
	])->name('sisesta.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\SisEstaController@store',
	    'middleware' => ['permission:sisesta-crear']
	])->name('sisesta.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\SisEstaController@edit',
	    'middleware' => ['permission:sisesta-editar']
	])->name('sisesta.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\SisEstaController@update',
	    'middleware' => ['permission:sisesta-editar']
	])->name('sisesta.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\SisEstaController@show',
	    'middleware' => ['permission:sisesta-leer']
	])->name('sisesta.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\SisEstaController@destroy',
	    'middleware' => ['permission:sisesta-borrar']
	])->name('sisesta.borrar');
	
});