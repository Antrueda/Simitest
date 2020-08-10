
<?php
$routexxx='vsidabas';
$controll='Sicosocial\VsiBasico';
Route::group(['prefix' => 'vsi/datosbasicos'], function () use($routexxx,$controll) {

	Route::get('editar/{objetoxx}', [
	    'uses' => $controll.'Controller@edit',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::put('editar/{objetoxx}', [
	    'uses' => $controll.'Controller@update',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');

});

