<?php
Route::group(['prefix' => '{id}/actemocional'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiActEmocionalController@show',
		'middleware' => ['permission:vsiactemocional-crear|vsiactemocional-editar']
	])->name('VSI.actemocional');
	Route::post('', [
		'uses' => 'Sicosocial\VsiActEmocionalController@store',
		'middleware' => ['permission:vsiactemocional-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiActEmocionalController@update',
		'middleware' => ['permission:vsiactemocional-editar']
	])->name('VSI.actemocional.editar');
});