<?php 
Route::group(['prefix' => 'lugar'], function () {
    Route::get('', [
	    'uses' => 'Administracion\SiseslugController@index',
	    'middleware' => ['permission:siseslug-leer|siseslug-crear|siseslug-editar|siseslug-borrar']
	])->name('siseslug');
	Route::get('nuevo', [
	    'uses' => 'Administracion\SiseslugController@create',
	    'middleware' => ['permission:siseslug-crear']
	])->name('siseslug.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\SiseslugController@store',
	    'middleware' => ['permission:siseslug-crear']
	])->name('siseslug.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\SiseslugController@edit',
	    'middleware' => ['permission:siseslug-editar']
	])->name('siseslug.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\SiseslugController@update',
	    'middleware' => ['permission:siseslug-editar']
	])->name('siseslug.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\SiseslugController@show',
	    'middleware' => ['permission:siseslug-leer']
	])->name('siseslug.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\SiseslugController@destroy',
	    'middleware' => ['permission:siseslug-borrar']
	])->name('siseslug.borrar');
	Route::get('motivos', [
		'uses' => 'Administracion\SiseslugController@getMotivos',
	    'middleware' => ['permission:siseslug-leer']
    ])->name('siseslug.motivosx');
	
});