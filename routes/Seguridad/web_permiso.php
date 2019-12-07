<?php
Route::group(['prefix' => 'permiso'], function () {
    Route::get('', [
	    'uses' => 'Seguridad\PermisoController@index',
	    'middleware' => ['permission:permiso-leer|permiso-crear|permiso-editar|permiso-borrar']
	])->name('permiso');
	Route::get('nuevo', [
	    'uses' => 'Seguridad\PermisoController@create',
	    'middleware' => ['permission:permiso-crear']
	])->name('permiso.nuevo');
	Route::post('crear', [
	    'uses' => 'Seguridad\PermisoController@store',
	    'middleware' => ['permission:permiso-crear']
	])->name('permiso.crear');
	Route::get('editar/{permiso}', [
	    'uses' => 'Seguridad\PermisoController@edit',
	    'middleware' => ['permission:permiso-editar']
	])->name('permiso.editar');
	Route::put('editar/{permiso}', [
	    'uses' => 'Seguridad\PermisoController@update',
	    'middleware' => ['permission:permiso-editar']
	])->name('permiso.editar');
	Route::get('ver/{permiso}', [
	    'uses' => 'Seguridad\PermisoController@show',
	    'middleware' => ['permission:permiso-leer']
	])->name('permiso.ver');
	Route::delete('borrar/{permiso}', [
	    'uses' => 'Seguridad\PermisoController@destroy',
	    'middleware' => ['permission:permiso-borrar']
	])->name('permiso.borrar');
});