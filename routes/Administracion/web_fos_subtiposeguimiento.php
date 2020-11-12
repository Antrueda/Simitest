<?php
Route::group(['prefix' => 'fossubtipo'], function () {
    Route::get('', [
	    'uses' => 'Administracion\FosSubTiposeguimientoController@index',
	    'middleware' => ['permission:fossubtipo-leer|fossubtipo-crear|fossubtipo-editar|fossubtipo-borrar']
	])->name('fossubtipo');
	Route::get('nuevo', [
	    'uses' => 'Administracion\FosSubTiposeguimientoController@create',
	    'middleware' => ['permission:fossubtipo-crear']
	])->name('fossubtipo.nuevo');
	Route::post('crear', [
	    'uses' => 'Administracion\FosSubTiposeguimientoController@store',
	    'middleware' => ['permission:fossubtipo-crear']
	])->name('fossubtipo.crear');
	Route::get('editar/{objetoxx}', [
	    'uses' => 'Administracion\FosSubTiposeguimientoController@edit',
	    'middleware' => ['permission:fossubtipo-editar']
	])->name('fossubtipo.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Administracion\FosSubTiposeguimientoController@update',
	    'middleware' => ['permission:fossubtipo-editar']
	])->name('fossubtipo.editar');;

	Route::get('ver/{objetoxx}', [
	    'uses' => 'Administracion\FosSubTiposeguimientoController@show',
	    'middleware' => ['permission:fossubtipo-leer']
	])->name('fossubtipo.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Administracion\FosSubTiposeguimientoController@destroy',
	    'middleware' => ['permission:fossubtipo-borrar']
	]);
	Route::get('tiposeg', [
	    'uses' => 'Administracion\FosSubTiposeguimientoController@tiposeg',
	    'middleware' => ['permission:fossubtipo-leer|fossubtipo-crear|fossubtipo-editar|fossubtipo-borrar']
	])->name('fossubtipo.tiposeg');
});
