<?php
Route::group(['prefix' => 'lineabase'], function () {
	 Route::get('', [
	    'uses' => 'Indicadores\InLigruController@index',
	    'middleware' => ['permission:indicador-leer|indicador-crear|indicador-editar|indicador-borrar']
	])->name('inligru');
Route::group(['prefix' => '{in_linea_id}/grupos'], function () {
	Route::get('', [
		'uses' => 'Indicadores\InLigruController@grupos',
		'middleware' => ['permission:indicador-leer|indicador-crear|indicador-editar|indicador-borrar']
])->name('inligru.grupos');
	Route::get('nuevo', [
	    'uses' => 'Indicadores\InLigruController@create',
	    'middleware' => ['permission:indicador-crear']
	])->name('inligru.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Indicadores\InLigruController@store',
	    'middleware' => ['permission:indicador-crear']
	])->name('inligru.crear');

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InLigruController@edit',
	    'middleware' => ['permission:indicador-editar']
	])->name('inligru.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Indicadores\InLigruController@update',
	    'middleware' => ['permission:indicador-editar']
	])->name('inligru.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InLigruController@show',
	    'middleware' => ['permission:indicador-leer']
	])->name('inligru.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Indicadores\InLigruController@destroy',
	    'middleware' => ['permission:indicador-borrar']
    ])->name('inligru.borrar');
});
});
