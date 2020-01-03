<?php
Route::group(['prefix' => 'fossubtipo'], function () {
    Route::get('', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@index',
	    'middleware' => ['permission:fossubtipo-leer|fossubtipo-crear|fossubtipo-editar|fossubtipo-borrar']
	])->name('fossubtipo');
	Route::get('nuevo', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@create',
	    'middleware' => ['permission:fossubtipo-crear']
	])->name('fossubtipo.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@store',
	    'middleware' => ['permission:fossubtipo-crear']
	]);
	Route::get('editar/{id}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@edit',
	    'middleware' => ['permission:fossubtipo-editar']
	])->name('fossubtipo.editar');
	Route::put('editar/{id}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@update',
	    'middleware' => ['permission:fossubtipo-editar']
	]);
	Route::put('editar/{id}/{id0}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@updateParametro',
	    'middleware' => ['permission:fossubtipo-crear|fossubtipo-editar']
	])->name('fossubtipo.editarParametro');
	Route::get('ver/{id}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@show',
	    'middleware' => ['permission:fossubtipo-leer']
	])->name('fossubtipo.ver');
	Route::delete('ver/{id}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@destroy',
	    'middleware' => ['permission:fossubtipo-borrar']
	]);
	Route::delete('ver/{id}/{id0}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@destroyParametro',
	    'middleware' => ['permission:fossubtipo-borrar']
	])->name('fossubtipo.verParametro');
	Route::get('tiposeguimientos/{id}','Administracion\FosSubTipoSeguimientoController@getTipoSeguimientos');
});