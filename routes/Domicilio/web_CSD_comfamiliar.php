<?php
$routexxx='csdcomfamiliar';
$controll='Domicilio\CsdCompfami';
Route::group(['prefix' => '{padrexxx}/{csdxxxxx}/listcomp'], function () use($routexxx,$controll){
    Route::get('listaxxx', [
		'uses' => $controll.'Controller@getListado',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
	])->name($routexxx.'.listaxxx');
});

Route::group(['prefix' => 'listcomposicionfami'], function () use($routexxx,$controll){
	
    Route::get('listodox', [
		'uses' => $controll.'Controller@getListodo',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
	])->name($routexxx.'.listodox');
	
});

Route::group(['prefix' => '{padrexxx}/composicionfami'], function () use($routexxx,$controll){
	Route::get('', [
		'uses' => $controll.'Controller@index',
		'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-crear|'.$routexxx.'-editar|'.$routexxx.'-borrar']
    ])->name($routexxx);


 
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

	Route::get('borrar/{modeloxx}', [
	    'uses' => $controll.'Controller@inactivate',
	    'middleware' => ['permission:'.$routexxx.'-borrar']
    ])->name($routexxx.'.borrar');

    Route::put('borrar/{modeloxx}', [
		'uses' => $controll . 'Controller@destroy',
		'middleware' => ['permission:' . $routexxx . '-borrar']
    ])->name($routexxx . '.borrar');
    Route::get('nnajsele', [
		'uses' => $controll . 'Controller@getNnajsele',
		'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.nnajsele');

    Route::get('depamuni', [
		'uses' => $controll.'Controller@getDepaMuni',
		'middleware' => ['permission:'.$routexxx.'-leer']
    ])->name($routexxx.'.depamuni');
    Route::get('cafecnac', [
        'uses' => $controll . 'Controller@getFechaNacimiento',
        'middleware' => ['permission:' . $routexxx . '-leer']
    ])->name($routexxx . '.cafecnac');
    Route::get('nadocume', [
        'uses' => $controll . 'Controller@getNADocumento',
        'middleware' => ['permission:' . $routexxx . '-leer']
	])->name($routexxx . '.nadocume');

	Route::post('puntajesisben', [
		'uses' => 'AjaxxController@puntajesisben',
	])->name('ajaxx.puntajesisben');
});