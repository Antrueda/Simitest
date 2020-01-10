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
	Route::post('crear', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@store',
	    'middleware' => ['permission:fossubtipo-crear']
	])->name('fossubtipo.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@edit',
	    'middleware' => ['permission:fossubtipo-editar']
	])->name('fossubtipo.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@update',
	    'middleware' => ['permission:fossubtipo-editar']
	])->name('fossubtipo.editar');;
	
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@show',
	    'middleware' => ['permission:fossubtipo-leer']
	])->name('fossubtipo.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@destroy',
	    'middleware' => ['permission:fossubtipo-borrar']
	]);
	Route::get('tiposeg', [
	    'uses' => 'Administracion\FosSubTipoSeguimientoController@tiposeg',
	    'middleware' => ['permission:fossubtipo-leer|fossubtipo-crear|fossubtipo-editar|fossubtipo-borrar']
	])->name('fossubtipo.tiposeg');
});