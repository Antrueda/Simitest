<?php
Route::group(['prefix' => '{id}/meta'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiMetaController@show',
		'middleware' => ['permission:vsimeta-crear|vsimeta-editar']
	])->name('VSI.meta');
	Route::post('potencialidad', [
		'uses' => 'Sicosocial\VsiMetaController@storePotencialidad',
		'middleware' => ['permission:vsimeta-crear']
	])->name('VSI.meta.potencialidad');
	Route::post('meta', [
		'uses' => 'Sicosocial\VsiMetaController@storeMeta',
		'middleware' => ['permission:vsimeta-crear']
	])->name('VSI.meta.meta');
	Route::delete('potencialidad/{id1}', [
		'uses' => 'Sicosocial\VsiMetaController@destroyPotencialidad',
		'middleware' => ['permission:vsimeta-borrar']
	])->name('VSI.meta.potencialidad.borrar');
	Route::delete('meta/{id1}', [
		'uses' => 'Sicosocial\VsiMetaController@destroyMeta',
		'middleware' => ['permission:vsimeta-borrar']
	])->name('VSI.meta.meta.borrar');
});