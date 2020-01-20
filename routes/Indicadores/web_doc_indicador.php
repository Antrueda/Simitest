<?php
Route::group(['prefix' => 'docindicador'], function () {
    Route::get('', [
	    'uses' => 'Indicadores\InDocIndicadorController@index',
	    'middleware' => ['permission:documentoFuente-leer|documentoFuente-crear|documentoFuente-editar|documentoFuente-borrar']
	])->name('di.docindicador');
	

	Route::post('campos', [
	    'uses' => 'Indicadores\InDocIndicadorController@getCamposAjaxx',
    ])->name('di.campos');
		
	Route::group(['prefix' => '{in_ligru_id}'], function () {
		Route::get('preguntas', [
			'uses' => 'Indicadores\InDocIndicadorController@preguntas',
			'middleware' => ['permission:documentoFuente-leer|documentoFuente-crear|documentoFuente-editar|documentoFuente-borrar']
		])->name('di.docindicador.preguntas');

		Route::get('nuevo', [
			'uses' => 'Indicadores\InDocIndicadorController@create',
			'middleware' => ['permission:documentoFuente-crear']
		])->name('di.docindicador.nuevo');
		Route::post('nuevo', [
			'uses' => 'Indicadores\InDocIndicadorController@store',
			'middleware' => ['permission:documentoFuente-crear']
		])->name('di.docindicador.crear');
	
		Route::get('editar/{objetoxx}', [
			'uses' => 'Indicadores\InDocIndicadorController@edit',
			'middleware' => ['permission:documentoFuente-editar']
		])->name('di.docindicador.editar');
		Route::put('editar/{objetoxx}', [
			'uses' => 'Indicadores\InDocIndicadorController@update',
			'middleware' => ['permission:documentoFuente-editar']
		])->name('di.docindicador.editar');
		Route::get('ver/{objetoxx}', [
			'uses' => 'Indicadores\InDocIndicadorController@show',
			'middleware' => ['permission:documentoFuente-leer']
		])->name('di.docindicador.ver');
		Route::delete('ver/{objetoxx}', [
			'uses' => 'Indicadores\InDocIndicadorController@destroy',
			'middleware' => ['permission:documentoFuente-borrar']
		])->name('di.docindicador.borrar');
	});
});
