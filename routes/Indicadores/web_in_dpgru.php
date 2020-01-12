<?php
Route::group(['prefix' => '{in_docpr_id}/indpgru'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InDpgruController@index',
	    'middleware' => ['permission:documentoFuente-leer|documentoFuente-crear|documentoFuente-editar|documentoFuente-borrar']
	])->name('indpgru');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\InDpgruController@create',
	    'middleware' => ['permission:documentoFuente-crear']
	])->name('indpgru.indpgru.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InDpgruController@store',
	    'middleware' => ['permission:documentoFuente-crear']
	])->name('indpgru.indpgru.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InDpgruController@edit',
	    'middleware' => ['permission:documentoFuente-editar']
	])->name('indpgru.indpgru.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InDpgruController@update',
	    'middleware' => ['permission:documentoFuente-editar']
	])->name('indpgru.indpgru.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InDpgruController@show',
	    'middleware' => ['permission:documentoFuente-leer']
	])->name('indpgru.indpgru.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InDpgruController@destroy',
	    'middleware' => ['permission:documentoFuente-borrar']
    ])->name('indpgru.indpgru.borrar');
});
