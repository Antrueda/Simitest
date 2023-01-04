<?php

use Illuminate\Support\Facades\Route;
$routexxx = 'residencia';
$controll = 'FichaIngreso\FiResidenciaController@';


Route::group(['prefix' => '{padrexxx}/firesidencia'], function () use($controll,$routexxx){

	Route::get('', [
		'uses' => $controll.'create',
		'middleware' => ['permission:fi'.$routexxx.'-crear|fi'.$routexxx.'-editar|fi'.$routexxx.'-leer']
	])->name('fi.'.$routexxx.'.nuevo');

	Route::post('crear', [
		'uses' => $controll.'store',
		'middleware' => ['permission:fi'.$routexxx.'-crear']
	])->name('fi.'.$routexxx.'.crear');

	Route::get('editar/{modeloxx}', [
		'uses' => $controll.'edit',
		'middleware' => ['permission:fi'.$routexxx.'-editar']
	])->name('fi.'.$routexxx.'.editar');

	Route::put('editar/{modeloxx}', [
		'uses' => $controll.'update',
		'middleware' => ['permission:fi'.$routexxx.'-editar']
	])->name('fi.'.$routexxx.'.editar');

	Route::get('ver/{modeloxx}', [
		'uses' => $controll.'show',
		'middleware' => ['permission:fi'.$routexxx.'-leer']
    ])->name('fi.'.$routexxx.'.ver');

    Route::get('comboval', [
		'uses' => $controll.'getCaminando',// este metodo se encentra en FiTrait
		'middleware' => ['permission:fi'.$routexxx.'-leer']
	])->name('fi.'.$routexxx.'.comboval');
});
