<?php 
Route::group(['prefix' => 'titulos'], function () {
    Route::get('', [
	    'uses' => 'Administracion\SisTituloController@index',
	    'middleware' => ['permission:sistitulos-leer|sistitulos-crear|sistitulos-editar|sistitulos-borrar']
	])->name('sistitulos');
	Route::get('nuevo', [
	    'uses' => 'Administracion\SisTituloController@create',
	    'middleware' => ['permission:sistitulos-crear']
	])->name('sistitulos.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\SisTituloController@store',
	    'middleware' => ['permission:sistitulos-crear']
	])->name('sistitulos.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\SisTituloController@edit',
	    'middleware' => ['permission:sistitulos-editar']
	])->name('sistitulos.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\SisTituloController@update',
	    'middleware' => ['permission:sistitulos-editar']
	])->name('sistitulos.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\SisTituloController@show',
	    'middleware' => ['permission:sistitulos-leer']
	])->name('sistitulos.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\SisTituloController@destroy',
	    'middleware' => ['permission:sistitulos-borrar']
	])->name('sistitulos.borrar');
	
});