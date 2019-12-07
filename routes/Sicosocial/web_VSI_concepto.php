<?php
Route::group(['prefix' => '{id}/concepto'], function (){
	Route::get('', [
		'uses' => 'Sicosocial\VsiConceptoController@show',
		'middleware' => ['permission:vsiconcepto-crear|vsiconcepto-editar']
	])->name('VSI.concepto');
	Route::post('', [
		'uses' => 'Sicosocial\VsiConceptoController@store',
		'middleware' => ['permission:vsiconcepto-crear']
	]);
	Route::put('{id1}', [
		'uses' => 'Sicosocial\VsiConceptoController@update',
		'middleware' => ['permission:vsiconcepto-editar']
	])->name('VSI.concepto.editar');
});