<?php
Route::group(['prefix' => 'agconvenio'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgConvenioController@index',
	    'middleware' => ['permission:agconvenio-leer|agconvenio-crear|agconvenio-editar|agconvenio-borrar']
	])->name('ag.conv');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgConvenioController@create',
	    'middleware' => ['permission:agconvenio-crear']
	])->name('ag.conv.convenio.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgConvenioController@store',
	    'middleware' => ['permission:agconvenio-crear']
	])->name('ag.conv.convenio.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgConvenioController@edit',
	    'middleware' => ['permission:agconvenio-editar']
	])->name('ag.conv.convenio.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgConvenioController@update',
	    'middleware' => ['permission:agconvenio-editar']
	])->name('ag.conv.convenio.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgConvenioController@show',
	    'middleware' => ['permission:agconvenio-leer']
	])->name('ag.conv.convenio.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgConvenioController@destroy',
	    'middleware' => ['permission:agconvenio-borrar']
	])->name('ag.conv.convenio.borrar');
});