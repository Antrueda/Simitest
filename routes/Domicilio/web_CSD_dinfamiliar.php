
<?php
$routexxx = 'csddinfamiliar';
$controll = 'Domicilio\csddinfamiliar';
Route::group(['prefix' => '{padrexxx}/dinfamiliar'], function () use ($routexxx, $controll) {
	Route::get('nuevo', [
		'uses' => $controll.'Controller@create',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.nuevo');
	Route::post('crear', [
		'uses' => $controll.'Controller@store',
		'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.crear');

	Route::get('editar/{modeloxx}', [
		'uses' => $controll.'Controller@edit',
		'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'Controller@update',
		'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'Controller@show',
		'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.ver');


	Route::get('listapxx', [
		'uses' => $controll.'Controller@getListadop',
		'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.listapxx');

	Route::get('listamxx', [
		'uses' => $controll.'Controller@getListadom',
		'middleware' => ['permission:'.$routexxx.'-leer']
	])->name($routexxx.'.listamxx');

	Route::post('madre', [
		'uses' => $controll.'Controller@storeMadre',
        'middleware' => ['permission:'.$routexxx.'-crear']
    ])->name($routexxx.'.madre');

    Route::post('padre', [
		'uses' => $controll.'Controller@storePadre',
        'middleware' => ['permission:'.$routexxx.'-crear']
	])->name($routexxx.'.padre');

});
