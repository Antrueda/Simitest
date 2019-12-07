<?php
Route::group(['prefix' => '{id}/relsocial'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiRelSocialController@show',
		'middleware' => ['permission:vsirelsocial-crear|vsirelsocial-editar']
	])->name('VSI.relsocial');
	Route::post('', [
		'uses' => 'Sicosocial\VsiRelSocialController@store',
		'middleware' => ['permission:vsirelsocial-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiRelSocialController@update',
		'middleware' => ['permission:vsirelsocial-editar']
	])->name('VSI.relsocial.editar');
});