<?php 
Route::group(['prefix' => 'agtema'], function () {
    Route::get('', [
	    'uses' => 'Acciones\Grupales\AgTemaController@index',
	    'middleware' => ['permission:agtema-leer|agtema-crear|agtema-editar|agtema-borrar']
	])->name('ag.tema');
	Route::get('nuevo', [
	    'uses' => 'Acciones\Grupales\AgTemaController@create',
	    'middleware' => ['permission:agtema-crear']
	])->name('ag.tema.tema.nuevo');
	Route::post('nuevo', [
	    'uses' => 'Acciones\Grupales\AgTemaController@store',
	    'middleware' => ['permission:agtema-crear']
	])->name('ag.tema.tema.crear'); 

	Route::get('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTemaController@edit',
	    'middleware' => ['permission:agtema-editar']
	])->name('ag.tema.tema.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTemaController@update',
	    'middleware' => ['permission:agtema-editar']
	])->name('ag.tema.tema.editar');
	Route::get('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTemaController@show',
	    'middleware' => ['permission:agtema-leer']
	])->name('ag.tema.tema.ver');
	Route::delete('ver/{objetoxx}', [
	    'uses' => 'Acciones\Grupales\AgTemaController@destroy',
	    'middleware' => ['permission:agtema-borrar']
	])->name('ag.tema.tema.borrar');
});