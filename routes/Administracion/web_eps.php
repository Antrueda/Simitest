<?php 
Route::group(['prefix' => 'eps'], function () {
    Route::get('', [
	    'uses' => 'Administracion\EpsController@index',
	    'middleware' => ['permission:eps-leer|eps-crear|eps-editar|eps-borrar']
	])->name('eps');
	Route::get('nuevo', [
	    'uses' => 'Administracion\EpsController@create',
	    'middleware' => ['permission:eps-crear']
	])->name('eps.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\EpsController@store',
	    'middleware' => ['permission:eps-crear']
	])->name('eps.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\EpsController@edit',
	    'middleware' => ['permission:eps-editar']
	])->name('eps.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\EpsController@update',
	    'middleware' => ['permission:eps-editar']
	])->name('eps.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\EpsController@show',
	    'middleware' => ['permission:eps-leer']
	])->name('eps.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\EpsController@destroy',
	    'middleware' => ['permission:eps-borrar']
	])->name('eps.borrar');
	
});