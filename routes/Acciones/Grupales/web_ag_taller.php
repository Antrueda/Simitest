<?php
Route::group(['prefix' => 'taller'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgTallerController@index',
	    'middleware' => ['permission:agtaller-leer|agtaller-crear|agtaller-editar|agtaller-borrar']
	])->name('agr');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgTallerController@create',
	    'middleware' => ['permission:agtaller-crear']
	])->name('agr.taller.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgTallerController@store',
	    'middleware' => ['permission:agtaller-crear']
	])->name('agr.taller.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTallerController@edit',
	    'middleware' => ['permission:agtaller-editar']
	])->name('agr.taller.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTallerController@update',
	    'middleware' => ['permission:agtaller-editar']
	])->name('agr.taller.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTallerController@show',
	    'middleware' => ['permission:agtaller-leer']
	])->name('agr.taller.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTallerController@destroy',
	    'middleware' => ['permission:agtaller-borrar']
	])->name('agr.taller.borrar');
});

