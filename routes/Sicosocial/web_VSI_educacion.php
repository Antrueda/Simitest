<?php
Route::group(['prefix' => '{id}/educacion'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiEducacionController@show',
		'middleware' => ['permission:vsieducacion-crear|vsieducacion-editar']
	])->name('VSI.educacion');
	Route::post('', [
		'uses' => 'Sicosocial\VsiEducacionController@store',
		'middleware' => ['permission:vsieducacion-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiEducacionController@update',
		'middleware' => ['permission:vsieducacion-editar']
	])->name('VSI.educacion.editar');
});