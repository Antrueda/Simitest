<?php
Route::group(['prefix' => '{id}/geningresos'], function () {
    Route::get('', [
        'uses' => 'Domicilio\CsdGeneracionIngresosController@show',
        'middleware' => ['permission:csdgeningresos-crear|csdgeningresos-editar']
    ])->name('CSD.geningresos');
    Route::post('', [
        'uses' => 'Domicilio\CsdGeneracionIngresosController@store',
        'middleware' => ['permission:csdgeningresos-crear']
    ]);
    Route::put('{id1}', [
        'uses' => 'Domicilio\CsdGeneracionIngresosController@update',
        'middleware' => ['permission:csdgeningresos-editar']
    ])->name('CSD.geningresos.editar');
    Route::post('aportante', [
		'uses' => 'Domicilio\CsdGeneracionIngresosController@storeaportante',
		'middleware' => ['permission:csdgeningresos-crear']
	])->name('CSD.geningresos.aportante');
	Route::delete('aportante/{id1}', [
		'uses' => 'Domicilio\CsdGeneracionIngresosController@destroyaportante',
		'middleware' => ['permission:csdgeningresos-borrar']
	])->name('CSD.geningresos.aportante.borrar');
});