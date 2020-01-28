<?php
Route::group(['prefix' => 'agttema'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgTallertemaController@index',
	    'middleware' => ['permission:agtema-leer|agtema-crear|agtema-editar|agtema-borrar']
	])->name('ttema');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgTallertemaController@create',
	    'middleware' => ['permission:agtema-crear']
	])->name('ttema.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgTallertemaController@store',
	    'middleware' => ['permission:agtema-crear']
	])->name('ttema.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTallertemaController@edit',
	    'middleware' => ['permission:agtema-editar']
	])->name('ttema.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTallertemaController@update',
	    'middleware' => ['permission:agtema-editar']
	])->name('ttema.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTallertemaController@show',
	    'middleware' => ['permission:agtema-leer']
	])->name('ttema.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTallertemaController@destroy',
	    'middleware' => ['permission:agtema-borrar']
	])->name('ttema.borrar');
});
