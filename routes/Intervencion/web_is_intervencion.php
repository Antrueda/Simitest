<?php
Route::group(['prefix' => '{nnaj}/isintervencion'], function () {
	
	
	Route::get('nuevo', [
		'uses' => 'Intervencion\IsDatoBasicoController@create',
		'middleware' => ['permission:isintervencion-crear']
	])->name('is.intervencion.nuevo');
	
	Route::post('crear', [
		'uses' => 'Intervencion\IsDatoBasicoController@store',
		'middleware' => ['permission:isintervencion-crear']
	])->name('is.intervencion.crear');
	
	Route::get('editar/{intervencion}', [
		'uses' => 'Intervencion\IsDatoBasicoController@edit',
		'middleware' => ['permission:isintervencion-editar']
	])->name('is.intervencion.editar');
	
	Route::put('editar/{intervencion}', [
		'uses' => 'Intervencion\IsDatoBasicoController@update',
		'middleware' => ['permission:isintervencion-editar']
	])->name('is.intervencion.editar');
	
	Route::get('ver/{intervencion}', [
		'uses' => 'Intervencion\IsDatoBasicoController@show',
		'middleware' => ['permission:isintervencion-leer']
	])->name('is.intervencion.ver');
	
	Route::delete('borrar/{intervencion}', [
		'uses' => 'Intervencion\IsDatoBasicoController@destroy',
		'middleware' => ['permission:isintervencion-borrar']
	])->name('is.intervencion.borrar');

	Route::post('subarea', [
	    'uses' => 'Intervencion\IsDatoBasicoController@subareasajax',
	])->name('is.intervencion.subarea');

	Route::post('area', [
	    'uses' => 'Intervencion\IsDatoBasicoController@areasajax',
	])->name('is.intervencion.area');

	Route::get('lista', [
		'uses' => 'Intervencion\IsDatoBasicoController@lista',
		'middleware' => ['permission:isintervencion-leer']
	])->name('is.intervencion.lista');
  
   Route::get('intlista', [
		'uses' => 'Intervencion\IsDatoBasicoController@intlista',
		'middleware' => ['permission:isintervencion-leer|isintervencion-crear|isintervencion-editar|isintervencion-borrar']
	])->name('is.intervencion.intlista');
});
