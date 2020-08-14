<?php
$routexxx='permirol';
$controll='Seguridad\Rolpermiso';
Route::group(['prefix' => 'permisorol'], function () use($routexxx,$controll){
    Route::get('{padrexxx}', [
	    'uses' => $controll . 'Controller@index',
	    'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-editar|']
    ])->name($routexxx);
    Route::get('{padrexxx}/agregar', [
	    'uses' => $controll . 'Controller@agregar',
	    'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-editar|']
    ])->name($routexxx.'.agregar');
    Route::get('{padrexxx}/quitar', [
	    'uses' => $controll . 'Controller@quitar',
	    'middleware' => ['permission:'.$routexxx.'-leer|'.$routexxx.'-editar|']
	])->name($routexxx.'.quitar');
	Route::get('editar/{objetoxx}', [
	    'uses' => $controll . 'Controller@edit',
	    'middleware' => ['permission:'.$routexxx.'-editar']
	])->name($routexxx.'.editar');
});


