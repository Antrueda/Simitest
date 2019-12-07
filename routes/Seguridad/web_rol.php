<?php
Route::group(['prefix' => 'rol'], function () {
    Route::get('', [
	    'uses' => 'Seguridad\RolController@index',
	    'middleware' => ['permission:rol-leer|rol-crear|rol-editar|rol-borrar']
	])->name('rol');
	Route::get('nuevo', [
	    'uses' => 'Seguridad\RolController@create',
	    'middleware' => ['permission:rol-crear']
	])->name('rol.nuevo');
	Route::post('crear', [
	    'uses' => 'Seguridad\RolController@store',
	    'middleware' => ['permission:rol-crear']
	])->name('rol.crear');
	Route::get('editar/{role}', [
	    'uses' => 'Seguridad\RolController@edit',
	    'middleware' => ['permission:rol-editar']
	])->name('rol.editar');
	Route::put('editar/{role}', [
	    'uses' => 'Seguridad\RolController@update',
	    'middleware' => ['permission:rol-editar']
	])->name('rol.editar');
	Route::get('ver/{role}', [
	    'uses' => 'Seguridad\RolController@show',
	    'middleware' => ['permission:rol-leer']
	])->name('rol.ver');
	Route::delete('borrar/{role}', [
	    'uses' => 'Seguridad\RolController@destroy',
	    'middleware' => ['permission:rol-borrar']
	])->name('rol.borrar');

	
});